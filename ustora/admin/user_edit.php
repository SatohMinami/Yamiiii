

<?php
    include 'connect.php';
    include '../check_login.php' ;
    include '../function.php';
        role_admin();
        if($_SESSION['ID_Role']!=1){
      header('location:role_error.php');
    }
    $ID_Ten=$_GET['ID_Ten'];
    $sql="SELECT * FROM user Where ID_Ten='$ID_Ten' ";
    $query=mysqli_query($con,$sql);
    $rowID=mysqli_fetch_assoc($query);

    edit_user();
 
    include 'include/header.php';
    include 'include/aside.php';
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
             
             <form action="" method="POST" role="form">
                 <legend>SỬA THÔNG TIN</legend>
             
                 <div class="form-group">
                     <label for="">Username</label>
                     <input type="text"  name="Username" required value="<?php echo $rowID['Username'] ?>" class="form-control" id="" placeholder="Input field">
                 </div>
                 
                 
                 <?php
                            $sql="SELECT * FROM role";
                            $result_role=mysqli_query($con,$sql);
                            ?>
                                    <label>Phân Quyền</label>
                                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="ID_Role">
                            <?php
                            while($rowRole=mysqli_fetch_assoc($result_role)){
                            ?>
                                <option <?php if(isset($ID_Role) && $Role==$rowRole['Name_Role']){echo 'selected="selected"';} ?> value="<?php echo $rowRole['ID_Role'] ?>"> <?php echo $rowRole['Name_Role'] ?></option>
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