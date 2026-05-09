<!-- File: bai3.php -->

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Xử lý tour du lịch</title>
</head>
<body>

<h1>THÔNG TIN TOUR</h1>

<?php

    $tenTour = "Tour Phú Quốc nghỉ dưỡng";
    $giaTour = 4500000;
    $soNguoi = 4;

    echo "<p>Tên tour: $tenTour</p>";
    echo "<p>Giá tour: $giaTour VNĐ</p>";
    echo "<p>Số người: $soNguoi</p>";

    if($soNguoi <= 0){

        echo "<p>Số người không hợp lệ</p>";

    }else{

    
        $tongTien = $giaTour * $soNguoi;

        echo "<p>Tổng tiền: $tongTien VNĐ</p>";


        if($giaTour < 2000000){

            echo "<p>Loại tour: Tour tiết kiệm</p>";

        }elseif($giaTour >= 2000000 && $giaTour <= 4000000){

            echo "<p>Loại tour: Tour tiêu chuẩn</p>";

        }else{

            echo "<p>Loại tour: Tour cao cấp</p>";
        }
    }

?>

</body>
</html>