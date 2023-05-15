<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap 4-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Bài Khách Hàng </title>
</head>
<?php
include("../Class/Connecton.php");

$sql = "SELECT * FROM khach_hang WHERE ma_khach_hang = {$_GET['ma']}";
$sta = $pdo->prepare($sql);
$sta->execute();
if ($sta->rowCount() > 0) {
    $khach_hang = $sta->fetchAll(PDO::FETCH_ASSOC);
    foreach ($khach_hang as $kh) {

        $ma_khach_hang = $_GET['ma'];
        $t = $kh['ten_khach_hang'];
        $e = $kh['email'];
        $d = $kh['dia_chi'];
        $dt = $kh['dien_thoai'];
        $g = $kh['ghi_chu'];
        $h = $kh['hinh'];

    }
}
if (isset($_POST["btnSumitUp"])) {
    // Kiểm tra biến $_GET['ma']
    if (isset($_GET['ma'])) {
        $ma_khach_hang = $_GET['ma'];
    } else {
        echo "Lỗi: Không tìm thấy mã khách hàng!";
        exit;
    }

    // Lấy giá trị từ form
    $ten_khach_hang = $_POST["txtName"];
    $email = $_POST["txtEmail"];
    $dia_chi = $_POST["txtAddress"];
    $dien_thoai = $_POST["txtPhoneNumber"];
    $ghi_chu = $_POST["txtNote"];
    $hinh = $_FILES["image"]["error"] == 0 ? $_FILES["image"]["name"] : "";

    // Câu lệnh SQL UPDATE
    $sql = "UPDATE khach_hang SET ten_khach_hang = :ten_khach_hang, email = :email, dia_chi = :dia_chi, dien_thoai = :dien_thoai, hinh = :hinh, ghi_chu = :ghi_chu WHERE ma_khach_hang = :ma_khach_hang";
    $sth = $pdo->prepare($sql);
    $kq = $sth->execute(array(
        ':ma_khach_hang' => $ma_khach_hang,
        ':ten_khach_hang' => $ten_khach_hang,
        ':email' => $email,
        ':dia_chi' => $dia_chi,
        ':dien_thoai' => $dien_thoai,
        ':hinh' => $hinh,
        ':ghi_chu' => $ghi_chu
    ));

    // Kiểm tra kết quả thực thi câu lệnh UPDATE
    if ($kq) {
        $tb = "Cập nhật khách hàng thành công!";

        if ($hinh != "") {
            move_uploaded_file($_FILES["image"]["tmp_name"], "image/$hinh");
        } else {
            //$tb = "Lỗi: Không thể cập nhật hình ảnh!";
        }
    } else {
        $tb = "Lỗi: Không thể cập nhật khách hàng!";
    }

    // In thông báo
    echo $tb;
}
?>
    <?php
        include 'head.php';
    ?>

    <!--  -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img src="image/Koala.jpg" width="300px" />
                <img src="image/Koala.jpg" width="300px" />
            </div>
            <form method="post" action="update.php?ma=<?php echo $_GET['ma'] ?>" enctype="multipart/form-data">
                <div class="col-lg-8">
                    <div class="panel-heading">
                        <h3 class="panel-title">Bài Khách Hàng</h3>
                    </div>
                    <label for="inputText" class="control-label">Tên Khách Hàng</label>
                    <input type="text" class="form-control" id="idName" name="txtName" value="<?php echo $t; ?>" placeholder="Nhập tên khách hàng">
                    <label for="inputText" class="control-label">Email</label>
                    <input type="text" class="form-control" id="idEmail" name="txtEmail" value="<?php echo $e; ?>" placeholder="Nhập email">

                    <label for="inputText" class="control-label">Địa chỉ</label>
                    <input type="text" class="form-control" id="idDiaChi" name="txtAddress" value="<?php echo $d; ?>" placeholder="Nhập địa chỉ">

                    <label for="inputText" class="control-label">Điện thoại</label>
                    <input type="text" class="form-control" id="idPhone" name="txtPhoneNumber" value="<?php echo $dt; ?>" placeholder="Nhập điện thoại">

                    <label for="inputText" class="control-label">Hình</label>
                    <input type="file" class="form-control" id="idHinh" name="image" value="<?php echo $h; ?>" placeholder="Nhập hình">

                    <label for="inputText" class="control-label">Ghi chú</label>
                    <input type="text" class="form-control" id="idNote" name= "txtNote" value="<?php echo $g; ?>" placeholder="Nhập ghi chú">

                    <button onclick="kiemTra();" class="btn btn-primary" name="btnSumitUp"   type="submit">UPdate </button>
                    <a href="CreateCusome.php?ma=<?php echo $kh["ma_khach_hang"]; ?>" class="btn btn-danger" role="button" aria-pressed="true">Show Cutommer</a>
                    <?php
                    if (isset($tb)) {
                        echo $tb;
                    } else {
                        echo "";
                    }
                    ?>
                </div>
            </form>
        </div>
    </div>
    </div>


    <?php
    include 'footer.php';
    ?>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js"></script>
<script src="Validator.js"></script>

</html>