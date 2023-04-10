<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Bài : </title>
</head>
<?php 
 
    $Mon = $_GET["mon"];
    $Tien = $_GET["mony"];
?>
<body> <!-- lấy giá trị trong [] để bỏ vào thẻ a href -->
    <div class="content">
        <div class = "row">
            <div class="row">
                <div class="col"></div>
                <div class="col bg-info">
                    <div class="row col-12">MeNu</div>
                    <div class="row col-12 bg-light">
                        <a href="bai8.php?mon=Cà phê sữa&mony=12000">Cà phê sữa ............. 12.000đ</a>
                        <a href="bai8.php?mon=Cà phê  đá&mony=10000">Cà phê đá      ............. 10.000đ</a>
                        <a href="bai8.php?mon=Sting dâu&mony=8000">Sting dâu  ............. 8.000đ</a>
                        <a href="bai8.php?mon=Trà đá&mony=2000">Trà đá     ............. 2.000đ</a>
                        <p> Món bạn gọi là: <?php echo $Mon ; ?> </p>
                        <p> Giá là: <?php echo $Tien; ?> </p>

                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>