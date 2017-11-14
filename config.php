<?php

define('SB_DB_SERVER', 'localhost'); // db server
define('SB_DB_USER', 'root'); // db user
define('SB_DB_PASS', 'root'); // db password
define('SB_DB_NAME', 'lab-indigo'); // db name

$conn = mysqli_connect(SB_DB_SERVER, SB_DB_USER, SB_DB_PASS, SB_DB_NAME);

?>