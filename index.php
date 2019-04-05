<?php
session_start();
if(isset($_SESSION['uname'])){
  header("Location: /ssd/codePaste.php");
}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/index.css">
<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
<title>KOH Message board</title>
</head>
<body>
  <div id="header">
    <h1>KOH Message Board</h1>
  </div>

  <div id="container">
    <form action="/PHP/loginController.php" method="POST">
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input id="usr" type="text" placeholder="Enter Username" name="uname" required>
      <br>
      <br>
      <label for="psw"><b>Password</b></label>
      <input id="pswd" type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit">Login</button>

      <a href="registration.php">Register An Account</a>
    </div>
    </form>
  </div>

</body>
</html>
