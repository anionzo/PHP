<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bài 8</title>

    <!--Bootstrap 4-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js"></script>
    <style>
        .dd_mon {
            width: 32%;
            border: 1px solid grey;
            float: left;
            margin: 5px;
        }
    </style>

</head>

<?php
$pdo = new PDO("mysql:host=localhost;dbname=ql_nha_hang", "root", "");
$pdo->query("set names utf8");

$sql = "SELECT * FROM loai_mon_an l";

$loai_mon  = $pdo->query($sql);
$sqlma = "";
$thongBao = "";
if (isset($_GET['ml'])) {

    if ($_GET["ml"] == null)
        $ml = 0;
    else
        $ml = $_GET["ml"];

    if ($ml == 0)
        $sqlma = "SELECT * FROM mon_an m";
    else 
    if ($_GET["ml"] == "all")
        $sqlma = "SELECT * FROM mon_an m";
    else
        $sqlma = "SELECT * FROM mon_an m WHERE m.ma_loai =" . $ml;

    $mon_an = $pdo->query($sqlma);
    $thongBao = "Số mòn ăn là: " . $mon_an->rowCount();
} else  $sqlma = "SELECT * FROM mon_an m";


$sqlGia = "";
if (isset($_GET['gt']) && isset($_GET['gc'])) {
    $gt = $_GET["gt"];
    $gc = $_GET["gc"];
    if ($gt == 0 && $gc == 0)
        $sqlGia = "SELECT * FROM mon_an m";
    else
        $sqlGia = " SELECT * FROM mon_an m WHERE m.don_gia > " . $gt . "  && m.don_gia <=" . $gc;
    $monAn = $pdo->query($sqlGia);
    $thongBao = "Số mòn ăn là: " . $monAn->rowCount();
} else  $monAn = "SELECT * FROM mon_an m";



$sqlSearch ="";
if(isset($_GET['txt_Search']))
{
    $Ten = $_GET['txt_Search'];
    $sqlSearch = "Select * from mon_an m where ten_mon like '%".$Ten."%' ";
    
    $KQ_Searh = $pdo->query($sqlSearch);
}
$pdo = null;
?>

