
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ustora Demo</title>
    <script src="admin/js/jquery-3.2.1.min.js"></script>
    
    <script type = "text/javascript">
        $(document).ready(function(){
        $("#key_search").keyup(function(){
            key= $("#key_search").val();
                $.ajax({
                    url:"xuly_ajax.php?key="+key,
                    success: function(result){
                        $("#div1").html(result);
                    }

                })
            });
        });

    </script>
   
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- jquery -->
    

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="<?php if(!isset($_SESSION['ID_Role'])){
                                                echo "login.php";
                                            }else if($_SESSION['ID_Role']==4){
                                            echo "admin/info.php";
                                                }else{
                                            echo "admin/index.php";
                                            }
                                            ?>"><i class="fa fa-user"></i> Tài Khoản</a></li>
                           
                            <li><a href="cart.php"><i class="fa fa-user"></i> Giỏ Hàng</a></li>
                            <li><a href="checkout.php"><i class="fa fa-user"></i> Thanh Toán</a></li>
                            <li>
                            <?php
                                if(!isset($_SESSION['Username'])){
                                   
                                    echo '<a href="login.php"><i class="fa fa-user"></i> Login</a>';
                                }else{
                                    echo '<li><a href="logout.php"><i class="fa fa-user"></i>'.$_SESSION['Username']. '[Thoát]</a></li>';
                                }
                            ?>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="logo">
                        <h1><a href="index.php"><img src="img/logo.png"></a></h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="logo">
                <?php
                    $sql1="SELECT * FROM banner";
                    $result_list1=mysqli_query($con,$sql1);
                    //print_r($result_list); die;
                    while($rowList1=mysqli_fetch_assoc($result_list1)){
                    ?>
                    <h1><a href="index.php"><img src="../../img/<?php echo $rowList1['Banner_IMG']; ?> " style="width:100%;height:64px" alt="lỗi rồi"></a></h1>
                <?php
                 }
                ?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="shopping-item">
                    
                                       
                        <a href="cart.php">Giỏ Hàng - <span class="cart-amunt"><?php if(isset($_SESSION['total'])){
                                                                                echo number_format($_SESSION['total'],0,'','.');}
                                                                                ?>
                                                                                </span> <i class="fa fa-shopping-cart"></i>
                         <span class="product-count"><?php if(isset($_SESSION['cart'])){
                                                        echo $count3=count($_SESSION['cart']);}
                    ?></span></a>
                    
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                    <li class="active"><a href="trang-chu.html">Home</a></li>
                    <?php
                        $sql="SELECT * FROM categories ORDER BY Rank_Categories ASC";
                        $result_list=mysqli_query($con,$sql);
                        //print_r($result_list); die;
                        while($rowList=mysqli_fetch_assoc($result_list)){
                            if($rowList['ID_Status']==1){
                        ?>
                        <li><a href="<?php echo $rowList['Link']?>"><?php echo $rowList['Name_Categories']?></a></li>    
                             
                            <?php 
                            }
                    	    }
                 	    ?>    
                        
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
