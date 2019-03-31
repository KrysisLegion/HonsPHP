<?php
session_start();
if(!isset($_SESSION['usr'])){
  header("Location: /index.php");
}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/index.css">
<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
<title>Message Board</title>
</head>
<body>

  <div id="header">
    <h1>KOH Message Board</h1>
    <h1>Message Board</h1>
    <form method="post" action="termSession.php">
    <button class="logout" name="termSession">Log Out</button>
    </form>
  </div>



</body>
</html>
