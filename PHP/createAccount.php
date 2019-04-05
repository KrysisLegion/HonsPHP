<?php
if(isset($_POST['submit'])){

  include_once 'dbConnection.php';
  $username = mysqli_real_escape_string($connection$_POST['uname']);
  $password = mysqli_real_escape_string($connection$_POST['pword']);

  //Error handlers
  // check for empty fields
  if(empty($username) || empty($password)){
    header("Location: ../registration.php?regestration=empty")
    exit();
  }
    //check input characters are valid
    if(!preg_match("/^[a-zA-Z]*$/", $username) || !preg_match("/^[a-zA-Z]*$/", $password)){
    header("Location: ../registration.php?regestration=invalid");
    exit();
  } else {
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($connection, $spl);
    $resultCheck = mysqli_num_rows();
  }
    if($resultCheck > 0){
      header("Location: ../regestration.php?regestration=usertaken");
      exit();
    } else{
      //hashing password
      $hashedPword = password_hash($password, PASSWORD_DEFAULT);
      //insert user into database
      $sql = "INSERT INTO users (username, password) VALUES ('$username','$hashedPword');";
      mysqli_query($connection, $sql);
      header("Location: ../regestration.php?regestration=success");
    }
  }


} else {
  header("Location: ../index.php");
  exit();
}



// session_start();
//
// if(isset($_POST['uname']) && isset($_POST['pword'])){
//
//   $uname = strip_tags($_POST['uname']);
//   $password = strip_tags($_POST['pword']);
//   if (checkUser($uname)){
//     header("Location: /registration.php?err=1");
//   }else{
//     register($uname, $password);
//     header("Location: /messageBoard.php");
//   }
// }
//
// //open connection to database
// function checkUser($uname){
//   $dbhost = getenv("MYSQL_SERVICE_HOST");
//   $dbport = getenv("MYSQL_SERVICE_PORT");
//   $dbuser = getenv("dbuser");
//   $dbpwd = getenv("dbpassword");
//   $dbname = getenv("dbname");
//   $dsn = "mysql:host=".$dbhost.";dbname=".$dbname.";charset=utf8mb4";
//     $options = [
//       PDO::ATTR_EMULATE_PREPARES   => false,
//       PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//       PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//     ];
//     try {
//       $pdo = new PDO($dsn, $dbuser, $dbpwd, $options);
//     } catch (Exception $e) {
//       error_log($e->getMessage());
//       exit('Database connection error has occured');
//     }
//
//     // this checks if the user trying to register already exists in the database
//     $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
//     $stmt->execute([$uname]);
//     $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     $stmt = null;
//     if(!$arr){
//       return false;
//     }else{
//       return true;
//     }
// }
//
// //This inserts the created account into the database and hashes the password so it cannot be read if the database is breached
// function register($uname, $password){
//   $dbhost = getenv("MYSQL_SERVICE_HOST");
//   $dbport = getenv("MYSQL_SERVICE_PORT");
//   $dbuser = getenv("dbuser");
//   $dbpwd = getenv("dbpassword");
//   $dbname = getenv("dbname");
//   $dsn = "mysql:host=".$dbhost.";dbname=".$dbname.";charset=utf8mb4";
//       $options = [
//         PDO::ATTR_EMULATE_PREPARES   => false,
//         PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//       ];
//       try {
//         $pdo = new PDO($dsn, $dbuser, $dbpwd, $options);
//       } catch (Exception $e) {
//         error_log($e->getMessage());
//         exit('Database connection error has occured');
//       }
//
//     $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
//     $options = [
//         'cost' => 12,
//     ];
//     $stmt->execute([$uname, password_hash($password, PASSWORD_BCRYPT, $options)]);
//     $_SESSION['uname'] = $uname;
// }
 ?>
