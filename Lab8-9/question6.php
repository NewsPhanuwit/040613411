<?php include "./connector/connect.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
            $stmt = $pdo ->prepare("DELETE FROM member WHERE username=?");
            $stmt -> bindParam(1,$_GET["username"]);
            if($stmt ->execute()) // เริ่มลบ
            header("location:./question3.php"); //กลับไปแสดงหน้าข้อมูล
    ?>
</body>
</html>