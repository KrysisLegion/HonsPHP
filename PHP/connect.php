<?php
$servhost = getenv("MYSQL_SERVICE_HOST");
$dbUsername = getenv("dbuser");
$dbPassword = getenv("dbpassword");
$dbName = getenv("dbname");

//
// $servhost = "localhost";
// $dbUsername = "root";
// $dbPassword ="";
// $dbName = "messageBoard";

$connection = mysqli_connect($servhost, $dbUsername, $dbPassword, $dbName);

if(!$connection){
  die("Connection Failed: ".mysqli_connect_error());
}

?>
