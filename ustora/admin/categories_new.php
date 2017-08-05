<?php
include 'connect.php';
include '../check_login.php';
include '../function.php';
        role_admin();
if (isset($_POST['submit'])) {
 add_categories() ;
 
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
        DANH MỤC THỂ LOẠI

      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Danh mục thể loại </a></li>

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Thêm mới danh mục thể loại </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <form role="form" method="POST" action="">
                <div class="box-body">
                  <div class="form-group">
                    <label for="catname">Tên danh mục</label><span><?php if(isset($name_error)){echo '&nbsp&nbsp&nbspTên thể loại Bị Trùng!';} ?></span>
                    <input name="Name_Categories" class="form-control" id="catname" placeholder="Tên danh mục " type="text">
                  </div>
                  <div class="form-group">
                    <label for="catname">Rank</label><span><?php if(isset($name_error1)){echo '&nbsp&nbsp&nbspRank Bị Trùng!';} ?></span>
                    <input name="Rank_Categories" class="form-control" id="catname" placeholder="Rank" value="" type="text">
                  </div>
                   <div class="form-group">
                    <label for="catname">Link</label>
                    <input name="Link" class="form-control" id="catname" placeholder="Link" value="" type="text">
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