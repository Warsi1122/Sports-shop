<?php session_start(); 

include 'admin/connection.php'; 
      $db1 = new DB();

?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <title>Sports Shop</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon"/>
    <!-- Bootstrap CSS -->
    <link href="assets/css/vendor/bootstrap.min.css" rel="stylesheet">
    <!-- Font-Awesome CSS -->
    <link href="assets/css/vendor/font-awesome.css" rel="stylesheet">
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet">
    <!-- helper class css -->
    <link href="assets/css/helper.css" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="assets/css/plugins.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="assets/css/style.css" rel="stylesheet">
    
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body>

    <!-- header area start -->
    <header>
        <!-- start header top -->
        <div class="header-top black-soft pl-35 pr-35 pl-sm-0 pr-sm-0 pl-lg-0 pr-lg-0 pl-xl-0 pr-xl-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header-call-action text-md-start text-center">
                            <ul>
                                <li><i class="fa fa-mobile"></i>+923261344549</li>
                                <li><i class="fa fa-envelope-open-o"></i>Email us: <a href="#">mazharmunir507@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header-top-right text-md-end text-center">
                            <ul>
                                <?php
                                if(isset($_SESSION['id']) && $_SESSION['id'] !="")
                                {
                                echo "<li class='account-btn list-inline-item position-relative ml-30'><a href='user_order.php'>My Orders</i></a></li>"; }?>
                                <li class="account-btn list-inline-item position-relative ml-30"><a href="#">My Account<i class="fa fa-angle-down"></i></a>
                                    <ul class="account-list position-absolute">
                                <?php   if(isset($_SESSION['id']) && $_SESSION['id'] !="")
                                { ?> <li><a class="active" href="my-account.php">My Account</a></li>
                                <li><a href="logout.php">Logout</a></li>
                                <?php } else {?>
                                        <li><a class="active" href="signin.php">Login</a></li>
                                        <li><a href="signup.php">Register</a></li>
                                        <li><a href="admin/admin_login.php">Admin Login</a></li><?php } ?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- end header top -->

        <!-- start header menu -->
        <div class="header-menu-area sticker pl-35 pr-35 pl-lg-0 pr-lg-0 pl-xl-0 pr-xl-0">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-4">
                         <div class="brand-logo">
                            <a href="index.php">
                                <img src="assets/img/logo/logo1.png" alt="brand logo" height="80">
                            </a>
                         </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="main-menu d-flex justify-content-center">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="index.php">Home </a>
                                    </li>
                                    <li><a href="#">Category <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown">
                                            <ul>
                                                <li><?php
                                                $rec = $db1->qry( " SELECT * FROM catagery WHERE status=1 ");
                                                while ($row=$rec->fetch_object()) {
                                                ?>
                                    <ul class="children">
                                        <li><a href="shop-grid-left-sidebar.php?id=<?php echo $row->id; ?>"><?php echo $row->catagery_name ?></a></li>
                                    </ul>
                                <?php }?></li>
                                            </ul>
                                        </ul>
                                    </li>
                                    <li><a href="shop-grid-left-sidebar.php">shop </a>
                                    </li>
                                    <li><a href="contact-us.php">Contact us</a></li>
                                    <li><a href="about-us.php">About us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
<div class="col-lg-3 col-8">
    <div class="header-cart-option text-end">
        <ul>
            <li>
                <button type="submit" class="search-trigger"><i class="pe-7s-search"></i></button>
            </li>
            <a href="cart.php"> <li class="cart-trigger">
                <i class="pe-7s-cart"></i>
            </li></a>
        </ul>
    </div>
</div>
    <div class="col-12 d-block d-lg-none"><div class="mobile-menu"></div></div>
</div>
</div>
</div>
    <!-- end header menu -->
    
    <!-- Start Search Popup -->
<div class="box-search-content search_active block-bg close__top">
    <form class="minisearch" action="#">
        <div class="field__search">
            <input type="text" placeholder="Search Our Catalog">
            <div class="action">
                <a href="#"><i class="pe-7s-search"></i></a>
            </div>
        </div>
    </form>
    <div class="close__wrap">
        <span>close</span>
    </div>
</div>
    <!-- End Search Popup -->
</header>
<!-- header area end -->