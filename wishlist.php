<?php 

include "header.php";

 ?>

                    <div class="col-lg-3 col-8">
                        <div class="header-cart-option text-end">
                            <ul>
                                <li>
                                    <button type="submit" class="search-trigger"><i class="pe-7s-search"></i></button>
                                </li>
                                <li class="cart-trigger"><i class="pe-7s-cart"></i>
                                    <ul class="mini-cart-drop-down">
                                        <li class="cart-top mb-20">
                                            <div class="cart-img">
                                                <a href="product-details.html"><img alt="" src="assets/img/cart/cart-1.jpg"></a>
                                            </div>
                                            <div class="cart-info text-left">
                                                <h4><a href="product-details.html">Turbo snowboard</a></h4>
                                                <span> <span>1 x </span>£165.00</span>
                                            </div>
                                            <div class="del-icon">
                                                <i class="fa fa-times-circle"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mini-cart-text">Sub-total:</div>
                                            <div class="mini-cart-price">£48.94</div>
                                        </li>
                                        <li>
                                            <div class="mini-cart-text">Eco Tax (-2.00):</div>
                                            <div class="mini-cart-price">£1.51</div>
                                        </li>
                                        <li>
                                            <div class="mini-cart-text">Vat (20%):</div>
                                            <div class="mini-cart-price">£9.79</div>
                                        </li>
                                        <li>
                                            <div class="mini-cart-text">Total: </div>
                                            <div class="mini-cart-price"><span>£60.24</span></div>
                                        </li>
                                        <li>
                                            <a class="cart-button mt-20" href="checkout.html">checkout</a>
                                        </li>
                                    </ul>
                                </li>
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

    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap text-center">
                        <h2 class="breadcrumb-title">wishlist</h2>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">wishlist</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- checkout main wrapper start -->
    <div class="page-padding pt-100 pb-100 pt-sm-60 pb-sm-60">
        <div class="container">
            <!-- Wishlist Page Content Start -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Wishlist Table Area -->
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="pro-thumbnail">Thumbnail</th>
                                <th class="pro-title">Product</th>
                                <th class="pro-price">Price</th>
                                <th class="pro-quantity">Stock Status</th>
                                <th class="pro-subtotal">Add to Cart</th>
                                <th class="pro-remove">Remove</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/img/product/product-1.jpg"
                                                                           alt="Product"/></a></td>
                                <td class="pro-title"><a href="#">element snowboard</a></td>
                                <td class="pro-price"><span>$295.00</span></td>
                                <td class="pro-quantity"><span class="text-success">In Stock</span></td>
                                <td class="pro-subtotal"><a href="cart.html" class="check-btn">Add to Cart</a></td>
                                <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                            <tr>
                                <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/img/product/product-2.jpg"
                                                                           alt="Product"/></a></td>
                                <td class="pro-title"><a href="#">raygun snowboard</a></td>
                                <td class="pro-price"><span>$275.00</span></td>
                                <td class="pro-quantity"><span class="text-success">In Stock</span></td>
                                <td class="pro-subtotal"><a href="cart.html" class="check-btn">Add to Cart</a></td>
                                <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                            <tr>
                                <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/img/product/product-3.jpg"
                                                                           alt="Product"/></a></td>
                                <td class="pro-title"><a href="#">berzerker snoeboard</a></td>
                                <td class="pro-price"><span>$295.00</span></td>
                                <td class="pro-quantity"><span class="text-danger">Stock Out</span></td>
                                <td class="pro-subtotal"><a href="cart.html" class="check-btn disabled">Add to Cart</a></td>
                                <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                            <tr>
                                <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/img/product/product-4.jpg"
                                                                           alt="Product"/></a></td>
                                <td class="pro-title"><a href="#">turbo snowboard</a></td>
                                <td class="pro-price"><span>$110.00</span></td>
                                <td class="pro-quantity"><span class="text-success">In Stock</span></td>
                                <td class="pro-subtotal"><a href="cart.html" class="check-btn">Add to Cart</a></td>
                                <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Wishlist Page Content End -->
        </div>
    </div>
    <!-- checkout main wrapper end -->
<?php 

include "footer.php";

 ?>