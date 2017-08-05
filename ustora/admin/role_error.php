<?php
    include 'connect.php';
    include '../function.php';
        role_admin();
    include('../check_login.php');
    
    include('include/header.php');
    include('include/aside.php');
?>

//   Content Wrapper. Contains page content
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       DANH MỤC TÀI KHOẢN
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Danh mục tài khoản</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh mục tên tài khoản</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              Lỗi truy cập<br>
              Bạn không có quyền truy cập trang này!!! <p style="font-size:50px">TÉ</p>
            
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>


<?php
    include('include/footer.php');
?>