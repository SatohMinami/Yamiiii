<?php
    include 'connect.php';
    include '../check_login.php' ;
    include '../function.php';
        role_admin();
    include 'include/header.php';
    include 'include/aside.php';
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
       DANH MỤC CAROUSEL
        
      </h1>
      <ol class="breadcrumb">
        <li><a href=" index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Danh mục Carousel</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh mục Carousel</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>IMG</th>
                  <th>Content</th>
                  <th>Rank</th>
                  <th>Link</th>
                  <th>Hành Động</th>
                </tr>
                </thead>
                <tbody>
               
                
                <?php
                  $sql="SELECT * FROM carousel";
                  $result_list=mysqli_query($con,$sql);
                  //print_r($result_list); die;
                  $i=1;
                  while($rowList=mysqli_fetch_assoc($result_list)){
                    ?>
                <tr>
                <td> <?php echo $i++; ?></td>
                <td> <img src="image_product/<?php echo $rowList['IMG']; ?> " style="width:200px;height:150px" alt=""></td>
                <td> <?php echo $rowList['Noi_Dung']; ?></td>
                <td> <?php echo $rowList['Rank']; ?></td>
                <td> <?php echo $rowList['Link']; ?></td>
                
                <td><a href="carousel_edit.php?ID_Carousel=<?php echo $rowList['ID_Carousel']?>">Sửa</a>  |  <a class="xoa" href="carousel_delete.php?ID_Carousel=<?php echo $rowList['ID_Carousel']?>">Xóa</a></td>
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