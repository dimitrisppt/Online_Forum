<?php

include('config.php');
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



// $su = "SELECT * FROM post_replies";
// $replyResult = $conn->query($su);

?>


<!DOCTYPE html>
<html>

<head>
    <title>Forum</title>

    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

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

		<footer>Copyright &copy; Team Indigo (SEG Lab Project)</footer>
    </div>

</body>


<html>


</body>
</html>
