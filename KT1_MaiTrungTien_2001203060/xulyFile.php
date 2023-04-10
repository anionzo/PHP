<?php 

    // Xử lý tập tin
    //Đọc tập tin
    function Doc_Tap_Tin($path)
    {
        $f = fopen($path, "r");
        $str ="";
        while(!feof($f))
        {
            $noi_dung = fgets($f);
            $str = $str.$noi_dung;
        }
        fclose($f);
        return $str;
    }
    // Xử lý mảng
    // Tacts chuỗi thành mảng
    function Tach_chuoi_thanh_mang($dindang, $str){
        $mang = array();
        $mang = explode($dindang,$str);
        return $mang;
    }
?>