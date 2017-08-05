<?php
    include 'connect.php';
    
    include '../check_login.php' ;
    include '../function.php';
        role_admin();

    $ID_Info=$_GET['ID_Info'];
    $sql="SELECT * FROM infouser Where ID_Info='$ID_Info' ";
    $query=mysqli_query($con,$sql);
    $rowID=mysqli_fetch_assoc($query);
   
    edit_info();
?>
        <!DOCTYPE html>
        <html>

        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Trung Tâm Đào Tạo Lập Trình Việt Nhật</title>
            <!-- Tell the browser to be responsive to screen width -->
            <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
            <!-- Bootstrap 3.3.7 -->
            <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
            <!-- Font Awesome -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
            <!-- Ionicons -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
            <!-- jvectormap -->

            <!-- Theme style -->
            <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
            <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
            <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

            <!-- Google Font -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
            <script src="https://code.jquery.com/jquery.js"></script>
            <script src="js/jquery-3.2.1.min.js"></script>


        </head>

        <body class="hold-transition skin-blue sidebar-mini">

            <!--//   Content Wrapper. Contains page content-->
            <div>
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        DANH MỤC SỬA TÀI KHOẢN

                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="../index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
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

                                    <form role="form" method="POST" action=""  enctype="multipart/form-data">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="catname">Tên Thành Viên</label><span><?php if(isset($name_error)){echo 'Tên Đăng Nhập Bị Trùng!';} ?></span>
                                                <input name="Info_Name" value="<?php echo $rowID['Info_Name']; ?>
" class="form-control" id="catname" placeholder="Tên thành viên " type="text" >
                                            </div>
                                            <div class="form-group">
                                                <label for="catname">Địa chỉ</label>
                                                <input name="Info_Address" value="<?php echo $rowID['Info_Address']; ?>"  class="form-control" id="catname" placeholder=" "  type="text">
                                            </div>

                                            <div class="form-group">
                                                <label for="catname">Phone</label>
                                                <input name="Info_Phone" value="<?php echo $rowID['Info_Phone']; ?>" class="form-control" id="catname" placeholder=""  type="tel">
                                            </div>
                                            <div class="form-group">
                                                <label for="catname">Email</label>
                                                <input name="Info_Email" value="<?php echo $rowID['Info_Email']; ?>"  class="form-control" id="catname" placeholder="abc@gmail.com" value="" type="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="catname">IMG</label>
                                                <input name="IMG" class="form-control" id="catname" placeholder="" value="" type="file">
                                            </div>



                                        </div>
                                        <!-- /.box-body -->

                                        <div class="box-footer">
                                            <input type="submit" class="btn btn-primary" name="submit">
                                        </div>
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


        </body>

        <footer>
            <div class="pull-right hidden-xs">
                <b>Trung Tâm Đào Tạo Lập Trình Việt Nhật</b>
            </div>
            <strong>2017 <a href="https:lamwebthenao.com">Hotline: 0168.257.3999</a>.</strong>
        </footer>


        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>

        </div>
        <!-- ./wrapper -->

        <!-- jQuery 3.1.1 -->
        <script src="plugins/jQuery/jquery-3.1.1.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.js"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="dist/js/pages/dashboard2.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
        </body>

        </html>