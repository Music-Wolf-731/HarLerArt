<?php require '../header.php'; ?>
<?php
echo '<p>您選擇的問題是：「', $_REQUEST['question'], '」</p>';
echo '<p>你輸入的答案是：「', $_REQUEST['answer'], '」</p>';
?>
<?php require '../footer.php'; ?>
