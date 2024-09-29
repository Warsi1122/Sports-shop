<?php 

include "header.php";

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

    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap text-center">
                        <h2 class="breadcrumb-title">contact us</h2>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">contact us</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- about wrapper start -->
    <div class="contact-top-area pt-98 pb-98 pt-sm-60 pb-sm-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__title brand-color3 text-center mb-45">
                        <h2>contact us</h2>
                        <p>Variety of product categories, tens of products, only five-stars reviews. Browse the collections right now.</p>
                    </div>
                </div>
            </div> <!-- section title end -->
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="contact-single-info mb-30 text-center">
                        <div class="contact-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <h3>address street</h3>
                        <p>Address : No 40 Baria Sreet<br>NewYork City, United States.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="contact-single-info mb-30 text-center">
                        <div class="contact-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <h3>number phone</h3>
                        <p>Phone 1: 0(1234) 567 89012<br>Phone 2: 0(987) 567 890</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="contact-single-info mb-30 text-center">
                        <div class="contact-icon">
                            <i class="fa fa-fax"></i>
                        </div>
                        <h3>number fax</h3>
                        <p>Fax 1: 0(1234) 567 89012<br>Fax 2: 0(987) 567 890</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="contact-single-info mb-30 text-center">
                        <div class="contact-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <h3>address email</h3>
                        <p>info@prowin.com<br>yourname@prowin.com</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="contact-message pt-60 pt-sm-20">
                        <form id="contact-form" action="https://htmldemo.net/prowin/prowin/assets/php/mail.php" method="post" class="contact-form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="first_name" placeholder="Name *" type="text">    
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="phone" placeholder="Phone *" type="text">   
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="email_address" placeholder="Email *" type="text">    
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="contact_subject" placeholder="Subject *" type="text">   
                                </div>
                               <div class="col-12">
                                    <div class="contact2-textarea text-center">
                                        <textarea placeholder="Message *" name="message"  class="form-control2" required=""></textarea>     
                                    </div>   
                                    <div class="contact-btn text-center">
                                        <button class="check-btn sqr-btn" type="submit">Send Message</button> 
                                    </div> 
                                </div> 
                                <div class="col-12 d-flex justify-content-center">
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                        </form>    
                    </div> 
               </div>
           </div>
        </div>
    </div>
    <!-- about wrapper end -->
<?php 

include "footer.php";

 ?>