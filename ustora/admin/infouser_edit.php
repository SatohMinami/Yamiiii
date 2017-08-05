

<?php
    include 'connect.php';
    include '../function.php';
        role_admin();
    $Info_Name=$_GET['Info_Name'];
    $sql="SELECT * FROM infouser Where Info_Name='$Info_Name' ";
    $query=mysqli_query($con,$sql);
    $rowID=mysqli_fetch_assoc($query);

?>
<?php

    
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
       DANH MỤC SỬA TÀI KHOẢN
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Danh mục sửa tài khoản</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh mục sửa tài khoản</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             
             <form role="form" method="POST" action="">
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


<?php
    include('include/footer.php');
?>