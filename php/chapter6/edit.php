<?php require '../header.php'; ?>
<table>
<tr><th>商品編號</th><th>商品名稱</th><th>商品價格</th></tr>
<tr>
<form action="edit3.php" method="post">
<input type="hidden" name="command" value="insert">
<td></td>
<td><input type="text" name="name"></td>
<td><input type="text" name="price"></td>
<td><input type="submit" value="確定新增"></td>
</form>
</tr>
</table>
<?php require '../footer.php'; ?>
