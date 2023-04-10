<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Thời khoá biểu </title>
</head>

<?php 

    if(isset($_GET["btn_submit"]))
    {
        $da =$_GET["date_TKB"];
    }
    include("../Class/xl_tap_tin.php");
    include("../Class/xl_TKB.php");

    $path = "../Tuan6/TKB.txt";

    $str = Doc_Tap_Tin($path);

    $arr = Tach_chuoi_thanh_mang("/*",$str);

    $arr = array_slice($arr,1);
    $arrTKB = array();

    foreach($arr as $row)
    {
        $r = Tach_chuoi_thanh_mang("|",$row);
        $thu = $r[0];
        $ngay = $r[1];
        $tiet = $r[2];
        $gio = $r[3];
        $mon = $r[4];
        $phong = $r[5];
        $nhomlop = $r[6];
    }
?>


<body>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>
