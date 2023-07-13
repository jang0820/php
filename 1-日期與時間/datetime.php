<?php
  date_default_timezone_set('Asia/Taipei');
  $now = date("Y-m-d H:i:s");     // 2023-07-07 05:45:42（MySQL DATETIME 格式）
  echo $now."<br>";
  $now = date("F j, Y, g:i A");   // July 7, 2023, 5:45 AM
  echo $now."<br>";
  $now = date("D M j G:i:s Y"); // Fri Jul 7 5:45:42 2023
  echo $now."<br>";
  $now = date("Y/n/j");           // 2023/7/7
  echo $now."<br>";
?>