<?php 

include "header.php";

//include 'admin/connection.php'; 
$db = new DB();

// for crousal 
$crl = $db->qry( " SELECT * FROM product WHERE status=1 AND product_price>5000 ORDER BY id DESC LIMIT 2  ");

?>


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

<!-- slider area start -->
<div class="slider-area">
    <div class="hero-slider-active hero__1 slick-arrow-style">
        <div class="single-slider d-flex align-items-center" style="background-image: url(assets/img/slider/1.jpeg);">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="slider-text slider-style-1 text-center">
                            <h4>Sports Product Sale</h4>
                            <h1>Save Up To <span>20%</span> Off</h1>
                            <p>On Cricket, Football, Vollyball, Hockey & Basketball products</p>
                            <a class="home-btn" href="shop-grid-left-sidebar.php">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
            <span class="herobanner-progress"></span>
        </div>
        <div class="single-slider d-flex align-items-center" style="background-image: url(assets/img/slider/home1-slider2.jpg);">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="slider-text slider-style-1 text-center">
                            <h4>Ski & Snowboard Sale</h4>
                            <h1>Save Up To <span>20%</span> Off</h1>
                            <p>On skis, boards, boots, bindings, outerwear, footwear and more!</p>
                            <a class="home-btn" href="shop-grid-left-sidebar.php">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
            <span class="herobanner-progress"></span>
        </div>
    </div>
</div>
<!-- slider area end -->

<!-- features item area start -->
<div class="features-item-area pt-100 pt-sm-55">
    <div class="container-fluid">
        <div class="custom-row d-flex">
            <div class="col-lg-4">
                <div class="feature-single-item">
                    <div class="feature__img">
                        <div class="feature__thum">
                            <img src="assets/img/features/images (2).png" width="100" height="550" alt="">
                        </div>
                        <div class="feature__des">
                            <div class="feature__content">
                                <h3>Splitboard & Accessories</h3>
                                <a href="shop.php">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="text__left">
                        <span>Splitboard & Accessories</span>
                    </div>
                </div> <!-- features single item end -->
            </div> <!-- features single column end -->
            <div class="col-lg-4">
                <div class="feature-single-item">
                    <div class="feature__thum">
                        <img src="assets/img/features/cms_1.2.jpg" alt="">
                    </div>
                    <div class="feature__des">
                        <div class="feature__content">
                            <h3>Snowboard Packages</h3>
                            <a href="shop.php">Shop Now</a>
                        </div>
                    </div>
                    <div class="text__left">
                        <span>Snowboard Packages</span>
                    </div>
                </div> <!-- features single item end -->
            </div> <!-- features single column end -->
            <div class="col-lg-4">
                <div class="feature-single-item">
                    <div class="feature__thum">
                        <img src="assets/img/features/cms_1.3.jpg" alt="">
                    </div>
                    <div class="feature__des">
                        <div class="feature__content">
                            <h3>Used Snowboard Gear</h3>
                            <a href="shop.php">Shop Now</a>
                        </div>
                    </div>
                    <div class="text__left">
                        <span>Used Snowboard Gear</span>
                    </div>
                </div> <!-- features single item end -->
            </div> <!-- features single column end -->
        </div>
    </div>
</div>
<!-- features item area end -->

