<?php
    include 'connect.php';
    include ('../check_login.php');
    include '../function.php';
        role_admin();
    
    
?>

<?php
    include('include/header.php');
    include('include/aside.php');
?>

<!--//   Content Wrapper. Contains page content-->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       DANH MỤC SỬA THÀNH VIÊN
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Sửa thành viên</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Sửa thành viên</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <form role="form" method="POST" action="" enctype="multipart/form-data">
                <div class="box-body">
                  <div class="form-group">
                    <label for="catname">IMG</label>
                    <input name="IMG" class="form-control" id="catname" placeholder="" value="" type="file">
                  </div>
                  <div class="form-group">
                    <label for="catname">Content</label>
                    <input name="Noi_Dung" class="form-control" id="catname" placeholder="" value="" type="text">
                  </div>
                  <div class="form-group">
                    <label for="catname">Rank</label>
                    <input name="Rank" class="form-control" id="catname" placeholder="" value="" type="text">
                  </div>
                   <div class="form-group">
                    <label for="catname">Link</label>
                    <input name="Link" class="form-control" id="catname" placeholder="Content" value="" type="text">
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
    include('include/footer.php');
?>