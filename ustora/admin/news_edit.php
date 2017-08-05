<?php
include 'connect.php';
include '../check_login.php' ;
include '../function.php';
        role_admin();
// if($_POST){
//    print_r($_POST);
//   }
$ID_News=$_GET['ID_News'];
    $sql="SELECT * FROM news Where ID_News='$ID_News' ";
    $query=mysqli_query($con,$sql);
    $rowID=mysqli_fetch_assoc($query);

if (isset($_POST['submit'])) {
   edit_news();
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
        DANH MỤC TIN TỨC

      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Danh mục tin tức</a></li>

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Thêm mới danh mục tin tức</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <form role="form" method="POST" action="" enctype="multipart/form-data" > 
                <div class="box-body">
                   <div class="form-group">
                    <label for="catname">Danh Mục Tin Tức</label><?php if(isset($name_error)){echo '&nbsp&nbsp&nbspHãng Bị Trùng!';} ?></span>
                    <input name="Ten_News" class="form-control" id="catname" placeholder="Content" value="<?php echo $rowID['Ten_News'] ?>" type="text">
                  </div>
                  <div class="form-group">
                    <?php
                    $sql_news="SELECT * FROM dm_news";
                    $result_news=mysqli_query($con,$sql_news);
                    ?>
                      <label>Loại Tin Tức</label>
                      <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="ID_DM">
                      <?php
                        while($rowNews=mysqli_fetch_assoc($result_news)){
                        ?>
                            <option <?php if(isset($ID_DM) && $ID_DM==$rowNews['Ten_DM']){echo 'selected="selected"';} ?> value="<?php echo $rowNews['ID_DM'] ?>"> <?php echo $rowNews['Ten_DM'] ?></option>
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
  include 'include/footer.php';
?>