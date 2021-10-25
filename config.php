
<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'db_user' with 123 password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'db_user');
define('DB_PASSWORD', '123');
define('DB_NAME', 'webp');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false)
    echo("ERROR: Could not connect. " . mysqli_connect_error())
?>