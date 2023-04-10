<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Câu 1 </title>
</head>
<?php 
    $arr = array("h1.jpg","h2.jpg","h3.jpg","h4.jpg");
    $kq = false;
    if (!empty($_POST["btn_all"])) {
     
       $kq = true;
       
    }
    if (!empty($_POST["btn_demo"])) {
     
        $kq = false;
        
     }
?>


<body>
    <form action="../KT1_MaiTrungTien_2001203060/Cau1.php" method="post" >
    <div style="border: 1px solid; display: block; margin-left: auto;margin-right: auto;  width: 200px; padding:10px" >
    <h2 style="color:red"> Images Gallery</h2>
    <?php 
      if($kq == false)
      {
          ?>
       <img width="180px" src="../KT1_MaiTrungTien_2001203060/Images_Cau1/h1.jpg"/>
      <?php
      }else
        foreach($arr as $item)
            {
              
            
                ?>
                 <img width="180px" src="../KT1_MaiTrungTien_2001203060/Images_Cau1/<?php  echo $item?>"/>
                <?php
            }
        ?>    
         <input align="center" type="submit" name="btn_all" value="showall"/>
        <input align="center" type="submit" name="btn_demo" value="show demo"/>
    </div>
    </form>
    
</body>
</html>