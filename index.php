<?php 

$test = "Lets do it in Node.JS";

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
                <form>
                    <h2 id="Question"</h2><span style="color: black">Ask a Question: </span><br><br>
                        Name: <input type="text" class="form" name="name" id="name" value="" /><br>
                        Surname: <input type="text" class="form" name="surname" id="surname" value="" /><br>
                        Email: <input type="text" class="form" name="email" id="email" value="" /><br>
                        Question: <textarea name="question" class="form" id="question" cols="25" rows="4"></textarea><br><br><br>
                    <input type="submit" class="form" value="Submit" />
                </form>
            </div>
        </div>
    </div>
</body>


<html>
