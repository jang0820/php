<?php
  $weight = 75;
  $height = 1.68;
  $BMI=$weight/($height*$height);
  echo("BMI為".$BMI."<br>");
  switch($BMI){
    case $BMI>=0 && $BMI<18:
      echo("體重過輕"."<br>");
      break;          
    case $BMI>=18 && $BMI<24:
      echo("體重正常"."<br>");
      break;      
    case $BMI>=24 && $BMI<27:
      echo("體重過重"."<br>");
      break;
    default:
      echo("體重肥胖"."<br>");
      break;      
  }
?>