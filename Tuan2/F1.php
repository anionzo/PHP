<?php 
    function docFile($NAME)
    {
        $f = fopen($NAME,"r");
        while(!feof($f))
        {
            $noiDung = fgets($f);
            
            echo $noiDung ."<br>";
        }
        fclose($f);
    }
    
    function docFileTungNhanVien($NAME)
    {
        $f = fopen($NAME,"r");
        $anh = 1;
       
      
        while(!feof($f))
        {

            $noiDung = fgets($f);
            
            if($anh % 4 == 1)
            {
                echo '<img src="images/'.$noiDung.'" alt="Ảnh nhân viên." style="width="200px; height="300px;">';
            }
         
            echo $noiDung ."<br>";
            $anh++;
        }
        fclose($f);
    }
    function witeFile($Name)
    {
        $noiDung = "Nội dung cần ghi ... \n";
        // THỰC HIỆN MỞ VÀ NGHI FILE

        $f = fopen("$Name", "a");
        $ghi = fwrite($f,$noiDung);
        fclose($f);
        if($ghi)
            echo '<h3 style = "color:green;">Ghi file thành công!</h3>';
        else 
            echo '<h3 style ="color: red;"> Ghi file thất bại!</h3>';
    }
?>

 <?php # echo docFileTungNhanVien("Data0.txt") 
    echo witeFile("DataTesst.txt");
 ?> 

