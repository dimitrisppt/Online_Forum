<?php

require_once("classes/config.php");
require_once("classes/user.php");

class UserTest extends PHPUnit_Framework_TestCase {

	protected static $conn;
	protected static $user;

	public static function setUpBeforeClass() {
		$conf = new Config();
		$conf->setTestDatabase();
		self::$conn = $conf->getConnection();
		self::$user = new User(self::$conn);
	}

	public function setUp() {
		// Create users table
		$usersTableQuery = "CREATE TEMPORARY TABLE `users` (
							  `user_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
							  `username` varchar(50) NOT NULL,
							  `preferred_name` varchar(50) NOT NULL
							)";
		self::$conn->query($usersTableQuery);

		$populateUsersQuery = "INSERT INTO `users` (`user_id`, `username`, `preferred_name`) VALUES
								(1, 'george.bush@kcl.ac.uk', 'Bush, George'),
								(2, 'will.smith@kcl.ac.uk', 'Smith, Will')";
		self::$conn->query($populateUsersQuery);
	}

	public function tearDown() {
		$dropUsersQuery = "DROP TABLE IF EXISTS users";
		self::$conn->query($dropUsersQuery);
	}

	public function testLoginExistingUser() {
		$username = "george.bush@kcl.ac.uk";
		$name = "Bush, George";

		$userExists = self::$user->login($username, $name);
		$this->assertEquals(true, $userExists);
	}

	public function testLoginNewUser() {
		$username = "bradley.cooper@kcl.ac.uk";
		$name = "Cooper, Bradley";

		$userExists = self::$user->login($username, $name);
		$this->assertEquals(false, $userExists);
	}

	public function testRegisterNewUser() {
		$username = "bradley.cooper@kcl.ac.uk";
		$name = "Cooper, Bradley";

		$result = self::$user->register($username, $name);
		$newUser = self::$user->getUser($username)->fetch();

		$this->assertNotEmpty($result);
		$this->assertEquals($username, $newUser["username"]);
		$this->assertEquals($name, $newUser["preferred_name"]);
	}

	public function testRegisterExistingUser() {
		$username = "george.bush@kcl.ac.uk";
		$name = "Bush, George";

		$result = self::$user->register($username, $name)->fetch();
		$this->assertEmpty($result);
	}
}