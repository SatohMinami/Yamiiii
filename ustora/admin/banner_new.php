<?php
include 'connect.php';
include '../check_login.php';
include '../function.php';
        role_admin();

if (isset($_POST['submit'])) {
add_banner();
}
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
        DANH MỤC BANNER

      </h1>
      <ol class="breadcrumb">
        <li><a href="../index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="index.php">Dashboard</a></li>
        <li><a href="banner_new.php">Danh mục banner</a></li>

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Thêm mới danh mục banner</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <form role="form" method="POST" action="" enctype="multipart/form-data" > 
                <div class="box-body">
                  <div class="form-group">
                    <label for="catname">IMG</label><?php if(isset($name_error1)){echo '&nbsp&nbsp&nbspẢnh Bị Trùng!';} ?></span>
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