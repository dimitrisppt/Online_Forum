<?php

class Config {
	public $db_server;
	public $db_user;
	public $db_pass;
	public $db_name;
	public $conn;

	public function __construct() {
		// $this->setLocalConfigs();
		$this->setCloud9Configs();
		// $this->setHerokuConfigs();
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
		$options = [
		    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		    PDO::ATTR_EMULATE_PREPARES   => false,
		];
		
		$this->conn = new PDO("mysql:host=$this->db_server;dbname=$this->db_name", "root", "root", $options);

		// $this->conn = mysqli_connect($this->db_server, $this->db_user, $this->db_pass, $this->db_name);
		return $this->conn;
	}
}