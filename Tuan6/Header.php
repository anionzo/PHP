<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Bài : </title>
    <style>
       
        * {
            margin: 0;
            padding: 0;
        }

     
        body {
            font-family: sans-serif;
            color: #333;
        }
      

        #menu ul {
            background: #1F568B;
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
class  Menu
{
    var  $width, $height, $logo, $bgColo, $color, $arrMenu = array();
    function __construct($width, $height, $logo, $bgColo, $color, $arrMenu)
    {
        $this->width = $width;
        $this->height = $height;
        $this->logo = $logo;
        $this->bgColo = $bgColo;
        $this->color = $color;
        $this->arrMenu = $arrMenu;
    }
}
$r = "1300px";
$c = "100px";
$l = "logo.jpg";
if ($_GET["themes"] == NULL)
    $bgc = "009";
else
    $bgc = $_GET["themes"];
$co = "#FFF";
$arr = array("GIỚI THIỆU", "TUYỂN SINH", "CHƯƠNG TRÌNH ĐÀO TẠO", "HOẠT ĐỘNG SINH VIÊN", "TUYỂN DỤNG");
$obj = new Menu($r, $c, $l, $bgc, $co, $arr);

?>

<body>
    <form action="../Tuan6/Header.php" name="Menu" method="post" enctype="multipart/form-data">
        <div id="menu">
            <!-- <div id="menu" > -->
            <ul>
                <li>
                    <img style="width:40px;" src="../Tuan6/<?php echo $obj->logo ?>" />
                </li>

                <?php
                foreach ($obj->arrMenu as $item) {
                ?>
                    <li>
                        <a href="#" style="color: <?php echo $obj->color; ?>;">
                            <?php echo $item; ?>
                        </a>
                    </li>
                <?php
                }
                ?>
                <li>
                    <a href="../Tuan6/Header.php?themes=009">Blue</a>
                </li>
                <li>
                    <a href="../Tuan6/Header.php?themes=900">Red</a>
                </li><li>
                    <a href="../Tuan6/Header.php?themes=F90">Yellow</a>
                </li>
            </ul>

        </div>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>