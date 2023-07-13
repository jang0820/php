<?php
  include 'db-connect.php';
  date_default_timezone_set('Asia/Taipei');
  session_start();
  if (!isset($_SESSION['prio'])) header("Location: login.php");

  if (isset($_SESSION["acc"]) ) { 
    $acc = $_SESSION["acc"];
  }else{
    header("Location: login.php");
  }

  if (empty($_GET['article_id'])) {
    die('缺少文章編號');
  }
  $article_id = $_GET['article_id'];
  echo '已經回覆的內容<br>';
  $sql = "SELECT * FROM article_reply WHERE article_id = '$article_id'";
  $result = mysqli_query($db, $sql);
  for($i=0; $i<mysqli_num_rows($result); $i++){//列出文章的所有回應
    if ($i==0) echo "帳號  回覆內容  建立時間<br>";
    $row= mysqli_fetch_row($result);
    echo $row[1]."   ".$row[2]."   ".$row[3]."<br>";
  } 
  if (isset($_POST['add_reply_btn'])) { //建立發文的回覆到資料表article_reply
    $content = $_POST['content'];
    $ctime = date("Y-m-d H:i:s");
    $sql = "INSERT INTO article_reply(article_id, acc, content, ctime) VALUES('$article_id','$acc','$content','$ctime')";
    $result = mysqli_query($db, $sql);
    header('Location: article.php');
  }
?>

<form method="post" action=""> 
    內容<textarea name="content" rows="10" cols="80"></textarea><br>
    <button name="add_reply_btn">回覆</button>
</form>