<?php

require_once('../core/init.php');
//require_once('classes/config.php');
//require_once('classes/user.php');
//require_once('classes/posts.php');
//session_start();

//$config = new Config();
//$conn = $config->getConnection();

//$posts = new Posts($conn);
//$user = new User($conn);
include('../core/header.php');



$username = $_POST['username'];

//$database = new mysqli("localhost", "user", "dbpw", "dbname");
//$email = $database->real_escape_string(htmlspecialchars($_POST["email"]));
//$query = "SELECT email FROM sign_up WHERE email =$email";
//$resulta = $database->query($query);
//$numOfRows = $database->num_rows($resulta);
$su = "SELECT * FROM sign_up";
$result = $conn->query($su);


//!$dbc || mysqli_num_rows($dbc) 
//if (mysqli_num_rows($res) > 0 ) {
  //echo "<strong>This email or username already exists! </strong" ;
//} else$username = $_POST['username'];


$sql      = " SELECT * FROM sign_up WHERE username = '" . $username . "'" ;
$res      =  $conn->query($sql);

//$database = new mysqli("localhost", "user", "dbpw", "dbname");
//$email = $database->real_escape_string(htmlspecialchars($_POST["email"]));
//$query = "SELECT email FROM sign_up WHERE email =$email";
//$resulta = $database->query($query);
//$numOfRows = $database->num_rows($resulta);


//$su = "SELECT * FROM sign_up";
//$result = $conn->query($su);


if ( $res->rowCount() > 0 ) {
    echo "<p><strong>This email or username already exists! </strong></p>" ;
    
} else if ($_POST["email"] && $_POST["username"] && $_POST["password"]) {
    $user->register($_POST["username"], $_POST["password"], $_POST["email"]);
    header("Location: /login.php");
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

               <?php include ('../core/footer.php'); ?>
            </div>
        </body>

    </head>
</html>
