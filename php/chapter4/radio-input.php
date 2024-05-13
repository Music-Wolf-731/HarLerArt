<?php require '../header.php'; ?>
請選擇餐點：
<form action="radio-output.php" method="post">
<p><input type="radio" name="meal" value="日式套餐" checked>日式套餐</p>
<p><input type="radio" name="meal" value="西式套餐">西式套餐</p>
<p><input type="radio" name="meal" value="中式套餐">中式套餐</p>
<p><input type="submit" value="確定"></p>
</form>
<?php require '../footer.php'; ?>
