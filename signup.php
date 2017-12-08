<?php

require_once('core/init.php');
include('core/header.php');

if ($_POST["email"] && $_POST["username"] && $_POST["password"]) {
    $user->register($_POST["username"], $_POST["password"], $_POST["email"]);
    header("Location: ./");
    die();
}

$result = $user->getAllSignups();

?>

            <div id="Content">
                <div id="Login">

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

               <?php include ('core/footer.php'); ?>
            </div>
        </body>

    </head>
</html>
