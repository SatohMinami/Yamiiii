<?php
    include 'connect.php';
    include '../check_login.php' ;
    include '../function.php';
        role_admin();
    $ID_DM=$_GET['ID_DM'];
    $sql="SELECT * FROM dm_news Where ID_DM='$ID_DM' ";
    $query=mysqli_query($con,$sql);
    $rowID=mysqli_fetch_assoc($query);

     edit_dmnews();
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
       DANH MỤC SỬA HÃNG
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Sửa Hãng</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Sửa Hãng</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <form role="form" method="POST" action="" enctype="multipart/form-data">
                <div class="box-body">
                  <div class="form-group">
                    <label for="catname">Hãng</label>
                    <input name="Ten_DM" class="form-control" id="catname" placeholder="" value="<?php echo $rowID['<Ten_DM></Ten_DM>'] ?>" type="text">
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