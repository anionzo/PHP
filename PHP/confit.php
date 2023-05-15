<?php

  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bbqtgxkn_cosmeticsstore";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Lỗi kết nối cơ sở dữ liệu ".mysqli_connect_error();
  }