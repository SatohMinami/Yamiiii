<?php
    include 'connect.php';
    include '../check_login.php' ;
   include '../function.php';
        role_admin();
    include ('include/header.php');
    include ('include/aside.php');
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
<!-- //   Content Wrapper. Contains page conten -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       DANH MỤC HÃNG
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Danh mục hãng</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh mục hãng</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên Hãng</th>
                  <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
               
                
                <?php
                  $sql="SELECT * FROM dm_news " ;
                  $result_list=mysqli_query($con,$sql);
                  $i=1;
                  while($rowList=mysqli_fetch_assoc($result_list)){
                    ?>
                <tr>
                <td> <?php echo $i++; ?></td>
                <td> <?php echo $rowList['Ten_DM']; ?></td>  
                <td><a href="dm_newsedit.php?ID_DM=<?php echo $rowList['ID_DM']?>">Sửa</a>  |  <a class="xoa" href="dm_newsdelete.php?ID_DM=<?php echo $rowList['ID_DM']?>">Xóa</a></td>
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