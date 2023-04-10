<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>bai6</title>
</head>
<?php 
    $ChuoiBD = $_POST["txt_ChuoiBD"];
    $ChuoiGoc = $_POST["txt_ChuoiGoc"];
    $ChuoiTT = $_POST["txt_ChuoiTT"];
    $KQ = "";
    if(empty($ChuoiBD) || empty($ChuoiGoc) || empty($ChuoiTT))
    {
        $KQ = "Vui lòng nhập vào tất cả!";
    }
    else
    {
        $KQ =  str_replace($ChuoiGoc,$ChuoiTT,$ChuoiBD);
    }
?>
<body>
    <form name="F_ThayChuoi" method="post" action="BAI6.PHP">
        <div class="container bg-warning" >
            <div class="row bg-danger">Thay thế chuỗi! </div>
            <div class="row">
                <div class="col-5">Nhập chuỗi</div>
                <div class="col-7"> <input name="txt_ChuoiBD" type="text" > </div>
            </div>
            <div class="row">
                <div class="col-5">Nhập chuỗi gốc</div>
                <div class="col-7"> <input name="txt_ChuoiGoc" type="text" > </div>
            </div>
            <div class="row">
                <div class="col-5">Nhập chuỗi thay thế</div>
                <div class="col-7"> <input name="txt_ChuoiTT" type="text" > </div>
            </div>
            <div class="row col-12"> <input name="submit" type="submit" value="Thay thế"> </div>
            <div class="row">
                <div class="col-5">Kết quả</div>
                <div class="col-7"> <?php echo $KQ ?> </div>
            </div>
        </div>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>