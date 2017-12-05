<?php

include('config.php');
include('header.php');
session_start();

$result = null;
if ($_GET["id"]) {
	$q = "SELECT * FROM post_replies WHERE post_id=" . $_GET["id"];
	$result = $conn->query($q);
}

?>

				<!-- <div id="QuestionSection">
					<div id="QuestionForm">
						<form action="./" method="post">
							<h2 id="Question"</h2><span style="color: black">Ask a Question: </span><br><br>
								Subject: <input type="text" class="form" name="subject" id="subject" /><br>
								Message: <input type="text" class="form" name="message" id="message" /><br>
							<input type="submit" class="form" value="Submit" />
						</form>
					</div>
				</div> -->
				<div id="Content">
					<div id="AddPostContent" class="AddPostContent">
						<div id="AddPost">
							<h3>Add Post</h3>
							<form action="./" method="post">
								<div class="form-group"> <!-- Subject field -->
									<label class="control-label " for="subject">Subject</label>
									<input class="form-control" id="subject" name="subject" type="text"/>
								</div>

								<div class="form-group"> <!-- Message field -->
									<label class="control-label " for="message">Message</label>
									<textarea class="form-control" cols="40" id="message" name="message" rows="10"></textarea>
								</div>

								<div class="form-group">
									<button class="btn btn-primary" name="submit" type="submit">Add Post</button>
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

    </head>
</html>
