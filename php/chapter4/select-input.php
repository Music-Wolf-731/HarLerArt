<?php require '../header.php'; ?>
<p>請選擇座位類型：</p>
<form action="select-output.php" method="post">
<select name="seat">
<option value="自由席">自由席</option>
<option value="指定席">指定席</option>
<option value="商務車廂">商務車廂</option>
</select>
<p><input type="submit" value="確定"></p>
</form>
<?php require '../footer.php'; ?>
