   <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>Đổi Trả 30 Ngày</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Vận Chuyển</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Bảo Mật Thanh Toán</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>Sản Phẩm Mới</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 style="text-align:center">SẢN PHẨM MỚI</h2>
                        <div class="product-carousel">
                            <?php
                            $sql="SELECT * FROM sp";
                            $result_list=mysqli_query($con,$sql);
                            //print_r($result_list); die;
                            $i=1;
                            while($rowList=mysqli_fetch_assoc($result_list)){
                                $str_name=ascii_name($rowList['Ten_SP']);
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
                                
                                <h2><a href="san-pham-<?php echo $str_name; ?>-<?php echo $rowList['ID_SP']; ?>.html"><?php echo $rowList['Ten_SP']; ?></a></h2>
                                
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
    </div> <!-- End main content area -->