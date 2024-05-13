<?php require '../header.php'; ?>
<?php
$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8', 
	'staff', 'password');
$sql=$pdo->prepare('delete from product where id=?');
if ($sql->execute([$_REQUEST['id']])) {
	echo '刪除成功。';
} else {
	echo '刪除失敗。';
}
?>
<?php require '../footer.php'; ?>
