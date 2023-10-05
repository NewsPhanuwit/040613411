<?php include "../connector/connect.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $stmt = $pdo->prepare("SELECT * FROM product");
        $stmt ->execute();
        while ($row = $stmt->fetch()){
    ?>
        รหัสสินค้า: <?=$row ["pid"]?> <br>
        ชื่อสินค้า: <?=$row ["pname"]?> <br>
        รายละเอียดสินค้า: <?=$row ["pdetail"]?> <br>
        ราคา: <?=$row ["price"]?> บาท <br><br>
    <?php } ?>
</body>
</html>