<?php

session_start();

// Xóa session
session_destroy();

// Quay về trang đăng nhập
header("Location: login.html");

?>