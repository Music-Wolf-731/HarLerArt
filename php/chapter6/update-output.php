<?php require '../header.php'; ?>
<?php
$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8', 
	'staff', 'password');
$sql=$pdo->prepare('update product set name=?, price=? where id=?');
if (empty($_REQUEST['name'])) {
	echo '請輸入商品名稱。';
} else
if (!preg_match('/[0-9]+/', $_REQUEST['price'])) {
	echo '請以整數輸入商品價格。';
} else
if ($sql->execute(
	[htmlspecialchars($_REQUEST['name']), 
	$_REQUEST['price'], $_REQUEST['id']]
)) {
	echo '修改成功。';
} else {
	echo '修改失敗。';
}
?>
<?php require '../footer.php'; ?>
