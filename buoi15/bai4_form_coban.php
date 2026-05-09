
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Form đặt tour</title>
</head>
<body>

<h2>FORM ĐẶT TOUR</h2>

<form method="post">

    Họ tên:<br>
    <input type="text" name="hoten"><br><br>

    Điểm đến:<br>
    <select name="diemden">
        <option>Hà Nội</option>
        <option>Đà Nẵng</option>
        <option>Nha Trang</option>
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
    $diemden = $_POST['diemden'];
    $songuoi = $_POST['songuoi'];

    echo "<h3>THÔNG TIN ĐẶT TOUR</h3>";

    echo "Họ tên khách hàng: " . $hoten . "<br>";
    echo "Điểm đến: " . $diemden . "<br>";
    echo "Số người: " . $songuoi;
}

?>

</body>
</html>