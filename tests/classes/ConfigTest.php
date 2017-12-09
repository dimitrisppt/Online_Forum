<?php

require_once('classes/Config.php');

class ConfigTest extends \PHPUnit_Framework_TestCase {

	public function testValidElements() {
		$conf = new Config();
		$this->assertNotEmpty($conf->db_server);
		$this->assertNotEmpty($conf->db_user);
		$this->assertNotEmpty($conf->db_pass);
		$this->assertNotEmpty($conf->db_name);

		$this->assertTrue(is_string($conf->db_server));
		$this->assertTrue(is_string($conf->db_user));
		$this->assertTrue(is_string($conf->db_pass));
		$this->assertTrue(is_string($conf->db_name));
	}
	
	public function testSuccessfulConnection() {
		
	}

	public function testUnsuccessfulConnection() {
		
	}
	
	
}