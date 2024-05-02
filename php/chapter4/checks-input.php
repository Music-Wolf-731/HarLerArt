<?php require '../header.php'; ?>
<p>請選擇您有興趣的商品種類：</p>
<form action="checks-output.php" method="post">
<?php
$genre=['撮錄影機', '個人電腦', '鐘錶', '家電', '書籍', '文具用品', '食品'];
foreach ($genre as $item) {
	echo '<p>';
	echo '<input type="checkbox" name="genre[]" value="', $item, '">';
	echo $item;
	echo '</p>';
}
?>
<p><input type="submit" value="確定"></p>
</form>
<?php require '../footer.php'; ?>
