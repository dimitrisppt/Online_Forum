<?php

include('config.php');

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

                <div id="Login">
                    <div id="LoginForm">
                        <form action="./" method="post">
                            <h2 id="Details"</h2><span style="color: black">Please enter your details: </span><br><br>
                                Username: <input type="text" class="form" name="username" id="username" /><br>
                                Password: <input type="password" class="form" name="password" id="password" /><br>
                            <input type="submit" class="form" value="Submit" />
                        </form>
                    </div>
                </div>
        </body>

    </head>
</html>
