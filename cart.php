<?php 

include "header.php";

//include 'admin/connection.php'; 
$db = new DB();
      
    $rec = $db->qry( " SELECT c.id AS cid,c.quantity AS quantity,p.product_price AS price,p.product_image AS image,p.product_name AS name FROM cart c Left Join product p ON p.id=c.pid ORDER BY c.id DESC");

?>

<!-- breadcrumb area start -->
<div class="breadcrumb-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap text-center">
                    <h2 class="breadcrumb-title">cart</h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">cart</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<!-- cart main wrapper start -->
<div class="page-padding pt-100 pb-100 pt-sm-60 pb-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Cart Table Area -->
                <div class="cart-table table-responsive">
                    <table class="table table-bordered" id="example1">
                        <thead>
                        <tr>
                            <th class="pro-thumbnail">Thumbnail</th>
                            <th class="pro-title">Product</th>
                            <th class="pro-price">Price</th>
                            <th class="pro-quantity">Quantity</th>
                            <th class="pro-subtotal">Total</th>
                            <th class="pro-remove">Remove</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php 
                        $total = 0;
                        $quantity = "";
                        while ($rel = $rec->fetch_object() ) {
                            $quantity = $rel->quantity; 
                            $price = $rel->price;
                            $cid = $rel->cid;
                            $sub_total = $price*$quantity;
                            $total = $total + $sub_total;
                            ?>   
                        <tr>
                            <td class="pro-thumbnail"><a href="product-details.php?id=<?php echo $rel->id; ?>"><img class="img-fluid" src="admin/uploads/<?php echo $rel->image; ?>" alt="Product"/></a></td>
                            <td class="pro-title"><a href="#"><?php echo $rel->name; ?></a></td>
                            <td class="pro-price"><span>PKR .<?php echo $rel->price; ?></span></td>
                            <td class="pro-price"><span><?php echo $quantity; ?></span></td>
                            <td class="pro-subtotal"><span>PKR .<?php echo $sub_total; ?></span></td>
                            <td><button type="button" name="delete" id="'.$row->cid.'" onclick="delete_cart(<?php echo $cid ?>,this);" class="btn btn-outline-danger pl-2 pr-2 btn-sm ml-1 mr-1 delete"><i class="fa fa-trash-o"></i></button></td>
                        </tr>
                        <?php } ?>
                        
                        </tbody>
                    </table>
                </div>


<script type="text/javascript">

function delete_cart(id,element)
{
    element = $(element);
    $.ajax({
              url:'cart_db.php',
              method:"post",
              dataType:"json",
              data:{id:id,action:'delete_data'},
              success:function(response)
              {
                if(response.Error==='false')
                { 
                  window.location.reload();
                }
              }
          });
}
</script>

                <!-- Cart Update Option -->
                <div class="cart-update-option d-block d-md-flex justify-content-between">
                    <div class="apply-coupon-wrapper">
                        <form action="#" method="post" class=" d-block d-md-flex">
                            <input type="text" placeholder="Enter Your Coupon Code" required />
                            <button class="check-btn">Apply Coupon</button>
                        </form>
                    </div>
                    <div class="cart-update">
                        <a href="shop-grid-left-sidebar.php" class="check-btn">SHOP MORE</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-5 ml-auto">
                <!-- Cart Calculation Area -->
                <div class="cart-calculator-wrapper">
                    <div class="cart-calculate-items">
                        <h3>Cart Totals</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td>Sub Total</td>
                                    <td>PKR .<?php echo $total; ?></td>
                                </tr>
                                <tr>
                                    <td>Shipping</td>
                                    <td>PKR .300</td>
                                </tr>
                                <tr class="total">
                                    <td>Total</td>
                                    <td class="total-amount">PKR .<?php echo ($total+300); ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <button type="button" name="update"><a href="checkout.php" class="check-btn d-block" style="width: 460px;">Proceed To Checkout</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cart main wrapper end -->


<?php 

include "footer.php";

 ?>