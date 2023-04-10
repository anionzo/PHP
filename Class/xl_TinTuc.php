<?php 
    class Tin_tuc{
        var $ma_tin;
        var $tieu_de;
        var $noi_dung;
        var $hinh;
        function __construct($matin, $tieude, $noidung,$hinh){
            $this->ma_tin = $matin;
            $this->tieu_de = $tieude;
            $this->hinh =$hinh;
            $this->noi_dung = $noidung;    
        }
    }
?>