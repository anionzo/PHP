<?php
abstract class Hinh_Hoc
{
    public $hinh;
    abstract function CV();
    abstract function DT();
}
class Hinh_Vuong extends Hinh_Hoc
{
    public $canh;
    public $hinh = "Tuan5\B5_images\hv.jpg";
    public function CV()
    {
        return $this->canh * 4;
    }
    public function DT()
    {
        return $this->canh * $this->canh;
    }
}

class Hinh_Tron extends Hinh_Hoc
{
    public $banKinh;
    public $hinh = "Tuan5\B5_images\ht.png";
    public function CV()
    {
        return sqrt($this->banKinh * pi());
    }
    public function DT()
    {
        return pi() * pow($this->banKinh, 2);
    }
}
$HV = new Hinh_Vuong;
$HV->canh = 5;

$HT = new Hinh_Tron;
$HT->banKinh = 5;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Bài : </title>
</head>

<body>
</br>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-3 border border-3 rounded" align="center">
            <h3>Hình Vuông</h3>
            <img class="img-fluid w-50 " src="../<?php echo $HV->hinh ?>" />
            <p>Cạnh <?php echo $HV->canh ?></p>
            <p>Diện Tích <?php echo $HV->DT(); ?></p>
            <p>ChuVi <?php echo $HV->CV(); ?></p>

        </div>
        <div class="col-sm-2"></div>

        <div class="col-sm-3 border border-3 rounded" align="center">
            <h3>Hình Tròn</h3>
            <img class="img-fluid w-50" src="../<?php echo $HT->hinh ?>" />
            <p>Bán Kính <?php echo $HT->banKinh ?></p>
            <p>Diện Tích <?php echo $HT->DT(); ?></p>
            <p>ChuVi <?php echo $HT->CV(); ?></p>

        </div>

        <div class="col-sm-2"></div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>