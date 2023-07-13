<?php
  session_start();
  $pid=$_POST["pid"];//商品id
  $pname=$_POST["pname"];//商品名稱
  $num=$_POST["num"];//商品數量
  $cart=$_SESSION["cart"];
  if(!is_array($cart)){ //購物車沒有商品
    $cart[$pid]=array("pid"=>$pid,"pname"=>$pname,"num"=>$num);
  }else {//購物車已有商品
    if(array_key_exists($pid,$cart)){ //該商品已經在購物車內
      $tmp=$cart[$pid];
      $tmp["num"]=$num;  //更新商品數量
      $cart[$pid]=$tmp;
    }else{  //該商品不在購物車內
      $cart[$pid]=array("pid"=>$pid,"pname"=>$pname,"num"=>$num);
    }
  }
  $_SESSION["cart"]=$cart;
  header("location:cart.php");
?>