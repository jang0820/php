<?php
  session_start();
  echo $_SESSION['user']."<br>";
  echo date('Y m d H:i:s', $_SESSION['time'])."<br>";
  unset($_SESSION['user']);
  echo $_SESSION['user']."<br>";
  echo date('Y m d H:i:s', $_SESSION['time'])."<br>";
  session_unset(); #刪除所有$_SESSION變數，但不刪除Session檔案與Session ID
  session_destroy();  #刪除Session檔案與Session ID
?>