<?php
  $score = array("1號"=> array(89,55,73,66),"2號"=> array(34,86,69,94),"3號"=> array(82,76,90,84));
  foreach ($score as $k => $v){
    echo $k."=>";
    for($j=0;$j<4;$j++){
      echo $score[$k][$j]." ";
    }
    echo "<br>";
  }
?>