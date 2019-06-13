<?php
  $user = $_POST['username'];
  $pass = $_POST['password'];

  if (! ($user == 'proteccioncivil' && $pass == 'airecusur')) {
    header("Location: login.php?error=1");
    die();
  } else {
    session_start();
    $_SESSION['username'] = $user;

    header("Location: menu.php");
    die();
  }
?>
