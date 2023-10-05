<?php include "./connector/connect.php" ?>

<html>
    <head><meta charset="utf-8"></head>
    <?php
        $stmt = $pdo->prepare("SELECT * FROM member WHERE username LIKE ?");
            if(!empty($_GET)){
                $value = '%' .$_GET["username"]. '%';
            }
            $stmt->bindParam(1,$value);
            $stmt->execute();
            $row = $stmt->fetch()
    ?>

        <div style="display:flex">
            <div><img src="./img/member_photo/<?=$row["id"]?>.jpg" width="200"><br></div>
                <div style="padding: 15px;">
                ชื่อสมาชิก: <?=$row["name"]?><br>
                ที่อยู่: <?=$row["address"]?><br>
                เบอร์โทรศัพท์: <?=$row["mobile"]?><br>
                Email: <?=$row["email"]?><br>

            </div>
        </div>
        
</html>  
    