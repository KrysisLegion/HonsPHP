<?php
$servhost = = getenv("MYSQL_SERVICE_HOST");
$dbuser = getenv("root");
$dbpassword = getenv("");
$dbName = getenv("messageBoard");

$connection = mysqli_connect($servhost, $dbUsername, $dbPassword, $dbName);

if(!$connection){
  die("Connection Failed: ".mysqli_connect_error());
}

?>
