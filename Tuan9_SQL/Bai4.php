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
    $pdo = new PDO ("mysql:host=localhost;dbname=ql_nha_hang","root");
    $pdo->query("set names utf8");

    $sql = "SELECT l.ma_loai, l.ten_loai, l.mo_ta FROM loai_mon_an l";
    $loai_mon  =$pdo->query($sql);
    echo "Số mẫu tin trong bảng loai_mon_an là : ".$loai_mon->rowCount();
    $pdo = null;
?>

<body>
   <div class="container-sm ">
   <?php 
if ($loai_mon->rowCount() > 0) {
    ?>
      <h1>THÔNG TIN MÓN ĂN</h1>
    <table class="table table-striped table-bordered">
        <tr>
            <td>
                Mã Loại
            </td>
            
            <td>
                Tên Loại
            </td>
            
            <td>
                Mô Tả
            </td>
        </tr>
        <?php 
            foreach ($loai_mon as $loai)
            {
                ?>
                <tr>
                    <td><?php echo $loai[0] ;?></td>
                    <td><?php echo $loai[1] ;?></td>
                    <td><?php echo $loai[2] ;?></td>
                </tr>
                <?php
            }
        ?>

    </table>




    <?php
}?>    

   </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>
