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
    $arr = array("#1"=>"Trang Chủ", "#2"=>"Giới Thiệu", "#3"=>"Sản Phẩm Tiêu Biểu","#4"=>"Tin Tức", "#5"=>"Liên Hệ","#6"=>"Album" );

    $tai_Lieu = new DOMDocument("1.0","UTF-8");

    $root = $tai_Lieu->createElement("Menus");

    $tai_Lieu->appendChild($root);

    foreach ($arr as $key => $value) {
        # code...
        $node = $tai_Lieu->createElement("Menu");
        $node->nodeValue = $value;
        $node->setAttribute("link",$key);
        $root->appendChild($node);
    }
    $part
?>
<body>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>