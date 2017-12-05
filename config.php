<?php

// define('SB_DB_SERVER', 'localhost'); // db server
// define('SB_DB_USER', 'root'); // db user
// define('SB_DB_PASS', 'root'); // db password
// define('SB_DB_NAME', 'lab-indigo'); // db name

// mysql://b3fc62381bbceb:5b958dbe@eu-cdbr-west-01.cleardb.com/heroku_173da242a6954ae?reconnect=true
define('SB_DB_SERVER', 'eu-cdbr-west-01.cleardb.com/heroku_173da242a6954ae?reconnect=true'); // db server
define('SB_DB_USER', 'b3fc62381bbceb'); // db user
define('SB_DB_PASS', '5b958dbe'); // db password
define('SB_DB_NAME', 'indigo-lab'); // db name

$conn = mysqli_connect(SB_DB_SERVER, SB_DB_USER, SB_DB_PASS, SB_DB_NAME);

?>
