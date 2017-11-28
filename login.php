<?php

include('config.php');

if ($_POST["username"] && $_POST["password"]) {
    $userName = $_POST['username'];
    $passWord = $_POST['password'];
    $query = "SELECT * FROM sign_up WHERE username='" . $userName . "' and  password='" . $passWord . "'";
    $res = $conn->query($query);
    $rows = $res->num_rows;

    if ($rows>0)
    {
        $_SESSION['username'] = $_POST['username'];
        header("Location: ./");

    }
    else
    {
        $errorMsg = "Username and password not found";

    }
}


?>

<!DOCTYPE html>
<html>
	<head>
	    <title>Login</title>

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
							  <li><a href="<?php echo 'signup.php'; ?>">Sign Up</a></li>
		                      <li><a href="<?php echo 'index.php'; ?>">Home</a></li>
		                    </ul>
						</div>
					</div>
				</div>

                <div id="Login">
                    <div id="LoginForm">
                        <form action="./login.php" method="post">
                            <h2 id="Details"</h2><span style="color: black">Please enter your details: </span><br><br>
                                Username: <input type="text" class="form" name="username" id="username" /><br>
                                Password: <input type="password" class="form" name="password" id="password" /><br>
                            <input type="submit" class="form" value="Login" />
                        </form>
                    </div>
                </div>
        </body>

    </head>
</html>
