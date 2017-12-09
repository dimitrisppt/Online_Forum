<?php

class Config {
	private $db_server;
	private $db_user;
	private $db_pass;
	private $db_name;
	private $conn;

	public function __construct() {
		$this->setLocalConfigs();
	}

	private function setLocalConfigs() {
		$this->db_server = 'localhost';
		$this->db_user = 'root';
		$this->db_pass = 'root';
		$this->db_name = 'lab-indigo';
	}

	private function setHerokuConfigs() {
		$this->db_server = 'eu-cdbr-west-01.cleardb.com';
		$this->db_user = 'b3fc62381bbceb';
		$this->db_pass = '5b958dbe';
		$this->db_name = 'heroku_173da242a6954ae';
	}

	private function setCloud9Configs() {
		$this->db_server = getenv('IP');
		$this->db_user = getenv('C9_USER');
		$this->db_pass = '';
		$this->db_name = 'c9';
	}

	public function getConnection() {
		$this->conn = mysqli_connect($this->db_server, $this->db_user, $this->db_pass, $this->db_name);
		return $this->conn;
	}
}

// Local configs
// define('SB_DB_SERVER', 'localhost'); // db server
// define('SB_DB_USER', 'root'); // db user
// define('SB_DB_PASS', 'root'); // db password
// define('SB_DB_NAME', 'lab-indigo'); // db name

// Cloud 9
// define('SB_DB_SERVER', getenv('IP')); // db server
// define('SB_DB_USER', getenv('C9_USER')); // db user
// define('SB_DB_PASS', '');
// define('SB_DB_PORT', 3306); // db password
// define('SB_DB_NAME', 'c9'); // db name

// Heroku configs
// define('SB_DB_SERVER', 'eu-cdbr-west-01.cleardb.com'); // db server
// define('SB_DB_USER', 'b3fc62381bbceb'); // db user
// define('SB_DB_PASS', '5b958dbe'); // db password
// define('SB_DB_NAME', 'heroku_173da242a6954ae'); // db name

// $conn = mysqli_connect(SB_DB_SERVER, SB_DB_USER, SB_DB_PASS, SB_DB_NAME);
