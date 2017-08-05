<?php 

    include 'connect.php';
    include '../check_login.php' ;
    include '../function.php';
        role_admin();
        if($_SESSION['ID_Role']!=1){
      header('location:role_error.php');
    }

    new_user();

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
              <h3 class="box-title">Thêm mới danh mục tài khoản</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <form role="form" method="POST" Action="">
                <div class="box-body">
                  <div class="form-group">
                    <label for="catname">Tên Thành Viên</label><span><?php if(isset($name_error)){echo 'Tên Đăng Nhập Bị Trùng!';} ?></span>
                    <input name="Username" class="form-control" id="catname" placeholder="Tên danh mục " type="text">
                  </div>
                  <div class="form-group">
                    <label for="catname">Password</label>
                    <input name="Password" class="form-control" id="catname" placeholder="Tên danh mục " value="" type="password">
                  </div>
                  <div class="form-group">
                  <?php
                    $sql="SELECT * FROM role";
                    $result_role=mysqli_query($con,$sql);
                  ?>
                    <label>Phân Quyền</label>
                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="ID_Role">
                  <?php
                    while($rowRole=mysqli_fetch_assoc($result_role)){
                      ?>
                          <option <?php if(isset($ID_Role) && $ID_Role==$rowRole['Name_Role']){echo 'selected="selected"';} ?> value="<?php echo $rowRole['ID_Role'] ?>"> <?php echo $rowRole['Name_Role'] ?></option>
                    <?php } ?>
                  
                </select>


                    <div class="form-group">
                    <?php
                    $sql1="SELECT * FROM status";
                    $result_status=mysqli_query($con,$sql1);
                  ?>
                      <label>Trạng thái</label>
                      <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="ID_Status">
                      <?php
                        while($rowStatus=mysqli_fetch_assoc($result_status)){
                        ?>
                            <option <?php if(isset($ID_Status) && $ID_Status==$rowStatus['Name_Status']){echo 'selected="selected"';} ?> value="<?php echo $rowStatus['ID_Status'] ?>"> <?php echo $rowStatus['Name_Status'] ?></option>
                      <?php } ?>
                      
                  
                      </select>


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