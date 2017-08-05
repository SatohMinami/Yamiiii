<div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                        <?php
                        $sql="SELECT * FROM hang_sx";
                        $result_list=mysqli_query($con,$sql);
                        //print_r($result_list); die;
                        while($rowList=mysqli_fetch_assoc($result_list)){
                           $str_name=ascii_name($rowList['Ten_Hang']);
                           
                        ?>
                            <a href="hang-<?php echo $str_name; ?>-<?php echo $rowList['ID_Hang']; ?>.html
                                    "><img src="admin/image_hang/<?php echo $rowList['IMG_Hang']; ?> " alt="" ></a>
                             
                            <?php 
                    	    }
                 	    ?>                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title" >Bán Chạy Nhất</h2>
                        <a href="product.php?TopSellers" class="wid-view-more">View All</a>
                        <?php
                        $sql="SELECT * FROM sp
                        ORDER BY ID_SP DESC LIMIT 3";
                        $result_list=mysqli_query($con,$sql);
                        //print_r($result_list); die;
                        while($rowList=mysqli_fetch_assoc($result_list)){
                             $str_name=ascii_name($rowList['Ten_SP']);
                             if($rowList['ID_Status']==1){
                        ?>
                        <div class="single-wid-product">
                            <a href="single-product.php?ID_SP=<?php echo $rowList['ID_SP']; ?>"><img src="admin/image_product/<?php echo $rowList['IMG']; ?> " alt="" class="product-thumb"></a>
                            <h2><a href="san-pham-<?php echo $str_name; ?>-<?php echo $rowList['ID_SP']; ?>.html"><?php echo $rowList['Ten_SP']; ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?php echo number_format($rowList['Gia_Sale'],0,'','.').' vnđ'; ?></ins> <del><?php echo number_format($rowList['Gia'],0,'','.').' vnđ'; ?></del>
                            </div>                            
                        </div>
                        <?php 
                             }
                    	    }
                 	    ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Xem Gần Đây</h2>
                        <a href="product.php?RecentlyViewed" class="wid-view-more">View All</a>
                        <?php 
                        if(isset($_SESSION['cake'])){
                        $cake=$_SESSION['cake'];
                        $count2=count($_SESSION['cake']);

                        for($i=$count2-1;$i>$count2-2;$i--){
                        $sp=$cake[$i]['id'];
                        $sql_cake="SELECT * FROM sp WHERE ID_SP= ".$cake[$i]['id'];
                       
                        $query_cake=mysqli_query($con,$sql_cake);
                        while ($list_cake=mysqli_fetch_assoc($query_cake)){
                            $str_name=ascii_name($list_cake['Ten_SP']);
                        if($list_cake['ID_Status']==1){
                        ?>  
                        
                            <div class="single-wid-product">
                            <a href="single-product.php?ID_SP=<?php echo $list_cake['ID_SP']; ?>"><img src="admin/image_product/<?php echo $list_cake['IMG']; ?> " alt="" class="product-thumb"></a>
                            <h2><a href="san-pham-<?php echo $str_name; ?>-<?php echo $list_cake['ID_SP']; ?>.html"><?php echo $list_cake['Ten_SP']; ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?php echo number_format($rowList['Gia_Sale'],0,'','.').' vnđ'; ?></ins> <del><?php echo number_format($rowList['Gia'],0,'','.').' vnđ'; ?></del>
                            </div>                            
                        </div>
                        <?php
                                    }   
                                }
                            }  
                        }
                        
                        ?>
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title"> Mới Nhất</h2>
                        <a href="product.php?TopNew" class="wid-view-more">View All</a>
                        <?php
                        $sql="SELECT * FROM sp
                        ORDER BY ID_SP DESC LIMIT 3";
                        $result_list=mysqli_query($con,$sql);
                        //print_r($result_list); die;
                        while($rowList=mysqli_fetch_assoc($result_list)){
                        $str_name=ascii_name($rowList['Ten_SP']);
                        if($rowList['ID_Status']==1){

                        ?>
                        <div class="single-wid-product">
                            <a href="single-product.php?ID_SP=<?php echo $rowList['ID_SP']; ?>"><img src="admin/image_product/<?php echo $rowList['IMG']; ?> " alt="" class="product-thumb"></a>
                            <h2><a href="san-pham-<?php echo $str_name; ?>-<?php echo $rowList['ID_SP']; ?>.html"><?php echo $rowList['Ten_SP']; ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
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
    </div> <!-- End product widget area -->
