<?php
if (isset($_POST['Subscribe'])) {
 // lấy thông tin người dùng
    $Email = $_POST["Email"];
    $insert="INSERT INTO email (Email) VALUES ('$Email')";
    $result_insert=mysqli_query($con,$insert);
}
?>
<div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>u<span>Stora</span></h2>
                        <p>Shopping Card By Nam Nguyễn</p>
                        <p>Phone : 01678397404 </p>
                        <p>Email : nguyentrongnam2307@gmail.com </p>
                        <div class="footer-social">
                        <?php 
                            $sql="SELECT * FROM footer ";
                            $query=mysqli_query($con,$sql);
                            $list=mysqli_fetch_assoc($query);
                                ?>
                            <a href="<?php echo $list['fb']?>" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="<?php echo $list['twitter']?>" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="<?php echo $list['youtube']?>" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="<?php echo $list['instagram']?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                           
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Trang chủ </h2>
                        <ul>
                            <li><a href="cua-hang.html">Cửa Hàng</a></li>
                            <li><a href="tin-tuc.php">Tin Tức</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Danh Mục Khác</h2>
                        <ul>
                            <li><a href="gioi-thieu.php">Giới Thiệu</a></li>
                            <li><a href="lien-he.php">Liên Hệ</a></li>
                            <li><a href="tuyen-dung.php">Tuyển Dụng</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Thông Báo</h2>
                        <p>Nhận thông tin từ email!</p>
                        <div class="newsletter-form">
                            <form action="index.php" method="POST">
                                <input type="email" name="Email" placeholder="Email của bạn">
                                <input type="submit" name="Subscribe" value="Nhận Thông Báo">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2015 uCommerce. All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
	<script type="text/javascript" src="js/script.slider.js"></script>
  </body>
</html>