<?php
  session_start();
  if(!isset($_SESSION['userID'])){
    header("Location: index.php?no-login");
    exit();
  }
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/messageBoard.css">
<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
<title>KOH Topics</title>
</head>
<body>
  <div id="header">
    <ul>
      <form action="PHP/termSession.php" method="post">
        <li><h1>KOH Message Board</h1></li>
        <li style="float: right;"><button id="logout" type="submit" name="logout">Log Out</a></li>
      </form>
    </ul>
  </div>

  <div>
    <ul>
        <li><a href="commentCompose.php" name="compose-comment">Add Comment</a></li>
        <li style="float: right;"><a href="topicMessages.php" name="back">Back</a></li>
    </ul>
  </div>



</body>
</html>
