<?php

require_once('../core/init.php');
include('../core/header.php');

if ($_POST["replyMessage"]) {
    $posts->replyToPost($_POST["replyMessage"], $_GET["id"], $_SESSION["username"], $_SESSION["given_name"]);
}

?>

</script>
		<div id="Content">
			<h2 class="h2Titles">Question</h2>


				<?php $posts->displayQuestion($_GET["id"]); ?>

			<hr id="titleBar2">
			
			<div id="wrapper">
                <div id="column1ans">
                    <img src="img/kingsimg.png" id="kingsimgAns">
                </div>
                 
                <div id="column2">  
	                <h2 class="h2AnswerTitles" style="float=left;">Answers</h2>
						<div id="answerList" class="answerList">
				
							<?php $posts->displayReplies($_GET["id"]); ?>
	
				    	</div>
	
						<hr>
						
						</div>
				
				<div id="column3ans">
	       	    	<img src="img/kingsimg.png" id="kingsimgAns">
	            </div>
	        </div>
	
	
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

			 <?php             
				if ($_SESSION["username"]) {
					echo "<h5>" . "Logged in as: " . $_SESSION["username"] . "</5> <style> h5 {float:right; padding-right: 2%; font-style: italic} </style>";
				} else {
					echo "<h5>" . "You are not yet signed in." . "</h5> <style> h5 {float:right; padding-right: 2%; font-style: italic} </style>";
				}
            ?>
		</div>

	<?php include ('core/footer.php'); ?>		
    </div>

</body>


<html>


</body>
</html>
