<?php

session_start();
session_destroy();

header('Location: login.php');
echo '<h3>You successfully logged out</h3>';
exit;

?>

