<?php
    include 'connect.php';
    include '../check_login.php' ;
    include '../function.php';
    role_admin();
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
        <div>
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    THÔNG TIN THÀNH VIÊN

                </h1>

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
                   $_SESSION['num_infouser']=mysqli_num_rows($result_list);
                  $i=1;
                  while($rowList=mysqli_fetch_assoc($result_list)){
                    ?>
                                            <tr>
                                                <td>
                                                    <?php echo $i++; ?>
                                                </td>
                                                <td>
                                                    <?php echo $rowList['Info_Name']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $rowList['Info_Address']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $rowList['Info_Phone']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $rowList['Info_Email']; ?>
                                                </td>
                                                <td> <img src="image_infouser/<?php echo $rowList['Info_IMG']; ?> " style="width:200px;height:150px"
                                                        alt=""></td>
                                                <td><a href="info_edit.php?ID_Info=<?php echo $rowList['ID_Info']?>">Sửa</a>                                                    </td>
                                            </tr>
                                            <?php 
                    }
                 ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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