<?php
session_start();

    // Kiểm tra xem người dùng đã đăng nhập chưa
    // if (!isset($_SESSION['user'])) {
    //     // Nếu chưa đăng nhập, chuyển hướng về trang đăng nhập
    //     header('Location: HomePage.php');
    //     exit();
    // }

    // Hiển thị thông tin người dùng đã đăng nhập
    
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
                integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
                crossorigin="anonymous"></script>
           <link rel="stylesheet" href="/PHP_BanKinh/CSS/style.css">
        l    <title>Trang chủ</title>
        </head> 
        <body>
            <!-- start header -->
            <?php
                include '../display_screen/header.php';
            ?>
            <!-- end header -->
            <!-- start content -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3">
                        <div class="list-group mt-4">
                            <h3>Loại Sản Phẩm</h3>
                            <?php
                            echo '<a href="kinh_nu.php" class="list-group-item text-center list-group-item-action">Kính Thời Trang Nữ</a>';
                            echo '<a href="kinh_nam.php" class="list-group-item text-center list-group-item-action">Kính Thời Trang Nam</a>';
                            echo '<a href="kinh_mua_he.php" class="list-group-item text-center list-group-item-action">Kính Râm</a>';                           
                            echo '<a href="san_pham_khac.php" class="list-group-item text-center list-group-item-action">Các sản phẩm khác</a>';
                            ?>
                            <!-- <a class="list-group-item list-group-item-action disabled" aria-disabled="true">A disabled link item</a> -->
                        </div>
                        <!-- start Hãng kính -->
                        <div class=" list-group mt-4">
                            <h3>Hãng</h3>
                            <?php
                            echo '<a href="#" class="list-group-item text-center list-group-item-action w-50">Gucci</a>';
                            echo '<a href="#" class="list-group-item text-center list-group-item-action w-50">Montblanc</a>';
                            echo '<a href="#" class="list-group-item text-center list-group-item-action w-50">Licions</a>';
                            echo '<a href="#" class="list-group-item text-center list-group-item-action w-50">Cartier</a>';
                            echo '<a href="#" class="list-group-item text-center list-group-item-action w-50">Oakley</a>';
                            echo '<a href="#" class="list-group-item text-center list-group-item-action w-50">Chopard</a>';
                            echo '<a href="#" class="list-group-item text-center list-group-item-action w-50">Burberry</a>';
                            ?>
                            <!-- <a class="list-group-item list-group-item-action disabled" aria-disabled="true">A disabled link item</a> -->   
                        </div>   
                         <!-- end hãng kính -->
                    </div>
                    <!-- slider and product -->
                    <div class="col-lg-9">
                        <!-- slider -->
                        <div class="row">
                        <div id="carouselExampleIndicators" class="carousel slide">
                                <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/PHP_BanKinh/images/slide/slide-1.png"  class="d-block w-100" alt="slide-1">
                                </div>
                                <div class="carousel-item">
                                    <img src="/PHP_BanKinh/images/slide/slide-2.png"  class="d-block w-100" alt="slide-2">
                                </div>
                                <div class="carousel-item">
                                    <img src="/PHP_BanKinh/images/slide/slide-3.png"  class="d-block w-100" alt="slide-3">
                                </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <!-- end slider -->
                        <!-- product -->
                        <div class="row mt-4 text-center">
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top" src="/PHP_BanKinh/images/product/product-1.png" alt="product-r1"></a>
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="#">Mắt kính Licions gọng xéo Trending</a></h4>
                                        <h5>59.000 Đồng</h5>
                                        <p class="card-text">Sản phẩm có độ bền tốt.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top" src="/PHP_BanKinh/images/product/product-2.png" alt="product-r1"></a>
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="#">Mắt kính Licions Talin</a></h4>
                                        <h5>50.000 Đồng</h5>
                                        <p class="card-text">Sản phẩm có độ bền tốt.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top" src="/PHP_BanKinh/images/product/product-3.png" alt="product-r1"></a>
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="#">Mắt kính Licions Tino nhỏ gọn</a></h4>
                                        <h5>60.000 Đồng</h5>
                                        <p class="card-text">Sản phẩm có độ bền tốt.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top" src="/PHP_BanKinh/images/product/product-4.jpg" alt="product-r2"></a>
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="#">Mắt kính Licions Framefocus</a></h4>
                                        <h5>112.000 Đồng</h5>
                                        <p class="card-text">Sản phẩm có độ bền tốt.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top" src="/PHP_BanKinh/images/product/product-5.png" alt="product-r2"></a>
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="#">Mắt kính Licions gọng vuông đủ màu</a></h4>
                                        <h5>55.000 Đồng</h5>
                                        <p class="card-text">Sản phẩm có độ bền tốt.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top" src="/PHP_BanKinh/images/product/product-6.png" alt="product-r2"></a>
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="#">Mắt kính Licions gọng xéo Pinbi</a></h4>
                                        <h5>70.000 Đồng</h5>
                                        <p class="card-text">Sản phẩm có độ bền tốt.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end product -->
                    </div>
                </div>
                
            </div>
            <!-- end content -->
            <!-- start footer -->
                <?php
                    include '../display_screen/footer.php';
                ?>
            <!-- end footer -->
        </body>

    </html>