
function kiemTra() {
    var tenKh = document.getElementById("idName");
    var email_kh = document.getElementById("idEmail");
    var diachi_Kh = document.getElementById("idDiaChi");
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
    
    if(diachi_Kh.value == "")
    {
        alert("Nhập địa chỉ khách hàng");
        diachi_Kh.focus();
        return false;
    }

    if  (tenKh.value != "" && email_kh.value != "" && email_kh.value != "")
    {
        return true;
    }

}