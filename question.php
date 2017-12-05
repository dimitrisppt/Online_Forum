<?php

include('config.php');
include('header.php');
session_start();

if ($_POST["replyMessage"]) {
    $su = "INSERT INTO post_replies (message, post_id, username, date_posted) VALUES ('" . $_POST["replyMessage"] . "','" . $_GET["id"] . "','" . $_SESSION["username"] . "','" . date("Y-m-d") . "')";
    $conn->query($su);
}

$result = null;
if ($_GET["id"]) {
	$q = "SELECT * FROM lab_posts WHERE post_id=" . $_GET["id"];
	$result = $conn->query($q);

	$su = "SELECT * FROM post_replies WHERE post_id=" . $_GET["id"];
	$replyResult = $conn->query($su);
}

$su = "SELECT * FROM post_replies WHERE post_id=" . $_GET["id"];
$replyResult = $conn->query($su);

?>

		<div id="Content">
			<h2 class="h2Titles">Question</h2>
			<hr id="titleBar">
				<?php
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
				?>

			<hr id="titleBar2">
			<h2 class="h2Titles">Answers</h2>
			<div id="questionList" class="questionList">
				<?php
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
				 ?>
			</div>

			<hr>


			<div id="ReplyContent" class="ReplyContent">
				<div id="Reply">
					<h3>Add your Answer</h3>
					<form action="./question.php?id=<?php echo $_GET["id"]; ?>" method="post">
						<div class="form-group"> <!-- Message field -->
							<label class="control-label " for="replyMessage">Reply Message</label>
							<textarea class="form-control" cols="40" id="replyMessage" name="replyMessage" rows="10"></textarea>
						</div>
						<div class="form-group">
							<button class="btn btn-primary " name="submit" type="submit">Reply</button>
						</div>

					</form>

				</div>
			</div>
		</div>

		<?php
	include ('footer.php');
?>
    </div>

</body>


<html>


</body>
</html>
