<?php include "../connector/connect.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="display:flex">
        <?php 
            $stmt = $pdo->prepare("SELECT * FROM product");
            $stmt->execute();
        ?>
        <?php while($row = $stmt->fetch()):?>
            <div style="padding: 15px;text-align:center">
                <img src='../img/product_photo/<?=$row['pid']?>.jpg' width='100'><br>
                <?=$row["pname"]?><br>
                <?=$row["price"]?> บาท
            </div>
        <?php endwhile; ?> 
    </div>   
</body>
</html>