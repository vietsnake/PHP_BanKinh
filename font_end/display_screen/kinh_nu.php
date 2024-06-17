<!DOCTYPE html>
<html lang="en">
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
           <link rel="stylesheet" href="../CSS/style.css">
            <title>Kinh Thoi Trang Nam</title>
        </head> 
<body>
            <!-- start header -->
            <?php
                include '../display_screen/header.php';
            ?>
            <!-- end header -->
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
                                    <img src=".../images/slide/slide-1.png"  class="d-block w-100" alt="slide-1">
                                </div>
                                <div class="carousel-item">
                                    <img src=".../images/slide/slide-2.png"  class="d-block w-100" alt="slide-2">
                                </div>
                                <div class="carousel-item">
                                    <img src=".../images/slide/slide-3.png"  class="d-block w-100" alt="slide-3">
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
                        <ul class="products">
                            <li>
                            <div class="product item">
                                <div class="product-top">
                                    <a href="" class="product-thumb">
                                        <img src="https://sunwear.vn/cdn/shop/products/EF58750-C07_800x.JPG?v=1544556974" alt="male-eye-glass.r1">
                                    </a>
                                    <a href="" class="buy-now">Mua ngay</a>     
                                </div>
                                <div class="product-info">
                                    <a href="" class="product-name">Exfash EF58750-C07</a>
                                    <div class="product-price">8,490,000đ</div>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="product item">
                                <div class="product-top">
                                    <a href="" class="product-thumb">
                                        <img src="https://sunwear.vn/cdn/shop/products/j75005-blk_800x.jpg?v=1590115183" alt="male-eye-glass-2.r1">
                                    </a>
                                    <a href="" class="buy-now">Mua ngay</a>     
                                </div>
                                <div class="product-info">
                                    <a href="" class="product-name">Jubilant J950004-BLK</a>
                                    <div class="product-price">890.000₫</div>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="product item">
                                <div class="product-top">
                                    <a href="" class="product-thumb">
                                        <img src="https://sunwear.vn/cdn/shop/products/EF58773-C05_800x.JPG?v=1544557289" alt="male-eye-glass-3.r1">
                                    </a>
                                    <a href="" class="buy-now">Mua ngay</a>     
                                </div>
                                <div class="product-info">
                                    <a href="" class="product-name">Exfash EF58773-C05</a>
                                    <div class="product-price">600.000₫</div>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="product item">
                                <div class="product-top">
                                    <a href="" class="product-thumb">
                                        <img src="https://sunwear.vn/cdn/shop/products/J75007-GDBR_800x.jpg?v=1588564940" alt="male-eye-glass-4.r1">
                                    </a>
                                    <a href="" class="buy-now">Mua ngay</a>     
                                </div>
                                <div class="product-info">
                                    <a href="" class="product-name">Jubilant J75007-GDBR</a>
                                    <div class="product-price">890.000₫</div>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="product item">
                                <div class="product-top">
                                    <a href="" class="product-thumb">
                                        <img src="https://sunwear.vn/cdn/shop/products/J45043-blk_800x.jpg?v=1590119560" alt="male-eye-glass-1.r2">
                                    </a>
                                    <a href="" class="buy-now">Mua ngay</a>     
                                </div>
                                <div class="product-info">
                                    <a href="" class="product-name">Jubilant J950003</a>
                                    <div class="product-price">890.000₫</div>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="product item">
                                <div class="product-top">
                                    <a href="" class="product-thumb">
                                        <img src="https://sunwear.vn/cdn/shop/products/J75002-MBKL4-5320_800x.jpg?v=1564166841" alt="male-eye-glass-2.r2">
                                    </a>
                                    <a href="" class="buy-now">Mua ngay</a>     
                                </div>
                                <div class="product-info">
                                    <a href="" class="product-name">Jubilant J75002-MBKL4</a>
                                    <div class="product-price">890.000₫</div>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="product item">
                                <div class="product-top">
                                    <a href="" class="product-thumb">
                                        <img src="https://sunwear.vn/cdn/shop/products/EF4026-C40_800x.jpg?v=1523708308" alt="male-eye-glass-3.r2">
                                    </a>
                                    <a href="" class="buy-now">Mua ngay</a>     
                                </div>
                                <div class="product-info">
                                    <a href="" class="product-name">Exfash EF4026-C40</a>
                                    <div class="product-price">1.150.000₫</div>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="product item">
                                <div class="product-top">
                                    <a href="" class="product-thumb">
                                        <img src="https://sunwear.vn/cdn/shop/products/PS-9012-C19-7014_800x.jpg?v=1565032988" alt="male-eye-glass-4.r2">
                                    </a>
                                    <a href="" class="buy-now">Mua ngay</a>     
                                </div>
                                <div class="product-info">
                                    <a href="" class="product-name">Exfash EF4026-C40</a>
                                    <div class="product-price">1.980.000₫</div>
                                </div>
                            </div>
                            </li>
                        </ul>
                    <style>
                    *{
                        padding: 0;
                        margin: 0;
                    }
                    #wrapper{
                        max-width: 1170px;
                        margin: 0 auto;
                    }
                    body{
                        font-family: "Noto Sans", sans-serif;
                        font-optical-sizing: auto;
                        font-style: normal;
                        color: #111;
                        line-height: 1.15;
                    }
                    .navbar{
                        display: flex;
                        align-items: center;
                        justify-content: space-between;
                        flex-direction: row;
                        flex-wrap: wrap;
                        align-content:center ;
                        background-color: greenyellow;
                        padding: 10px;
                        color: black;
                    }
                    .navbar-left{
                        display: flex;
                        align-items: center;
                        flex-wrap: wrap;
                        flex-direction: row;
                    }
                    .navbar-item{
                        padding-left: 20px;
                        cursor: pointer;
                    }
                    .topnav input[type=text] {
                        float: none;
                        display: block;
                        text-align: left;
                        width: 100%;
                        margin: 0;
                        padding: 14px;
                        
                    }
                    .topnav input[type=text] {
                        
                        border: 2px solid #ccc;  
                        border-radius: 30px;
                        padding: 5px 25px;
                        border-radius: 30px;
                    }
                    h3{
                        font-size: 18px;
                        color: #111;
                        padding: 10px 20px;
                        text-transform: uppercase;
                        border: 1px solid #bebebe;
                        display: inline-block;
                    }
                    .headline{
                        text-align: center;
                        margin: 40px 0px;
                    }
                    ul.products{
                        list-style: none;
                        display: flex;
                        flex-wrap: wrap;
                        justify-content: space-between;
                    }
                    ul.products li{
                        flex-basis: 25%;
                        padding-left: 15px;
                        padding-right: 15px;
                        box-sizing: border-box;
                        margin-bottom: 30px;
                    }
                    ul.products li img{
                        max-width: 100%;
                        height: auto;
                    }
                    ul.products li .product-top{
                        position: relative;
                        overflow: hidden;
                    }
                    ul.products li .product-top .product-thumb{
                        display: block;
                    }
                    ul.products li:hover .product-top .product-thumb img{
                        filter: opacity(80%);
                    }
                    ul.products li .product-top .product-thumb img{
                        display: block;
                    }
                    ul.products li .product-top a.buy-now{
                        text-transform: uppercase;
                        text-decoration: none;
                        text-align: center;
                        display: block;
                        background-color: blue;
                        color: #fff;
                        padding: 10px 0px;
                        position: absolute;
                        bottom: -40px;
                        width: 100%;
                        transition: 0.25s ease-in-out;
                        opacity: 0.85;
                    }
                    ul.products li:hover a.buy-now{
                        bottom: 0px;
                    }
                    ul.products li .product-info{
                        padding: 20px 0px;
                    }
                    ul.products li .product-info a{
                        display: block;
                        text-decoration: none;
                    }
                    ul.products li .product-info a.product-cat{
                        font-size: 11px;
                        text-transform: uppercase;
                        color: #9e9e9e;
                        padding: 3px 0px;
                    }
                    ul.products li .product-info a.product-name{
                        color: #334862;
                        padding: 3px 0px;
                        text-transform: uppercase;
                    }
                    ul.products li .product-info .product-price{
                        color:#111;
                        padding: 2px 0px;
                        font-weight: 600;
                    }
                    </style>
                    <!--end content-->
                    
                <?php
                    include 'footer.php';
                ?>    
                </div>                                       
        </body>
</html>
