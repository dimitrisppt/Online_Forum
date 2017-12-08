<?php

require_once('core/init.php');
include('core/header.php');

if ($_POST["replyMessage"]) {
    $posts->replyToPost($_POST["replyMessage"], $_GET["id"], $_SESSION["username"]);
}

?>

		<div id="Content">
			<h2 class="h2Titles">Question</h2>
			<hr id="titleBar">

				<?php $posts->displayQuestion($_GET["id"]); ?>

			<hr id="titleBar2">
			<h2 class="h2Titles">Answers</h2>
			<div id="questionList" class="questionList">
				<?php $posts->displayReplies($_GET["id"]); ?>
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
	include ('core/footer.php');
?>
    </div>

</body>


<html>


</body>
</html>
