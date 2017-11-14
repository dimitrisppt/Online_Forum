<?php 

include('config.php');

if ($_POST["subject"] && $_POST["message"]) {
    $q = "INSERT INTO lab_posts (subject, message) VALUES ('" . $_POST["subject"] . "','" . $_POST["message"] . "')";
    $conn->query($q);
}

$q = "SELECT * FROM lab_posts";
$result = $conn->query($q);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Forum</title>

    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="./main.css">
</head>

<body>
    <div id="MainContainer">
        <div id="HeaderContainer">
            <div id="Header">
                <h1 id="HeaderTitle"><span>Forum</span>
                <div id="NavigationBar">
                    <button onclick>Login</button>
                    <button onclick>Add Post</button>
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

        <?php 

        while($row = $result->fetch_assoc()) {
            echo '<a href="./question.php?id=' . $row["post_id"] . '">';
            // echo $row["post_id"];
            echo "<h2>" . $row["subject"] . "</h2></a>";
        }

        ?>
        <!-- <h2>Test</h2> -->

    </div>
</body>


<html>
