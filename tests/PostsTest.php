<?php

require_once("classes/config.php");
require_once("classes/posts.php");

class ConfigTest extends PHPUnit_Framework_TestCase {
	
	protected static $conn;
	protected static $posts;

	public static function setUpBeforeClass() {
		$conf = new Config();
		$conf->setTestDatabase();
		self::$conn = $conf->getConnection();
		self::$posts = new Posts(self::$conn);
	}


	// Creates & populates temporary tables to test with
	public function setUp() {
		// Create lab_posts table
		$labPostsQuery = "CREATE TEMPORARY TABLE `lab_posts` (
						  `post_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
						  `subject` text NOT NULL,
						  `message` text NOT NULL,
						  `username` varchar(15) DEFAULT NULL,
						  `data_posted` date NOT NULL
						)";
		self::$conn->query($labPostsQuery);

		// Populate lab_posts
		$populatePostsQuery = "INSERT INTO `lab_posts` (`post_id`, `subject`, `message`, `username`, `data_posted`) VALUES
								(1, 'PEP Assignment 9', 'How do you do it?', 'user1', '2017-12-05'),
								(2, 'Lab Project Issues', 'Can I not do it?', 'user2', '2017-12-05')";
		self::$conn->query($populatePostsQuery);

		
		// Create post_replies table
		$postRepliesQuery = "CREATE TEMPORARY TABLE `post_replies` (
							  `reply_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
							  `message` text NOT NULL,
							  `post_id` int(11) NOT NULL,
							  `username` varchar(15) DEFAULT NULL,
							  `date_posted` date NOT NULL
							)";
		self::$conn->query($postRepliesQuery);

		// Populate post_replies
		$populateRepliesQuery = "INSERT INTO `post_replies` (`reply_id`, `message`, `post_id`, `username`, `date_posted`) VALUES
								(1, 'No clue bro', 1, 'user1', '2017-12-05'),
								(2, 'yes', 1, 'user2', '2017-12-05')";
		self::$conn->query($populateRepliesQuery);
	}

	// Drops temporary tables after each test
	public function tearDown() {
		$dropPostsQuery = "DROP TABLE IF EXISTS lab_posts";
		self::$conn->query($dropPostsQuery);
		$dropRepliesQuery = "DROP TABLE IF EXISTS post_replies";
		self::$conn->query($dropRepliesQuery);
	}

	public function testMakesPost() {
		$subj = "Test Post";
		$msg = "Test Message";
		$user = "";

		$madePost = self::$posts->makePost($subj, $msg, $user);

		$q = "SELECT * FROM lab_posts WHERE subject='" . $subj . "' AND message='" . $msg . "'";
		$res = self::$conn->query($q);
		$row = $res->fetch();

		$this->assertNotNull($madePost);
		$this->assertEquals($subj, $row["subject"]);
		$this->assertEquals($msg, $row["message"]);
		$this->assertEquals($user, $row["username"]);
		$this->assertEquals(3, $row["post_id"]);
	}

	public function testRejectsEmptySubjectWhenMakingPost() {
		$subj = "";
		$msg = "Test Message";
		$user = "user2";

		$madePost = self::$posts->makePost($subj, $msg, $user);
		$this->assertNull($madePost);
	}

	public function testRejectsEmptyMessageWhenMakingPost() {
		$subj = "Test Post";
		$msg = "";
		$user = "user2";

		$madePost = self::$posts->makePost($subj, $msg, $user);
		$this->assertNull($madePost);
	}

	public function testRejectsFullyEmptyPost() {
		$madePost = self::$posts->makePost("", "", "");
		$this->assertNull($madePost);
	}

	public function testRepliesToPost() {
		$reply = "Test Reply";
		$id = 2;
		$user = "";

		self::$posts->replyToPost($reply, $id, $user);

		$q = "SELECT * FROM post_replies WHERE post_id='" . $id . "' AND message='" . $reply . "' AND username='" . $user . "'";
		$res = self::$conn->query($q);
		$row = $res->fetch();

		$this->assertEquals(3, $row["reply_id"]);
		$this->assertEquals($reply, $row["message"]);
		$this->assertEquals($id, $row["post_id"]);
		$this->assertEquals($user, $row["username"]);
	}
		
	public function testRejectsEmptyReplyToPost() {
		$reply = "";
		$id = 2;
		$user = "user1";

		$madeReply = self::$posts->replyToPost($reply, $id, $user);
		$this->assertNull($madeReply);
	}

	public function testGetsAllPosts() {
		$result = self::$posts->getAllPosts();

		$allPosts = array();
		while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
			$allPosts[] = $row;
		}

		$this->assertEquals(array(
								array("post_id" => 1, "subject" => "PEP Assignment 9", "message" => "How do you do it?", "username" => "user1", "data_posted" => "2017-12-05"),
								array("post_id" => 2, "subject" => "Lab Project Issues", "message" => "Can I not do it?", "username" => "user2", "data_posted" => "2017-12-05")),
							$allPosts);
	}

	public function testGetsCorrectPost() {
		$id = 2;
		$p = self::$posts->getPostByID($id)->fetch();

		$this->assertEquals(array(
									"post_id" => 2,
									"subject" => "Lab Project Issues", 
									"message" => "Can I not do it?", 
									"username" => "user2", 
									"data_posted" => "2017-12-05"
							), $p);
	}

	public function testGetsNoPosts() {
		$id = 200;
		$p = self::$posts->getPostByID($id)->fetch();

		$this->assertEmpty($p);
	}

	public function testGetsAllPostReplies() {
		$id = 1;
		$result = self::$posts->getAllReplies($id);

		$allReplies = array();
		while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
			$allReplies[] = $row;
		}

		$this->assertEquals(array(
								array("reply_id" => 1, "message" => "No clue bro", "post_id" => 1, "username" => "user1", "date_posted" => "2017-12-05"),
								array("reply_id" => 2, "message" => "yes", "post_id" => 1, "username" => "user2", "date_posted" => "2017-12-05")
							), $allReplies);
	}

	public function testGetsNoPostReplies() {
		$id = 200;
		$r = self::$posts->getAllReplies($id)->fetch();

		$this->assertEmpty($r);
	}


}