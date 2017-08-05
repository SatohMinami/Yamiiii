 <?php
	include 'admin/connect.php';
    include 'include/navbar.php';
     include 'function.php';
?>

<style>
    table, th, td {
   border: 1px solid black;
   padding: 10px;
    }

   #div1{
       border: 1px solid violet ;
        background-color: white;
        margin-top:-40px;
        width:auto;
   }

</style>
<?php
    if(isset($_GET['ID_SP'])){
    $ID_SP=$_GET['ID_SP'];
    settype($ID_SP,"int");
    
}else{
    $ID_SP=30;
}
// session_destroy();
///
    $sql="SELECT * FROM sp Where ID_SP='$ID_SP' ";
    $query=mysqli_query($con,$sql);
    $rowList=mysqli_fetch_assoc($query);
    // luu sp da xem
  //  $_SESSION['cake']['ID_SP']=$ID_SP;
    if(isset($_SESSION['cake'])){
           $count=count($_SESSION['cake']);
        // kiem tra xem sp da luu chua
        $flag=0;
        for($i=0;$i<$count;$i++){
            if($_SESSION['cake'][$i]['id']==$ID_SP){
               $flag=1;  
            }
        }
        // sp chua luu thi moi luu
     if($flag==0){
          $_SESSION['cake'][$count]['id']=$ID_SP;
     }
       
    }else{// chua co mang san pham
         $_SESSION['cake'][0]['id']=$ID_SP;
    }
    // session_destroy();
    /// hien thi san pham
    $count2=count($_SESSION['cake']);
    $cake=$_SESSION['cake'];
    
    

///
?>
 <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Chi Tiết Sản Phẩm</h2>
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
                        <h2 class="sidebar-title">Tìm Kiếm</h2>
                        <form action="product.php" method="GET">
                            <input type="text" id="key_search" name="search" placeholder="Tìm Kiếm..." style="width:289px">
                            <input type="submit" name="Search">
                        </form>
                    </div>
                    <div id="div1">
                    </div>
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Sản Phẩm</h2>
                        <?php
                            $sql1="SELECT * FROM sp  ORDER BY ID_SP DESC LIMIT 4";
                            $query1=mysqli_query($con,$sql1);
                            $list=mysqli_fetch_assoc($query1);
                            while($list=mysqli_fetch_assoc($query1)){
                        ?>
                        <div class="thubmnail-recent">
                            <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <?php
                            $str_name=ascii_name($list['Ten_SP']);
                            ?>
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
                        <h2 class="sidebar-title">SẢN PHẨM ĐÃ XEM</h2>
                        <ul>
                        <?php 
                        for($i=$count2-1;$i>$count2-2;$i--){
                        $sp=$cake[$i]['id'];
                        $sql_cake="SELECT * FROM sp WHERE ID_SP= ".$cake[$i]['id']  ;
                        // echo $sql_cake;
                        $query_cake=mysqli_query($con,$sql_cake);
                        while ($list_cake=mysqli_fetch_assoc($query_cake)){
                        ?>  
                        
                            <li><a href="san-pham-<?php echo $str_name; ?>-<?php echo $list_cake['ID_SP']; ?>.html"><?php echo $list_cake['Ten_SP'];?></a></li>
                        <?php
                            }   
                        }  
                        ?>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="index.php">Home</a>
                            <a href="product.php">Cửa Hàng</a>
                            <a href="san-pham-<?php echo $str_name; ?>-<?php echo $rowList['ID_SP']; ?>.html"><?php echo $rowList['Ten_SP']?></a>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="admin/image_product/<?php echo $rowList['IMG']; ?> " alt="">
                                    </div>
                                    
                                    <div class="product-gallery">
                                        <img src="img/product-thumb-1.jpg" alt="">
                                        <img src="img/product-thumb-2.jpg" alt="">
                                        <img src="img/product-thumb-3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name"><?php echo $rowList['Ten_SP']?></h2>
                                    <div class="product-inner-price">
                                        <ins><?php echo number_format($rowList['Gia_Sale'],0,'','.').' vnđ'; ?></ins> <del><?php echo number_format($rowList['Gia'],0,'','.').' vnđ'; ?></del>
                                    </div>    
                                    
                                    <form action="mua-san-pham-<?php echo $str_name; ?>-<?php echo $rowList['ID_SP']; ?>.html" class="cart" method="POST">
                                        <div class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        </div>
                                        <button class="add_to_cart_button" type="submit">Đặt hàng</button>
                                    </form>   
                                    
                                    <div class="product-inner-category">
                                        <p>Category: <a href="product.php">SmartPhone</a>. Tags: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>, <a href="">shoes</a>. </p>
                                    </div> 
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Thông Số</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Nhận Xét</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Thông Số Sản Phẩm</h2>
                                                <table>
                                                    <tr>
                                                        <td>Tên SP</td>
                                                        <td><?php echo $rowList['Ten_SP'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kích thước</td>
                                                        <td><?php echo $rowList['KichThuoc'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>CPU</td>
                                                        <td><?php echo $rowList['CPU'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Camera</td>
                                                        <td><?php echo $rowList['Camera'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>DPG</td>
                                                        <td><?php echo $rowList['DPG'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ngoại Vi</td>
                                                        <td><?php echo $rowList['NgoaiVi'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mô tả</td>
                                                        <td><?php echo $rowList['MoTa'] ?></td>
                                                    </tr>
                                                    
                                                </table>
                                                </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Reviews</h2>
                                                <div class="submit-review">
                                                    <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                    <div class="rating-chooser">
                                                        <p>Your rating</p>

                                                        <div class="rating-wrap-post">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input type="submit" value="Submit"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Sản Phẩm Tương Tự</h2>
                            <div class="related-products-carousel">
                            
                                <?php
                                $sql="SELECT * FROM sp";
                                $result_list=mysqli_query($con,$sql);
                                while($rowList=mysqli_fetch_assoc($result_list)){
                                    if($rowList['ID_Status']==1){
                                    ?>

                           
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="admin/image_product/<?php echo $rowList['IMG']; ?> " alt="">
                                        <div class="product-hover">
                                            <a href="mua-san-pham-<?php echo $str_name; ?>-<?php echo $rowList['ID_SP']; ?>.html" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Đặt hàng</a>
                                            <a href="san-pham-<?php echo $str_name; ?>-<?php echo $rowList['ID_SP']; ?>.html" class="view-details-link"><i class="fa fa-link"></i> Xem chi tiết</a>
                                        </div>
                                    </div>

                                    <h2><a  href="san-pham-<?php echo $str_name; ?>-<?php echo $rowList['ID_SP']; ?>.html"><?php echo $rowList['Ten_SP']?></a></h2>
                                    

                                    <div class="product-carousel-price">
                                       <ins><?php echo number_format($rowList['Gia_Sale'],0,'','.').' vnđ'; ?></ins> <del><?php echo number_format($rowList['Gia'],0,'','.').' vnđ'; ?></del>
                                    </div> 
                                </div>
                                <?php
                                    }
                                }
                                ?>
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