<?php

include('config.php');
include('header.php');
$result = null;
if ($_GET["id"]) {
	$q = "SELECT * FROM lab_posts WHERE post_id=" . $_GET["id"];
	$result = $conn->query($q);
}

if ($_POST["replyTitle"] && $_POST["replyMessage"]) {
    $su = "INSERT INTO post_replies (subject, message) VALUES ('" . $_POST["replyTitle"] . "','" . $_POST["replyMessage"] . "')";
    $conn->query($su);
    header("Location: /question.php");
	//?id=' . $row["post_id"] . '"
    die();
}

$su = "SELECT * FROM post_replies";
$replyResult = $conn->query($su);

?>


		<div id="Content">
			<h2 class="h2Titles">Question</h2>
			<hr id="titleBar">
				<?php
					while($row = $result->fetch_assoc()) {
						echo '<div id="QuestionSection">';
						echo '<div id="QuestionTitle">';
						echo "<h3>" . $row["subject"] . "</h3>";
						echo '</div>';
						echo '<div id="QuestionMessage">';
						echo "<p>" . $row["message"] . "</p>";
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
							echo "<h3>" . $row["subject"] . "</h3>";
							echo "<p>" . $row["message"] . "</p>";

						echo '</div>';
					}
				 ?>
			</div>

			<hr>


			<div id="ReplyContent" class="ReplyContent">
				<div id="Reply">
					<h3>Add your Answer</h3>
					<form action="./question.php?id=' . $result . '" method="post">
						<div class="form-group"> <!-- Subject field -->
							<label class="control-label " for="replyTitle">Title</label>
							<input class="form-control" id="replyTitle" name="replyTitle" type="text"/>
						</div>

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
