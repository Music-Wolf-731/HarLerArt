<?php require '../header.php'; ?>
<?php
if (is_uploaded_file($_FILES['file']['tmp_name'])) {
	if (!file_exists('upload')) {
		mkdir('upload');
	}
	$file='upload/'.basename($_FILES['file']['name']);
	if (move_uploaded_file($_FILES['file']['tmp_name'], $file)) {
		echo $file, '上傳成功。';
		echo '<p><img src="', $file, '"></p>';
	} else {
		echo '上傳失敗。';
	}
} else {
	echo '請選擇檔案。';
}
?>
<?php require '../footer.php'; ?>
