<?php require '../header.php'; ?>
<?php
$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8', 
	'staff', 'password');
$sql=$pdo->prepare('insert into product values(null, ?, ?)');
if ($sql->execute([$_REQUEST['name'], $_REQUEST['price']])) {
	echo '新增成功。';
} else {
	echo '新增失敗。';
}
?>
<?php require '../footer.php'; ?>
