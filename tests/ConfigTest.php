<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/classes/config.php");

class ConfigTest extends PHPUnit_Framework_TestCase {
	public function setUp() {

	}

	public function tearDown() {

	}

    public function testTrueReturnsTrue() {
        $this->assertEquals(true, true);
    }
    
    public function testValidElements() {
		$conf = new Config();
		$this->assertNotEmpty($conf->db_server);
		$this->assertNotEmpty($conf->db_user);
		$this->assertNotEmpty($conf->db_name);

		$this->assertTrue(is_string($conf->db_server));
		$this->assertTrue(is_string($conf->db_user));
		$this->assertTrue(is_string($conf->db_pass));
		$this->assertTrue(is_string($conf->db_name));
	}
	
	public function testValidConenction() {
	    $conf = new Config();
	    $this->assertNotEmpty($conf->getConnection());
	}
}