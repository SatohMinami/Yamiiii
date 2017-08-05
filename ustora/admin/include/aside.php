
 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['Username'];?></p>
          <a href="../logout.php"><i class="fa fa-circle text-success"></i> Đăng Xuất</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" id="key_search" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
        <div id="div1" style="border:1px solid red">
                    </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview menu-open">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Trang chủ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
        </li>
        <li class="treeview">
          <a href="cat_product.html">
            <i class="fa fa-fw fa-bars"></i>
            <span>Quảng cáo</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu">
         	<li><a href="../admin/banner_list.php"><i class="fa fa-circle-o"></i>Danh sách quảng cáo</a></li>
            <li><a href="../admin/banner_new.php"><i class="fa fa-circle-o"></i>Thêm danh mục quảng cáo</a></li>
          
          </ul>
        </li>
        <li class="treeview">
          <a href="cat_product.html">
            <i class="fa fa-fw fa-bars"></i>
            <span>Danh mục thể loại</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu">
         	<li><a href="../admin/categories_list.php"><i class="fa fa-circle-o"></i>Danh sách thể loại</a></li>
            <li><a href="../admin/categories_new.php"><i class="fa fa-circle-o"></i>Thêm danh mục thể loại</a></li>
          
          </ul>
        </li>
        <li class="treeview">
          <a href="cat_product.html">
            <i class="ion ion-ios-gear-outline"></i>
            <span>Sản phẩm</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu">
         	<li><a href="product_list.php"><i class="fa fa-circle-o"></i>Danh sách sản phẩm</a></li>
            <li><a href="product_new.php"><i class="fa fa-circle-o"></i>Thêm sản phẩm</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="cat_product.html">
            <i class="glyphicon glyphicon-picture"></i>
            <span>Carousel</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu">
         	<li><a href="carousel_list.php"><i class="fa fa-circle-o"></i>Danh sách Carousel</a></li>
            <li><a href="carousel_new.php"><i class="fa fa-circle-o"></i>Thêm Carousel</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="cat_product.html">
            <i class="glyphicon glyphicon-picture"></i>
            <span>Hãng SX</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu">
         	<li><a href="hangsx_list.php"><i class="fa fa-circle-o"></i>Danh sách hãng</a></li>
            <li><a href="hangsx_new.php"><i class="fa fa-circle-o"></i>Thêm hãng</a></li>
            
          </ul>
        </li>
         <li>
          <a href="donhang.php">
            <i class="ion ion-ios-cart-outline"></i>
            <span>Đơn hàng</span>
           
          </a>
         
        </li>
        <li>
           <li class="treeview">
          <a href="cat_product.html">
            <i class="fa fa-fw fa-bars"></i>
            <span>Danh mục tin tức</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu">
         	<li><a href="dm_newslist.php"><i class="fa fa-circle-o"></i>Danh sách danh mục</a></li>
            <li><a href="dm_news.php"><i class="fa fa-circle-o"></i>Thêm danh mục</a></li>
            
          </ul>
        </li>
        <li>
           <li class="treeview">
          <a href="cat_product.html">
            <i class="fa fa-fw fa-pencil-square-o"></i>
            <span>Tin Tức</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu">
         	<li><a href="news_list.php"><i class="fa fa-circle-o"></i>Danh sách tin</a></li>
            <li><a href="news_new.php"><i class="fa fa-circle-o"></i>Thêm mới tin</a></li>
            
          </ul>
        </li>
        
         
        <li>
           <li class="treeview">
          <a href="cat_product.html">
            <i class="fa fa-fw fa-user"></i>
            <span>Admin</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu">
         	<li><a href="../admin/user_list.php"><i class="fa fa-circle-o"></i>Quản lý Admin</a></li>
          <li><a href="../admin/user_new.php"><i class="fa fa-circle-o"></i>Thêm mới Admin</a></li>
          <li><a href="../admin/history.php"><i class="fa fa-circle-o"></i>Thông tin sử dụng</a></li>
            
          </ul>
        </li>
       <li>
           <li class="treeview">
          <a href="cat_product.html">
            <i class="fa fa-fw fa-users"></i>
            <span>Thành viên</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu">
         	<li><a href="../admin/infouser_list.php"><i class="fa fa-circle-o"></i>Quản lý thành viên</a></li>
            <li><a href="../admin/infouser_new.php"><i class="fa fa-circle-o"></i>Thêm thành viên</a></li>
            
          </ul>
        </li>
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>