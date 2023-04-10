<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Bài : </title>
</head>
<?php
    $past = "../Tuan3/Hoa_theo_chu_de1.xml";
    $taiLieu = new DOMDocument();

    $taiLieu->load($past);
    $root = $taiLieu->documentElement;
    $arr = $root->childNodes;
?>
<body>
    <h2 class="">Hoa Tươi Theo chủ đề</h2>
    <div class="row p-1">
        <?php
            foreach ($arr as $node) 
            {
                # code...
                if($node->nodeType == 1)
                {
                    $id = $node->getAttribute("ID");
                    $tencd = $node->getAttribute("TenCD");
                    $hinh = $node->getAttribute("Hinh");
                    $gia = $node->getAttribute("Gia");

                    ?>
                    <div class="col-md-3 border border-white border-5 p-3 bg-primary text-white " style="height:400px;"> 
                        <p class="bg-warning text-center"><?php echo $tencd ?></p>
                       <div class =""> <img class=" w-100"  src="Images/<?php echo $hinh ?> " /></div>
                       <div class="text-right h-25">
                            <p>Ma SP: <?php echo $id ?></p>
                            <p>Giá: <?php echo $gia ?></p>
                        </div>

                    </div>
                    <?php
                }
            }
        ?>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>