<?php require '../header.php'; ?>
<?php
if (isset($_REQUEST['mail'])) {
	echo '已訂閱特賣情報電子報。';
} else {
	echo '未訂閱特賣情報電子報。';
}
?>
<?php require '../footer.php'; ?>
