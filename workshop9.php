<html>
<head><meta charset="utf-8">
</head>
<body>
<?php include "connect.php" ?>
<?php
$stmt = $pdo->prepare("SELECT * FROM member");
$stmt->execute();
?>
<?php while ($row = $stmt->fetch()) 
{ ?>
        user name:  <?=$row ["username"]?><br>
        ชื่อสมาชิก: <?=$row ["name"]?><br>
        ที่อยู่: <?=$row ["address"]?><br>
        อีเมล์: <?=$row ["email"]?><br>
        <img src='member_photo/<?=$row["username"]?>.jpg'width='100'><br>
        <?php echo "<a href='editform.php?username=" . $row ["username"] . "'>แก้ไข</a>";?>
<?php echo "<hr>";?>
<?php } ?>
</body>
</html>