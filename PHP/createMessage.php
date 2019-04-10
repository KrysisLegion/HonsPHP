<?php
if (isset($_POST['submit'])){

  require 'connect.php';

  $messageDescription = $_POST['inputMessDesc'];
  $messageText = $_POST['inputMessTxt'];

  else {
        //write message into the database
        $sql = "INSERT INTO messages(subject, message_text) VALUES (?,?)";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../messageCompose.php?error=dbwrite");
            exit();
        }
        else{
          mysqli_stmt_bind_param($stmt, "ss", $messageDescription,$messageText);
          mysqli_stmt_execute($stmt);
          header("Location: ../topicMessages.php?post=success");
          exit();
        }
      }

        mysqli_stmt_close($stmt);
        mysqli_close($connection);
    }


else{
  header("Location: ../topicMessages.php?");
  exit();
}
?>
