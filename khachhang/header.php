<!DOCTYPE html><?php
                ob_start();
                include "glodal.php";
                $linksp = "index.php?act=sanpham";
                $lichsu = "index.php?act=lichsu";
                ?>












<script src="assets/users-event.js"></script>
<!-- 
    
Template Name: Impel Car Dealer Responsive HTML Template
Version: 1.0.0
Author: Kamleshyadav
Website: http://himanshusofttech.com/
Purchase: http://themeforest.net/user/kamleshyadav
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- Begin Head -->


<!-- Mirrored from kamleshyadav.com/html/impel/html/bootstrap5/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Nov 2022 03:45:10 GMT -->

<head>
    <title>Impel Car Dealer Responsive HTML Template</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Impel">
    <meta name="keywords" content="">
    <meta name="author" content="hsoft">
    <meta name="MobileOptimized" content="320">
    <!--Srart Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/ion.rangeSlider.css">
    <link rel="stylesheet" type="text/css" href="assets/css/ion.rangeSlider.skinFlat.css">
    <link rel="stylesheet" type="text/css" href="assets/js/plugin/magnific/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="assets/js/plugin/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/js/plugin/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/js/plugin/nice_select/nice-select.css">
    <!----Revolution slider---->
    <link rel="stylesheet" type="text/css" href="assets/js/plugin/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">

</head>

