<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

// For XAMMP
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'spyzonedb');

// Webhost Server
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'id13165454_cilucena');
// define('DB_PASSWORD', 'tF?JXwNN2$/-WYTa');
// define('DB_NAME', 'id13165454_dbcilucena');

// Infinity Free Server
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'epiz_29782637');
define('DB_PASSWORD', 'Siy1ZhW6Uoi');
define('DB_NAME', 'epiz_29782637_cil');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>