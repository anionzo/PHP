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
if(isset($_POST["btnSumit"])){
    $ma_khach_hang= null;
    $ten_khach_hang= $_POST["txtName"];
    $email = $_POST["txtEmail"];
    $dia_chi = $_POST["txtAddress"];
    $dien_thoai= $_POST["txtPhoneNumber"];
    $hinh = $_FILES["image"]["error"] == 0 ? $_FILES["image"]["name"] :"";
    $ghi_chu = $_POST["txtNote"];

    $sql = "SELECT * FROM khach_hang WHERE ten_khach_hang = '$ten_khach_hang'";
    $sta = $pdo->prepare($sql);
    $sta->execute();
    $tb = "Không có TB";
if ($sta->rowCount() > 0) {
    $tb = "Tên này đã có trong cơ sở dữ liệu";
}
else{
        $sql = "INSERT INTO khach_hang values(?,?,?,?,?,?,?)";

        $sth = $pdo->prepare($sql);
        $kq = $sth->execute(array($ma_khach_hang, $ten_khach_hang, $email, $dia_chi, $dien_thoai, $hinh, $ghi_chu));
        
    }
    if($kq)
    {
        $tb = "Thêm khách hàng thành công!";

        if($hinh != "")
        {
            move_uploaded_file($_FILES["image"]["tmp_name"], "image/$hinh");
        }
        else {
            $tb = "Thêm Lỗi, xem lại!";
        }
    }   

}
?>

<body>
    <?php
    include 'head.php';
    ?>

    <!-- Body -->
    <!--  -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img  src="image/Koala.jpg"  width="300px" />
                <img  src="image/Koala.jpg" width="300px" />
            </div>
           <form method="post" action="CreateCusome.php" enctype="multipart/form-data">
           <div class="col-lg-8">
                <div class="panel-heading">
                    <h3 class="panel-title">Bài Khách Hàng</h3>
                </div>
                <label for="inputText" class="control-label">Tên Khách Hàng</label>
                <input type="text" class="form-control" id="idName" name="txtName" placeholder="Nhập tên khách hàng">
                <label for="inputText" class="control-label">Email</label>
                <input type="text" class="form-control" id="idEmail" name="txtEmail" placeholder="Nhập email">
                
                <label for="inputText" class="control-label">Địa chỉ</label>
                <input type="text" class="form-control" id="idDiaChi" name="txtAddress" placeholder="Nhập địa chỉ">

                <label for="inputText" class="control-label">Điện thoại</label>
                <input type="text" class="form-control" id="idPhone" name ="txtPhoneNumber" placeholder="Nhập điện thoại">

                <label for="inputText" class="control-label">Hình</label>
                <input type="file" class="form-control" id="idHinh" name="image" placeholder="Nhập hình">

                <label for="inputText" class="control-label">Ghi chú</label>
                <input type="text" class="form-control" id="idNote" name="txtNote" placeholder="Nhập ghi chú">

                <button onclick="kiemTra();" class="btn btn-primary" name="btnSumit" type="submit">Create</button>
                <a href="CreateCusome.php?ma=<?php echo $kh["ma_khach_hang"]; ?>" class="btn btn-danger" role="button" aria-pressed="true">Show Cutommer</a>
                <?php 
                    if($tb != NULL)
                    {
                        echo $tb;
                    }
                    else{
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