<?php
  include 'db-connect.php';
  session_start();
  if (!isset($_SESSION['prio'])) header("Location: login.php");
  if ($_SESSION['prio'] != 2) header("Location: login.php");
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
<title>使用者</title>
</head>
<body>
  <?php
    echo '歡迎使用者'.$acc.'登入<br>';
    echo '<a href="product.php">購物</a><br>';
    echo '<a href="logout.php">登出</a><br>';
  ?>
</body>
</html>