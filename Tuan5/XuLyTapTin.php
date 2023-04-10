<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Bài : </title>
</head>

<body>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài : </title>
    <style>
        .img {
            float: left;
            width: 120px;
            height: 120px;
            margin: 10px;
        }
    </style>
</head>
<?php
include("../Class/xl_tap_tin.php");
include("../Class/xl_TinTuc.php");

$path = "../Tuan5/Tin_tuc.txt";

$str = Doc_Tap_Tin($path);
$arr = Tach_chuoi_thanh_mang("/*", $str);

$arr = array_slice($arr, 1);

$arrTin = array();
foreach ($arr as $row) {
    # code...
    $r = Tach_chuoi_thanh_mang("|", $row);
    $matin = $r[0];
    $tieude = $r[1];
    $noidung = $r[2];
    $hinh = $r[3];
    $obj = new Tin_tuc($matin, $tieude, $noidung, $hinh);
    // $obj->ma_tin = $matin;
    // $obj->tieu_de = $tieude;
    // $obj->noi_dung =$noidung;
    // $obj->hinh=$hinh;
    $arrTin[] = $obj;
}

?>

<body>
    <form name="fi" action="Tuan5/XuLyTapTin.php" method="post" enctype="multipart/form-data">
        <h1>TIN TỨC</h1>
        <?php
        $_GET["id"] == null ? $id = 0 : $id = $_GET["id"];
        if ($id == 0) {
            foreach ($arrTin as $tin) {
        ?>
                <div class="card">
                    <div class="card-body">
                        <img class="img" src="../Tuan5/images/<?php echo $tin->hinh ?>" />
                        <div class="card-title " style="color:#dc3545">
                            <h3><?php echo $tin->tieu_de ?></h3>
                        </div>
                        <div class="card-text">
                            <span id="nd"><?php echo substr($tin->noi_dung, 0, 300) ?></span>
                            <a href="XuLyTapTin.php?id=<?php echo $tin->ma_tin ?>">[Xem chi tiết]</a>
                        </div>
                    </div>
                </div>
            <?php

            }
        } else {
            foreach ($arrTin as $tin) {
            ?>
                <div class="card">
                    <div class="card-body">
                        <img class="img" src="../Tuan5/images/<?php echo $tin->hinh ?>" />
                        <div class="card-title " style="color:#dc3545">
                            <h3><?php echo $tin->tieu_de ?></h3>
                        </div>
                        <?php
                        if ($tin->ma_tin != $id) {
                        ?>
                            <div class="card-text">
                                <?php echo substr($tin->noi_dung, 0, 300) ?>
                                <a href="XuLyTapTin.php?id=<?php echo $tin->ma_tin ?>">[Xem chi tiết]</a>
                            <?php

                        } else {
                            ?>
                                <?php echo $tin->noi_dung ?>
                            <?php
                        }
                            ?> 
                            </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>

    </form>
</body>

</html>