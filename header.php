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

    <link rel="stylesheet" type="text/css" href="main.css">
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
                      <a href="<?php echo 'addPost.php'; ?>">Add Post</a>
                      <div class="search">
                        <form action="./">
                          <input type="text" placeholder="Search for a topic..." name="search">
                          <button type="submit">Search</i></button>
                        </form>
                      </div>

                </div>
            </div>
        </div>
</body>
</html>