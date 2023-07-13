<?php 
  $sum = 0;
  $score = array(89,55,73,66);
  foreach($score as $item){
    $sum = $sum + $item;
    echo "成績為$item<br>";
  }
  echo "$sum<br>";
?>