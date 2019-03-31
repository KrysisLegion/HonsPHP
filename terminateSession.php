<?php
// when called this will terminate the active session for the user and return them to the login screen.
session_start();
if (isset($_POST['termSession'])){
  session_destroy();
  header('Location: /index.php');
}
?>
