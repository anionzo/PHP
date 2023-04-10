<?php  
    class HaiSo{
        public $cDai;
        public $cRong;

        public function __construc(){

        }
       
        function Nhan()
        {
            return $this->cDai  * $this->cRong;  
        }
        function Chia()
        {
            return $this->cDai  / $this->cRong;  
        }
        function Cong()
        {
            return $this->cDai  + $this->cRong;  
        }
        function Tru()
        {
            return $this->cDai  - $this->cRong;  
        }

 
    }

    if (!empty($_POST["btn_Cong"])) {
        $dai = $_POST["txt_ChieuDai"]??"";
        $rong = $_POST["txt_ChieuRong"]??"";

        $hcn = new HaiSo();
        $hcn->cDai = $dai;
        $hcn->cRong =$rong;

        $KQ = $hcn->Cong();
    }
    if (!empty($_POST["btn_Tru"])) {
        $dai = $_POST["txt_ChieuDai"]??"";
        $rong = $_POST["txt_ChieuRong"]??"";

        $hcn = new HaiSo();
        $hcn->cDai = $dai;
        $hcn->cRong =$rong;

        $KQ = $hcn->Tru();
    }
    if (!empty($_POST["btn_Nhan"])) {
        $dai = $_POST["txt_ChieuDai"]??"";
        $rong = $_POST["txt_ChieuRong"]??"";

        $hcn = new HaiSo();
        $hcn->cDai = $dai;
        $hcn->cRong =$rong;

        $KQ = $hcn->Nhan();
    }
    if (!empty($_POST["btn_Chia"])) {
        $dai = $_POST["txt_ChieuDai"]??"";
        $rong = $_POST["txt_ChieuRong"]??"";

        $hcn = new HaiSo();
        $hcn->cDai = $dai;
        $hcn->cRong =$rong;

        $KQ = $hcn->Chia();
    }
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
    <h2 style="color:#00f" align="center">Tính 2 Số A và B</h2>
    <form action="Tinh2So.php" method="post" >
        <table width="40%" cellpadding="0" border="1px" align="center">
                <tr>
                    <td>Số a</td>
                    <td>
                        <input type="number" name="txt_ChieuDai" value="<?php GLOBAL $dai; echo $dai ?>" />
                    </td>
                </tr>
                <tr>
                    <td>Số b</td>
                    <td>
                        <input type="number" name="txt_ChieuRong" value="<?php GLOBAL $rong; echo $rong ?>" />
                    </td>
                </tr>
                <tr>
                    <td>Kết Quả</td>
                    <td>
                        <input type="text" name="txtKetQUa" value="<?php GLOBAL $KQ; echo $KQ ?>"  readonly ="readony"/>
                    </td>
                </tr>
      
                <tr>
                
                    <td colspan="2">
                        <input align="center" type="submit" name="btn_Cong" value="Cộng"/>
                        <input align="center" type="submit" name="btn_Tru" value="Trừ"/>
                        <input align="center" type="submit" name="btn_Nhan" value="Nhân"/>
                        <input align="center" type="submit" name="btn_Chia" value="Chia"/>
                    </td>
                </tr>
        </table>
    </form>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>
