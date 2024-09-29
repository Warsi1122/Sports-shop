<?php 
include "header.php";

    //include 'admin/connection.php'; 
    $db = new DB();
    $rec = $db->qry( " SELECT * FROM product WHERE id='{$_GET['id']}' ");
    $row = $rec->fetch_object();
    $price = $row->product_price;
    $pid = $row->product_category;
    $rel = $db->qry( " SELECT * FROM product WHERE product_category='$pid' ");

?>

<!-- breadcrumb area start -->
<div class="breadcrumb-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap text-center">
                    <h2 class="breadcrumb-title">Product details</h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">product details</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<!-- product details wrapper start -->
<div class="product-details-main-wrapper pt-100 pb-sm-20 pt-sm-55">
    <div class="container">
        <div class="product-details-wrapper">
            <div class="row">
                <div class="col-lg-5">
                    <div class="product-large-slider mb-20">
                        <div class="pro-large-img">
                            <img src="admin/uploads/<?php echo $row->product_image; ?>" alt="IMG-PRODUCT" height="500" width="100" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="product__details__content mb-30 mt-md-40 mt-sm-40">
                        <h2><a href="product-details.php?id=<?php echo $row->id; ?>"><?php echo $row->product_name; ?></a></h2>
                        <div class="ratings mb-10">
                            <span class="good"><i class="fa fa-star"></i></span>
                            <span class="good"><i class="fa fa-star"></i></span>
                            <span class="good"><i class="fa fa-star"></i></span>
                            <span class="good"><i class="fa fa-star"></i></span>
                            <span class="good"><i class="fa fa-star"></i></span>
                            <a class="rev-btn" href="#">1 reviews</a>
                        </div>
                        <div class="price-box">
                            <span class="regular-price">PKR .<?php echo $row->product_price; ?></span>
                            <span class="old-price"><del>PKR .60.00</del></span>
                        </div>   
                        <p class="mt-40 mb-40"><?php echo $row->product_description; ?></p>
                        <div class="quantity mb-20">
                            <h5>Quantity:</h5>
                            <div class="pro-qty"><input type="number" name="quantity" id="quantity" value="1"></div>
                            

                        </div>
                        <input type="hidden" name="id" id="id" value="<?php echo $row->id; ?>">
                        <div class="action_link mb-30">
                            <?php
                                if(isset($_SESSION['id']) && $_SESSION['id'] !="")
                                {
                                   echo' <button type="button" onclick="add_cart('.$row->id.')" class="btn  btn-outline-dark pl-2 pr-2 btn-sm ml-1 mr-1 updatepe-7s-cart check-btn sqr-btn">ADD TO CART
                                        </button>';
                                }
                                else
                                {
                                    echo '<a href="signin.php"><button type="button" name="update"  class="btn  btn-outline-dark pl-2 pr-2 btn-sm ml-1 mr-1 update pe-7s-cart check-btn sqr-btn">ADD TO CART
                            </button></a>';
                                }
                             ?>                            
                        </div>
                        <div class="useful-links mb-20">
                            <a href="wishlist.php?id=<?php echo $row->id; ?>"><i class="fa fa-heart-o"></i>add to wishlist</a>
                            <a href="compare.php?id=<?php echo $row->id; ?>"><i class="fa fa-refresh"></i>compare product</a>
                        </div>
                        <div class="tag-line mb-20">
                            <h5>Tags:</h5>
                            <a href="#">Electronic,</a>
                            <a href="#">Smartphone,</a>
                            <a href="#">Phone</a>
                        </div>
                        <div class="share-icon mb-20">
                            <h5>Share: </h5>
                            <a class="bg-facebook" href="#"><i class="fa fa-facebook"></i>share</a>
                            <a class="bg-twitter" href="#"><i class="fa fa-twitter"></i>tweet</a>
                            <a class="bg-google" href="#"><i class="fa fa-google-plus"></i>google +</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product details wrapper end -->
<script src="plugins/notify/notify.js"></script>
<script type="text/javascript">
    function add_cart(id){
    var quantity = $("#quantity").val();
      $.ajax({
             url:"cart_db.php",
             method:"post",
             dataType:"json",
             data:{id:id,quantity:quantity,action:'save_data'},
             success:function(data)
             {
               console.log(data);
               $.notify("Product add into cart");     
             }
         })
    } 
