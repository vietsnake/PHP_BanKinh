<?php
    session_start();
    $username = $_POST['username'];
    $pass1 = $_POST['password1'];
    $pass2 = $_POST['password2'];
    if($pass1 == $pass2){
        // create connect to database
        // $conn= mysqli_con($servername, $db_username, $db_password, $dbname);
        $conn=mysqli_connect("localhost","root","1Lyasttkq.");
                
        // kiểm tra kết nối
        if($conn->connect_error){
        die("Kết nối thất bại: " .$conn->connect_error);
        } else{
            //Chọn CSDL để làm việc
            mysqli_select_db($conn,"web_73dctt26") or die("Không tìm thấy CSDL");
            // create query
            $sql ="INSERT INTO users VALUES (null,'$username','$pass1')";
            $sql_insert=mysqli_query($conn,$sql);
            print_r($sql_insert);
            $_SESSION['error']= "Bạn đã đăng kí tài khoản thành công!";
            header("Location: register.php");
        }
    } else{
        $_SESSION['error'] = "Mật khẩu không khớp, vui lòng nhập lại";
        header("Location: register.php");
        exit();
    }
?>