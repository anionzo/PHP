<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Bài : </title>
</head>
<?php include("../Tuan2/ThuVienBai12.php");
    $tbLoi = "";
    $kt = true;
    $a = $_POST["txt_a"];
    $b = $_POST["txt_b"];
    $x ="";
    try
    {
        if(isset($_POST["btn_Giai"]))
        {
            $kq = La_Rong($a,"Nhập vào số a khác rỗng");
            $kq = La_So($a,"Nhập vào số a là số");
            $kq = La_Rong($b,"Nhập vào số b khác rỗng");
            $kq = La_Rong($b,"Nhập vào số b là số");
            if($kt)
            {
                $x = GiaiPTB1($a,$b);
            }
        }
    } 
    catch (Exception $ex)
    {
        $tbLoi =$ex ->getMessage();
    }
?>
<body>
    <h2 style="color:#F00; text-align:center;"><?php echo $tbLoi ?></h2>
        <form name="F_SoSanh" method="post" action="Bai12.php">
        <table width="500" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFCC">
            <tr>
                <td colspan="2" bgcolor="#FF6600" align="center">GIẢI PHƯƠNG TRÌNH BẬC 1</td>
            </tr>
            <tr>
                <td>Phương trình</td>
                <td><input name="txt_a" type="text" value="<?php echo $a ?>" size="10" style="color:#F00"/> x + <input name="txt_b" type="text" value="<?php echo $b?>" size="10" style="color:#F00"/> = 0 </td>
            </tr>
            <tr>
                <td>Nghiệm</td>
                <td><input name="txt_x" type="text" value="<?php echo $x ?>" size="20" style="color:#F00" readonly="readonly" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input name="btn_Giai" type="submit" value="GIẢI PHƯƠNG TRÌNH" /></td>
            </tr>   
        </table> 

    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>