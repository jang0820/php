<?php
  include 'db-connect.php';
  $sql = "SELECT * FROM user";
  $result = mysqli_query($db, $sql);
  for($i=0; $i<mysqli_num_rows($result); $i++){//列出使用者
    if ($i==0) echo "帳號  密碼"."<br>";
    $row= mysqli_fetch_row($result);
    echo $row[0]."   ";
    echo $row[1]."<br>";
  }

  if (isset($_POST['add_user_btn'])) {
    $acc = $_POST['acc'];
    $pass = $_POST['pass'];
    $sql = "INSERT INTO user(acc, pass) VALUES('$acc','$pass')";
    $result = mysqli_query($db, $sql);
    header('Location: 新增使用者.php');
  }
?>

<form method="post" action=""> 
    帳號<input type="text" placeholder="請輸入帳號" name="acc"><br>
    密碼<input type="text" placeholder="請輸入密碼" name="pass">
    <button name="add_user_btn">新增</button>
</form>