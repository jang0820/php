<?php
  include 'db-connect.php';
  $sql="select * from product";
  $result=mysqli_query($db, $sql);
  for($i=0; $i<mysqli_num_rows($result); $i++){//列出所有商品
    $row= mysqli_fetch_array($result);
?>
<form action="buy.php" method="POST">
  <input type="hidden" name="pid" value=<?php echo$row["product_id"]?> >
  <table width="900" height="35" border="1" >
  <tr>
    <td width="300" height="35">貨物名稱：<input type="text" readonly="readonly" name="pname" value=<?php echo$row["product_name"]?> ></td>
    <td width="300" height="35">貨物價格：<input type="text" readonly="readonly" name="pprice" value=<?php echo$row["product_price"]?> ></td>
    <td width="200" height="35">購買數量(1-7)：
    <select name="num">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
    </select>
    </td>
    <td width="100" height="35"><input type="submit" value="購買"></td>
  </tr>
  </table>
</form>
<?php
}
echo "一次只能購買一種商品，商品數量每次重新設定不累加<br>";
?>