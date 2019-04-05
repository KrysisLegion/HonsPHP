<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("dbuser");
$dbpwd = getenv("dbpassword");
$dbname = getenv("dbname");

$connection = mysqli_connect($dbhost, $dbport, $dbname, $dbuser, $dbpwd);
?>
