<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Danh sách món ăn! </title>
</head>

<?php
include("../Class/Connecton.php");
$sql = "SELECT m.ma_mon, m.ten_mon, m.noi_dung_tom_tat, m.don_gia , m.hinh FROM mon_an m ";
$sta = $pdo->prepare($sql);
$sta->execute();
if ($sta->rowCount() > 0) {
    $mon_an = $sta->fetchAll(PDO::FETCH_OBJ);
}

?>


<body style="display: flex; justify-content: center;align-items: center;">
    <div class="row w-50"   >
        <h1 >Danh Sách Món Ăn</h1>
       <?php
        foreach ($mon_an as $mon) {
        ?>
            <div class="col-4 " style=" text-align: center;" >
                <?php if($mon->ma_mon % 2 == 0) 
                {
                        ?>
                        <div class="border bg-warning">
                    <img src="../Tuan9_SQL/DuLieuBai5/image_MonAn/<?php echo $mon->hinh ?> " />
                        <h3> <?php echo $mon->ten_mon ?> </h3>
                        <p> <?php echo $mon->noi_dung_tom_tat ?> </p>
                        <p> Đơn giá:  <?php echo $mon->don_gia ?> </p>
                    </div>
                    </br>
                        <?php 
                }
                else
                {
                   ?>
                               <div class="border">
                        <img src="../Tuan9_SQL/DuLieuBai5/image_MonAn/<?php echo $mon->hinh ?> " />
                            <h3> <?php echo $mon->ten_mon ?> </h3>
                            <p> <?php echo $mon->noi_dung_tom_tat ?> </p>
                            <p> Đơn giá:  <?php echo $mon->don_gia ?> </p>
                        </div>
                        </br>
                   <?php
                }
                ?>
            </div>
        <?php
        }
        ?>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>