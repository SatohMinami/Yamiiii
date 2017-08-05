<?php
	include 'admin/connect.php';
    
    include 'include/navbar.php';
    include 'function.php';
?>

<?php
   if(isset($_SESSION['cake'])){
$count2=count($_SESSION['cake']);
$cake=$_SESSION['cake'];}

?>
<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Giỏ Hàng</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Tìm Kiếm Sản Phẩm</h2>
                        <form action="product.php" method="GET">
                            <input type="text" name="search" placeholder="">
                            <input type="submit" name="Search">
                        </form>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Sản Phẩm</h2>
                        <?php
                            $sql1="SELECT * FROM sp  ORDER BY ID_SP DESC LIMIT 4";
                            $query1=mysqli_query($con,$sql1);
                            while($list=mysqli_fetch_assoc($query1)){
                        ?>
                        <div class="thubmnail-recent">
                            <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="single-product.php?ID_SP=<?php echo $list['ID_SP']; ?>"><?php echo $list['Ten_SP']; ?></a></h2>
                            <div class="product-sidebar-price">
                                <ins><?php echo number_format($list['Gia_Sale'],0,'','.').' vnđ'; ?></ins> <del><?php echo number_format($list['Gia'],0,'','.').' vnđ'; ?></del>
                            </div>                             
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Sản Phẩm Đã Xem</h2>
                        <ul>
                        <?php 
                        if(isset($_SESSION['cake'])){
                        for($i=0;$i<$count2;$i++){
                        $sp=$cake[$i]['id'];
                        $sql_cake="SELECT * FROM sp WHERE ID_SP= ".$cake[$i]['id']  ;
                        // echo $sql_cake;
                        $query_cake=mysqli_query($con,$sql_cake);
                        while ($list_cake=mysqli_fetch_assoc($query_cake)){
                            
                        ?>  
                        
                            <li><a href="single-product.php?ID_SP=<?php echo $list_cake['ID_SP']; ?>"><?php echo $list_cake['Ten_SP'];?></a></li>
                        <?php
                                }   
                            }  
                        }
                        ?>
                        </ul>
                    </div>
                </div>
                
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            

                            <h3>ĐƠN ĐẶT HÀNG CỦA BẠN</h3>

                                <div id="order_review" style="position: relative;">
                                <form enctype="multipart/form-data" action="dathang.php" class="checkout" method="post" name="checkout">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Sản Phẩm</th>
                                            <th class="product-price">Tổng</th>
                                            <th class="product-quantity">Số Lượng</th>
                                            <th class="product-subtotal">Tổng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(isset($_SESSION['cart'])){
                                            //  print_r ($_SESSION['cart']);
                                        
                                        foreach($_SESSION['cart'] as $key => $qty){
                                            $sql="SELECT * FROM sp Where ID_SP='$key' ";
                                            $query=mysqli_query($con,$sql);
                                            $rowList=mysqli_fetch_assoc($query);
                                    ?>
                                            
                                        <tr class="cart_item">
                                            
                                            
                                            <td class="product-thumbnail">
                                                <a href="single-product.php"><img width="145" height="145" src="admin/image_product/<?php echo $rowList['IMG']; ?> " alt="" class="shop_thumbnail" src="img/product-thumb-2.jpg"></a>
                                            </td>

                                            <td class="product-name">
                                                <a href="single-product.php"><?php echo $rowList['Ten_SP']?></a> 
                                            </td>

                                            <td class="product-price">
                                                <span class="amount"><?php echo number_format($rowList['Gia_Sale'],0,'','.'); ?></span> 
                                            </td>
                                            
                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">
                                                    <?php echo $qty ?>
                                                    
                                                </div>
                                            </td>
                                            
                                            <td class="product-subtotal">
                                                <span class="amount"><?php $multi=$rowList['Gia_Sale']*$qty;  echo number_format($multi,0,'','.'); ?></span> 
                                            </td>
                                        </tr>
                                        
                                        <?php
                                           
                                                } 
                                            }else{
                                                echo 'kHÔNG TỒN TẠI';
                                            }
                                            
                                        ?>
                                         
                                        <tr>
                                            
                                            <th class="product-thumbnail">Tổng</th>
                                            <th class="product-name">&nbsp;</th>
                                            <th class="product-price">&nbsp;</th>
                                            <th class="product-quantity">&nbsp;</th>
                                            <th class="product-subtotal">
                                            <?php
                                            $total=total_cart();
                                            $_SESSION['total']=$total;
                                             echo number_format($total,0,'','.');
                                             ?></th>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td class="actions" colspan="5">
                                                    
                                                    <a href="cart.php">Quay Lại</a>
                                                    
                                                </td>
                                            </tr>
                                        </tfoot>
                                    
                                    
                                </table>

                            

                            

                            

                            

                                <div id="customer_details" class="col2-set">
                                    <div class="col-1">
                                        <div class="woocommerce-billing-fields">
                                            <h3>Chi Tiết Thanh Toán</h3>
                                            
                                                
                                            <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                                <label class="" for="billing_first_name">Họ Tên<abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" required value="" placeholder="" id="billing_first_name" name="Ten_KH" class="input-text ">
                                            </p>

                                            <div class="clear"></div>


                                            <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                <label class="" for="billing_address_1">Địa Chỉ <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" required value="" placeholder="" id="billing_address_1" name="DiaChi" class="input-text ">
                                            </p>

                                            <div class="clear"></div>

                                            <p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
                                                <label class="" for="billing_email">Email<abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="email" required value="" placeholder="" id="billing_email" name="Email" class="input-text ">
                                            </p>

                                            <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                                                <label class="" for="billing_phone">Số Điện Thoại<abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" required value="" placeholder="" id="billing_phone" name="Phone" class="input-text ">
                                            </p>
                                            <div class="clear"></div>


                                            

                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <div class="woocommerce-shipping-fields">
                                        </div>
                                    </div>
                                 </div>

                                


                                    <div id="payment">
                                        <ul class="payment_methods methods">
                                            <li class="payment_method_bacs">
                                                <input type="radio" data-order_button_text="" checked="checked" value="bacs" name="payment_method" class="input-radio" id="payment_method_bacs">
                                                <label for="payment_method_bacs">Chuyển khoản trực tiếp</label>
                                                <div class="payment_box payment_method_bacs">
                                                    <p>Thanh toán trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng ID đơn đặt hàng của bạn làm tham chiếu thanh toán. Đơn đặt hàng của bạn sẽ không được chuyển đến khi số tiền đã thanh toán trong tài khoản của chúng tôi.</p>
                                                </div>
                                            </li>
                                           
                                            <li class="payment_method_paypal">
                                                <input type="radio" data-order_button_text="Proceed to PayPal" value="paypal" name="payment_method" class="input-radio" id="payment_method_paypal">
                                                <label for="payment_method_paypal">PayPal <img alt="PayPal Acceptance Mark" src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png"><a title=" PayPal là gì?" onclick="javascript:window.open('https://www.paypal.com/gb/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;" class="about_paypal" href="https://www.paypal.com/gb/webapps/mpp/paypal-popup">PayPal là gì?</a>
                                                </label>
                                                <div style="display:none;" class="payment_box payment_method_paypal">
                                                    <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="form-row place-order">

                                            <input type="submit" data-value="Place order" value="Đặt Hàng" id="place_order" name="submit" class="button alt">


                                        </div>

                                        <div class="clear"></div>

                                    </div>
                                </div>
                            </form>

                        </div>                       
                    </div>                    
                </div>
            </div>
        </div>
    </div>

<?php
    include 'include/footer.php';
?>