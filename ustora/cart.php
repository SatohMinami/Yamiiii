<?php
	include 'admin/connect.php';
    
    if(isset($_GET['ID_SP'])){
    $ID_SP=$_GET['ID_SP'];   
    $_SESSION['check_cart'][0]['id']=$ID_SP;
    }
    include 'function.php';
    include 'include/navbar.php';
?>
<?php
// session_destroy();
if(isset($_POST['quantity'])){
     $ID_SP=$_GET['ID_SP'];
    $_SESSION['cart'][$ID_SP]= $_POST['quantity'];
}elseif(isset($_GET['ID_SP']) && $_GET['ID_SP']>0){
   $ID_SP=$_GET['ID_SP'];
    settype($ID_SP,"int");
    $_SESSION['cart'][$ID_SP]=1;
}else{
    
}
if(isset($_SESSION['cake'])){
$count2=count($_SESSION['cake']);
$cake=$_SESSION['cake'];}

 

//checkout


   
?>




<?php
    if(isset($_POST['update'])){
        foreach($_POST['qty'] as $id => $qty1 ){
          //  echo 'cccccc';
       // print_r ($_POST['qty']);die;
        $_SESSION['cart'][$id]=$qty1;}
    }
   
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
    </div> <!-- End Page title area -->
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Tìm Kiếm</h2>
                        <form action="product.php" method="GET">
                            <input type="text" name="search" id="key_search" value="" placeholder="Tìm Kiếm...">
                            <input type="submit" name="Search">
                        </form>
                    </div>
                    <div id="div1" style="border:1px solid red">
                    </div>
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Sản Phẩm</h2>
                        <?php
                            $sql1="SELECT * FROM sp  ORDER BY ID_SP DESC LIMIT 4";
                            $query1=mysqli_query($con,$sql1);
                            while($list=mysqli_fetch_assoc($query1)){
                                $str_name=ascii_name($list['Ten_SP']);
                        ?>
                        <div class="thubmnail-recent">
                            <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="san-pham-<?php echo $str_name; ?>-<?php echo $list['ID_SP']; ?>.html"><?php echo $list['Ten_SP']; ?></a></h2>
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
                        for($i=$count2-1;$i>$count2-2;$i--){
                        $sql_cake="SELECT * FROM sp WHERE ID_SP= ".$cake[$i]['id']  ;
                        // $sp=$cake[$i]['id'];
                        // echo $sql_cake;
                        $query_cake=mysqli_query($con,$sql_cake);
                        while ($list_cake=mysqli_fetch_assoc($query_cake)){
                            $str_name=ascii_name($list_cake['Ten_SP']);
                        ?>  
                        
                            <li><a href="san-pham-<?php echo $str_name; ?>-<?php echo $list_cake['ID_SP']; ?>.html"><?php echo $list_cake['Ten_SP'];?></a></li>
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
                            <form method="POST" action="cart.php">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Sản Phẩm</th>
                                            <th class="product-price">Giá</th>
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
                                            $str_name=ascii_name($rowList['Ten_SP']);

                                    ?>
                                            
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <a title="Remove this item" class="remove" href="delete_cart.php?ID_SP=<?php echo $rowList['ID_SP']?>">×</a> 
                                            </td>

                                            <td class="product-thumbnail">
                                                <a href="san-pham-<?php echo $str_name; ?>-<?php echo $rowList['ID_SP']; ?>.html"><img width="145" height="145" src="admin/image_product/<?php echo $rowList['IMG']; ?> " alt="" class="shop_thumbnail" src="img/product-thumb-2.jpg"></a>
                                            </td>

                                            <td class="product-name">
                                                <a href="single-product.php"><?php echo $rowList['Ten_SP']?></a> 
                                            </td>

                                            <td class="product-price">
                                                <span class="amount"><?php echo number_format($rowList['Gia_Sale'],0,'','.'); ?></span> 
                                            </td>
                                            
                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">
                                                    <input type="button" class="minus" value="-">
                                                    <input type="number" size="4" class="input-text qty text" title="Qty" name="qty[<?php echo $key;?>]" value="<?php echo $qty ?>" >
                                                    <input type="button" class="plus" value="+">
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
                                            <td class="actions" colspan="6">
                                                
                                                <input type="submit" value="Cập Nhật" name="update" class="button">
                                                <a href="thanh-toan.html" class="checkout-button button alt wc-forward">Thanh Toán</a>  
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>

                            <div class="cart-collaterals">


                            <div class="cross-sells">
                                <h2>Có thể bạn quan tâm...</h2>
                                <ul class="products">
                                     <?php 
                                    $sql2="SELECT * FROM sp  ORDER BY ID_SP ASC LIMIT 2";
                                    $query2=mysqli_query($con,$sql2);
                                    while($row2=mysqli_fetch_assoc($query2)){
                                        
                                    ?>

                                    <li class="product">
                                        <a href="single-product.php">
                                            <img width="325" height="325" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src="admin/image_product/<?php echo $row2['IMG']; ?>">
                                            <h3>Ship Your Idea</h3>
                                            <span class="price"><span class="amount"$<?php echo $row2['Gia']; ?></span></span>
                                        </a>

                                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="22" rel="nofollow" href="single-product.php">Select options</a>
                                    </li>
                                    <?php
                                        }
                                    ?>
                                </ul>
                            </div>


                            <div class="cart_totals ">
                                
                            </div>


                           
                            </div>
                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>
<?php
    include 'include/footer.php';
?>