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
        <li><a href="topicCompose.php" name="compose-topic">New Topic</a></li>
    </ul>
  </div>
  <?php
    require('PHP/connect.php');
      $sql = "SELECT * FROM topics";
      $stmt = mysqli_stmt_init($connection);
      if(!mysqli_stmt_prepare($stmt, $sql)){
          header("Location: ../index.php?error=mysqliprep");
          exit();
      } else {
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row["topic_id"];
          $topic =  $row["topic"];

          echo '<table class="roundedCorners">';
            echo '<tr>';
              echo '<th>'.$topic.'</th>';
            echo '</tr>';
            echo '<tr>';
              echo '<td><a href="topicMessages.php?id='. $id .'">Click here to view all posts about '. $topic .'</a></td>';
            echo '</tr>';
          echo '</table>';

        }


      }
   ?>



</body>
</html>
