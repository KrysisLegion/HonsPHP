<?php
//open connection to database





function CreateAccount(){
  $dbhost = getenv("MYSQL_SERVICE_HOST");
  $dbport = getenv("MYSQL_SERVICE_PORT");
  $dbuser = getenv("dbuser");
  $dbpwd = getenv("dbpwd");
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

    // this checks if the user trying to register already exists in the database
    $stmt = $pdo->prepare("SELECT * FROM accs WHERE usr = ?");
    $stmt->execute([$uname]);
    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt = null;
    if(!$arr){
      return false;
    }else{
      return true;
    }
}

function CheckLogin(){


}
 ?>
