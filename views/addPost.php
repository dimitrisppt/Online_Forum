<?php

require_once('../core/init.php');
include('../core/header.php');

$SessionUser = $_SESSION["username"];

?>

			<div id="Content">
				<div id="AddPostContent" class="AddPostContent">
					<div id="AddPost">
						<h3>Add Post</h3>
						<form action="/" method="post">
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
						<?php              
						if ($_SESSION["username"]) {
							echo "<h5>" . "Logged in as: " . $_SESSION["username"] . "</5> <style> h5 {float:right; padding-right: 2%; font-style: italic} </style>";
						} else {
							echo "<h5>" . "You are not yet signed in." . "</h5> <style> h5 {float:right; padding-right: 2%; font-style: italic} </style>";
						}
			            ?>
				</div>
			</div>
			
			<?php include ('../core/footer.php'); ?>
		</div>

	</body>

</head>
</html>
