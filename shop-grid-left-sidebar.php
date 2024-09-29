<?php 
include "header.php";
// include 'admin/connection.php'; 
      $db = new DB();
?>

<!-- breadcrumb area start -->
<div class="breadcrumb-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap text-center">
                    <h2 class="breadcrumb-title">shop</h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">shop</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<div class="page-main-wrapper pt-98 pb-5 pt-sm-55 pb-sm-30">
    <div class="container">
        <div class="row">
            <!-- shop main wrapper start -->
            <div class="col-lg-9 order-lg-2">
                <div class="shop-product-wrap pb-md-50 pb-sm-5">
                    <div class="shop-top-bar">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="top-bar-left">
                                    <div class="product-view-mode mr-70 mr-sm-20">
                                        <a class="active" href="#" data-bs-target="grid"><i class="fa fa-th"></i></a>
                                        <a href="#" data-bs-target="list"><i class="fa fa-list"></i></a>
                                    </div>
                                    <div class="product-amount">
                                        <p>there are 13 products</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="top-bar-right">
                                    <div class="product-short">
                                        <p>Sort By : </p>
                                        <select class="nice-select" name="sortby">
                                            <option value="trending">Relevance</option>
                                            <option value="sales">Name (A - Z)</option>
                                            <option value="sales">Name (Z - A)</option>
                                            <option value="rating">Price (Low &gt; High)</option>
                                            <option value="date">Rating (Lowest)</option>
                                            <option value="price-asc">Model (A - Z)</option>
                                            <option value="price-asc">Model (Z - A)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop-product-wrap grid row">
                        <?php 
                        if (isset($_GET['id']) && $_GET['id'] !='') 
                          {
                            $rec = $db->qry( " SELECT * FROM product WHERE status=1 AND product_category='{$_GET['id']}'   ORDER BY id DESC ");
                          }
                          else
                          {
                            $rec = $db->qry( " SELECT * FROM product WHERE status=1 ORDER BY id DESC   ");
                          }
                        while ($row = $rec->fetch_object() ) { ?>

                        <div class="col-lg-4 col-md-4 col-sm-6" class="category">
                            <div class="product__item mb-30">
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
                            </div> <!-- end single grid item-->
                            <div class="product-list-item mb-30">
                                <div class="product__list__thumb">
                                    <a href="product-details.php?id=<?php echo $row->id; ?>">
                                        <img class="pri-img" src="admin/uploads/<?php echo $row->product_image; ?>" alt="IMG-PRODUCT" >
                                        
                                    </a>
                                </div>
                                <div class="product__List__content">
                                    <h2><a href="product-details.php?id=<?php echo $row->id; ?>"><?php echo $row->product_name; ?></a></h2>
                                    <h6><a href="product-details.php?id=<?php echo $row->id; ?>"><?php echo $row->product_category; ?></a></h6>
                                    <div class="product__price__ratings mb-30">
                                        <div class="price__box">
                                            <span class="regular-price">PKR .<?php echo $row->product_price; ?><span class="special-price"></span></span>
                                            <span class="old-price"><del>PKR .60.00</del></span>
                                        </div>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                    <p class="mb-40"><?php echo $row->product_description; ?></p>
                                    <div class="action_link">
                                        <a href="#" class="add_btn"><i class="pe-7s-cart"></i> add to cart</a>
                                        <div class="product-action-link">
                                            <a title="Add to Wishlist" href="#"><i class="pe-7s-like"></i></a>
                                            <a title="Quick View" href="#" data-bs-target="#quick_view" data-bs-toggle="modal"><i class="pe-7s-look"></i></a>
                                            <a title="Details" href="#"><i class="pe-7s-copy-file"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- product single column end -->

                        <?php } ?>
                    </div>
                    <div class="paginatoin-area text-center pt-40">
                        <div class="row">
                            <div class="col-12">
                                <ul class="pagination-box">
                                    <li><a class="Previous" href="#">Previous</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a class="Next" href="#"> Next </a></li>
                                </ul>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <!-- shop main wrapper end -->
            <!-- shop sidebar start -->
            <div class="col-lg-3 order-lg-1">
                <div class="shop-sidebar-wrap clearfix pb-md-65">
                    <div class="shop-sidebar mb-30">
                        <h4 class="title mb-20">categories</h4>
                        <ul class="sidebar-category">
                            <li><a href="#">Accessories</a>

                                <?php
                                $rec = $db->qry( " SELECT * FROM catagery WHERE status=1 ");
                               while ($row=$rec->fetch_object()) {
                                ?>
                                    <ul class="children">
                                        <li><a href="shop-grid-left-sidebar.php?id=<?php echo $row->id; ?>"><?php echo $row->catagery_name ?></a></li>
                                    </ul>
                                <?php }?>
                            </li>
                        </ul>
                    </div> <!-- single sidebar end -->
                    <div class="shop-sidebar mb-30">
                        <h4 class="title mb-30">price</h4>
                        <ul class="price-container">
                            <li> 
                                <label class="radio-container">
                                    PKR .2000.00 - PKR .4000.00 
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <?php
                                $rec = $db->qry( " SELECT * FROM product WHERE status=1 AND product_price BETWEEN 2000 AND 4000");
                               while ($row=$rec->fetch_object()) {
                                ?>
                                    <ul class="children">
                                        <li><a href="shop-grid-left-sidebar.php?id=<?php echo $row->id; ?>"></a></li>
                                    </ul>
                                <?php }?>
                            </li>
                            <li> 
                                <label class="radio-container">
                                    PKR .4000.00 - PKR .6000.00 
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                            <li> 
                                <label class="radio-container">
                                    PKR .6000.00 - PKR .8000.00 
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                            <li> 
                                <label class="radio-container">
                                    PKR .8000.00 - PKR .10000.00 
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                        </ul>
                    </div> <!-- single sidebar end -->
                    <div class="shop-sidebar mb-30">
                        <h4 class="title mb-30">popular product</h4>
                        <?php $rel = $db->qry( " SELECT * FROM product WHERE status=1 AND product_price>'5000'   ORDER BY id DESC LIMIT 3"); 
                            while ($row = $rel->fetch_object() ) { 
                        ?>
                        <div class="popular-item mb-20">
                            <div class="pop-item-thumb">
                                <a href="product-details.php?id=<?php echo $row->id; ?>">
                                    <img src="admin/uploads/<?php echo $row->product_image; ?>" alt="IMG-PRODUCT" height="100" width="70">
                                </a>
                            </div>
                            <div class="pop-item-des">
                                <span><a href="product-details.php"><?php echo $row->product_name; ?></a></span>
                                <span class="pop-price">PKR .<?php echo $row->product_price; ?></span>
                            </div>
                        </div> <!-- end single popular item -->
                        <?php } ?>
                    </div> <!-- single sidebar end -->
                </div>
            </div> 
            <!-- shop sidebar end -->
        </div>
    </div>
</div>
<?php 
include "footer.php";
?>