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

		while($row = $result->fetch()) {
			$nrq = $this->conn->query("SELECT COUNT(reply_id) FROM post_replies WHERE post_id=" . $row["post_id"]);
			$numberOfReplies = $nrq->fetch();

            echo '<div id="questionSection" class="questionSection">';
                echo  '<div id="c1">';
                    echo '<h4 id="questionTitles">' . "Discussion" . "</h4>";
                    echo '<a href="./question.php?id=' . $row["post_id"] . '">';
                    echo "<h4>" . $row["subject"] . "</h4></a>";
                echo '</div>';
                
                echo  '<div id="c2">';
                    echo '<h4 id="questionTitles">' . "Author" . "</h4>";
                    echo '<img src="img/user.png" style="width:20px; height:20px;"/>';
                    if ($row["username"]) {
                        echo '<span class="username">' . $row["username"] . '</span>';
                    } else {
                        echo '<span class="username">Anonymous</span>';
                    }
                echo '</div>'; 
                
                echo  '<div id="c3">';
                    echo '<h4 id="questionTitles">' . "Replies" . "</h4>";
                    echo '<span class="numberOfReplies">' . $numberOfReplies["COUNT(reply_id)"] . '</span>';
                echo '</div>';
                
                echo  '<div id="c4">';
                    echo '<h4 id="questionTitles">' . "Date Posted" . "</h4>";
                    echo '<span class="date_posted">' . $row["data_posted"] . '</span>';
                echo '</div>';
                        
            echo '</div>';
           
        }
	}
	
	
	public function displayQuestion($id) {
		$result = $this->getPostByID($id);

		while($row = $result->fetch()) {
			$this->subject = $row["subject"];

			echo '<div id="questionAnswerSection" class="questionAnswerSection">';
				echo '<div id="questionAnswerSectionInside" class="questionAnswerSectionInside">';
					echo '<div id="replyTitleAndMessage">';
					
						echo  '<div id="c5">';
							echo '<h4>'; 
							echo '<img src="img/user.png" style="width:20px; height:20px;"/>';
							echo " " . $row["subject"] . "</h4>";
							echo '<div id="subTitle">';
                                echo '<p>' . "by";
                                if ($row["username"]) {
                                    echo '<span class="user">' . " " . $row["username"] . '</span>';
                                } else {
                                    echo '<span class="user">' . " " . "Anonymous" . '</span>';
                                }
                                echo '<span class="date_posted">' . " - " . $row["date_posted"] . '</span>';
                                echo "</p>";
                             echo '</div>'; 
                        echo '</div>'; 
    				
    				echo '<br>';
                    echo '</div>';
                    
                    
                    echo '<div id="replySectionMessage" class="replySectionMessage">';
                    	echo "<p>" . $row["message"] . "</p>";
                    echo '</div>';
						
					
				echo '</div>';
			echo '</div>';
		}

	}


	public function displayReplies($id) {
		$replyResult = $this->getAllReplies($id);

		while($row = $replyResult->fetch()) {
						
			echo '<div id="answerSection" class="answerSection">';
				echo '<div id="replyTitleAndMessage">';
					echo '<div id="replySectionTitle" class="replySectionTitle">';
					echo '<br>';
					
						echo  '<div id="c5">';
							echo '<h4>'; 
							echo '<img src="img/user.png" style="width:20px; height:20px;"/>';
							echo " RE: " . $this->subject . "</h4>";
							echo '<div id="subTitle">';
                                echo '<p>' . "by";
                                if ($row["username"]) {
                                    echo '<span class="user">' . " " . $row["username"] . '</span>';
                                } else {
                                    echo '<span class="user">' . " " . "Anonymous" . '</span>';
                                }
                                echo '<span class="date_posted">' . " - " . $row["date_posted"] . '</span>';
                                echo "</p>";
                             echo '</div>'; 
                        echo '</div>'; 
    				
    				echo '<br>';
                    echo '</div>';
                    
                    
                    echo '<div id="replySectionMessage" class="replySectionMessage">';
                    	echo "<p>" . $row["message"] . "</p>";
                    echo '</div>';
                    echo '<br>';
            	echo '</div>';
            echo '</div>';
			
		}
	}

}