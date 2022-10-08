<html>
<head><meta charset="utf-8">
<script>
function confirmDelete(username) { // ฟังก์ชนจะถูกเรียกถ้าผู้ใช ั คลิกที่ ้ link ลบ
var ans = confirm("ต้องการลบ username" + username); // แสดงกล่องถามผู้ใช ้
if (ans==true) 
document.location = "delete.php?username=" + username; 
}
</script>
</head>
<body>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $pdo->prepare("SELECT * FROM member");
$stmt->execute();
?>
<?php while ($row = $stmt->fetch()) 
{ ?>
        user name:  <?=$row ["username"]?><br>
        ชื่อสมาชิก: <?=$row ["name"]?><br>
        ที่อยู่: <?=$row ["address"]?><br>
        อีเมล์: <?=$row ["email"]?><br>
        <img src='../member_photo/<?=$row["username"]?>.jpg'width='100'><br>
        <?php echo "<a href='#' onclick=confirmDelete('".$row ["username"]."')>ลบ</a>";?>
<?php echo "<hr>";?>
<?php } ?>
</body>
</html>