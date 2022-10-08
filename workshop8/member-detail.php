<html>
<head><meta charset="utf-8"></head>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
$stmt->bindParam(1, $_GET["username"]);
$stmt->execute();
$row = $stmt->fetch(); 
?>
<div style="padding: 15px">
<h2><?=$row["username"]?></h2>
ชื่อ-นามสกุล : <?=$row["name"]?><br>
ที่อยู่ :  <?=$row["address"]?><br>
เบอร์โทร : <?=$row["mobile"]?><br>
อีเมล : <?=$row["email"]?><br>
</div>
</div>
</body>
</html>

