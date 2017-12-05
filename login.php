<?php

include('config.php');
include('header.php');
if ($_POST["username"] && $_POST["password"]) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM sign_up WHERE username='" . $username . "' and  password='" . $password . "'";
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
<div id="Content">
                <div id="Login">
                    <!-- <div id="LoginForm">
                        <form action="./login.php" method="post">
                            <h2 id="Details"</h2><span style="color: black">Please enter your details: </span><br><br>
                                Username: <input type="text" class="form" name="username" id="username" /><br>
                                Password: <input type="password" class="form" name="password" id="password" /><br>
                            <input type="submit" class="form" value="Login" />
                        </form>
                    </div> -->

                    <div id="container" class="container"> <!--- <style> .container {padding-left: 35%; padding-right: 35%} </style> --->
                      <h3>Login</h3>
                      <style>
                        label {float: left}
                        button {float: right}
                      </style>
                      <form  method="post">
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
                        <button type="submit" class="btn btn-primary">Login</button>
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
