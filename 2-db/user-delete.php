<?php
  include 'db-connect.php';
  if (empty($_GET['acc'])) {
    die('請指定要刪除的帳號名稱');
  }
  $acc = $_GET['acc'];
  $sql = 'DELETE FROM user WHERE acc = "'.$acc.'"';
  $result = mysqli_query($db, $sql);;
  header('Location: 刪除使用者.php');
?>