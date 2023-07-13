<?php
  include 'db-connect.php';
  session_start();
  if (!isset($_SESSION['prio'])) header("Location: login.php");
  if ($_SESSION['prio'] != 1) header("Location: login.php");
  if (isset($_SESSION["acc"]) ) { 
    $acc = $_SESSION["acc"];
  }else{
    header("Location: login.php");
  }
?>
<!DOCTYPE html>
<html  lang="zh-TW">
<head>
<meta charset="utf-8">
<title>管理者</title>
</head>
<body>
  <?php
    echo '歡迎管理者'.$acc.'登入<br>';
    echo '<a href="article.php">發文與回覆</a><br>';
    echo '<a href="logout.php">登出</a><br>';
  ?>
</body>
</html>