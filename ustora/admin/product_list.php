<?php
    include 'connect.php';
    include('../check_login.php');
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
       DANH MỤC SẢN PHẨM
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Danh mục sản phẩm</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh mục tên sản phẩm</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên sản phẩm</th>
                  <th>Ảnh </th>
                  <th>Hãng</th>
                  <th>Trạng thái</th>
                  <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
               
                
                <?php
                
                  $sql="SELECT * FROM sp,status,hang_sx WHERE sp.ID_Status=status.ID_status AND sp.ID_Hang=hang_sx.ID_Hang";
                  $result_list=mysqli_query($con,$sql);
                  
                  // echo $_SESSION['num_sp'];die;
                  //print_r($result_list); die;
                  $i=1;
                  while($rowList=mysqli_fetch_assoc($result_list)){
                    ?>
                <tr>
                <td> <?php echo $i++; ?></td>
                <td> <?php echo $rowList['Ten_SP']; ?></td>  
                <td> <img src="image_product/<?php echo $rowList['IMG']; ?> " style="width:100px;height:100px" alt=""></td>
                <td> <?php echo $rowList['Ten_Hang']; ?></td>
                <td> <?php echo $rowList['Name_Status']; ?></td>
                
                <td><a href="product_edit.php?ID_SP=<?php echo $rowList['ID_SP']?>">Sửa</a>  |  <a class="xoa" href="product_delete.php?ID_SP=<?php echo $rowList['ID_SP']?>">Xóa</a></td>
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