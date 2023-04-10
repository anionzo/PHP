<?php  
    class HinhChuNhat{
        public $cDai;
        public $cRong;

        public function __construc(){

        }
       
         function DienTich()
        {
            return $this->cDai  * $this->cRong;  
        }

         function ChuVi()
        {
            return ($this->cDai + $this->cRong)* 2;
          
        }  
    }
    // $dt = $_POST["txtDienTich"]??"";

    // $cv= $_POST["txtChuVi"]??"";
    if (!empty($_POST["btn_Tinh"])) {
        $dai = $_POST["txt_ChieuDai"]??"";
        $rong = $_POST["txt_ChieuRong"]??"";

        $hcn = new HinhChuNhat();
        $hcn->cDai = $dai;
        $hcn->cRong =$rong;

        $dt = $hcn->DienTich();
        $cv =$hcn->ChuVi();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Bài Hình Chữ Nhật </title>
</head>

<body>
    <h2 style="color:#00f" align="center">HÌNH CHỮ NHẬT</h2>
    <form action="HinhChuNhat.php" method="post" >
        <table width="40%" cellpadding="0" border="1px" align="center">
                <tr>
                    <td>Chiều dài</td>
                    <td>
                        <input type="number" name="txt_ChieuDai" value="<?php GLOBAL $dai; echo $dai ?>" />
                    </td>
                </tr>
                <tr>
                    <td>Chiều rộng</td>
                    <td>
                        <input type="number" name="txt_ChieuRong" value="<?php GLOBAL $rong; echo $rong ?>" />
                    </td>
                </tr>
                <tr>
                    <td>ChuVi</td>
                    <td>
                        <input type="text" name="txtChuVi" value="<?php GLOBAL $cv; echo $cv ?>"  readonly ="readony"/>
                    </td>
                </tr>
                <tr>
                    <td>Dien Tích</td>
                    <td>
                        <input type="text" name="txtDienTich" value="<?php GLOBAL $dt; echo $dt ?>"  readonly ="readony"/>
                    </td>
                </tr>
                <tr>
                
                    <td colspan="2">
                        <input align="center" type="submit" name="btn_Tinh" value="Tính"/>
                    </td>
                </tr>
        </table>
    </form>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>
