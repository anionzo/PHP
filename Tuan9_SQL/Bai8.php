<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bài 10</title>

    <!--Bootstrap 4-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
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

session_start();
if (isset($_SESSION["cart_items"]))
    $arr = $_SESSION["cart_items"];


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



$sqlSearch = "";
if (isset($_GET['txt_Search'])) {
    $Ten = $_GET['txt_Search'];
    $sqlSearch = "Select * from mon_an m where ten_mon like '%" . $Ten . "%' ";

    $KQ_Searh = $pdo->query($sqlSearch);
}

if (isset($_GET["mm"])) {
    $mamon = $_GET["mm"];
    $monAnMa = $pdo->query("select * from mon_an where ma_mon = " . $mamon);
} else {
    $monAnMa = null;
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
                            <a href="Bai8.php" style="color:#fff;">
                                <i class="bi bi-cart4" style="font-size: 30px; color:black; display: flex; margin-left: 8px;"></i>
                                <span style="position: absolute;top: 20%; right: 2%;">
                                    <?php
                                    echo (isset($_SESSION["cart_items"]) && count($_SESSION["cart_items"])) > 0 ? count($_SESSION["cart_items"]) : "";
                                    ?>
                                </span>
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
                <!--  -->
                <?PHP
                if (isset($_GET['tl']) == true) {
                    echo '<h2 class="row">' . $_GET['tl'] . '</h2>';
                    echo $thongBao;
                }
                if (isset($_GET['gt']) == true && isset($_GET['gc']) == true) {
                    echo '<h2 class="row">' . "Gía từ: : " . $_GET['gt'] . "VNĐ  đến" . $_GET['gc'] . "VNĐ" . '</h2>';
                    echo $thongBao;
                }
                if (isset($_GET['txt_Search']) == true) {
                    echo '<h2 class="row"> Kết quả tìm kiếm: ' . $_GET['txt_Search'] . '</h2>';
                    echo $thongBao;
                }
                ?>
                <?php
                if ($monAnMa != null) {
                ?>
                    <div style="text-transform: uppercase; text-align: center; color:#930707;">
                        <h2>thông tin chi tiết món ăn</h2>
                    </div>
                <?php
                }
                ?>
                <div class="row">
                    <?php
                    if (isset($_GET['ml']) == true) {
                        foreach ($mon_an as $loai) {
                    ?>
                            <div class="col-4">
                                <div class="border">

                                    <img style="max-width: 200px; max-height:100px; padding:5px" src="../Tuan9_SQL/DuLieuBai5/image_MonAn/<?php echo $loai["hinh"] ?>" />
                                    <p>
                                        <?php echo "Món: " . $loai["ten_mon"] ?></br>
                                        <?php echo "Giá:" . $loai["don_gia"] ?>
                                    </p>
                                    <a href="Bai8.php?mm=<?php echo $loai[0]; ?>">Xem chi tiết</a>
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

                                    <img style="max-width: 200px; max-height:100px; padding:5px" src="../Tuan9_SQL/DuLieuBai5/image_MonAn/<?php echo $loai["hinh"] ?>" />
                                    <p>
                                        <?php echo "Món: " . $loai["ten_mon"] ?></br>
                                        <?php echo "Giá:" . $loai["don_gia"] ?>
                                    </p>
                                    <a href="Bai8.php?mm=<?php echo $loai[0]; ?>">Xem chi tiết</a>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                    <?php
                    if (isset($_GET['txt_Search']) == true) {
                        foreach ($KQ_Searh as $loai) {
                    ?>
                            <div class="col-4">
                                <div class=" p-0 border">

                                    <img style="max-width: 200px; max-height:100px; padding:5px" src="../Tuan9_SQL/DuLieuBai5/image_MonAn/<?php echo $loai["hinh"] ?>" />
                                    <p>
                                        <?php echo "Món: " . $loai["ten_mon"] ?></br>
                                        <?php echo "Giá:" . $loai["don_gia"] ?>
                                    </p>
                                    <a href="Bai8.php?mm=<?php echo $loai[0]; ?>">Xem chi tiết</a>
                                </div>

                            </div>
                    <?php
                        }
                    }
                    ?>
                    <!--  -->
                    <?php
                    if (isset($_GET['mm'])) {
                        if ($monAnMa->rowCount() > 0) {
                            foreach ($monAnMa as $mon) {
                    ?>
                                <div class="col-12" style="margin-bottom: 10px;">
                                    <div style="border:1px solid #999999; margin-left: 5px; margin-right: 5px; text-align: left; display:flex;">
                                        <div style="width:60%; height: 400px;"><img src="../Tuan9_SQL/DuLieuBai5/image_MonAn/<?php echo $mon[8]; ?>" style="width:100%; height: 100%;" /></div>
                                        <div style="margin:10px;">
                                            <div style="font-weight: bold;">Món: <?php echo $mon[2]; ?></div>
                                            <div style="margin: 20px 0;">Giá: <?php echo number_format(floatval($mon[5]), 0, ',', '.'); ?> VNĐ/<?php echo $mon[10]; ?></div>
                                            <div style="margin: 20px 0;">Giá KM: <?php echo $mon[6]; ?> - VNĐ</div>
                                            <div style="margin: 20px 0;">Khuyến mãi: <span style="color:red;"><?php echo $mon[7]; ?></span></div>
                                            <form action="ThemVaoGioHang.php" method="get" style="display:flex; align-items: center; justify-content: space-around;">
                                                <input name="maMon" value="<?php echo $mon[0]; ?>" style="display:none" />
                                                <input type="number" min="1" style="width: 40%;" value="1" name="amount" />
                                                <button class="btn btn-primary" style="text-transform: uppercase; width:40%;">Cho vào giỏ</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                    <?php
                            }
                        }
                    }

                    ?>
                    <!--  -->
                </div>
                <!--  -->
                <!-- Xet Gio hang -->

                <?php
                if (count($arr) == 0) {
                ?>
                    <div style="text-transform: uppercase;">
                        <h2>giỏ hàng đang rỗng</h2>
                    </div>
                <?php
                } else {
                ?>
                    <div style="text-transform: uppercase;">
                        <h2>thông tin giỏ hàng của bạn</h2>
                    </div>
                <?php
                }
                ?>
                <div class="row">
                    <?php
                    if (count($arr) > 0) {
                    ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $amountItem = 0;
                                $totalAll = 0;
                                for ($i = 0; $i < count($arr); $i++) {
                                    if (isset($arr[$i])) {
                                        $amountItem += $arr[$i]["so_luong"];
                                        $totalAll += $arr[$i]["so_luong"] * $arr[$i]["gia"];
                                ?>
                                        <tr>
                                            <td>
                                                <div style="display:flex; align-items: center;">
                                                    <img style="width:50px; object-fit:cover;" src="image_MonAn/<?php echo $arr[$i]["hinh_anh"]; ?>" />
                                                    <span style="margin-left:8px;"><?php echo $arr[$i]["ten_mon"] ?></span>
                                                    <a href="XoaMotMonKhoiGioHang.php?id=<?php echo $arr[$i]["ma_mon"]; ?>" style="color:red; margin-left: 10px;" class="btn"><i class="bi bi-trash"></i></a>
                                                </div>
                                            </td>
                                            <td>
                                                <?php echo number_format(floatval($arr[$i]["gia"]), 0, ',', '.'); ?> VNĐ
                                            </td>
                                            <td>
                                                <input type="number" min="1" value="<?php echo $arr[$i]["so_luong"]; ?>" />
                                            </td>
                                            <td style="text-align: right;">
                                                <?php echo number_format(floatval($arr[$i]["so_luong"] * $arr[$i]["gia"]), 0, ',', '.'); ?>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                                <tr>
                                    <td colspan="2">
                                        <a href="ClearCart.php" class="btn btn-danger">Clear Cart</a>
                                    </td>
                                    <td style="font-weight: bold;"><?php echo $amountItem; ?></td>
                                    <td style="font-weight: bold; text-align: right;"><?php echo number_format(floatval($totalAll), 0, ',', '.'); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    <?php
                    }
                    ?>
                </div>
                <div style="text-align: right;">
                    <button class="btn btn-primary">Checkout</button>
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