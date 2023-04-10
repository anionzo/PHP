<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bài : </title>
</head>

<body>
    <form name ="Bai_NgaySinh"  method="post" action="Xuly9.php">
        Ngày sinh
        <select>
            <?php
                $i =1;
                while ($i <= 31 )
                {
                    echo "<option> $i </option>";
                    $i++;
                }
            ?>
        </select>
        Tháng
        <select>
            <?php
                $j =1;
                while ($j <= 12 )
                {
                    echo "<option> $j </option>";
                    $j++;
                }
            ?>
        </select>
    </form>
</body>
</html>