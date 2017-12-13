<?php

require_once('../core/init.php');
include('../core/header.php');

if ($_POST["username"] && $_POST["password"]) {
    $didLogin = $user->login($_POST['username'], $_POST['password']);
    
    if ($didLogin) {
        header("Location: ./");
    } else {
        $errorMsg = "Username and password not found";
    }
}

?>
<div id="Content">
    <div id="Login">

        <div id="container" class="container">
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
  <?php include('../core/footer.php'); ?>
</div>
</body>

    </head>
</html>
