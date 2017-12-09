<?php

require_once('classes/User.php');
require_once('classes/Config.php');

class UserTest extends \PHPUnit_Framework_TestCase {

	public function testTrueIsTrue() {
		$foo = true;
		$this->assertTrue($foo);
	}

	public function testValidElements() {
		$conf = new Config();
		$user = new User(mysqli_connect("localhost", "root", "root", "lab-indigo"));
	}

	// public function testSuccessfulLogin() {
	// 	$conf = new Config();
	// 	$user = new User($conf->getConnection());
	// }
	
	
}