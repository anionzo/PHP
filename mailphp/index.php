<?php
include 'header.php';
include 'mail.php';
?>

<?php 

    if (isset($_POST['btnSU'])){
        $name = $_POST['inputName'];
        $subj = $_POST['inputSubject'];
        $body = $_POST['inputTextarea'];
        $email = $_POST['inputEmail'];
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
                <input type="txt" class="form-control" name="inputName" placeholder="Nhập họ và tên">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" name="inputEmail" placeholder="Nhập Email của bạn">
            </div>

        </div>
        <div class="form-group">
            <label for="inputSubject">Tiêu đề mail</label>
            <input type="text" class="form-control" name="inputSubject" placeholder="Nhập Tiêu Đề Mail của bạn">
        </div>
        <div class="form-group">
            <label for="inputTextarea">Nội Dung bức thư</label>
            <textarea class="form-control" name="inputTextarea" rows="4"></textarea>
        </div>

        <button type="submit" name="btnSU" class="btn btn-primary">Gửi</button>
    </form>
</div>
<!-- Body End -->
<?php
include 'footer.php';
?>