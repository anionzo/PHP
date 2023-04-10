<?php 
    if(isset($_POST["OK"]))
    {
        if($_FILES["file_upload"]["name"] != null)
        {
            $path = "upload/";
            $tmp_name = $_FILES["file_upload"]["tmp_name"];
            $name = $_FILES["file_upload"]["name"];
            $type =  $_FILES["file_upload"]["type"];
            $size =  $_FILES["file_upload"]["size"];
            move_uploaded_file($tmp_name, $path.$name);
            echo "File uploaded! <br/>";
            echo "Tên file là: ". $name."<br/>";
            echo "Kích thước file: ".$size."Byte <br/>";
        }
        else
        {
            echo "Please choose File!";
        }
    }

?>