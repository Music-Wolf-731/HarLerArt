<?php require '../header.php'; ?>
<?php
foreach ($_REQUEST['genre'] as $item) {
	echo '<p>', $item, '</p>';
}
echo '以上商品的特惠情報電子報訂閱成功。';
?>
<?php require '../footer.php'; ?>
