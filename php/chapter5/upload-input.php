<?php require '../header.php'; ?>
<p>請選擇要上傳的檔案。</p>
<form action="upload-output.php" method="post" enctype="multipart/form-data">
<p><input type="file" name="file"></p>
<p><input type="submit" value="開始上傳"></p>
</form>
<?php require '../footer.php'; ?>
