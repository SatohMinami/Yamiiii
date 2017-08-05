<?php
    include 'connect.php';
    include '../check_login.php' ;
    include '../function.php';
        role_admin();
    $ID_SP=$_GET['ID_SP'];
    $sql="SELECT * FROM sp Where ID_SP='$ID_SP' ";
    $query=mysqli_query($con,$sql);
    $rowID=mysqli_fetch_assoc($query);

    edit_product();

   
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
       DANH MỤC SỬA SẢN PHẨM
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Sửa sản phẩm</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Sửa sản phẩm</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <form role="form" method="POST" action="" enctype="multipart/form-data">
                <div class="box-body">
                  
                  <div class="form-group">
                    <label for="catname">Tên SP</label>
                    <input name="Ten_SP" class="form-control" id="catname" placeholder="" value="<?php echo $rowID['Ten_SP'] ?>" type="text">
                  </div>
                  <div class="form-group">
                    <label for="catname">Kích Thước</label>
                    <input name="KichThuoc" class="form-control" id="catname" placeholder="" value="<?php echo $rowID['KichThuoc'] ?>" type="text">
                  </div>
                  <div class="form-group">
                    <label for="catname">CPU</label>
                    <input name="CPU" class="form-control" id="catname" placeholder="" value="<?php echo $rowID['CPU'] ?>" type="text">
                  </div>
                  <div class="form-group">
                    <label for="catname">Camera</label>
                    <input name="Camera" class="form-control" id="catname" placeholder="" value="<?php echo $rowID['Camera'] ?>" type="text">
                  </div>
                  <div class="form-group">
                    <label for="catname">Card</label>
                    <input name="Card" class="form-control" id="catname" placeholder="" value="<?php echo $rowID['Card'] ?>" type="text">
                  </div>
                  <div class="form-group">
                    <label for="catname">DPG</label>
                    <input name="DPG" class="form-control" id="catname" placeholder="" value="<?php echo $rowID['DPG'] ?>" type="text">
                  </div>
                  <div class="form-group">
                    <label for="catname">Ngoại Vi</label>
                    <input name="NgoaiVi" class="form-control" id="catname" placeholder="" value="<?php echo $rowID['NgoaiVi'] ?>" type="text">
                  </div>
                  <div class="form-group">
                    <label for="catname">Giá</label>
                    <input name="Gia" class="form-control" id="catname" placeholder="" value="<?php echo $rowID['Gia'] ?>" type="text">
                  </div>
                  <div class="form-group">
                    <label for="catname">IMG</label>
                    <input name="IMG" class="form-control" id="catname" placeholder="" value="<?php echo $rowID['IMG'] ?>" type="file">
                  </div>
                   <div class="form-group">
                    <?php
                    $sql_Hang="SELECT * FROM hang_sx";
                    $result_Hang=mysqli_query($con,$sql_Hang);
                    ?>
                      <label>Hãng</label>
                      <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="ID_Hang">
                      <?php
                        while($rowHang=mysqli_fetch_assoc($result_Hang)){
                        ?>
                            <option <?php if(isset($Status) && $Status==$rowHang['Ten_Hang']){echo 'selected="selected"';} ?> value="<?php echo $rowHang['ID_Hang'] ?>"> <?php echo $rowHang['Ten_Hang'] ?></option>
                      <?php } ?>
                      
                  
                      </select>
                  <div class="form-group">
                    <label for="catname">Giá Sale</label>
                    <input name="Gia_Sale" class="form-control" id="catname" placeholder="" value="<?php echo $rowID['Gia_Sale'] ?>" type="text">
                  </div>
                  <div class="form-group">
                    <label for="catname">Mô tả</label>
                    <input name="MoTa" class="form-control" id="catname" placeholder="" value="<?php echo $rowID['MoTa'] ?>" type="text">
                  </div>
                  <div class="form-group">
                    <label for="catname">Loại</label>
                    <input name="ID_Loai" class="form-control" id="catname" placeholder="" value="<?php echo $rowID['ID_Loai'] ?>" type="text">
                  </div>
                  <div class="form-group">
                    <label for="catname">View</label>
                    <input name="View" class="form-control" id="catname" placeholder="" value="<?php echo $rowID['View'] ?>" type="text">
                  </div>
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
                            <option <?php if(isset($Status) && $Role==$rowStatus['Name_Status']){echo 'selected="selected"';} ?> value="<?php echo $rowStatus['ID_Status'] ?>"> <?php echo $rowStatus['Name_Status'] ?></option>
                      <?php } ?>
                      
                  
                      </select>


                  


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