<?php require '../header.php'; ?>
<?php
$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8', 
	'staff', 'password');
$sql=$pdo->prepare('insert into product values(null, ?, ?)');
if (empty($_REQUEST['name'])) {
	echo '請輸入商品名稱。';
} else
if (!preg_match('/[0-9]+/', $_REQUEST['price'])) {
	echo '請以整數輸入商品價格。';
} else
if ($sql->execute(
	[htmlspecialchars($_REQUEST['name']), $_REQUEST['price']]
)) {
	echo '新增成功。';
} else {
	echo '新增失敗。';
}
?>
<?php require '../footer.php'; ?>
