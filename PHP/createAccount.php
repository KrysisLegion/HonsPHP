<?php

if(isset($_POST['uname']) && isset($_POST['pword'])){

  $uname = strip_tags($_POST['uname']);
  $password = strip_tags($_POST['pword']);
  if (checkUser($uname)){
    header("Location: /registration.php?err=1");
  }else{
    register($uname, $password);
    header("Location: /messageBoard.php");
  }
}

//open connection to database
function checkUser(){

$dbhost = getenv("localhost");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("dbuser");
$dbpwd = getenv("dbpassword");
$dbname = getenv("dbname");
$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database");
}
$connection->close();

}

//This inserts the created account into the database and hashes the password so it cannot be read if the database is breached
function register($uname, $pwd){
  $dbhost = getenv("localhost");
  $dbport = getenv("MYSQL_SERVICE_PORT");
  $dbuser = getenv("dbuser");
  $dbpwd = getenv("dbpassword");
  $dbname = getenv("dbname");
  $connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
  if ($connection->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  } else {
      printf("Connected to the database");
  }
  $connection->close();

  $sql = "INSERT INTO users (username, password)
  VALUES ($uname, $password)";

  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error nooties: " . $sql . "<br>" . $conn->error;
  }
}

 ?>
