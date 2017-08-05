<?php 

    include 'connect.php';
    include '../check_login.php' ;
     include '../function.php';
        role_admin();
    include 'include/header.php' ;
    include 'include/aside.php' ;
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
       DANH MỤC 
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Danh mục </a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh mục </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên danh mục</th>
                  <th>Rank</th>
                  <th>Link</th>
                  <th>Trạng thái</th>
                  
                  <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
               
                
                <?php
                  $sql="SELECT * FROM categories,status WHERE categories.ID_Status=status.ID_Status ORDER BY Rank_Categories ASC";
                  $result_list=mysqli_query($con,$sql);
                  //print_r($result_list); die;
                  $i=1;
                  while($rowList=mysqli_fetch_assoc($result_list)){
                    ?>
                <tr>
                <td> <?php echo $i++; ?></td>
                <td> <?php echo $rowList['Name_Categories']; ?></td>  
                <td> <?php echo $rowList['Rank_Categories']; ?></td>
                <td> <?php echo $rowList['Link']; ?></td>
                <td> <?php echo $rowList['Name_Status']; ?></td>
                
                <td><a href="categories_edit.php?ID_Categories=<?php echo $rowList['ID_Categories']?>">Sửa</a>  |  <a class="xoa" href="categories_delete.php?ID_Categories=<?php echo $rowList['ID_Categories']?>">Xóa</a></td>
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