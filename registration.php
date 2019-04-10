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
<title>KOH Create Account</title>
</head>
<body>
  <div id="header">
    <h1>KOH Create Account</h1>
  </div>

<div id="container">
  <form method="post" action="PHP/signup.php">
  <div class="container">
    <label for="uname"><b>Create Username</b></label>
    <input type="text" placeholder="Enter a Username" name="inputUsername" required>
    <br>
    <br>
    <label for="pword"><b>Create Password</b></label>
    <input type="password" placeholder="Enter a Password" name="inputPassword" required>
    <br>
    <br>
    <label for="psw"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password..." name="inputPasswordRepeated" required>

    <button type="submit" name="submit">Register</button>
    <a href="index.php">Log In Existing Account</a>
  </div>
  </form>
</div>

</body>
</html>
