<?php
$servName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

$connection = mysqli_connect($servName, $dbUsername, $dbPassword, $dbName);

if(!$connection){
  die("Connection Failed: ".mysqli_connect_error());
}

?>
