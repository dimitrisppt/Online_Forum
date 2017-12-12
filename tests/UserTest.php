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



}