<?php require '../header.php'; ?>
<table>
<tr><th>商品編號</th><th>商品名稱</th><th>商品價格</th></tr>
<?php
$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8', 
	'staff', 'password');
$sql=$pdo->prepare('select * from product where name like ?');
$sql->execute(['%'.$_REQUEST['keyword'].'%']);
foreach ($sql->fetchAll() as $row) {
	echo '<tr>';
	echo '<td>', $row['id'], '</td>';
	echo '<td>', $row['name'], '</td>';
	echo '<td>', $row['price'], '</td>';
	echo '</tr>';
	echo "\n";
}
?>
</table>
<?php require '../footer.php'; ?>
