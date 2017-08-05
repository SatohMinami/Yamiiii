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
       TIN TỨC
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">tin tức</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">tin tứch3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Tin Tức</th>
                  <th>Loại Tin</th>
                  <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
               
                
                <?php
                  $sql="SELECT * FROM news,dm_news WHERE news.ID_DM=dm_news.ID_DM " ;
                  $result_list=mysqli_query($con,$sql);
                  $i=1;
                  while($rowList=mysqli_fetch_assoc($result_list)){
                    ?>
                <tr>
                <td> <?php echo $i++; ?></td>
                <td> <?php echo $rowList['Ten_News']; ?></td>  
                <td> <?php echo $rowList['Ten_DM']; ?></td>  
                <td><a href="news_edit.php?ID_News=<?php echo $rowList['ID_News']?>">Sửa</a>  |  <a class="xoa" href="news_delete.php?ID_News=<?php echo $rowList['ID_News']?>">Xóa</a></td>
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