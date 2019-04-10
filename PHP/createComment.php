<?php
if (isset($_POST['submit'])){

  require 'connect.php';

  $comment = $_POST['inputComment'];

      else{
        //write comment into the database
        $sql = "INSERT INTO comments(comment) VALUES (?)";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../commentCompose.php?error=dbwrite");
            exit();
        }
        else{
          mysqli_stmt_bind_param($stmt, "s", $comment);
          mysqli_stmt_execute($stmt);
          header("Location: ../message.php?post=success");
          exit();
        }
      }

    }

  }
  mysqli_stmt_close($stmt);
  mysqli_close($connection);

}
else{
  header("Location: ../message.php?");
  exit();
}
?>
