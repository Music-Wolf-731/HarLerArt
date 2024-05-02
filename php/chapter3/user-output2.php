<?php require '../header.php'; ?>
<?php
if (isset($_REQUEST['user'])) {
	echo '午安，', $_REQUEST['user'], '您好。';
}
?>
<?php require '../footer.php'; ?>