</script>

<!-- product details reviews start -->
<div class="product-details-reviews pt-98 pt-md-70 pt-sm-10">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="product-review-info mt-half">
                    <ul class="nav nav-pills justify-content-center mb-20" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="nav_desctiption" data-bs-toggle="pill" href="#tab_description" role="tab" aria-controls="tab_description" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav_review" data-bs-toggle="pill" href="#tab_review" role="tab" aria-controls="tab_review" aria-selected="false">Reviews (1)</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab_description" role="tabpanel" aria-labelledby="nav_desctiption">
                            <p>Studio Design' PolyFaune collection features classic products with colorful patterns, inspired by the traditional japanese origamis. To wear with a chino or jeans. The sublimation textile printing process provides an exceptional color rendering and a color, guaranteed overtime. Regular fit, round neckline, long sleeves. 100% cotton, brushed inner side for extra comfort.</p>
                        </div>
                        <div class="tab-pane fade" id="tab_review" role="tabpanel" aria-labelledby="nav_review">
                            <div class="product-review">
                                <div class="customer-review">
                                    <table class="table table-striped table-bordered">
                                        <tbody>
                                            <tr>
                                                <td><strong>Prowin Themes</strong></td>
                                                <td class="text-end">09/04/2018</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <p>It’s both good and bad. If Nikon had achieved a high-quality wide lens camera with a 1 inch sensor, that would have been a very competitive product. So in that sense, it’s good for us. But actually, from the perspective of driving the 1 inch sensor market, we want to stimulate this market and that means multiple manufacturers.</p>
                                                    <div class="product-ratings mt-10">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end of customer-review -->
                                <form action="#" class="review-form">
                                    <h5>Write a review</h5>
                                    <div class="form-group row">
                                        <div class="col">
                                            <label class="col-form-label"><span class="text-danger">*</span> Your Name</label>
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">
                                            <label class="col-form-label"><span class="text-danger">*</span> Your Review</label>
                                            <textarea class="form-control" required></textarea>
                                            <div class="help-block pt-10"><span class="text-danger">Note:</span> HTML is not translated!</div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">
                                            <label class="col-form-label"><span class="text-danger">*</span> Rating</label>
                                            &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                            <input type="radio" value="1" name="rating">
                                            &nbsp;
                                            <input type="radio" value="2" name="rating">
                                            &nbsp;
                                            <input type="radio" value="3" name="rating">
                                            &nbsp;
                                            <input type="radio" value="4" name="rating">
                                            &nbsp;
                                            <input type="radio" value="5" name="rating" checked>
                                            &nbsp;Good
                                        </div>
                                    </div>
                                    <div class="buttons d-flex justify-content-end">
                                        <button class="rev-btn" type="submit">Continue</button>
                                    </div>
                                </form> <!-- end of review-form -->
                            </div> <!-- end of product-review -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<!-- product details reviews end --> 

<!-- related products area start -->
<div class="related-products-area pt-93 pb-43 pt-sm-40 pb-sm-15">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section__title text-center mb-30">
                    <h2>related <span>products</span></h2>
                    <p>Browse the collection of our new products and latest products. You will denfinitely find what you are looking for.</p>
                </div>
            </div>
        </div> <!-- section title end -->
        <div class="product-carousel-active2 row slick-arrow-style2">
            <?php while ($row = $rel->fetch_object() ) { ?>
            <div class="col">
                <div class="product__item mb-50">
                    <div class="product__thumb mb-20">
                        <a class="img-overlay" href="product-details.php?id=<?php echo $row->id; ?>">
                            <img class="pri-img" src="admin/uploads/<?php echo $row->product_image; ?>" alt="IMG-PRODUCT" height="250" width="100"/>
                            <img class="sec-img" src="admin/uploads/<?php echo $row->product_image; ?>" alt="IMG-PRODUCT" height="250" width="100"/>
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
                </div> <!-- product single item end -->
            </div> <!-- product single column end -->
            <?php } ?>
        </div>
    </div>
</div>
<!-- related products area end -->
<?php 

include "footer.php";

 ?>