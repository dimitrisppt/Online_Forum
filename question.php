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
	$subjectResult = $conn->query($q);

	$su = "SELECT * FROM post_replies WHERE post_id=" . $_GET["id"];
	$replyResult = $conn->query($su);
}

$su = "SELECT * FROM post_replies WHERE post_id=" . $_GET["id"];
$replyResult = $conn->query($su);

$SessionUser = $_SESSION["username"];


$subjectRow = $subjectResult->fetch_assoc();
$subject = $subjectRow["subject"];


?>

</script>

		<div id="Content">
			<h2 class="h2Titles">Question</h2>
				<?php
					
					while($row = $result->fetch_assoc()) {
						echo '<div id="questionAnswerSection" class="questionAnswerSection">';
							echo '<div id="questionAnswerSectionInside" class="questionAnswerSectionInside">';
								echo '<div id="replyTitleAndMessage">';
								
									echo  '<div id="c5">';
										echo '<h4>'; 
										echo '<img src="user.png" style="width:20px; height:20px;"/>';
										echo " " . $subject . "</h4>";
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

					
				?>

			<hr id="titleBar2">
			
			<h2 class="h2Titles">Answers</h2>
			<div id="questionList" class="questionList">
			
				<?php
					while($row = $replyResult->fetch_assoc()) {
						
						echo '<div id="answerSection" class="answerSection">';
							echo '<div id="replyTitleAndMessage">';
								echo '<div id="replySectionTitle" class="replySectionTitle">';
								echo '<br>';
								
									echo  '<div id="c5">';
										echo '<h4>'; 
										echo '<img src="user.png" style="width:20px; height:20px;"/>';
										echo " RE: " . $subject . "</h4>";
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
			 <?php
              
        	 if ($_SESSION["username"]) {
                                echo "<h5>" . "Logged in as: " . $SessionUser . "</5> <style> h5 {float:right; padding-right: 2%; font-style: italic} </style>";
                            } else {
                                echo "<h5>" . "You are not yet signed in." . "</h5> <style> h5 {float:right; padding-right: 2%; font-style: italic} </style>";
                            }
            ?>
		</div>

		<?php
			include ('footer.php');
		?>
    </div>

</body>


<html>


</body>
</html>
