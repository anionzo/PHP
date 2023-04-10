<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Bài : </title>
</head>

<body>
<style type="text/css">
#tnt_pagination {
	display: inline-block;
	text-align: left;
	height: 22px;
	line-height: 21px;
	clear: both;
	padding-top: 3px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: normal;
}

#tnt_pagination a:link,#tnt_pagination a:visited {
	padding: 7px;
	padding-top: 2px;
	padding-bottom: 2px;
	border: 1px solid #EBEBEB;
	margin-left: 10px;
	text-decoration: none;
	background-color: #F5F5F5;
	color: #0072bc;
	width: 22px;
	font-weight: normal;
}

#tnt_pagination a:hover {
	background-color: #DDEEFF;
	border: 1px solid #BBDDFF;
	color: #0072BC;
}

#tnt_pagination .active_tnt_link {
	padding: 7px;
	padding-top: 2px;
	padding-bottom: 2px;
	border: 1px solid #BBDDFF;
	margin-left: 10px;
	text-decoration: none;
	background-color: #DDEEFF;
	color: #0072BC;
	cursor: default;
}

#tnt_pagination .disabled_tnt_pagination {
	padding: 7px;
	padding-top: 2px;
	padding-bottom: 2px;
	border: 1px solid #EBEBEB;
	margin-left: 10px;
	text-decoration: none;
	background-color: #F5F5F5;
	color: #D7D7D7;
	cursor: default;
}

.content {
	margin: 10px auto;
	width: 800px;
	border: 1px solid #dfd;
	padding: 20px;
	text-align: center;
}
</style>
    <div class="content">
	<?php 
        $page = (isset($_GET["page"]) == true )? $_GET["page"] : 0;
    ?>
        <div id="tnt_pagination">
            <a href="bai7_2.php?page=<?php echo $page <= 0 ? $page : $page - 1 ?>">Prev</a> 
            <a href="bai7_2.php?page=1">1</a>
            <a href="bai7_2.php?page=2">2</a> 
            <a href="bai7_2.php?page=3">3</a>
            <a href="bai7_2.php?page=4">4</a>
            <a href="bai7_2.php?page=5">5</a>
            <a href="bai7_2.php?page=6">6</a>
            <a href="bai7_2.php?page=7">7</a>
            <a href="bai7_2.php?page=8">8</a>
            <a href="bai7_2.php?page=5">9</a>
            <a href="bai7_2.php?page=10">10</a>
			<a href="bai7_2.php?page=<?php echo $page >= 10 ? $page : $page + 1?>">Next</a> 
        </div>

   
    <p class="result">Bạn đang ở trang thứ <?php echo $page; ?></p>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>