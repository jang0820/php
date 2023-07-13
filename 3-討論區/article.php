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

  $sql = "SELECT * FROM article";
  $result = mysqli_query($db, $sql);
  for($i=0; $i<mysqli_num_rows($result); $i++){//列出文章主題
    if ($i==0) echo "帳號   標題  內容  建立時間"."<br>";
    $row= mysqli_fetch_row($result);
    echo $row[1]."   ".$row[2]."   ".$row[3]."   ".$row[4]."   ";
    echo '<a href="article-reply.php?article_id=' . $row[0] . '">回覆</a><br>';
  } 

  if (isset($_POST['add_article_btn'])) { //建立文章主題到資料表article
    $acc = $_SESSION['acc'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $ctime = date("Y-m-d H:i:s");
    $sql = "INSERT INTO article(acc, title, content, ctime) VALUES('$acc','$title','$content','$ctime')";
    $result = mysqli_query($db, $sql);
    header('Location: article.php');
  }
?>

<form method="post" action=""> 
    標題<input type="text" placeholder="請輸入標題" name="title"><br>
    內容<textarea name="content" rows="10" cols="80"></textarea><br>
    <button name="add_article_btn">新增</button>
</form>