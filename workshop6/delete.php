<?php
$pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $pdo->prepare("DELETE FROM member WHERE username=?");
$stmt->bindParam(1, $_GET["username"]);
if ($stmt->execute()) // เริ่มลบข้อมูล
header("location: workshop6.php"); 
?>