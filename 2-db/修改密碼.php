<?php
  include 'db-connect.php';
  $sql = "SELECT * FROM user";
  $result = mysqli_query($db, $sql);
  for($i=0; $i<mysqli_num_rows($result); $i++){//列出使用者
    if ($i==0) echo "帳號  密碼"."<br>";
    $row= mysqli_fetch_row($result);
    echo $row[0]."   ";
    echo $row[1];
    echo '<a href="user-update.php?acc=' . $row[0] . '">修改密碼</a><br>';
  }
?>
