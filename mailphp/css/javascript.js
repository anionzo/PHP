
function kiemTra() {
    var tenKh = document.getElementById("inputName");
    var email_kh = document.getElementById("inputEmail");
    var subject = document.getElementById("inputSubject");
    var tera = document.getElementById("inputTextarea");

    if(tenKh.value == "")
    {
        alert("Nhập tên khách hàng");
        tenKh.focus();
        return false;
    } 
    
    if(email_kh.value == "")
    {
        alert("Nhập email khách hàng");
        email_kh.focus();
        return false;
    } 
    
    if(subject.value == "")
    {
        alert("Nhập Tiêu Đề Mail Cần Gửi");
        subject.focus();
        return false;
    }
    if(tera.value == "")
    {
        alert("Nhập Tiêu Nội Dung Mail Cần Gửi");
        tera.focus();
        return false;
    }

    if  (tenKh.value != "" && subject.value != "" && email_kh.value != "" && tera.value != "")
    {
        return true;
    }

}