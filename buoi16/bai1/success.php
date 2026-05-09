<?php

session_start();

// Kiểm tra đăng nhập
if(!isset($_SESSION['username'])){

    header("Location: login.html");
    exit();
}

?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập thành công</title>
</head>
<body>

<h2>ĐĂNG NHẬP THÀNH CÔNG</h2>

<p>Xin chào:
<?php echo $_SESSION['username']; ?>
</p>

<a href="logout.php">
    <button>Đăng xuất</button>
</a>

</body>
</html>