<?php
#伺服器
echo $_SERVER['SERVER_NAME']."<br>";#伺服器的主機名稱。
echo $_SERVER['SERVER_PORT']."<br>";#伺服器的連接埠。
echo $_SERVER['SCRIPT_FILENAME']."<br>";#執行中PHP檔案的絕對路徑名稱。
echo $_SERVER['PHP_SELF']."<br>";#執行中PHP的資料夾與檔案名稱。
echo $_SERVER['DOCUMENT_ROOT']."<br>";#執行中PHP檔案的根目錄。

#用戶端
echo $_SERVER['REMOTE_ADDR']."<br>";#用戶端的IP 。
echo $_SERVER['REMOTE_PORT']."<br>";#用戶端的連接埠。
echo $_SERVER['REQUEST_METHOD']."<br>";#用戶端與伺服器連線的請求方法，例如 GET、POST 等。
echo $_SERVER['HTTP_USER_AGENT']."<br>";#用戶端的瀏覽器類型、作業系統、設備型號等。

echo "<br><br>";
var_dump($_SERVER);
?>