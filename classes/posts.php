<?php

class Posts {
	private $subject;
	private $message;
	private $username;
	private $postDate;

	private $conn;

	public function __construct($conn) {
		$this->conn = $conn;
	}

	public function makePost($sub, $msg, $user) {
		$this->subject = $sub;
		$this->message = $msg;
		$this->username = $user;
		$this->postDate = date("Y-m-d");

		$q = "INSERT INTO lab_posts (subject, message, username, data_posted) VALUES ('" . $this->subject . "','" . $this->message . "','" . $this->username . "','" . $this->postDate . "')";
		return $this->conn->query($q);
	}

	public function replyToPost($reply, $id, $user) {
		$su = "INSERT INTO post_replies (message, post_id, username, date_posted) VALUES ('" . $reply . "','" . $id . "','" . $username . "','" . date("Y-m-d") . "')";
    	return $this->conn->query($su);
	}

	public function getAllPosts() {
		$q = "SELECT * FROM lab_posts";
		return $this->conn->query($q);
	}

	public function getPostByID($id) {
		$q = "SELECT * FROM lab_posts WHERE post_id=" . $id;
		return $this->conn->query($q);
	}

	public function getAllReplies($id) {
		$q = "SELECT * FROM post_replies WHERE post_id=" . $id;
		return $this->conn->query($q);
	}



	public function displayPosts() {
		$result = $this->getAllPosts();

		while($row = $result->fetch_assoc()) {
	        echo '<div id="questionSection" class="questionSection">';
	            echo '<a href="./question.php?id=' . $row["post_id"] . '">';
	            echo "<h2>" . $row["subject"] . "</h2></a>";
	            echo '<span class="date_posted">' . $row["data_posted"] . '</span>';
	            if ($row["username"]) {
	                echo '<span class="username">' . $row["username"] . '</span>';
	            } else {
	                echo '<span class="username">Anonymous</span>';
	            }
	        echo '</div>';
	    }
	}
	
	public function displayQuestion($id) {
		$result = $this->getPostByID($id);

		while($row = $result->fetch_assoc()) {
			echo '<div id="QuestionSection">';
			echo '<div id="QuestionTitle">';
			echo "<h3>" . $row["subject"];
			if ($row["username"]) {
                echo '<span class="username">' . $row["username"] . '</span>';
            } else {
                echo '<span class="username">Anonymous</span>';
            }
			echo "</h3>";
			echo '</div>';
			echo '</div>';
		}
	}

	public function displayReplies($id) {
		$replyResult = $this->getAllReplies($id);

		while($row = $replyResult->fetch_assoc()) {
			echo '<div id="questionSection" class="questionSection">';
				// echo $row["post_id"];
				echo "<p>" . $row["message"] . "</p>";
				echo '<span class="date_posted">' . $row["date_posted"] . '</span>';
                if ($row["username"]) {
                    echo '<span class="username">' . $row["username"] . '</span>';
                } else {
                    echo '<span class="username">Anonymous</span>';
                }

			echo '</div>';
		}
	}

}