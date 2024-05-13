<?php require '../header.php'; ?>
<?php
$postcode=$_REQUEST['postcode'];
if (preg_match('/^[0-9]{3}-[0-9]{4}$/', $postcode)) {
	echo '輸入值', $postcode, '符合郵遞區號的格式。';
} else {
	echo $postcode, '不符合郵遞區號的格式。';
}
?>
<?php require '../footer.php'; ?>
