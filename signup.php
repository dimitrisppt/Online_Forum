<?php

include('config.php');
include('header.php');
if ($_POST["email"] && $_POST["username"] && $_POST["password"]) {
    $su = "INSERT INTO sign_up (email, username, password) VALUES ('" . $_POST["email"] . "','" . $_POST["username"] . "','" . $_POST["password"] . "')";
    $conn->query($su);
    header("Location: ./");
    die();
}

$su = "SELECT * FROM sign_up";
$result = $conn->query($su);

?>

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
               <?php
	include ('footer.php');
?>
            </div>
        </body>

    </head>
</html>
