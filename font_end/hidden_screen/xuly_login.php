<?php
    session_start();
            // // kết nối cơ sở dữ liệu
            // $servername="localhost";
            // $db_username="root";
            // $db_password="1Lyasttkq.";
            // $dbname="web_73dctt26";

            // // tạo kết nối
            // $conn= mysqli_con($servername, $db_username, $db_password, $dbname);
            $conn=mysqli_connect("localhost","root","1Lyasttkq.") or die("Không kết nối được với server");
            
            // kiểm tra kết nối
            if($conn->connect_error){
              die("Kết nối thất bại: " .$conn->connect_error);
            }
            //Chọn CSDL để làm việc
            mysqli_select_db($conn,"web_73dctt26") or die("Không tìm thấy CSDL");
            // nhận dữ liệu từ form đăng nhập
            $nameuser = $_POST['username'];
            $pass = $_POST['password'];
            // create query
            $sql ="SELECT user_name, user_pass FROM users WHERE user_name ='$nameuser' AND user_pass='$pass'";
            $kqlg=mysqli_query($conn,$sql);
            $tong_bg=mysqli_num_rows($kqlg);
            echo $tong_bg;

            if($tong_bg > 0){
                    $_SESSION['user'] = $nameuser;
                    header('Location: ../display_screen/HomePage.php');
                    exit();
                } else{
                    echo "Sai thong tin";
                    // sai mat khau hoac ten dang nhap khong dung
                    $_SESSION['error']= "Tên đăng nhập hoặc mật khẩu không đúng. Vui lòng nhập lại!";
                }
            // $result = $conn->query($sql)->fetch_assoc();;
            // neu dung mat khau
            // if(password_verify($pass,  $result['user_pass'])){
            //   echo "Đăng nhập thành công";
            //     $_SESSION['user'] = $nameuser;
            //     header('Location: HomePage.php');
            //   exit();
            // } else{
            //     echo "Sai thong tin";
            //   // sai mat khau hoac ten dang nhap khong dung
            //   $_SESSION['error']= "Tên đăng nhập hoặc mật khẩu không đúng. Vui lòng nhập lại!";
            // }
            $conn->close();
?>