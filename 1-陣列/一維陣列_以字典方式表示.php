<?php
  $score = array("1號"=>89,"2號"=>55,"3號"=>73,"4號"=>66);
  var_dump($score);
  echo "<br>";
  foreach($score as $k=>$v){
    echo "$score[$k]相等於$v<br>";
  }
?>