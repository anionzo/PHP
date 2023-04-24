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
    $sql = "SELECT m.ma_khach_hang, m.ten_khach_hang, m.email, m.dia_chi, m.dien_thoai, m.hinh FROM khach_hang m ";
    $sta = $pdo->prepare($sql);
    $sta->execute();
    if ($sta->rowCount() > 0) {
        $khach_hang = $sta->fetchAll(PDO::FETCH_ASSOC);
    }
?>


<body>
    <div class="row" style="display: flex; justify-content: center;align-items: center;">
        <h1 style=" text-align: center;">Danh Sách Khách Hàng</h1>

        <div class="col-12 border" style="width:800px;">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã KH</th>
                        <th scope="col">Tên KH</th>
                        <th scope="col">Email</th>
                        <th scope="col">Địa Chỉ</th>
                        <th scope="col">Điện Thoại</th>
                        <th scope="col">Hình</th>
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

                            </tr>

                    <?php
                        }
                    }
                    ?>


                </tbody>
            </table>
        </div>
        </br>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>