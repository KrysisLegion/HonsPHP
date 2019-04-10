<?php
$servhost = getenv("MYSQL_SERVICE_HOST");
$dbuser = getenv("dbuser");
$dbpassword = getenv("dbpassword");
$dbName = getenv("dbname");

//
// $servhost = "localhost";
// $dbuser = "root";
// $dbpassword ="";
// $dbName = "messageBoard";

$connection = mysqli_connect($servhost, $dbUsername, $dbPassword, $dbName);

if(!$connection){
  die("Connection Failed: ".mysqli_connect_error());
}

?>
