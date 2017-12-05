<?php

include('config.php');
session_start();

$result = null;
if ($_GET["id"]) {
	$q = "SELECT * FROM post_replies WHERE post_id=" . $_GET["id"];
	$result = $conn->query($q);
}

// echo $_SESSION["username"];

?>

<!DOCTYPE html>
<html>
	<head>
	    <title>Add Post</title>

	    <meta charset="utf-8">
	    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	    <link rel="stylesheet" type="text/css" href="css/main.css">

		<body>
			<div id="MainContainer">
 	           <div id="HeaderContainer">
 	               <div id="Header">
 	                   <h1 id="HeaderTitle"><span>Forum</span></h1>
 	                   <div id="navigation">

 	                         <a href="<?php echo 'login.php'; ?>">Login</a>
 	                         <a href="<?php echo 'signup.php'; ?>">Sign Up</a>
 	                         <a href="<?php echo 'index.php'; ?>">Home</a>
 	                         <div class="search">
 	                           <form action="./">
 	                             <input type="text" placeholder="Search for a topic..." name="search">
 	                             <button type="submit">Search</i></button>
 	                           </form>
 	                         </div>

 	                   </div>
 	               </div>
 	           </div>

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

				<footer>Copyright &copy; Team Indigo (SEG Lab Project)</footer>
			</div>

		</body>

    </head>
</html>
