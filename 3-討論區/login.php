<?php
include 'db-connect.php';
session_start();
if (isset($_POST["submit"]) ) { 
    $acc = $_POST["acc"];
    $pass =  $_POST["pass"];
    if (!empty($acc) && !empty($pass)){
      $sql = "SELECT prio FROM user WHERE acc='" . $acc . "' and pass='" .$pass."'";
      $r1 = mysqli_query($db, $sql); #查詢資料庫 
      mysqli_close($db); 
      if (mysqli_num_rows($r1) > 0){
        $row = mysqli_fetch_row($r1);
        $_SESSION["acc"] = $acc;
        $_SESSION["prio"] = $row[0];
        if ($_SESSION["prio"] == 0)  header("Location: admin.php"); #超級管理者
        if ($_SESSION["prio"] == 1)  header("Location: manager.php");  #管理者
        if ($_SESSION["prio"] == 2)  header("Location: user.php");  #一般使用者
      }
    }
} 
?>
<!DOCTYPE html>
<html  lang="zh-TW">
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<form method="post" action="">
    <div>
      <input type="text" name="acc"/><br>
      <input type="password" name="pass"/>
    </div><br>
    <input type="submit" name="submit" value="登入"/>
</form>
</body>
</html>