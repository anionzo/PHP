<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Bài: 14B </title>
</head>

<body>
<div class="container" style="width:50%">
      <h2 align="center" style="color:blue; font-weight:bold;">THU THẬP THÔNG TIN NGƯỜI DÙNG</h2>
      <form method="post" action="Bai14b.php" name="main-form">
        <p><input type="text" name="name" value="" placeholder="Your name or Email" class="form-control"> </p>
        <p><input type="number" name="phoneN" value="" placeholder="Phone number" class="form-control"></p>
        <p>
          <textarea rows="10" cols="100" name="feedB" placeholder="Enter your comment" class="form-control">
            
          </textarea>
        </p>
        <p align="center"><input type="submit" name="btn_WriteFile" value="   Write to File   " class="btn btn-primary btn-lg" ></p>
      </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>
<?php 

    $email = $_POST["name"]??"";
    $sdt = $_POST["phoneN"]??"";
    $noidung = $_POST["feedB"]??"";
    $nameF = "1.txt";
    function witeFile($nameF,$email, $sdt, $noidung)
    {

        // THỰC HIỆN MỞ VÀ NGHI FILE
        $f = fopen($nameF, "a");
        $ghi = fwrite($f,$email .'|');
        $ghi1 = fwrite($f,$sdt .'|' );
        $ghi2 = fwrite($f,$noidung. "\n");

        
        if($ghi && $ghi1 && $ghi2)
            echo '<h3 style = "color:green;">Ghi thành công!</h3>';
        else 
            echo '<h3 style ="color: red;"> Ghi thất bại!</h3>';
        fclose($f);
    }

    if($email == "" || $sdt== "" || $noidung == "")
    {
        echo '<h3 style = "color:red;"> Vui lòng nhập đầy đủ!</h3>';
    }
    else
        witeFile($nameF,$email,$sdt,$noidung);
?>