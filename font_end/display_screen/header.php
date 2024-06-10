<!-- Header -->
            <!-- navbar start -->
            <?php
                if (isset($_SESSION['user'])) {
                    echo "<h6 align='center'>Welcome, "  .$_SESSION['user'] . " !</h6>";
                }
             ?>
            <div>
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="HomePage.php">
                            <img src="/PHP_BanKinh/images/logo/logo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="HomePage.php">Trang chủ</a>
                        </li>
                        <li class="nav-item dropdown">
                            <?php
                            echo '<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sản phẩm</a>';
                            ?>
                            <ul class="dropdown-menu">
                            <?php
                            echo '<li><a class="dropdown-item" href="#">Kính thời trang nam</a></li>';
                            echo '<li><a class="dropdown-item" href="#">Kính thời trang nữ</a></li>';
                            ?>
                            <!-- <li><hr class="dropdown-divider"></li> -->
                            <?php
                            echo '<li><a class="dropdown-item" href="#">Kính râm unisex</a></li>';
                            ?>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Chính sách</a>
                            <ul class="dropdown-menu">
                            <!-- <li><hr class="dropdown-divider"></li> -->
                            <li><a class="dropdown-item" href="#">Chính sách thanh toán</a></li>
                            <li><a class="dropdown-item" href="#">Chính sách bảo mật</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Liên hệ</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li> -->
                        </ul>
                        <form class="d-flex mr-2" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        <form>
                            <?php
                            if(!isset($_SESSION['user'])){
                                echo '<a href="login.php" type="button" class="btn btn-primary btn-block">Đăng nhập </a>';
                            } else{
                                echo    '<div class="row text-center" style="margin-left: 0.5em">
                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 bg-infor">
                                            <li class="nav-item dropdown dropstart"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tài Khoản</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Thêm sản phẩm</a></li>
                                                    <li><a class="dropdown-item" href="#">Đơn hàng của tôi</a></li>
                                                    <li><a class="dropdown-item" href="#">Thông báo</a></li>
                                                    <li><a class="dropdown-item" href="#">Thay đổi avatar</a></li>
                                                    <li><a class="dropdown-item" href="#">Thay đổi thông tin</a></li>
                                                    <li><a class="dropdown-item" href="#">Đổi mật khẩu</a></li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="../hidden_screen/logout.php">Thoát tài khoản</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>';
                            }
                            ?>
                        </form>
                    </div>
                </div>
                </nav>
            </div>
            <!-- end navbar -->
            <!-- end header -->