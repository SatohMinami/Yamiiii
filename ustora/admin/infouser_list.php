<?php
    include 'connect.php';
    include '../check_login.php' ;
    include '../function.php';
        role_admin();
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
       DANH MỤC THÀNH VIÊN
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Danh mục thành viên</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh mục thành viên</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên Thành Viên</th>
                  <th>Địa Chỉ</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>IMG</th>
                  <th>Hành Động</th>
                </tr>
                </thead>
                <tbody>
               
                
                <?php
                  $sql="SELECT * FROM infouser ";
                  $result_list=mysqli_query($con,$sql);
                  $i=1;
                  while($rowList=mysqli_fetch_assoc($result_list)){
                    ?>
                <tr>
                <td> <?php echo $i++; ?></td>
                <td> <?php echo $rowList['Info_Name']; ?></td>  
                <td> <?php echo $rowList['Info_Address']; ?></td>
                <td> <?php echo $rowList['Info_Phone']; ?></td>
                <td> <?php echo $rowList['Info_Email']; ?></td>
                <td> <img src="image_infouser/<?php echo $rowList['Info_IMG']; ?> " style="width:200px;height:150px" alt=""></td>
                <td><a href="infouser_edit.php?Info_Name=<?php echo $rowList['Info_Name']?>">Sửa</a>  |  <a class="xoa" href="infouser_delete.php?Info_Name=<?php echo $rowList['Info_Name']?>">Xóa</a></td>
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