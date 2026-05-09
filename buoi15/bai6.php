<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách tour</title>
</head>
<body>

<?php

$tours = [
    ["T01","Tour Hà Nội","Hà Nội",2000000,3],
    ["T02","Tour Đà Nẵng","Đà Nẵng",3500000,4],
    ["T03","Tour Đà Lạt","Đà Lạt",3000000,3],
    ["T04","Tour Phú Quốc","Phú Quốc",5000000,5]
];

?>

<h2>DANH SÁCH TOUR</h2>

<table border="1" cellpadding="10">

    <tr>
        <th>Mã tour</th>
        <th>Tên tour</th>
        <th>Điểm đến</th>
        <th>Giá tour</th>
        <th>Số ngày</th>
    </tr>

    <?php

    foreach($tours as $tour){

        echo "<tr>";

        echo "<td>".$tour[0]."</td>";
        echo "<td>".$tour[1]."</td>";
        echo "<td>".$tour[2]."</td>";
        echo "<td>".$tour[3]."</td>";
        echo "<td>".$tour[4]."</td>";

        echo "</tr>";
    }

    ?>

</table>

<hr>

<h2>FORM ĐẶT TOUR</h2>

<form method="post">

    Họ tên:<br>
    <input type="text" name="hoten"><br><br>

    Chọn mã tour:<br>

    <select name="matour">

        <option value="">-- Chọn tour --</option>

        <?php

        foreach($tours as $tour){

            echo "<option value='".$tour[0]."'>".$tour[0]." - ".$tour[1]."</option>";
        }

        ?>

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
    $matour = $_POST['matour'];
    $songuoi = $_POST['songuoi'];

    if($hoten == ""){
        echo "Họ tên không được rỗng <br>";
    }

    if($matour == ""){
        echo "Mã tour không hợp lệ <br>";
    }

    if(!is_numeric($songuoi) || $songuoi <= 0){
        echo "Số người phải lớn hơn 0 <br>";
    }

    if($hoten != "" && $matour != ""
        && is_numeric($songuoi) && $songuoi > 0){

        foreach($tours as $tour){

            if($tour[0] == $matour){

                $tongtien = $tour[3] * $songuoi;

                echo "<h3>ĐẶT TOUR THÀNH CÔNG</h3>";

                echo "Họ tên: ".$hoten."<br>";
                echo "Tên tour: ".$tour[1]."<br>";
                echo "Điểm đến: ".$tour[2]."<br>";
                echo "Số người: ".$songuoi."<br>";
                echo "Tổng tiền: ".$tongtien." VNĐ";
            }
        }
    }
}

?>

</body>
</html>