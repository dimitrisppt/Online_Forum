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

	    <link rel="stylesheet" type="text/css" href="./login.css">

		<body>
		    <div id="MainContainer">
		        <div id="HeaderContainer">
		            <div id="Header">
		                <h1 id="HeaderTitle"><span>Forum</span></h1>
						<div id="navigation">
							<style>
		                        #navigation ul {
		                            list-style-type: none;
		                            margin: 0;
		                            padding: 0;
		                            overflow: hidden;
		                            background-color: darkgrey;
		                        }

		                        #navigation li {
		                            float: left;
		                        }

		                        #navigation li a {
		                            display: block;
		                            color: black;
		                            text-align: center;
		                            padding: 14px 16px;
		                            text-decoration: none;
		                        }

		                        #navigation li a:hover {
		                            background-color: lightgrey;
		                            font-weight: bold;
		                        }
		                    </style>
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
                                <!-- Name: <input type="text" class="form" name="name" id="name" value="" /><br>
                                Surname: <input type="text" class="form" name="surname" id="surname" value="" /><br>
                                Email: <input type="text" class="form" name="email" id="email" value="" /><br>
                                Question: <textarea name="question" class="form" id="question"></textarea><br><br><br> -->
                                Username: <input type="text" class="form" name="username" id="username" /><br>
                                Password: <input type="password" class="form" name="password" id="password" /><br>
                            <input type="submit" class="form" value="Submit" />
                        </form>
                    </div>
                </div>
        </body>

    </head>
</html>
