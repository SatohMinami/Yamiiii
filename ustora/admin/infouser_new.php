<?php 

    include 'connect.php';
    include '../check_login.php' ;
    include '../function.php';
    if($_SESSION['ID_Role']!=1){
      header('location:role_error.php');
    }
    new_infouser();
?>
<?php
  include 'include/header.php';
  include 'include/aside.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DANH MỤC THÀNH VIÊN

      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Danh mục thành viên</a></li>

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Thêm mới danh mục thành viên</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <form role="form" method="POST" action="" enctype="multipart/form-data">
                <div class="box-body">
                  <div class="form-group">
                    <label for="catname">Tên Thành Viên</label><span><?php if(isset($name_error)){echo 'Tên Đăng Nhập Bị Trùng!';} ?></span>
                    <input name="Info_Name" class="form-control" id="catname" placeholder="Tên thành viên " type="text">
                  </div>
                  <div class="form-group">
                    <label for="catname">Địa chỉ</label>
                    <input name="Info_Address" class="form-control" id="catname" placeholder=" " value="" type="text">
                  </div>
                  
                  <div class="form-group">
                    <label for="catname">Phone</label>
                    <input name="Info_Phone" class="form-control" id="catname" placeholder="" value="" type="tel">
                  </div>
                  <div class="form-group">
                    <label for="catname">Email</label>
                    <input name="Info_Email" class="form-control" id="catname" placeholder="abc@gmail.com" value="" type="email">
                  </div>
                  <div class="form-group">
                    <label for="catname">IMG</label>
                    <input name="IMG" class="form-control" id="catname" placeholder="" value="" type="file">
                  </div>


                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <input type="submit" class="btn btn-primary" name="submit">
                  </div>
              </form>
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
    <!-- /.content-wrapper -->
<?php
  include 'include/footer.php';
?>  