<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap 4-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link  rel="stylesheet"  href="style.css">
    <title>Bài Khách Hàng </title>
</head>
<?php
    include("../Class/Connecton.php");
    $sql = "SELECT m.ma_khach_hang, m.ten_khach_hang, m.email, m.dia_chi, m.dien_thoai, m.hinh FROM khach_hang m ";
    $sta = $pdo->prepare($sql);
    $sta->execute();
    if ($sta->rowCount() > 0) {
        $khach_hang = $sta->fetchAll(PDO::FETCH_ASSOC);
    }
?>

<body>
    <?php
    include 'head.php';
    ?>

    <!-- Body -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <h3>Trang quản lý khách hàng</h3>
               <div class = "btn btn-primary"><a href="CreateCusome.php"> ADD New </a></div>
               <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã KH</th>
                        <th scope="col">Tên KH</th>
                        <th scope="col">Email</th>
                        <th scope="col">Địa Chỉ</th>
                        <th scope="col">Điện Thoại</th>
                        <th scope="col">Hình</th>
                        <th scope="col">CRUD</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($sta->rowCount() > 0) {
                        foreach ($khach_hang as $kh) {
                    ?>
                            <tr>
                                <th scope="row"><?php echo $kh["ma_khach_hang"] ?> </th>
                                <td><?php echo $kh["ten_khach_hang"] ?></td>
                                <td><?php echo $kh["email"] ?></td>
                                <td><?php echo $kh["dia_chi"] ?></td>
                                <td><?php echo $kh["dien_thoai"] ?></td>
                                <td>
                                    <img style="width:30px"  src="../Tuan11/image/<?php echo $kh["hinh"] ?>" />
                                </td>
                                <td>
                                    <a href="CreateCusome.php?ma=<?php echo $kh["ma_khach_hang"]; ?>" class="btn btn-primary" role="button" aria-pressed="true">Update</a>
                                    <a href="CreateCusome.php?ma=<?php echo $kh["ma_khach_hang"]; ?>" class="btn btn-danger" role="button" aria-pressed="true">Delete</a>
                                </td>
                            </tr>
                    <?php
                        }
                    }?>
                </tbody>
            </table>
            </div>
        </div>
    </div>   
        <!--  -->

        <?php
        include 'footer.php';
        ?>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js"></script>

</html>