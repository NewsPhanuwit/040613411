<?php include '../connector/connect.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="text" name="keyword">
        <input type="submit" name="ค้นหา">
    </form>
    <div style="display:flex">
        <?php   
            $stmt = $pdo->prepare("SELECT * FROM product WHERE pname LIKE ?");

            if(!empty($_GET)) // ถ้ามีค่าที่ส่งมาจากฟอร์ม
                $value = '%'.$_GET["keyword"].'%'; //ดึงค่าที่ส่งมากำหนดให้กับตัวแปรเงื่อนไข
            $stmt->bindParam(1,$value); //กำหนดชื่อตัวแปรเงื่อนไขที่จุดที่กำหนด ? ไว้
            $stmt->execute(); //เริ่มค้นหา
        ?>
        <?php while ($row = $stmt->fetch()):?>
            <div style = "padding:15px;text-align:center">
                <img src='../img/product_photo/<?=$row['pid']?>.jpg' width='100'><br>
                <?=$row["pname"]?><br>
                <?=$row["price"]?> บาท
            </div>
            <?php endwhile;?>
    </div>
</body>
</html>