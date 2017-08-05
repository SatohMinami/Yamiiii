<?php 

    include 'connect.php';
    include ('../check_login.php');
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
              <h3 class="box-title">Khách Hàng</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>KHÁCH HÀNG</th>
                    <th>ĐỊA CHỈ</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    
                  </tr>
                </thead>
                <tbody>
                <?php
                $ID_KH=$_GET['ID_KH'];
                $sql="SELECT * FROM thongtinkhachhang WHERE ID_KH='$ID_KH'";
                $query=mysqli_query($con,$sql);
                $i=1;
                while($rowList=mysqli_fetch_assoc($query)){
                    ?>
                  <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $rowList['Ten_KH']; ?></td>
                    <td><?php echo $rowList['DiaChi']; ?></td>
                    <td><?php echo $rowList['Email']; ?></td>
                    <td><?php echo $rowList['Phone']; ?></td>
                  </tr>
                  <?php 
                      }
                  ?>
                </tbody>
              </table>

            <br><br>
            <div class="box-header">
              <h3 class="box-title">Đơn Hàng</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>SỐ LƯỢNG</th>
                    <th>TỔNG GIÁ</th>
                    
                  </tr>
                </thead>
                <tbody>
                <?php
                $ID_KH=$_GET['ID_KH'];
                $sql1="SELECT * FROM thongtindonhang,thongtinkhachhang,chitietdonhang,sp WHERE thongtindonhang.ID_DH=chitietdonhang.ID_DH 
                  AND   thongtinkhachhang.ID_KH=thongtindonhang.ID_KH AND thongtinkhachhang.ID_KH='$ID_KH' AND sp.ID_SP=chitietdonhang.ID_SP ";
                $query1=mysqli_query($con,$sql1);
                $i=1;
                while($rowList=mysqli_fetch_assoc($query1)){
                    ?>
                  <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $rowList['Ten_SP']; ?></td>
                    <td><?php echo $rowList['Qty']; ?></td>
                    <td><?php echo $rowList['Price']; ?></td>
                  </tr>
                  <?php 
                      }
                  ?>
                </tbody>
              </table>
              
              <br><br><br>
              <a href="donhang.php">Quay Lại </a>

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