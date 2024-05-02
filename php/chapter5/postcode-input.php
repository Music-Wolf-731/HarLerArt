<?php require '../header.php'; ?>
<p>請輸入7碼郵遞區號（不需「-」分隔）：</p>
<form action="postcode-output.php" method="post">
<input type="text" name="postcode">
<input type="submit" value="確定">
</form>
<?php require '../footer.php'; ?>
