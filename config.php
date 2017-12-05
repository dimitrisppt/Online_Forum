<?php

// Local configs
define('SB_DB_SERVER', 'localhost'); // db server
define('SB_DB_USER', 'root'); // db user
define('SB_DB_PASS', 'root'); // db password
define('SB_DB_NAME', 'lab-indigo'); // db name

// Cloud 9
// define('SB_DB_SERVER', getenv('IP')); // db server
// define('SB_DB_USER', getenv('C9_USER')); // db user
// define('SB_DB_PASS', '');
// define('SB_DB_PORT', 3306); // db password
// define('SB_DB_NAME', 'c9'); // db name

// Heroku configs
// define('SB_DB_SERVER', 'eu-cdbr-west-01.cleardb.com'); // db server
// define('SB_DB_USER', 'b3fc62381bbceb'); // db user
// define('SB_DB_PASS', '5b958dbe'); // db password
// define('SB_DB_NAME', 'heroku_173da242a6954ae'); // db name

$conn = mysqli_connect(SB_DB_SERVER, SB_DB_USER, SB_DB_PASS, SB_DB_NAME);

?>
