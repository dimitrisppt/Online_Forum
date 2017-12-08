<?php

class User {
	private $username;
	private $password;
	private $email;

	private $conn;

	public function __construct($conn) {
		$this->conn = $conn;
	}

	public function login($user, $pass) {
		$this->username = $user;
		$this->password = $pass;

		$query = "SELECT * FROM sign_up WHERE username='" . $this->username . "' and  password='" . $this->password . "'";
		$res = $this->conn->query($query);
    	$rows = $res->num_rows;

    	if ($rows > 0) {
    		$_SESSION['username'] = $user;
    		return true;
    	} else {
    		return false;
    	}
	}

	public function register($user, $pass, $email) {
		$this->username = $user;
		$this->password = $pass;
		$this->email = $email;

		$su = "INSERT INTO sign_up (email, username, password) VALUES ('" . $_POST["email"] . "','" . $_POST["username"] . "','" . $_POST["password"] . "')";
    	return $this->conn->query($su);
	}

	public function getAllSignups() {
		$su = "SELECT * FROM sign_up";
		return $this->conn->query($su);
	}


}