<?php

include('config.php');
session_start();

if ($_POST["email"] && $_POST["username"] && $_POST["password"]) {
    $su = "INSERT INTO sign_up (email, username, password) VALUES ('" . $_POST["email"] . "','" . $_POST["username"] . "','" . $_POST["password"] . "')";
    $conn->query($su);
    header("Location: ./");
    die();
}

$su = "SELECT * FROM sign_up";
$result = $conn->query($su);

?>

<!DOCTYPE html>
<html>
	<head>
	    <title>Sign Up</title>
      
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

            <div id="Content">
                <div id="Login">
                    <!-- <div id="LoginForm">
                        <form action="./signup.php" method="post">
                            <h2 id="Details"</h2><span style="color: black">Please enter your details: </span><br><br>
                                Email: <input type="text" class="form" name="email" id="email" /><br>
                                Username: <input type="text" class="form" name="username" id="username" /><br>
                                Password: <input type="password" class="form" name="password" id="password" /><br>

                            <input type="submit" class="form" value="Sign Up" />
                        </form>
                    </div> -->

                        <div class="container">
                          <h3>Sign Up</h3>
                          <style>
                            label {float: left}
                            button {float: right}
                          </style>
                          <form action="./signup.php" method="post">
                            <div class="form-group">
                              <label for="email">Email:</label>
                              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                            </div>
                            <div class="form-group">
                              <label for="username">Username:</label>
                              <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
                            </div>
                            <div class="form-group">
                              <label for="password">Password:</label>
                              <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox" name="remember"> Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Sign up</button>
                          </form>
                        </div>

                    </div>
                </div>
                <footer>Copyright &copy; Team Indigo (SEG Lab Project)</footer>
            </div>
        </body>

    </head>
</html>
