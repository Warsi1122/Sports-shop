<?php 

include "header.php";
//include 'admin/connection.php'; 
    $db = new DB();
    $qry = $db->qry("SELECT * FROM cart ORDER BY id DESC");
 ?>

<!-- breadcrumb area start -->
<div class="breadcrumb-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap text-center">
                    <h2 class="breadcrumb-title">checkout</h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">checkout</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<!-- checkout main wrapper start -->
<div class="checkout-page-wrapper pt-98 pb-98 pt-sm-60 pb-sm-60">
    <div class="container">
        <div class="row">
            <!-- Checkout Billing Details -->
            <div class="col-lg-6">
                <div class="checkout-billing-details-wrap">
                    <h2>Billing Details</h2>
                    <div class="billing-form-wrap">
                        <form action="" method="post" id="myform">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-input-item">
                                        <label for="f_name">First Name</label>
                                        <input type="text" id="f_name" name="f_name" placeholder="First Name"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input-item">
                                        <label for="l_name">Last Name</label>
                                        <input type="text" id="l_name" name="l_name" placeholder="Last Name"/>
                                    </div>
                                </div>
                            </div>

                            <div class="single-input-item">
                                <label for="email" >Email Address</label>
                                <input type="email" id="email" name="email" placeholder="Email Address"/>
                            </div>

                            <div class="single-input-item">
                                <label for="country">Country</label>
                                <select id="country" name="country">
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="India">India</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="England">England</option>
                                    <option value="Chaina">China</option>
                                </select>
                            </div>

                            <div class="single-input-item">
                                <label for="streetaddress">Street address</label>
                                <input type="text" id="streetaddress" name="streetaddress" placeholder="Street address Line 1"/>
                            </div>

                            <div class="single-input-item">
                                <label for="town">Town / City</label>
                                <input type="text" id="town" name="town"  placeholder="Town / City"/>
                            </div>

                            <div class="single-input-item">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" name="phone" placeholder="Phone" />
                            </div>
                            <input type="hidden" id="pids" name="pids" value="" />
                            <input type="hidden" id="total" name="total" value="" />

                            <div class="single-input-item">
                                <label for="ordernote">Order Note</label>
                                <textarea name="ordernote" id="ordernote" cols="30" rows="3" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                            </div>
                            <div class="summary-footer-area mt-5">
                                <button type="submit" name="submit" id="submit" class="check-btn sqr-btn" >Place Order</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Order Summary Details -->
            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="order-summary-details">
                    <h2>Your Order Summary</h2>
                    <div class="order-summary-content">
                        <!-- Order Summary Table -->
                        <div class="order-summary-table table-responsive text-center">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Products</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $total = 0;
                                $pids = "";
                                while ($rel = $qry->fetch_object() ) {
                                    $pid = $rel->pid;
                                    $pids .= $pid;
                                    $rec = $db->qry("SELECT * FROM product WHERE id=$pid ORDER BY id DESC");
                                        $row = $rec->fetch_object();
                                        $quantity = $rel->quantity;
                                        $price = $row->product_price;
                                        $price = $price*$quantity;
                                        $total = $total + $price;
                                 ?>
                                    <tr>
                                        <td><a href="#"><?php echo $row->product_name ?> <strong> × <?php echo $rel->quantity ?></strong></a></td>
                                        <td>PKR .<?php echo $price ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>Sub Total</td>
                                        <td><strong>PKR .<?php echo $total ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td>Shipping</td>
                                        <td class="d-flex justify-content-center">
                                            <ul class="shipping-type">
                                                <li>
                                                    <div class="custom-control custom-radio d-flex">
                                                        <input type="radio" id="flatrate" name="shipping" class="custom-control-input" checked />
                                                        <label class="custom-control-label" for="flatrate">Flat Rate: PKR .300.00</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Total Amount</td>
                                        <td><strong>PKR .<?php echo $total+300 ?></strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- Order Payment Method -->
                        <div class="order-payment-method">
                            <div class="single-payment-method show">
                                <div class="payment-method-name">
                                    <div class="custom-control custom-radio d-flex">
                                        <input type="radio" id="cashon" name="paymentmethod" value="cash" class="custom-control-input" checked  />
                                        <label class="custom-control-label" for="cashon">Cash On Delivery</label>
                                    </div>
                                </div>
                                <div class="payment-method-details" data-method="cash">
                                    <p>Pay with cash upon delivery.</p>
                                </div>
                            </div>
                        </div>
                        <h2 class="text-danger"><span id="submit_success"></span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<?php 

include "footer.php";

 ?>
<script src="admin/plugins/notify/notify.js"></script>

<script type="text/javascript">
    $("#pids").val(<?php echo $pids ?>);
    $("#total").val(<?php echo $total ?>);
    function pageRedirect() {
        window.location.replace("index.php");
    }
    $(document).ready(function(){
        function completeHandler(event)
        {
          var res = JSON.parse(event.target.responseText);
            console.log(res);
            //$('#submit').html("Submit");
            
            if (res.Error==='true')
            {
              $.notify("Oh No!");
              $("#submit_success").html(res.msg);
            }
            else
            {
              $("#submit_success").html(res.msg);
              $('#myform')[0].reset();
              $('#myform').trigger('reset');      
            setTimeout("pageRedirect()", 1500);
            }
           // window.location.reload();                
        }
        $('#myform').submit(function(event){
        event.preventDefault();
        var f_name = $("#f_name").val();
        var l_name = $("#l_name").val();
        var email = $("#email").val();
        var country = $("#country").val();
        var streetaddress = $("#streetaddress").val();
        var town = $("#town").val();
        var phone = $("#phone").val();
        var ordernote = $("#ordernote").val();
          var error = false;
          if (f_name =='') 
          {
            $.notify("First Name is Required");
            error = true;
          }
          if (l_name =='') 
          {
            $.notify("Last Name is Required");
            error = true;
          }
          if (email =='') 
          {
            $.notify("Email is Required");
            error = true;
          }
          if (country =='') 
          {
            $.notify("Country is Required");
            error = true;
          }
          if (streetaddress =='') 
          {
            $.notify("Street Address is Required");
            error = true;
          }
          if (town =='') 
          {
            $.notify("Town/City is Required");
            error = true;
          }
          if (phone =='') 
          {
            $.notify("Phone Number is Required");
            error = true;
          }
          if (ordernote =='') 
          {
            $.notify("Order Note is Required");
            error = true;
          }
      
          if (!error) 
          {
             $('#submit').html('<span class="spinner-border spinner-border-sm"></span>Loading...');
                var fd = new FormData(document.getElementById("myform"));
                var ajax = new XMLHttpRequest();
                ajax.addEventListener("load",completeHandler,false);
                ajax.open("POST","checkout_db.php");
                ajax.send(fd);
          }
      });
    });

</script>

<!-- checkout main wrapper end -->
