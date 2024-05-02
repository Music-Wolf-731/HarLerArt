<?php require '../header.php'; ?>
<p>請輸入密碼：</p>
<p>（需為8個字以上，並包含小寫字母、大寫字母、數字至少各1）</p>
<form action="password-output.php" method="post">
<input type="password" name="password">
<input type="submit" value="確定">
</form>
<?php require '../footer.php'; ?>
