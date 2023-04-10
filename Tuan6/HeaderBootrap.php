<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
    <title>Bài : </title>


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
$r = "1500px";
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
    <form action="../Tuan6/HeaderBootrap.php" name="header" method="post" enctype="multipart/form-data">
        <header>
            <nav class="navbar navbar-expand-lg  navbar-dark bg-primary ">
                <a class="navbar-brand" href="#"><strong>
                        <img style="width:50px;" src="../Tuan6/<?php echo $obj->logo ?>" />
                    </strong></a>
                <button   class="navbar-toggler"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#navbarNavAltMarkup"
                        aria-controls="navbarNavAltMarkup"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                    <ul class="navbar-nav mr-auto">
                        <?php
                        foreach ($obj->arrMenu as $item) {
                        ?>
                            <li>
                            <li class="nav-item ">
                                <a class="nav-link text-white">
                                    <?php echo $item; ?>
                                </a>
                            </li>
                        <?php
                        }
                        ?>

                        <li class="nav-item active">
                            <a class="nav-link text-white" href="../Tuan6/HeaderBootrap.php?themes=009">Blue</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="../Tuan6/HeaderBootrap.php?themes=900">Red</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="../Tuan6/HeaderBootrap.php?themes=F90">Yellow</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav nav-flex-icons ">
                        <li class="nav-item text-white">
                            <a class="nav-link"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>

        </header>
    </form>
</body>
<!-- MDB -->
<script
  type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
></script>
</html>
