<?php

// Cloud 9
// define('SB_DB_SERVER', getenv('IP')); // db server
// define('SB_DB_USER', getenv('C9_USER')); // db user
// define('SB_DB_PASS', ''); // db password
// define('SB_DB_PORT', 3306); // db port
// define('SB_DB_NAME', 'c9'); // db name

// Localhost
define('SB_DB_SERVER', 'localhost'); // db server
define('SB_DB_USER', 'root'); // db user
define('SB_DB_PASS', 'root'); // db password
define('SB_DB_PORT', 3306); // db port
define('SB_DB_NAME', 'lab-indigo'); // db name

$conn = mysqli_connect(SB_DB_SERVER, SB_DB_USER, SB_DB_PASS, SB_DB_NAME, SB_DB_PORT);

?>
