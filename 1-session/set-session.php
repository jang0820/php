<?php
  session_start();
  $_SESSION['user'] = "zs";
  $_SESSION['time'] = time();
  echo $_SESSION['user']."<br>";
  echo $_SESSION['time']."<br>";
  echo session_save_path()."<br>";
?>