<!-- product main wrapper start -->
<div class="section-wrapper pt-96 pt-md-120 pb-43 pt-sm-13 pb-sm-17">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="section__title text-center mb-45">
                    <h2>new <span>products</span></h2>
                    <p>Browse the collection of our new products and latest products. You will denfinitely find what you are looking for.</p>
                </div>
            </div>
        </div> <!-- section title end -->
        <div class="product-carousel-active row slick-arrow-style2" data-row="2">
         <?php $rec = $db->qry( " SELECT * FROM product WHERE status=1 ORDER BY id DESC LIMIT 8  ");
    while ($row = $rec->fetch_object() ) {
      ?>            
            <div class="col">
                <div class="product__item mb-50">
                    <div class="product__thumb mb-20">
                        <a class="img-overlay" href="product-details.php?id=<?php echo $row->id; ?>">
                            <img class="pri-img" src="admin/uploads/<?php echo $row->product_image; ?>" alt="IMG-PRODUCT" height="300" width="600">
                            <img class="sec-img" src="admin/uploads/<?php echo $row->product_image; ?>" alt="IMG-PRODUCT" height="300" width="600">
                        </a>
                        <div class="action_link">
                            <a title="Add to Cart" href="cart.php?id=<?php echo $row->id; ?>"><i class="pe-7s-cart"></i></a>
                            <a title="Add to Wishlist" href="wishlist.php?id=<?php echo $row->id; ?>"><i class="pe-7s-like"></i></a>
                            <a title="Quick View" href="product-details.php?id=<?php echo $row->id; ?>" data-bs-target="#quick_view" data-bs-toggle="modal"><i class="pe-7s-look"></i></a>
                            <a title="Details" href="product-details.php?id=<?php echo $row->id; ?>"><i class="pe-7s-copy-file"></i></a>
                        </div>
                    </div>
                    <div class="product__content">
                        <h6><a href="product-details.php?id=<?php echo $row->id; ?>"><?php echo $row->product_name; ?></a></h6>
                        <p><a href="product-details.php?id=<?php echo $row->id; ?>"><?php echo $row->product_category; ?></a></p>
                        <div class="product__price__Ratings">
                            <div class="price__box">
                                <span class="regular-price"><span class="special-price">PKR .<?php echo $row->product_price; ?></span></span>
                                <span class="old-price"><del>PKR .8000.00</del></span>
                            </div>
                            <div class="ratings">
                                <span class="good"><i class="fa fa-star"></i></span>
                                <span class="good"><i class="fa fa-star"></i></span>
                                <span class="good"><i class="fa fa-star"></i></span>
                                <span class="good"><i class="fa fa-star"></i></span>
                                <span class="good"><i class="fa fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div> <!-- product single item end -->
            </div> <!-- product single column end -->
            <?php } ?>            
        </div>
    </div>
</div>
<!-- product main wrapper end -->

<!-- hot deals wrapper start -->
<div class="section-wrapper hot-deals-area pt-98 pt-sm-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section__title text-center mb-45">
                    <h2 class="white">hot <span>deals</span></h2>
                    <p class="white">The variety of product types, dozens of products are discounted on the day Browse the gallery right now.</p>
                </div>
            </div>
        </div> <!-- section title end -->
        <div class="row">
            <div class="col-12">
                <div class="hot_deals_carousel_active slick-arrow-style2">
                   <?php while ($row = $crl->fetch_object() ) { ?>
                    <div class="product-details-carousel-item">
                        <div class="product__details_carousel_inner">
                            <div class="product__item">
                                <div class="product__thumb">
                                    <a class="img-overlay" href="product-details.php?id=<?php echo $row->id; ?>">
                                        <img class="pri-img" src="admin/uploads/<?php echo $row->product_image; ?>" alt="" height=500 width=200>
                                        <img class="sec-img" src="admin/uploads/<?php echo $row->product_image; ?>" alt="" height=500 width=200>
                                    </a>
                                </div>
                                <div class="discount-text">
                                    <h4>sale up to 70% off</h4>
                                </div>
                            </div>
                            <div class="product_detail_content_inner">
                                <h2><a href="product-details.php?id=<?php echo $row->id; ?>"><?php echo $row->product_name; ?></a></h2>
                                <h6><a href="product-details.php?id=<?php echo $row->id; ?>"><?php echo $row->product_category; ?></a></h6>
                                <div class="product__price__ratings mb-20">
                                    <div class="price__box">
                                        <span class="regular-price"><span class="special-price">PKR .<?php echo $row->product_price; ?></span></span>
                                        <span class="old-price"><del>PKR .8000.00</del></span>
                                    </div>
                                    <div class="ratings">
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                    </div>
                                </div>
                                <p class="mb-30"><?php echo $row->product_description; ?></p>
                                <a href="#" class="add_btn"><i class="pe-7s-cart"></i> add to cart</a>
                                <div class="product-countdown" data-countdown="2024/12/19"></div>
                            </div>
                        </div>
                    </div> <!-- single carousel item end -->
                <?php } ?>
                   <!--  <div class="product-details-carousel-item">
                        <div class="product__details_carousel_inner">
                            <div class="product__item">
                                <div class="product__thumb">
                                    <a class="img-overlay" href="product-details.php">
                                        <img class="pri-img" src="assets/img/product/product-big-2.jpg" alt="">
                                        <img class="sec-img" src="assets/img/product/product-big-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="discount-text">
                                    <h4>sale up to 70% off</h4>
                                </div>
                            </div>
                            <div class="product_detail_content_inner">
                                <h2><a href="product-details.php">turbo snowboard</a></h2>
                                <h6><a href="product-details.php">studio design</a></h6>
                                <div class="product__price__ratings mb-20">
                                    <div class="price__box">
                                        <span class="regular-price"><span class="special-price">£50.00</span></span>
                                        <span class="old-price"><del>£60.00</del></span>
                                    </div>
                                    <div class="ratings">
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                    </div>
                                </div>
                                <p class="mb-30">Effective MegaPixel: About 2MPModel Number: VPAI720Screen Size: NOHDMI Output: NoWaterproof: NoImage Stabilization: No Image StabilizationPackage: NoNightShot Function: NoVolume: 41x41x41mmThe Surround Sound Support: NoWideangle: 360°*360°Maximum Aperture: 210 degree wide angleBuilt-in</p>
                                <a href="#" class="add_btn"><i class="pe-7s-cart"></i> add to cart</a>
                                <div class="product-countdown" data-countdown="2024/12/16"></div>
                            </div>
                        </div>
                    </div> --> <!-- single carousel item end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hot deals wrapper end -->

