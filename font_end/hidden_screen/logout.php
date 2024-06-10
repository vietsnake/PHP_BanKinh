<?php
// Bắt đầu hoặc khôi phục session
session_start();

// Xóa tất cả các biến session
$_SESSION = array();


// Hủy session
session_destroy();

// Chuyển hướng người dùng về trang đăng nhập hoặc trang chính
header("Location: ../display_screen/HomePage.php");
exit;
?>