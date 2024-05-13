<?php require '../header.php'; ?>
<?php
$count=mb_convert_kana($_REQUEST['count'], 'n');
if (preg_match('/[0-9]+/', $count)) {
	echo $count, '個商品完成訂購。';
} else {
	echo $count, '並非數值。';
}
?>
<?php require '../footer.php'; ?>
