<?php
  $db = mysqli_connect("localhost", "zs", "zs1234");
  mysqli_select_db($db, "zs");
  $sql = "SELECT * FROM user WHERE acc ='zs1'";
  $result = mysqli_query($db, $sql);
  $row = mysqli_fetch_assoc($result); #將結果轉換成關聯性陣列(字典)
  echo $row['acc']."<br>";
  echo $row['pass']."<br>";
?>