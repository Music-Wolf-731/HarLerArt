<?php require '../header.php'; ?>
<?php
$price=$_REQUEST['price'];
$count=$_REQUEST['count'];
echo $price, '元X';
echo $count, '個＝';
echo $price*$count, '元';
?>
<?php require '../footer.php'; ?>
