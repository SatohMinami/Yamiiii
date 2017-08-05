<?php
    include 'connect.php';
    include '../check_login.php' ;
    include '../function.php';
        role_admin();
        if($_SESSION['ID_Role']!=1){
      header('location:role_error.php');
    }
    include('include/header.php');
    include('include/aside.php');
?>
<script type="text/javascript">
  $(document).ready(function(){
    $('.xoa').click(function(){
      if(confirm('Bạn có muốn xóa không?')){

      }else{
        return false;
      }

    })
  })
</script>
<!-- //   Content Wrapper. Contains page content -->
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
              <h3 class="box-title">Danh mục tên tài khoản</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên tài khoản</th>
                  <th>Role</th>
                  <th>Trạng thái</th>
                  <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
               
                
                <?php
                  $sql="SELECT * FROM user,role,status WHERE user.ID_Role=role.ID_Role AND user.ID_Status=status.ID_Status" ;
                  $result_list=mysqli_query($con,$sql);
                  
                  //print_r($result_list); die;
                  $i=1;
                  while($rowList=mysqli_fetch_assoc($result_list)){
                    ?>
                <tr>
                <td> <?php echo $i++; ?></td>
                <td> <?php echo $rowList['Username']; ?></td>  
                <td> <?php echo $rowList['Name_Role']; ?></td>
                <td> <?php echo $rowList['Name_Status']; ?></td>
                
                <td><a href="user_edit.php?ID_Ten=<?php echo $rowList['ID_Ten']?>">Sửa</a>  |  <a class="xoa" href="user_delete.php?ID_Ten=<?php echo $rowList['ID_Ten']?>">Xóa</a></td>
                </tr>
                 <?php 
                    }
                 ?>
              
                </tbody>
                
              </table>
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