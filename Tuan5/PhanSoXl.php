<?php  
    class PhanSo{
        public $ts,$ms;
        public function __construct($t,$m){
            $this->ts = $t;
            $this->ms = $m;
        }

        public function ToiGianPS() {
            $a = abs($this->ts);
            $b = abs($this->ms);
            
            // Tìm UCLN của a và b
            if($a== 0 || $b == 0) return 1;
            while ($b != 0) {
                $r = $a % $b;
                $a = $b;
                $b = $r;
            }
            $this->ts /= $a;
            $this->ms /= $a;
        }
        public function Xuat()
        {
            return $this->ts . "/" . $this->ms;
        }
    }
    class PhanSoXL {
       
        private $ps1, $ps2;
        public function __construct(PhanSo $p1, PhanSo $p2) {
            $this->ps1 = $p1;
            $this->ps2 = $p2;
        }
        
       
        public function Nhan()
        {
            $t = $this->ps1->ts * $this->ps2->ts;
            $m = $this->ps1->ms * $this->ps2->ms;
            $KQ = new PhanSo($t, $m);
            $KQ->ToiGianPS();
            return $KQ->Xuat();
        }
        function Chia()
        {
            $t = $this->ps1->ts * $this->ps2->ms ;
            $m =  $this->ps1->ms * $this->ps1->ts;
            $KQ = new PhanSo($t, $m);
            $KQ->ToiGianPS();
            return $KQ->Xuat();

        }
        function Cong()
        {
            $t = $this->ps1->ts * $this->ps2->ms + $this->ps2->ts * $this->ps1->ms;
            $m = $this->ps1->ms * $this->ps2->ms;
            $KQ = new PhanSo($t, $m);
            $KQ->ToiGianPS();
            return $KQ->Xuat(); 
        }
        function Tru()
        {
            $t = $this->ps1->ts * $this->ps2->ms - $this->ps2->ts * $this->ps1->ms;
            $m = $this->ps1->ms * $this->ps2->ms;
            $KQ = new PhanSo($t, $m);
            $KQ->ToiGianPS();
            return $KQ->Xuat();        
        }
    }

    $ts1 = $_POST["txt_Tu1"]??"";
    $ts2 = $_POST["txt_Tu2"]??"";
    $ms1 = $_POST["txt_Mau1"]??"";
    $ms2 = $_POST["txt_Mau2"]??"";
    if (!empty($_POST["btn_Cong"])) {
       

        $p1 = new PhanSo($ts1, $ms1);
        $p2 = new PhanSo($ts2, $ms2);
        $hcn = new PhanSoXL($p1,$p2);
        $KQ = $hcn->Cong();
    }
    if (!empty($_POST["btn_Tru"])) {
    
        $p1 = new PhanSo($ts1, $ms1);
        $p2 = new PhanSo($ts2, $ms2);
        $hcn = new PhanSoXL($p1,$p2);

        $KQ = $hcn->Tru();
    }
    if (!empty($_POST["btn_Nhan"])) {
      
        $p1 = new PhanSo($ts1, $ms1);
        $p2 = new PhanSo($ts2, $ms2);
        $hcn = new PhanSoXL($p1,$p2);

        $KQ = $hcn->Nhan();
    }
    if (!empty($_POST["btn_Chia"])) {
     
        $p1 = new PhanSo($ts1, $ms1);
        $p2 = new PhanSo($ts2, $ms2);
        $hcn = new PhanSoXL($p1,$p2);

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
    <h2 style="color:#00f" align="center">Tính 2 Phân Số</h2>
    <form action="PhanSoXL.php" method="post" >
        <table width="40%" cellpadding="0" border="1px" align="center">
                <tr>
                    <td>Phân Số 1 Tử Số: </td>
                    <td>
                        <input type="number" name="txt_Tu1" value="<?php GLOBAL $ts1; echo $ts1 ?>" />
                    </td>
                </tr>
                <tr>
                    <td>Phân Số 1 Mẫu Số: </td>
                    <td>
                        <input type="number" name="txt_Mau1" value="<?php GLOBAL $ms1; echo $ms1 ?>" />
                    </td>
                </tr>
                <tr>
                    <td>Phân Số 2 Tử Số: </td>
                    <td>
                        <input type="number" name="txt_Tu2" value="<?php GLOBAL $ts1; echo $ts2 ?>" />
                    </td>
                </tr>
                <tr>
                    <td>Phân Số 2 Mẫu Số: </td>
                    <td>
                        <input type="number" name="txt_Mau2" value="<?php GLOBAL $ms1; echo $ms2 ?>" />
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
