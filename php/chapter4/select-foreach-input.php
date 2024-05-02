<?php require '../header.php'; ?>
<p>請選擇密碼提示問題：</p>
<form action="select-foreach-output.php" method="post">
<select name="question">
<?php
$question=[
	'第一部看的電影',
	'第一隻寵物的名字',
	'第一部車的車款',
	'畢業的小學名稱',
	'小學時的導師姓名',
	'出生地的地名'
];
foreach ($question as $item) {
	echo '<option value="', $item, '">', $item, '</option>';
}
?>
</select>
<p>密碼提示問題的答案</p>
<p><input type="text" name="answer"></p>
<p><input type="submit" value="確定"></p>
</form>
<?php require '../footer.php'; ?>
