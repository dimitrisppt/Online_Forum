<?php

class User {
	private $username; // Email
	private $name;

	private $conn;

	public function __construct($conn) {
		$this->conn = $conn;
	}

	public function login($user, $name) {
		$this->username = $user;
		$this->name = $name;

		$query = "SELECT * FROM users WHERE username='" . $this->username . "' and  preferred_name='" . $this->name . "'";
		$res = $this->conn->query($query);
    	$rows = $res->fetchColumn();

    	if ($rows > 0) {
    		$_SESSION['username'] = $user;
    		return true;
    	} else {
    		$this->register($user, $name);
    		return false;
    	}
	}

	public function register($user, $name) {
		$this->username = $user;
		$this->name = $name;

		$su = "INSERT INTO users (username, preferred_name) VALUES ('" . $this->username . "','" . $this->name . "')";
    	return $this->conn->query($su);
	}
	
	public function getAllUsers() {
		$su = "SELECT * FROM users";
		return $this->conn->query($su);
	}

	public function getUser($username) {
		$su = "SELECT * FROM users WHERE username='" . $username . "'";
		return $this->conn->query($su);
	}

}