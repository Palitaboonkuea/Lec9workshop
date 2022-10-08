<?php include "connect.php" ?>
<?php
$stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
$stmt->bindParam(1, $_GET["username"]); 
$stmt->execute(); 
$row = $stmt->fetch();
?>
<html>
<head><meta charset="utf-8">
<style>
    input{
        margin: 5px;
    }
    form{
        padding: 10px;
    }
</style>
</head>
<body>
<form action="edit-member.php" method="post">
 <h3>username: <?=$row["username"]?> <input type="hidden" name="username" value=<?=$row["username"]?>></h3>
 password: <input type="text" name="password" value=<?=$row["password"]?>><br>
 name: <input type="text" name="name" value=<?=$row["name"]?>><br>
 address : <input type="text" name="address" value=<?=$row["address"]?>><br>
 mobile: <input type="text" name="mobile" value=<?=$row["mobile"]?>><br>
 email: <input type="text" name="email" value=<?=$row["email"]?>><br>
<input type="submit" value="แก้ไขข้อมูล">
</form>
</body>
</html>