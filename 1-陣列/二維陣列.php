<?php
  $score = array(array(89,55,73,66),array(34,86,69,94),array(82,76,90,84));
  for($i=0;$i<3;$i++){
    for($j=0;$j<4;$j++){
      echo $score[$i][$j]." ";
    }
    echo "<br>";
  }
?>