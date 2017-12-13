<?php

session_start();
session_destroy();

header('Location: /');
echo '<h3>You successfully logged out</h3>';
exit;

?>

