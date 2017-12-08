<?php

require_once('core/init.php');
include('core/header.php');

$result = $posts->getAllReplies($_GET["id"]);

?>

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
			
			<?php include ('core/footer.php'); ?>
		</div>

	</body>

</head>
</html>
