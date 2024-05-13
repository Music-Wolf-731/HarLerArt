<?php require '../header.php'; ?>
<?php
switch ($_REQUEST['meal']) {
case '日式套餐':
	echo '烤魚、燉菜、味噌湯、白飯、水果';
	break;
case '西式套餐':
	echo '果汁、水波蛋、薯餅、麵包、咖啡';
	break;
case '中式套餐':
	echo '春捲、煎餃、蛋花湯、炒飯、杏仁豆腐';
	break;
}
echo '將稍候送達';
?>
<?php require '../footer.php'; ?>
