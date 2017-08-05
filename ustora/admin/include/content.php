 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Chào mừng bạn đến với trang quản trị website
        <?php
  
            $sql_user="SELECT * FROM user,role,status WHERE user.ID_Role=role.ID_Role AND user.ID_Status=status.ID_Status" ;
            $result_user=mysqli_query($con,$sql_user);
            $count_user=mysqli_num_rows($result_user);

        //count infouser 
            $sql_infouser ="SELECT * FROM infouser ";
            $result_infouser=mysqli_query($con,$sql_infouser);
            $count_infouser=mysqli_num_rows($result_infouser);

        //count  product
            $sql_product="SELECT * FROM sp,status,hang_sx WHERE sp.ID_Status=status.ID_status AND sp.ID_Hang=hang_sx.ID_Hang";
            $sql_product=mysqli_query($con,$sql_product);
            $count_product=mysqli_num_rows($sql_product);

        //count don hang
            $sql_donhang="SELECT * FROM thongtindonhang,thongtinkhachhang,chitietdonhang WHERE thongtindonhang.ID_DH=chitietdonhang.ID_DH 
            AND   thongtinkhachhang.ID_KH=thongtinkhachhang.ID_KH ";
            $query_donhang=mysqli_query($con,$sql_donhang);
            $count_donhang=mysqli_num_rows($query_donhang);

        //count hangsx
            $sql_hangsx="SELECT * FROM hang_sx " ;
            $result_hangsx=mysqli_query($con,$sql_hangsx);
            $count_hangsx=mysqli_num_rows($result_hangsx);

        //count tin tuc
            $sql_news="SELECT * FROM news,dm_news WHERE news.ID_DM=dm_news.ID_DM " ;
            $result_news=mysqli_query($con,$sql_news);
            $count_news=mysqli_num_rows($result_news);

        //count danh muc tin tuc
            $sql_dm="SELECT * FROM dm_news " ;
            $result_dm=mysqli_query($con,$sql_dm);
            $count_dm=mysqli_num_rows($result_dm);

        ?>
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="../index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-fw fa-street-view"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Số lượt truy cập</span>
              <span class="info-box-number">17690<small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-fw fa-paw"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Thành viên</span>
              <span class="info-box-number"><?php echo  $count_infouser;?><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Admin</span>
              <span class="info-box-number"><?php echo $count_user; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
         
       
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Sản phẩm</span>
               <span class="info-box-number"><?php echo $count_product; ?><small></small></span> 
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
         <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Đơn hàng</span>
              <span class="info-box-number"><?php echo $count_donhang; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
         <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-fw fa-ship"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Nhà sản xuất</span>
              <span class="info-box-number"><?php echo $count_hangsx;?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
         <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-fw fa-reorder"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Danh mục tin tức </span>
              <span class="info-box-number"><?php echo $count_dm;?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
         <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-fw fa-pencil-square-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Bài viết</span>
              <span class="info-box-number"><?php echo $count_news;?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
         
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

     
      </div>
      <!-- /.row -->

     
    

     
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->