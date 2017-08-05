<?php 

    include 'connect.php';
    include '../check_login.php';
    include '../function.php';
        role_admin();
        if($_SESSION['ID_Role']!=1){
      header('location:role_error.php');
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
        DANH MỤC ĐƠN HÀNG
      </h1>
      <ol class="breadcrumb">
        <li><a href="../index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Danh mục đơn hàng</a></li>

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Đơn Hàng</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>KHÁCH HÀNG</th>
                    <th>THỜI GIAN</th>
                    <th>CHI TIẾT</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $sql="SELECT * FROM thongtindonhang,thongtinkhachhang,chitietdonhang WHERE thongtindonhang.ID_DH=chitietdonhang.ID_DH 
                  AND   thongtinkhachhang.ID_KH=thongtinkhachhang.ID_KH ";
                  $query=mysqli_query($con,$sql);
                  $i=1;
                  while($rowList=mysqli_fetch_assoc($query)){
                    ?>
                  <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $rowList['Ten_KH']; ?></td>
                    <td><?php echo $rowList['Time']; ?></td>
                    <td><a href="chitietdonhang.php?ID_KH=<?php echo $rowList['ID_KH'] ?>">Chi Tiết</a></td>
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
    <!-- /.content-wrapper -->
<?php
  include 'include/footer.php';
?>