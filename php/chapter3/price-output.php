<?php require '../header.php'; ?>
<?php
echo $_REQUEST['price'], '元X';
echo $_REQUEST['count'], '個＝';
echo $_REQUEST['price']*$_REQUEST['count'], '元';
?>
<?php require '../footer.php'; ?>
