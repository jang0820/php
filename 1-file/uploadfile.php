<?php
if ($_FILES['uploadfile']['error'] == UPLOAD_ERR_OK){ #UPLOAD_ERR_OK表示上傳成功
  echo '檔案名稱: ' . $_FILES['uploadfile']['name'] . '<br>';
  echo '檔案型別: ' . $_FILES['uploadfile']['type'] . '<br>';
  echo '檔案大小: ' . $_FILES['uploadfile']['size'] . 'Byte<br>';
  echo '暫存檔路徑: ' . $_FILES['uploadfile']['tmp_name'] . '<br>';
  echo '錯誤代碼: ' . $_FILES['uploadfile']['error'] . '<br>'; 

  if (file_exists('upload\\' . $_FILES['uploadfile']['name'])){
    echo '檔案已存在';
  } else {
    $file = $_FILES['uploadfile']['tmp_name'];
    $dest = 'upload\\' . $_FILES['uploadfile']['name'];
    move_uploaded_file($file, $dest);
  }
}
?>