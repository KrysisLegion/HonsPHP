<?php

$servhost = getenv("MYSQL_SERVICE_HOST");
$dbUsername = getenv("root");
$dbPassword = getenv("");
$dbName = getenv("messageBoard");

// $servhost = "localhost";
// $dbUsername = "root";
// $dbPassword ="";
// $dbName = "loginsystem";

$connection = mysqli_connect($servhost, $dbUsername, $dbPassword, $dbName);

if(!$connection){
  die("Connection Failed: ".mysqli_connect_error());
}

?>
