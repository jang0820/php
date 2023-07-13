<?php
  $target = strtotime("2024-01-01");
  $now = time();
  $delta = $target - $now;
  $day = floor($delta/(60*60*24));
  $hour = floor($delta%(60*60*24)/(60*60));
  $minute = floor($delta%(60*60)/60);
  $second = $delta%60;
  echo "距離2024-01-01";
  echo "還有".$day."天".$hour."小時".$minute."分".$second."秒"
?>