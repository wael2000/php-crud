<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', getenv("DATABASE_SERVICE_NAME"));
define('DB_USERNAME', getenv("DATABASE_USER"));
define('DB_PASSWORD', getenv("DATABASE_PASSWORD"));
define('DB_NAME', getenv("DATABASE_NAME"));

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
