<?php

include('config.php');

$result = null;
if ($_GET["id"]) {
	$q = "SELECT * FROM post_replies WHERE post_id=" . $_GET["id"];
	$result = $conn->query($q);
}

?>

<!DOCTYPE html>
<html>
	<head>
	    <title>Add Post</title>

	    <meta charset="utf-8">
	    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <link rel="stylesheet" type="text/css" href="css/main.css">

		<body>
		    <div id="MainContainer">
		        <div id="HeaderContainer">
		            <div id="Header">
		                <h1 id="HeaderTitle"><span>Forum</span></h1>
						<div id="navigation">
							<ul>
		                      <li><a href="<?php echo 'login.php'; ?>">Login</a></li>
		                      <li><a href="<?php echo 'index.php'; ?>">Home</a></li>
		                    </ul>
						</div>
					</div>
				</div>

				<div id="QuestionSection">
					<div id="QuestionForm">
						<form action="./" method="post">
							<h2 id="Question"</h2><span style="color: black">Ask a Question: </span><br><br>
								<!-- Name: <input type="text" class="form" name="name" id="name" value="" /><br>
								Surname: <input type="text" class="form" name="surname" id="surname" value="" /><br>
								Email: <input type="text" class="form" name="email" id="email" value="" /><br>
								Question: <textarea name="question" class="form" id="question"></textarea><br><br><br> -->
								Subject: <input type="text" class="form" name="subject" id="subject" /><br>
								Message: <input type="text" class="form" name="message" id="message" /><br>
							<input type="submit" class="form" value="Submit" />
						</form>
					</div>
				</div>
			</div>
		</body>

    </head>
</html>
