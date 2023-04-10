<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Câu 2 </title>
</head>
<?php
    $past = "../KT1_MaiTrungTien_2001203060/Dien_thoai.xml";
    $taiLieu = new DOMDocument();

    $taiLieu->load($past);
    $root = $taiLieu->documentElement;
    $arr = $root->childNodes;
?>
<body>
   <div class="border p-5">
   <h2 class="">Danh sách sản phẩm</h2>
    <div class="row p-1">
        <?php
            foreach ($arr as $node) 
            {
                # code...
                if($node->nodeType == 1)
                {
                    $id = $node->getAttribute("ID");
                    $hinh = $node->getAttribute("Hinh");
                    //    $ten =$node->getAttribute("TCD");
                    $ten = $node->nodeValue;
                    ?>
                    <div class="col-md-4 border p-3 " style="height:400px;"> 
                     
                       <div class =""> <img width="180px" src="<?php echo $hinh ?> " /></div>
                       <div class="text-right h-25">
                            <p>Ma SP: <?php echo $id ?></p>
                            <P>Tên SP: 
                                <a style="color: red;">  <?php echo $ten ?></a>
                            </p>
                        </div>

                    </div>
                    <?php
                }
            }
        ?>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>