<?php require '../header.php'; ?>
<?php
$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8', 
	'staff', 'password');
foreach ($pdo->query('select * from product WHERE name = %"果"') as $row) {
	echo "<p>$row[id]:$row[name]:$row[price]</p>";
}
foreach ($pdo->query('select * from product WHERE name = %"果"') as $row) {
	echo "<p>$row[id]:$row[name]:$row[price]</p>";
}

$name = "John";
echo "Hello, $name!"; // 輸出：Hello, John!
?>
<?php require '../footer.php'; ?>
