<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kiểm tra form</title>
</head>
<body>

<h2>FORM ĐẶT TOUR</h2>

<form method="post">

    Họ tên:<br>
    <input type="text" name="hoten"><br><br>

    Số điện thoại:<br>
    <input type="text" name="sdt"><br><br>

    Email:<br>
    <input type="text" name="email"><br><br>

    Điểm đến:<br>
    <select name="diemden">
        <option value="">-- Chọn điểm đến --</option>
        <option>Hà Nội</option>
        <option>Đà Nẵng</option>
        <option>Đà Lạt</option>
        <option>Phú Quốc</option>
    </select>
    <br><br>

    Số người:<br>
    <input type="text" name="songuoi"><br><br>

    <input type="submit" name="btnDat" value="Đặt tour">

</form>

<hr>

<?php

if(isset($_POST['btnDat'])){

    $hoten = $_POST['hoten'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];
    $diemden = $_POST['diemden'];
    $songuoi = $_POST['songuoi'];

    if($hoten == ""){
        echo "Họ tên không được rỗng <br>";
    }

    if($sdt == ""){
        echo "Số điện thoại không được rỗng <br>";
    }

    if($email == ""){
        echo "Email không được rỗng <br>";
    }

    if($diemden == ""){
        echo "Phải chọn điểm đến <br>";
    }

    if(!is_numeric($songuoi) || $songuoi <= 0){
        echo "Số người phải là số và lớn hơn 0 <br>";
    }

    if($hoten != "" && $sdt != "" && $email != ""
        && $diemden != ""
        && is_numeric($songuoi) && $songuoi > 0){

        echo "<h3>Đặt tour thành công</h3>";
    }
}

?>

</body>
</html>