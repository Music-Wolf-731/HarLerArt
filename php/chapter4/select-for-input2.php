<?php require '../header.php'; ?>
<p>請選擇訂購數量：</p>
<form action="select-for-output.php" method="post">
<select name="count">
<?php
for ($i=0; $i<10; $i++) {
	echo '<option value="', $i, '">', $i, '</option>';
}
?>
</select>
<p><input type="submit" value="確定"></p>
</form>
<?php require '../footer.php'; ?>
