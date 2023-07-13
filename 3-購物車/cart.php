<?php
session_start();
$cart=$_SESSION["cart"];
?>
<table width="500" height="50" border="1">
  <tr>
   <td width="100">商品ID</td>
   <td width="140">商品名稱</td>
   <td width="140">商品數量</td>
   <td width="120">是否刪除</td>
  </tr>
<?php
foreach($cart as $p){
?>
  <tr>
  <td width="100"><?php echo $p["pid"]?></td>
  <td width="140"><?php echo $p["pname"]?></td>
  <td width="140"><?php echo $p["num"]?></td>
  <td width="120"><a href="delete.php?id=<?php echo $p["pid"]?>">刪除</a></td>
</tr>
<?php
}
?>
</table>
</form>
<a href="product.php">回到商品頁面</a>