<!-- our product area start -->
<div class="section-wrapper pt-98 pb-43 pt-sm-50 pb-sm-17">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section__title text-center mb-30">
                    <h2>our <span>products</span></h2>
                    <p>Browse the collection of our new products and latest products. You will denfinitely find what you are looking for.</p>
                </div>
            </div>
        </div> <!-- section title end -->
        <div class="row">
            <div class="col-12">
                <div class="product-tab d-flex justify-content-center mb-45">
                    <ul class="nav d-flex justify-content-center">
                        <li>
                            <a class="active" data-bs-toggle="tab" href="#tab_one">new arrival</a>
                        </li>
                        <li>
                            <a data-bs-toggle="tab" href="#tab_two">best seller</a>
                        </li>
                        <li>
                            <a data-bs-toggle="tab" href="#tab_three">featured products</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab_one">
                        <div class="product-carousel-active2 row slick-arrow-style2">
                            <?php $rec = $db->qry( " SELECT * FROM product WHERE status=1 ORDER BY id DESC LIMIT 5  ");
                            while ($row = $rec->fetch_object() ) { ?>
                            <div class="col">
                                <div class="product__item mb-50">
                                    <div class="product__thumb mb-20">
                                        <a class="img-overlay" href="product-details.php?id=<?php echo $row->id; ?>">
                                            <img class="pri-img" src="admin/uploads/<?php echo $row->product_image; ?>" alt="IMG-PRODUCT" height="250" width="100">
                                            <img class="sec-img" src="admin/uploads/<?php echo $row->product_image; ?>" alt="IMG-PRODUCT" height="250" width="100">
                                        </a>
                                        <div class="action_link">
                                            <a title="Add to Cart" href="cart.php?id=<?php echo $row->id; ?>"><i class="pe-7s-cart"></i></a>
                                            <a title="Add to Wishlist" href="wishlist.php?id=<?php echo $row->id; ?>"><i class="pe-7s-like"></i></a>
                                            <a title="Quick View" href="product-details.php?id=<?php echo $row->id; ?>" data-bs-target="#quick_view" data-bs-toggle="modal"><i class="pe-7s-look"></i></a>
                                            <a title="Details" href="product-details.php?id=<?php echo $row->id; ?>"><i class="pe-7s-copy-file"></i></a>
                                        </div>
                                    </div>
                                    <div class="product__content">
                                        <h6><a href="product-details.php?id=<?php echo $row->id; ?>"><?php echo $row->product_name; ?></a></h6>
                                        <p><a href="product-details.php?id=<?php echo $row->id; ?>"><?php echo $row->product_category; ?></a></p>
                                        <div class="product__price__Ratings">
                                            <div class="price__box">
                                                <span class="regular-price">PKR .<?php echo $row->product_price; ?></span>
                                            </div>
                                            <div class="ratings">
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- product single item end -->
                            </div> <!-- product single column end -->
                        <?php } ?>
                            
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab_two">
                        <div class="product-carousel-active2 row slick-arrow-style2">
                             <?php $rec = $db->qry( " SELECT * FROM product WHERE status=1 AND product_price>4400 ORDER BY id DESC LIMIT 5  ");
                            while ($row = $rec->fetch_object() ) {
                              ?>
                            <div class="col">
                                <div class="product__item mb-50">
                                    <div class="product__thumb mb-20">
                                        <a class="img-overlay" href="product-details.php?id=<?php echo $row->id; ?>">
                                            <img class="pri-img" src="admin/uploads/<?php echo $row->product_image; ?>" alt="IMG-PRODUCT" height="250" width="100">
                                            <img class="sec-img" src="admin/uploads/<?php echo $row->product_image; ?>" alt="IMG-PRODUCT" height="250" width="100">
                                        </a>
                                        <div class="action_link">
                                            <a title="Add to Cart" href="cart.php?id=<?php echo $row->id; ?>"><i class="pe-7s-cart"></i></a>
                                            <a title="Add to Wishlist" href="wishlist.php?id=<?php echo $row->id; ?>"><i class="pe-7s-like"></i></a>
                                            <a title="Quick View" href="product-details.php?id=<?php echo $row->id; ?>" data-bs-target="#quick_view" data-bs-toggle="modal"><i class="pe-7s-look"></i></a>
                                            <a title="Details" href="product-details.php?id=<?php echo $row->id; ?>"><i class="pe-7s-copy-file"></i></a>
                                        </div>
                                    </div>
                                    <div class="product__content">
                                        <h6><a href="product-details.php?id=<?php echo $row->id; ?>"><?php echo $row->product_name; ?></a></h6>
                                        <p><a href="product-details.php?id=<?php echo $row->id; ?>"><?php echo $row->product_category; ?></a></p>
                                        <div class="product__price__Ratings">
                                            <div class="price__box">
                                                <span class="regular-price">PKR .<?php echo $row->product_price; ?></span>
                                            </div>
                                            <div class="ratings">
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- product single item end -->
                            </div> <!-- product single column end -->
                            <?php } ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab_three">
                        <div class="product-carousel-active2 row slick-arrow-style2">
                             <?php $rec = $db->qry( " SELECT * FROM product WHERE status=1 AND product_price<4400 ORDER BY id DESC LIMIT 5  ");
                            while ($row = $rec->fetch_object() ) {
                              ?>
                            <div class="col">
                                <div class="product__item mb-50">
                                    <div class="product__thumb mb-20">
                                        <a class="img-overlay" href="product-details.php?id=<?php echo $row->id; ?>">
                                            <img class="pri-img" src="admin/uploads/<?php echo $row->product_image; ?>" alt="IMG-PRODUCT" height="250" width="100">
                                            <img class="sec-img" src="admin/uploads/<?php echo $row->product_image; ?>" alt="IMG-PRODUCT" height="250" width="100">
                                        </a>
                                        <div class="action_link">
                                            <a title="Add to Cart" href="cart.php?id=<?php echo $row->id; ?>"><i class="pe-7s-cart"></i></a>
                                            <a title="Add to Wishlist" href="wishlist.php?id=<?php echo $row->id; ?>"><i class="pe-7s-like"></i></a>
                                            <a title="Quick View" href="product-details.php?id=<?php echo $row->id; ?>" data-bs-target="#quick_view" data-bs-toggle="modal"><i class="pe-7s-look"></i></a>
                                            <a title="Details" href="product-details.php?id=<?php echo $row->id; ?>"><i class="pe-7s-copy-file"></i></a>
                                        </div>
                                    </div>
                                    <div class="product__content">
                                        <h6><a href="product-details.php?id=<?php echo $row->id; ?>"><?php echo $row->product_name; ?></a></h6>
                                        <p><a href="product-details.php?id=<?php echo $row->id; ?>"><?php echo $row->product_category; ?></a></p>
                                        <div class="product__price__Ratings">
                                            <div class="price__box">
                                                <span class="regular-price">PKR .<?php echo $row->product_price; ?></span>
                                            </div>
                                            <div class="ratings">
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- product single item end -->
                            </div> <!-- product single column end -->
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- our product area end -->

<!-- testimonial area start -->
<div class="section-wrapper testimonial-wrapper pt-98 pb-100 pt-sm-55 pb-sm-55">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="testimonial-carousel-active">  
                    <div class="testimonial-slide-item text-center">
                        <div class="client-thumb text-center">
                            <img src="admin/uploads/5.jpg" height="100" width="100" alt="">
                        </div>
                        <div class="testimonial-content">
                            <div class="email-box">
                                <p class="white">sportstore@gmail.com</p>
                            </div>
                            <div class="testimonial-des">
                                <p class="white">Great theme, excellent support. We had a few small issues with getting the dropdown menus to work and support 
                                fixed them and let us know which files were changed so that we could replicate from dev to production.</p>
                            </div>
                            <div class="client-namepost">
                                <p class="white">Orando bloom</p>
                            </div>
                        </div>
                    </div> <!-- testimonial single item end -->
                    <div class="testimonial-slide-item text-center">
                        <div class="client-thumb">
                            <img src="assets/img/testimonial/client-2.png" alt="">
                        </div>
                        <div class="testimonial-content">
                            <div class="email-box">
                                <p class="white">sportstore@gmail.com</p>
                            </div>
                            <div class="testimonial-des">
                                <p class="white">Great theme, excellent support. We had a few small issues with getting the dropdown menus to work and support 
                                fixed them and let us know which files were changed so that we could replicate from dev to production.</p>
                            </div>
                            <div class="client-namepost">
                                <p class="white">Orando bloom</p>
                            </div>
                        </div>
                    </div> <!-- testimonial single item end -->
                    <div class="testimonial-slide-item text-center">
                        <div class="client-thumb">
                            <img src="assets/img/testimonial/client-3.png" alt="">
                        </div>
                        <div class="testimonial-content">
                            <div class="email-box">
                                <p class="white">sportstore.com</p>
                            </div>
                            <div class="testimonial-des">
                                <p class="white">Great theme, excellent support. We had a few small issues with getting the dropdown menus to work and support 
                                fixed them and let us know which files were changed so that we could replicate from dev to production.</p>
                            </div>
                            <div class="client-namepost">
                                <p class="white">Orando bloom</p>
                            </div>
                        </div>
                    </div> <!-- testimonial single item end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimonial area end -->

<!-- blog area start -->
<div class="section-wrapper blog-wrapper pt-100 pb-70 pb-lg-90 pb-md-65 pt-sm-60 pb-sm-55">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="blog-section-title text-center text-md-start mb-30">
                    <h2>latest <span>blogs</span> </h2>
                    <p>Do you want to present posts in the best way to highlight interesting moments of your blog? Focus on the latest news!</p>
                </div>
                <div class="blog-content-wrapper">
                    <div class="blog-item-content mb-30">
                        <div class="blog-img-holder">
                            <a href="blog-details.php"><img src="assets/img/blog/blog-1.jpg" alt=""></a>
                        </div>
                        <div class="blog-item-content-inner">
                            <div class="blog-content-holder">
                                <h3><a href="blog-details.php">This is First Post For XipBlog</a></h3>
                                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since </p>  
                                <a class="read_more" href="blog-details.php">read more</a>
                            </div>
                        </div>
                    </div> <!-- single blog item end -->
                    <div class="blog-item-content mb-30">
                        <div class="blog-img-holder">
                                <a href="blog-details.php"><img src="assets/img/blog/blog-2.jpg" alt=""></a>
                        </div>
                        <div class="blog-item-content-inner">
                            <div class="blog-content-holder">
                                <h3><a href="blog-details.php">This is Fourth Post For XipBlog</a></h3>
                                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since </p>  
                                <a class="read_more" href="blog-details.php">read more</a>
                            </div>
                        </div>
                    </div> <!-- single blog item end -->
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="newsletter-area">
                    <div class="title-newsletter mb-20">
                        <h2>Join our newsletter to receive monthly incentives</h2>
                        <p>You can be always up to date with our company news!</p>
                    </div>
                    <form id="mc-form" >
                        <input type="email" id="mc-email" autocomplete="off" class="newsletter-field" placeholder="enter your email">
                        <button class="submit-btn" type="submit" id="mc-submit">subscribe !</button>
                        <p>*Don’t worry, we won’t spam our customers mailboxes</p>
                    </form>
                    <!-- mailchimp-alerts Start -->
                    <div class="mailchimp-alerts">
                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                    </div><!-- mailchimp-alerts end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog area end -->



<?php 

include "footer.php";

?>