<body>

    <!--menu start-->
    <div class="impl_menu_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <button class="impl_menu_btn">
                        <i class="fa fa-car" aria-hidden="true"></i>
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                    <div class="impl_menu_inner">
                        <div class="impl_logo_responsive">
                            <a href="index.html"><img src="assets/images/logo1.png" alt="Logo" class="img-fluid"></a>
                        </div>
                        <div class="impl_menu">
                            <nav>
                                <div class="menu_cross">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </div>
                                <ul>

                                    <li class="dropdown"><a href="index.php" class="active">home</a>

                                        <ul class="sub-menu">
                                            <li><a href="index.html">Home version1</a></li>
                                            <li><a href="home.html">Home version2</a></li>
                                        </ul>
                                    </li>


                                    <li><a href="<?= $linksp ?>">Shop</a></li>

                                    <li class="dropdown"><a href="javascript:;">Danh mục</a>
                                        <ul class="sub-menu">
                                            <?php
                                            $dsdm = loadall_danhmuc();
                                            foreach ($dsdm as $dm) {
                                                extract($dm);
                                                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                                                echo '
                                                <li> <a href="' . $linkdm . '">' . $name1 . '</a></li>
               
                ';
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                    <?php
                                    if (isset($_SESSION['user'])) {
                                        extract($_SESSION['user']);
                                        $link = "index.php?act=lichsu&id_user=" . $_SESSION['user']['id_user'];
                                        echo '<li>
                                   <a href="' . $link . '">Lịch sử</a>
                               </li>
                    ';
                                    }    ?>

                                    <li class="test"><a href="javascript:;">blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog_left_sidebar.html">blog left sidebar</a></li>
                                            <li><a href="blog_right_sidebar.html">blog right sidebar</a></li>
                                            <li><a href="blog_single.html">blog single</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown"><a href="javascript:;">
                                            <?php
                                            if (isset($_SESSION['user'])) {
                                                extract($_SESSION['user']);
                                            ?>

                                                <div class="header__user">

                                                    <div class="img__user--header">
                                                        <?php
                                                        $hinhsp = $img_pathh . $img;
                                                        echo '<img src="' . $hinhsp . '">';

                                                        ?>
                                                    </div>
                                                    <div class="header__nameuser">

                                                        Xin chào <br>
                                                        <?= $user ?>

                                                    </div>
                                                </div>
                                         
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                                            <li><a href="index.php?act=edit_taikhoan">Cập nhật TT tài khoản</a></li>
                                            <?php if($sodem == 2){ ?>
                                            <li><a href="admin/index.php">Đăng nhập adim</a></li>
                                            <?php } ?>
                                            <li><a href="index.php?act=thoat">Thoát</a></li>
                                        </ul>
                                    </li>
                                    <?php
                                            }else{


                                            ?>

                                    <div class="headercon__step2--dn">
                                        <li class="log">
                                            <a href="index.php?act=dangky">Đăng ký</a>
                                        </li>
                                        <li class="log">
                                            <a href="index.php?act=dangnhap">Đăng nhập</a>
                                        </li>
<?php }?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!------ Preloader Start ------>
    <div id="preloader">
        <div id="status">
            <img src="assets/images/logo.png" alt="" />
            <div class="loader">
                Loading...
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
            </div>
        </div>
    </div>
    <!------ Header Start ------>
    <div class="impl_header_wrapper">
        <div class="impl_logo">
            <a href="index.html"><img src="assets/images/logo.png" alt="Logo" class="img-fluid"></a>
        </div>
        <div class="impl_top_header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="impl_top_info">
                            <ul class="impl_header_social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                            <p class="impl_header_time"><i class="fa fa-clock-o" aria-hidden="true"></i>Working Hours - 6 AM To 8 PM <span>sunday closed</span></p>
                            <ul class="impl_header_icons">
                                <li class="impl_search"><span><i class="fa fa-search" aria-hidden="true"></i></span></li>
                                <li><a href="compare.html"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
                                <li class="cart-popup"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                    <!--shopping cart box-->
                                    <div class="cart-box">
                                        <div class="popup-container">
                                            <div class="cart-entry">
                                                <a href="#" class="image">
                                                    <img src="assets/images/shop/cart_img1.jpg" alt="">
                                                </a>
                                                <div class="content">
                                                    <a href="#" class="title">Bugatti Veyron</a>
                                                    <p class="quantity">Quantity: 1</p>
                                                    <span class="price">4500.000 đ</span>
                                                </div>
                                                <div class="button-x">
                                                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="cart-entry">
                                                <a href="#" class="image">
                                                    <img src="assets/images/shop/cart_img2.jpg" alt="">
                                                </a>
                                                <div class="content">
                                                    <a href="#" class="title">Chevrolet Corvette</a>
                                                    <p class="quantity">Quantity: 1</p>
                                                    <span class="price">900.000 đ</span>
                                                </div>
                                                <div class="button-x">
                                                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="summary">
                                                <div class="subtotal">Sub Total</div>
                                                <div class="price-s">5100.000 đ</div>
                                            </div>
                                            <div class="cart-buttons">
                                                <a href="checkout.html" class="btn impl_btn">View Cart</a>
                                                <a href="checkout.html" class="btn impl_btn">Checkout</a>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>





                        </div>
                    </div>
                    <div class="impl_search_overlay">
                        <div class="impl_search_area">
                            <div class="srch_inner">
                                <form action="#">
                                    <input type="kyw" placeholder="Search here... ">
                                    <button type="submit" name="timkiem"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                                <div class="srch_close_btn">
                                    <span class="srch_close_btn_icon"><i class="fa fa-times" aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--sign-in form-->




    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .content img {
            width: 50px;
            height: 50px;
        }

        .fa-sign-in:before {
            margin-right: 10px;
        }

        .danhmuch1 h1 {
            text-align: center;
            font-size: 22px;
            background-color: #cccccc;
            width: 170px;
            padding: 5px 0px;
            margin: 0 auto;
        }

        .item {
            display: flex;
            margin: 30px 0px 30px 0px;
        }

        .item a {
            padding: 5px 0px;
            border: 1px solid #333;
            margin: -2px 10px;
            width: 100px;
            text-align: center;
            font-size: 17px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        .item a:hover {
            background-color: #333;
        }


        .img__user--header img {
            margin-top: 30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .header__user {
            margin: -48px 0px -5px -40px;
        }

        .log {
            margin: 20px 0px 0px 0px;
        }

        .header__nameuser {
            margin: -37px 30px 0px 67px;
        }

        .headercon__step1--dn {
            margin: -32px 0px 0px 143px;
            padding: 30px 0px;
        }

        .test {
            margin: 0px 460px 0px 0px;
        }
    </style>