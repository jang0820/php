<?php
$v1 = '使用Cookie儲存資料，沒有設定過期時間';
$v2 = '使用Cookie儲存資料，設定一小時過期';
setcookie("Cookie1", $v1); #當關閉瀏覽器Cookie就會消失
setcookie("Cookie2", $v2, time()+3600);  #一小時Cookie就會刪除
?>