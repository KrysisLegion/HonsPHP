<?php
  session_start();
  if(!isset($_SESSION['userID'])){
    header("Location: index.php");
    exit();
  }
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/messageBoard.css">
<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
<title>KOH Login</title>
</head>
<body>
  <div id="header">
    <h1>KOH Message Board</h1>
  </div>
  <div id="navbar">
      <form action="PHP/termSession.php" method="post">
          <button id="logout" type="submit" name="logout">Log Out</button>
      </form>
  </div>

  </div>


</body>
</html>
