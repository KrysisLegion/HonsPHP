<?php
session_start();

if(isset($_POST['uname']) && isset($_POST['pword'])){
  $uname = strip_tags($_POST['uname']);
  $password = strip_tags($_POST['pword']);
  if (login($uname, $password)){
    header("Location: /messageBoard.php");
  }else{
    header("Location: /index.php?err=1");
  }
}

function register($uname, $password){
  $dbhost = getenv("MYSQL_SERVICE_HOST");
  $dbport = getenv("MYSQL_SERVICE_PORT");
  $dbuser = getenv("dbuser");
  $dbpwd = getenv("dbpassword");
  $dbname = getenv("dbname");
  $dsn = "mysql:host=".$dbhost.";dbname=".$dbname.";charset=utf8mb4";
      $options = [
        PDO::ATTR_EMULATE_PREPARES   => false,
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      ];
      try {
        $pdo = new PDO($dsn, $dbuser, $dbpwd, $options);
      } catch (Exception $e) {
        error_log($e->getMessage());
        exit('Database connection error has occured');
      }

      // checks if the user exists on the database
          $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
          $stmt->execute([$uname]);
          if($stmt->rowCount() === 0);
            while ($row = $stmt->fetch()) {
                $uname = $row['uname'];
                $hpwd = $row['pword'];

                if (password_verify($password, $hpwd)) {
                  $_SESSION['uname'] = $uname;
                  header("Location: messageBoard.php");
               } else {
                  header("Location: index.php?error=1");
               }
            }
}

 ?>
