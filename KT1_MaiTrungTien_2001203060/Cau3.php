<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài : </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
        * {
            margin: 0;
            padding: 0;
        }


        body {
            font-family: sans-serif;
            color: #333;
            width: 1100px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        * {
            margin: 0;
            padding: 0;
        }


        body {
            font-family: sans-serif;
            color: #333;
        }

        #logo {
            display: block;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        #logo img {
            width: 300px;
        }

        #than {
            width: 1100px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }


        #menu ul {

            background: #EA8FEA;
            list-style-type: none;
            text-align: center;
        }

        #menu li {
            color: #f1f1f1;
            display: inline-block;
            padding: 10px 12px;
            white-space: nowrap;
        }

        #menu a {
            text-decoration: none;
            color: #fff;
            display: block;
        }

        #menu a:hover {
            background: #F1F1F1;
            color: #333;
        }
    </style>
</head>

<?php
     $name = $_POST["name"];
     $email = $_POST["email"];
     $passt = $_POST["psw"];
     $tenDN = $_POST["txt_ten"];
     $path = "../KT1_MaiTrungTien_2001203060/Images_Cau234/";
     $tmp_name= $_FILES["anh"]["tmp_name"];
     $hinh= $_FILES["anh"]["hinh"];
     move_uploaded_file($tmp_name, $path.$hinh);
     
    
   
?>

<body>
    <div id="than">
        <div id="logo">
            <div style="color:blueviolet; font-size: 120px">agoda</div>
            <img src="../KT1_MaiTrungTien_2001203060/Images_Cau234/Agoda.JPG" />
        </div>
    </div>
    <form action="../KT1_MaiTrungTien_2001203060/Cau3.php" name="CAU3" method="post" enctype="multipart/form-data">
        <div id="menu">
            <ul>
                <li>
                    <a href="../KT1_MaiTrungTien_2001203060/Cau2.php"> SẢN PHẨM</a>
                </li>
                <li>
                    <a href="#"> TIN TỨC</a>
                </li>
                <li>
                    <a href="#">ĐĂNG KÝ</a>
                </li>
                <li>
                    <a href="#">THÔNG TIN ĐĂNG KÝ</a>
                </li>
            </ul>
        </div>
    </form>
    <form  action="../KT1_MaiTrungTien_2001203060/Cau4.php" name="CAU3" method="post" enctype="multipart/form-data">
    <div class="row">
            <div class="col-8">
                <div class="container">
                    <h1>Tạo Tài khoản</h1>
                    <img src="../KT1_MaiTrungTien_2001203060/Images_Cau234/FaceBookButton.JPG" />
                    <hr>

                    <label for="txt_name"><b>Họ tên</b></label>
                    <input type="text" placeholder="Enter name" name="name" required> </br>

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" id="email" required></br>

                    <label for="txt"><b>Tên đăng nhập</b></label>
                    <input type="text" placeholder="Nhập" name="txt_ten" required></br>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required></br>
                    <label for="psw"><b>Chọn ảnh</b></label>
                    <input type="file" name="fileToUpload">
                    <hr>
                    <button type="submit" class="registerbtn">Tạo tài khoản</button>
                </div>
            </div>

            <div class="col-4">
                <img style="margin-right: 0px;" src="../KT1_MaiTrungTien_2001203060/Images_Cau234/QC.JPG" />
            </div>
    </div>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>