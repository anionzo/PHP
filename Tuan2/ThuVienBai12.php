<?php 
    function GiaiPTB1 ($a, $b)
    {
        $x = "";
        if($a == 0 )
        {
            if($b == 0)
            {
                $x = "Phương trình có vô số nghiệm!";
            }
            else 
            {
                $x = "Phương trình vô nghiệm!";
            }
        }else {
            $x = -$b/$a;
        }
        return $x;
    }
    function La_Rong ($giatri,$thongBao)
    {
        if($giatri== "") throw new ErrorException($thongBao);
        return true;
    }

    function La_So($giatri, $thongBao)
    {
        if(!is_numeric($giatri)) throw new ErrorException($thongBao);
        return true;
    }
?>