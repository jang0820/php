<?php 
  $sum = 0;
  $score = array(89,55,73,66);
  for($i=0;$i<4;$i++){
    $sum = $sum + $score[$i];
    echo "第".($i+1)."位同學成績為$score[$i]<br>";
  }
  echo "$sum<br>";
?>