<body>
 
    <div id="Wrapper" class="container">
        <br />
        <div id="header" class="row bg-light">
            <div class="col-4">
                <br>
                <img src="../Tuan9_SQL/DuLieuBai5/logo.jpg" width="100%" height="70%" />
            </div>
            <div class="col-4">
                <b>Hà Nội:</b><br />
                Điện thoại: 024.73007.008 - 093.4647.172<br />
                Địa chỉ: Số 63/445 Lạc Long Quân, Tây Hồ, Hà Nội<br />
                Email: hn@ganhxua.com
            </div>
            <div class="col-4">
                <b>TP.Hồ Chí Minh:</b><br />
                Điện thoại: 028.73007.008 - 094.7723.444<br />
                Địa chỉ: 189 XVN Tĩnh, P.17, Q. Bình Thạnh<br />
                Email: hcm@ghanhxua.com
            </div>
        </div>
        <form action="" method="get">
        <div id="menu" style="background-color:yellowgreen;">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="../Tuan9_SQL/DuLieuBai5/home.jpg" width="70" class="rounded" /></a>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                            <li class="nav-item nav-link active">
                                <a class="nav-link" href="#">Trang Chủ </a>
                            </li>
                            <li class="nav-item nav-link active">
                                <a class="nav-link" href="#">Đăng ký </a>
                            </li>
                            <li class="nav-item nav-link active">
                                <a class="nav-link" href="#">Đăng Nhập </a>
                            </li>
                            <li class="nav-item nav-link active">
                                <a class="nav-link " href="#">Liên hệ </a>
                            </li>
                        </ul>
                        <input class="form-control mr-2 w-25" type="text" placeholder="Search" aria-label="Search" name="txt_Search">
                        <button class="btn btn-outline-dark">Search</button>   
                    </div>
                </div>
            </nav>
        </div>
        </form>
        <br />
        <div id="Content" class="row">
            <div class="col-3">
                <ul class="list-group list-group-flush text-left bg-light">
                    <li class="list-group-item" style="background-color:yellowgreen"><a href="#" style="text-transform:uppercase; text-decoration:none; color:white; font-weight:bold;">Loại
                            món</a></li>

                    <li class="list-group-item bg-light"><a href="#" style="text-transform:uppercase; text-decoration:none;"></a></li>

                    <?php
                    foreach ($loai_mon as $loai) {
                    ?>
                        <li class="list-group-item bg-light"><a href="Bai8.php?ml=<?php echo $loai[0]; ?> &tl= <?php echo $loai[1]; ?>" style="text-transform:uppercase; text-decoration:none;"> <?php echo $loai[2]; ?></a></li>
                    <?php
                    }
                    ?>
                    <li class="list-group-item bg-light"><a href="Bai8.php?ml=all" style="text-transform:uppercase; text-decoration:none;">SHOW ALL</a></li>

                </ul>
                <ul class="list-group list-group-flush text-left bg-light">
                    <li class="list-group-item" style="background-color:yellowgreen;">
                        <a href="#" style="text-transform:uppercase; text-decoration:none; color:white; font-weight:bold;">Chọn
                            theo giá</a>
                    </li>
                    <li class="list-group-item bg-light"><a href="Bai8.php?gt=0 &gc=15000">15,000đ trở xuống</a></li>
                    <li class="list-group-item bg-light"><a href="Bai8.php?gt=20000 &gc=30000">20,000đ - 30,000đ</a>
                    </li>
                    <li class="list-group-item bg-light"><a href="Bai8.php?gt=31000 &gc=50000">31,000đ - 50,000đ</a>
                    </li>
                    <li class="list-group-item bg-light"><a href="Bai8.php?gt=51000 &gc=100000">51,000đ - 100,000đ</a>
                    </li>
                    <li class="list-group-item bg-light"><a href="Bai8.php?gt=100001 &gc=1000000">Trên 100,000đ</a>
                    </li>
                </ul>
            </div>
            <div class="col-9">
                <!--  
                
            -->
                <?PHP
                if (isset($_GET['tl']) == true) {
                    echo '<h2 class="row">' . $_GET['tl'] . '</h2>';
                }
                if (isset($_GET['gt']) == true && isset($_GET['gc']) == true) {
                    echo '<h2 class="row">' . "Gía từ: : " . $_GET['gt'] . "VNĐ  đến" . $_GET['gc'] . "VNĐ" . '</h2>';
                }
                if (isset($_GET['txt_Search']) == true){
                    echo '<h2 class="row"> Kết quả tìm kiếm: ' . $_GET['txt_Search'] . '</h2>';
                }
                ?>
                <div class="row">
                    <?php
                    if (isset($_GET['ml']) == true) {
                        foreach ($mon_an as $loai) {
                    ?>
                            <div class="col-4">
                                <div class="border">
                                    <a>
                                        <img style="max-width: 200px; max-height:100px; padding:5px" src="../Tuan9_SQL/DuLieuBai5/image_MonAn/<?php echo $loai["hinh"] ?>" />
                                        <p>
                                            <?php echo "Món: " . $loai["ten_mon"] ?></br>
                                            <?php echo "Giá:" . $loai["don_gia"] ?>
                                        </p>
                                    </a>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                    <?php

                    if (isset($_GET['gt']) == true && isset($_GET['gc']) == true) {
                        foreach ($monAn as $loai) {
                    ?>
                            <div class="col-4">
                                <div class=" p-0 border">
                                    <a>
                                        <img style="max-width: 200px; max-height:100px; padding:5px" src="../Tuan9_SQL/DuLieuBai5/image_MonAn/<?php echo $loai["hinh"] ?>" />
                                        <p>
                                            <?php echo "Món: " . $loai["ten_mon"] ?></br>
                                            <?php echo "Giá:" . $loai["don_gia"] ?>
                                        </p>
                                    </a>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    echo $thongBao;
                    ?>
                    <?php
                    if (isset($_GET['txt_Search']) == true) {
                        foreach ($KQ_Searh as $loai) {
                    ?>
                            <div class="col-4">
                                <div class=" p-0 border">
                                    <a>
                                        <img style="max-width: 200px; max-height:100px; padding:5px" src="../Tuan9_SQL/DuLieuBai5/image_MonAn/<?php echo $loai["hinh"] ?>" />
                                        <p>
                                            <?php echo "Món: " . $loai["ten_mon"] ?></br>
                                            <?php echo "Giá:" . $loai["don_gia"] ?>
                                        </p>
                                    </a>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    echo $thongBao;
                    ?>

                </div>

            </div>
        </div>

    </div>
    <div id="Footer" class="row" style="background-color:yellowgreen;">
        <div class="col text-light mt-3 mb-3" style="text-align:center;">
            Liên hệ: Khoa Công nghệ Thông tin - Trường Đại học Công nghiệp Thực phẩm Tp.HCM Link: fanpage và link:
            youtube <br />
            Địa chỉ: 140 Lê Trọng Tấn, Phường Tây Thạnh, Quận Tân Phú, Tp.HCM. ĐT: (028).38161673 (ext 136) Mail:
            kcntt@hufi.edu.vn
        </div>
    </div>
    </div>
</body>

</html>