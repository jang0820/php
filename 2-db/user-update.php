<?php
  include 'db-connect.php';
  if (empty($_GET['acc'])) {
    die('請輸入要修改的帳號名稱');
  }
  $acc = $_GET['acc'];
  if (isset($_POST['modify_user_btn'])) {
    $acc = $_POST['acc'];
    $pass = $_POST['pass'];
    $sql = "UPDATE user set pass='$pass' where acc = '$acc'";
    $result = mysqli_query($db, $sql);
    header('Location: 新增使用者.php');
  }
?>
<form method="post" action=""> 
    帳號<input type="text" placeholder="<?php echo $acc?>" name="acc" value="<?php echo $acc?>"><br>
    密碼<input type="text" placeholder="請輸入密碼" name="pass">
    <button name="modify_user_btn">修改密碼</button>
</form>