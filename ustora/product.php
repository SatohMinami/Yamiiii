<?php
include 'admin/connect.php';
include 'function.php';
include 'include/navbar.php';

$sql_status="SELECT * FROM status";
$query_status=mysqli_query($con,$sql_status);
$rowStatus=mysqli_fetch_assoc($query_status);

    // tìm theo hãng if 1
if(isset($_GET['ID_Hang'])){
    $ID_Hang=$_GET['ID_Hang'];
    $sql="SELECT * FROM hang_sx,sp WHERE hang_sx.ID_Hang='$ID_Hang' AND hang_sx.ID_Hang=sp.ID_Hang ";
    $query=mysqli_query($con,$sql);
    $num=mysqli_num_rows($query);

    ?>
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                   </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <?php
                if ($num>0){
                    while($row=mysqli_fetch_assoc($query)){
                        $str_name=ascii_name($row['Ten_SP']);
                        if($rowStatus['ID_Status']==1){
                       ?>
                       <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="admin/image_product/<?php echo $row['IMG']; ?>" alt="">
                            </div>
                            <h2><a href="san-pham-<?php echo $str_name; ?>-<?php echo $row['ID_SP']; ?>.html"><?php echo $row['Ten_SP']; ?></a></h2>
                            <div class="product-carousel-price">
                                
                                <ins><?php echo number_format($row['Gia_Sale'],0,'','.').' vnđ'; ?></ins> <del><?php echo number_format($row['Gia'],0,'','.').' vnđ'; ?></del>

                            </div>  
                            
                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="mua-san-pham-<?php echo $str_name; ?>-<?php echo $row['ID_SP']; ?>.html">Đặt hàng</a>
                            </div>                       
                        </div>
                    </div>
                    
                    <?php 
                // hết if 1
                        }
                }
            }else{
                
                echo 'Không có sản phẩm nào';
            }
            ?>
            
            <?php
                    // tìm theo Top New 
        }else if(isset($_GET['TopNew'])){
            $sql_TopNew="SELECT * FROM sp ORDER BY ID_SP DESC LIMIT 4";
            $query_TopNew=mysqli_query($con,$sql_TopNew);
            ?>
            <div class="product-big-title-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-bit-title text-center">
                                <h2>Shop</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="single-product-area">
                <div class="zigzag-bottom"></div>
                <div class="container">
                    <div class="row">
                        <?php

                        while($row_TopNew=mysqli_fetch_assoc($query_TopNew)){
                            $str_name=ascii_name($row_TopNew['Ten_SP']);
                            if($rowStatus['ID_Status']==1){
                            ?>
                            <div class="col-md-3 col-sm-6">
                                <div class="single-shop-product">
                                    <div class="product-upper">
                                        <img src="admin/image_product/<?php echo $row_TopNew['IMG']; ?>" alt="">
                                    </div>
                                    <h2><a href="san-pham-<?php echo $str_name; ?>-<?php echo $row_TopNew['ID_SP']; ?>.html"><?php echo $row_TopNew['Ten_SP']; ?></a></h2>
                                    <div class="product-carousel-price">
                                        <ins><?php echo number_format($row_TopNew['Gia_Sale'],0,'','.').' vnđ'; ?></ins> <del><?php echo number_format($row_TopNew['Gia'],0,'','.').' vnđ'; ?></del>

                                    </div>  
                                    
                                    <div class="product-option-shop">
                                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="mua-san-pham-<?php echo $str_name; ?>-<?php echo $row_TopNew['ID_SP']; ?>.html">Đặt hàng</a>
                                    </div>                       
                                </div>
                            </div>
                            <?php
                            }
                        }
                        
                        ?> 
                        
                        <?php
                    // tìm theo Recently Viewed
                    }else if(isset($_GET['RecentlyViewed'])){
                        $sql_RecentlyViewed="SELECT * FROM sp ORDER BY ID_SP DESC LIMIT 4";
                        $query_RecentlyViewed=mysqli_query($con,$sql_RecentlyViewed);
                        ?>
                        <div class="product-big-title-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="product-bit-title text-center">
                                            <h2>Shop</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="single-product-area">
                            <div class="zigzag-bottom"></div>
                            <div class="container">
                                <div class="row">
                                    <?php

                                    while($row_RecentlyViewed=mysqli_fetch_assoc($query_RecentlyViewed)){
                                        $str_name=ascii_name($row_RecentlyViewed['Ten_SP']);
                                        if($rowStatus['ID_Status']==1){
                                        ?>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-shop-product">
                                                <div class="product-upper">
                                                    <img src="admin/image_product/<?php echo $row_RecentlyViewed['IMG']; ?>" alt="">
                                                </div>
                                                <h2><a href="san-pham-<?php echo $str_name; ?>-<?php echo $row_RecentlyViewed['ID_SP']; ?>.html"><?php echo $row_RecentlyViewed['Ten_SP']; ?></a></h2>
                                                <div class="product-carousel-price">
                                                    <ins><?php echo number_format($row_RecentlyViewed['Gia_Sale'],0,'','.').' vnđ'; ?></ins> <del><?php echo number_format($row_RecentlyViewed['Gia'],0,'','.').' vnđ'; ?></del>

                                                </div>  
                                                
                                                <div class="product-option-shop">
                                                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="mua-san-pham-<?php echo $str_name; ?>-<?php echo $row_RecentlyViewed['ID_SP']; ?>.html">Đặt hàng</a>
                                                </div>                       
                                            </div>
                                        </div>
                                        <?php
                                        }
                                    }
                                    
                                    ?> 
                                    <?php
                    // tìm theo TopSellers
                                }else if(isset($_GET['TopSellers'])){
                                    $sql_Sellers="SELECT * FROM sp ORDER BY ID_SP DESC LIMIT 4";
                                    $query_Sellers=mysqli_query($con,$sql_Sellers);
                                    ?>
                                    <div class="product-big-title-area">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="product-bit-title text-center">
                                                        <h2>Shop</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="single-product-area">
                                        <div class="zigzag-bottom"></div>
                                        <div class="container">
                                            <div class="row">
                                                <?php

                                                while($row_Sellers=mysqli_fetch_assoc($query_Sellers)){
                                                    $str_name=ascii_name($row_Sellers['Ten_SP']);
                                                    if($rowStatus['ID_Status']==1){
                                                    ?>
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="single-shop-product">
                                                            <div class="product-upper">
                                                                <img src="admin/image_product/<?php echo $row_Sellers['IMG']; ?>" alt="">
                                                            </div>
                                                            <h2><a href="san-pham-<?php echo $str_name; ?>-<?php echo $row_Sellers['ID_SP']; ?>.html"><?php echo $row_Sellers['Ten_SP']; ?></a></h2>
                                                            <div class="product-carousel-price">
                                                                <ins><?php echo number_format($row_Sellers['Gia_Sale'],0,'','.').' vnđ'; ?></ins> <del><?php echo number_format($row_Sellers['Gia'],0,'','.').' vnđ'; ?></del>

                                                            </div>  
                                                            
                                                            <div class="product-option-shop">
                                                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="mua-san-pham-<?php echo $str_name; ?>-<?php echo $row_Sellers['ID_SP']; ?>.html">Đặt hàng</a>
                                                            </div>                       
                                                        </div>
                                                    </div>
                                                    <?php
                                                    }
                                                }
                                                
                                                ?> 
                                                
                                                <?php
                    // tìm theo Top New if 2
                                            }else if(isset($_GET['Search'])){
                                                $search=$_GET['search'];
                                                $sql_search="SELECT * FROM `sp` WHERE Ten_SP LIKE '%$search%' ";
                                                $query_search=mysqli_query($con,$sql_search);
                                                ?>
                                                <div class="product-big-title-area">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="product-bit-title text-center">
                                                                    <h2>Shop</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="single-product-area">
                                                    <div class="zigzag-bottom"></div>
                                                    <div class="container">
                                                        <div class="row">
                                                            <?php

                                                            while($row_search=mysqli_fetch_assoc($query_search)){
                                                                $str_name=ascii_name($row_search['Ten_SP']);
                                                                if($rowStatus['ID_Status']==1){
                                                                ?>
                                                                <div class="col-md-3 col-sm-6">
                                                                    <div class="single-shop-product">
                                                                        <div class="product-upper">
                                                                            <img src="admin/image_product/<?php echo $row_search['IMG']; ?>" alt="">
                                                                        </div>
                                                                        <h2><a href="san-pham-<?php echo $str_name; ?>-<?php echo $row_search['ID_SP']; ?>.html"><?php echo $row_search['Ten_SP']; ?></a></h2>
                                                                        <div class="product-carousel-price">
                                                                            <ins><?php echo number_format($row_search['Gia_Sale'],0,'','.').' vnđ'; ?></ins> <del><?php echo number_format($row_search['Gia'],0,'','.').' vnđ'; ?></del>
                                                                            
                                                                        </div>  
                                                                        
                                                                        <div class="product-option-shop">
                                                                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="mua-san-pham-<?php echo $str_name; ?>-<?php echo $row_search['ID_SP']; ?>.html">Đặt hàng</a>
                                                                        </div>                       
                                                                    </div>
                                                                </div>
                                                                <?php
                                                                }
                                                            }
                                                        }else {
                            //phân trang
                                                            
                        // BƯỚC 2: TÌM TỔNG SỐ RECORDS
                                                            $sql="SELECT * FROM sp";
                                                            $query=mysqli_query($con,$sql);
                                                            
                                                            $count=mysqli_num_rows($query);

                        // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
                                                            $current_page=isset($_GET['page']) ? $_GET['page'] : 1;
                                                            $limit=8;

                        // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
                                                            $total_page=ceil($count/$limit);
                                                            

                        // Giới hạn current_page trong khoảng 1 đến total_page
                                                            if ($current_page > $total_page){
                                                                $current_page = $total_page;
                                                            }
                                                            else if ($current_page < 1){
                                                                $current_page = 1;
                                                            }
                                                            
                                                            $start = ($current_page - 1) * $limit;

                                                            $sql_result="SELECT * FROM sp LIMIT $start, $limit";
                                                            $result=mysqli_query($con,$sql_result);
                                                            
                                                            
                                                            
                                                            ?>
                                                            <div class="product-big-title-area">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="product-bit-title text-center">
                                                                                <h2>Cửa Hàng</h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            <div class="single-product-area">
                                                                <div class="zigzag-bottom"></div>
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <?php
                                                                        
                                                                        while($row=mysqli_fetch_assoc($result)){
                                                                            
                                                                            $str_name=ascii_name($row['Ten_SP']);
                                                                            ?>
                                                                            <div class="col-md-3 col-sm-6">
                                                                                <div class="single-shop-product">
                                                                                    <div class="product-upper">
                                                                                        <img src="admin/image_product/<?php echo $row['IMG']; ?>" alt="">
                                                                                    </div>
                                                                                    <h2><a href="san-pham-<?php echo $str_name; ?>-<?php echo $row['ID_SP']; ?>.html"><?php echo $row['Ten_SP']; ?></a></h2>
                                                                                    <div class="product-carousel-price">
                                                                                        <ins><?php echo number_format($row['Gia_Sale'],0,'','.').' vnđ'; ?></ins> <del><?php echo number_format($row['Gia'],0,'','.').' vnđ'; ?></del>
                                                                                        
                                                                                    </div>  
                                                                                    
                                                                                    <div class="product-option-shop">
                                                                                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="mua-san-pham-<?php echo $str_name; ?>-<?php echo $row['ID_SP']; ?>.html">Đặt hàng</a>
                                                                                    </div>                       
                                                                                </div>
                                                                            </div>
                                                                            <?php 
                                                                        }
                                                                        ?> 
                                                                    </div>
                                                                    
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="product-pagination text-center">
                                                                                <nav>
                                                                                    <ul class="pagination">
                                                                                        
                                                                                        <?php
                                        // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
                                                                                        if ($current_page > 1 && $total_page > 1){
                                                                                            echo '<li><a href="shoppage.php?page='.($current_page-1).'">Prev</a></li>  ';
                                                                                        }
                                                                                        for ($i = 1; $i <= $total_page; $i++){
                                            // Nếu là trang hiện tại thì hiển thị thẻ span
                                            // ngược lại hiển thị thẻ a
                                                                                            if ($i == $current_page){
                                                                                                echo '<li><span>'.$i.'</span></li> ';
                                                                                            } else{
                                                                                                echo "<li><a href='shoppage.php?page=$i'>$i</a></li>";
                                                                                            }
                                            }// nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                                            if ($current_page < $total_page && $total_page > 1){
                                                echo '<li><a href="shoppage.php?page='.($current_page+1).'">Next</a></li>  ';
                                            }
                                            ?>
                                            
                                            
                                            
                                        </ul>
                                    </nav>                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?> 
        </div>
    </div>
</div>

<?php
include 'include/footer.php';
?>