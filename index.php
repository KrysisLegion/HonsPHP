<?php
session_start();
if(isset($_SESSION['userID'])){
  header("Location: topics.php?logged-in");
  exit();
}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/index.css">
<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
<title>KOH Login</title>
</head>
<body>
  <div id="header">
    <h1>KOH Login</h1>
  </div>

  <div id="container">
    <form action="PHP/login.php" method="post">
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username..." name="inputUsername" required>
      <br>
      <br>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password..." name="inputPassword" required>
      <button type="submit" name="submit">Login</button>

      <a href="registration.php">Register An Account</a>
    </div>
    </form>
  </div>

</body>
</html>
