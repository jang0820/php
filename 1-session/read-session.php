<?php
  session_start();
  echo $_SESSION['user']."<br>";
  echo date('Y m d H:i:s', $_SESSION['time'])."<br>";
?>