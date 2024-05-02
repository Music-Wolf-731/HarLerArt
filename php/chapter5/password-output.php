<?php require '../header.php'; ?>
<?php
$password=$_REQUEST['password'];
if (preg_match('/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[a-zA-Z0-9]{8,}/', 
	$password)) {
	echo '密碼「', $password, '」格式正確。';
} else {
	echo '密碼「', $password, '」格式不符。';
}
?>
<?php require '../footer.php'; ?>
