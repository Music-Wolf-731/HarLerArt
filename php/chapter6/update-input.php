<?php require '../header.php'; ?>
<table>
<tr><th>商品編號</th><th>商品名稱</th><th>商品價格</th></tr>
<?php
$pdo=new PDO(
	'mysql:host=localhost;dbname=shop;charset=utf8', 'staff', 'password'
);
foreach ($pdo->query('select * from product') as $row) {
	echo '<tr><form action="update-output.php" method="post">';
	echo '<input type="hidden" name="id" value="', $row['id'], '">';
	echo '<td>', $row['id'], '</td>';
	echo '<td>';
	echo '<input type="text" name="name" value="', $row['name'], '">';
	echo '</td>';
	echo '<td>';
	echo '<input type="text" name="price" value="', $row['price'], '">';
	echo '</td>';
	echo '<td><input type="submit" value="確定修改"></td>';
	echo '</form></tr>';
	echo "\n";
}
?>
</table>
<?php require '../footer.php'; ?>
