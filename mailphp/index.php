<?php
include 'header.php';

?>

<?php 

    if (isset($_POST['btnSU'])){
        $name = $_POST['inputName'];
        $subj = $_POST['inputSubject'];
        $body = $_POST['inputTextarea'];
        $email = $_POST['inputEmail'];
        include 'mail.php';

        sendMail( $name, $email, $subj, $body);
    }

?>
<!-- Body Start -->

<div class="container">
     
    <form action="index.php" method="post" enctype="multipart/form-data">
     <div class="form-group">
            <h2>GỬI MAIL CỦA BẠN CHO CHÚNG TÔI</h2>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputName">Họ và Tên</label>
                <input type="txt" class="form-control"  id="inputName"  name="inputName" placeholder="Nhập họ và tên">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control"  id="inputEmail" name="inputEmail" placeholder="Nhập Email của bạn">
            </div>

        </div>
        <div class="form-group">
            <label for="inputSubject">Tiêu đề mail</label>
            <input type="text" class="form-control" id="inputSubject" name="inputSubject" placeholder="Nhập Tiêu Đề Mail của bạn">
        </div>
        <div class="form-group">
            <label for="inputTextarea">Nội Dung bức thư</label>
            <textarea class="form-control" id="inputTextarea"  name="inputTextarea" rows="4"></textarea>
        </div>

        <button onclick="kiemTra();" type="submit" name="btnSU" class="btn btn-primary">Gửi</button>
        <h2 style="color: red;"><?php  echo $tb; ?></h2>

    </form>
</div>
<!-- Body End -->
<?php
include 'footer.php';
?>