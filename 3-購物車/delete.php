<?php
  session_start();
  $pid=$_GET["id"];
  $cart=$_SESSION["cart"];
  foreach($cart as $k => $v){
    if($k == $pid){//清除$pid所指定的商品
      unset($cart[$k]);
      break;
    }
  }
  $_SESSION["cart"]=$cart; //更新Session
  header("location:cart.php");
?>