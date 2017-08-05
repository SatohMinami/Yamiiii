<?php
    include 'connect.php';
    include '../check_login.php';
    
    include '../function.php';
        role_admin();
    $ID_Categories=$_GET['ID_Categories'];
    $sql="SELECT * FROM categories Where ID_Categories='$ID_Categories' ";
    $query=mysqli_query($con,$sql);
    $rowID=mysqli_fetch_assoc($query);
    
    edit_categories();
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
       DANH MỤC SỬA DANH MỤC
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Danh mục sửa danh mục</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh mục sửa danh mục</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             
             <form action="" method="POST" role="form">
                 <legend>SỬA THÔNG TIN </legend>
             
                 <div class="form-group">
                     <label for="">Categories</label>
                     <input type="text"  name="Name_Categories" required value="<?php echo $rowID['Name_Categories'] ?>" class="form-control" id="" placeholder="Input field">
                 </div>
                 <div class="form-group">
                     <label for="">Rank</label>
                     <input type="text"  name="Rank_Categories" required value="<?php echo $rowID['Rank_Categories'] ?>" class="form-control" id="" placeholder="Input field">
                 </div>
                 <div class="form-group">
                     <label for="">Link</label>
                     <input type="text"  name="Link"  value="<?php echo $rowID['Link'] ?>" class="form-control" id="" placeholder="Input field">
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
             
                 
             
                 <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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