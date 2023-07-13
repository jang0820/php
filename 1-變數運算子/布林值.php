<?php
  $b = false;
  var_dump($b);
  echo '<br>';
  $b = true;
  var_dump($b);
  echo '<br>';
  $x = 5;
  $b = boolval($x); //使用boolval函式進行型別轉換
  var_dump($b);
  echo '<br>';
  $b = (bool)$x;    //使用bool進行型別轉換
  var_dump($b);
  echo '<br>';
  $b = (boolean)$x; //使用boolean進行型別轉換
  var_dump($b);
  echo '<br>'; 
?>