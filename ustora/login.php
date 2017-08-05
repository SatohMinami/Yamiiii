  <?php
    
    include  'admin/connect.php' ;
    if(isset($_SESSION['Username'])){
      if($_SESSION['ID_Role']==4){
      header ('location:index.php');
    }else{
      header ('location:admin/index.php');
      }
    }

  //Login
    if(isset($_POST['Login'])){
    $Username=$_POST['Username'];
    $Password=md5($_POST['Password']);
    $sql="SELECT * FROM user WHERE Username='$Username' AND Password='$Password'";
    // echo $sql;die;
    $query=mysqli_query($con,$sql);
    
    $num_row=mysqli_num_rows($query);
    // echo $num_row;die;
    while ($row=mysqli_fetch_assoc($query)){
      $Username=$row['Username'];
      $ID_Role=$row['ID_Role'];
    }
    if($num_row==1){
      $_SESSION['Username']=$Username;
      $_SESSION['ID_Role']=$ID_Role;

      //chuyển về cart nếu đang tại trang cart
      if(isset($_SESSION['check_cart'])){
        header('location:cart.php');
      }else{
      header('location:admin/index.php');}
    }else{
      $error="Tên đăng nhập hoặc mật khẩu không đúng";
    }
  }
  // Create Acc
  if(isset($_POST['Create'])){
      $Username=$_POST['Create_Username'];
      $Password=$_POST['Create_Password'];
      $Email=$_POST['Create_Email'];
      $sql="SELECT  Info_Name FROM  infouser WHERE Info_Name='".$Username."' ";
      $result=mysqli_query($con,$sql);
        //print_r($result);die;
      $count=mysqli_num_rows($result);
        //echo $count;die;
      if($count==0){
            $insert="INSERT INTO infouser (Info_Name,Info_Password,Info_Address,Info_Phone,Info_Email,Info_IMG) VALUES ('$Username','$Password','','','$Email','')";
            
            $result_insert=mysqli_query($con,$insert);
            
            header('location: login.php');
        }else{
            $name_error="Tên đăng nhập  tồn tại";
        }
  }
  
  
  
  
  ?>
	<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="" method="post">
              <h1>Login Form</h1>
              <p><?php  if(isset($error)){
                echo $error;
              }?></p>
              <div>
             <input type="text" required class="form-control" id="inputEmail3" name="Username" placeholder="Tên đăng nhập">
              </div>
              <div>
                 <input type="password"  required class="form-control" id="inputPassword3" name="Password" placeholder="Mật khẩu">
              </div>
              <div>
                 <button type="submit" class="btn btn-success" name="Login">Login</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form action="" method="post">
              <h1>Tạo Tài Khoản</h1>
              <div>
                <input type="text" class="form-control" placeholder="Tài Khoản" required="" name="Create_Username" /><span><?php if(isset($name_error)){echo 'Tên Đăng Nhập Bị Trùng!';} ?></span>
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" name="Create_Email" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Mật Khẩu" required="" name="Create_Password" />
              </div>
              <div>
                
                <button type="submit" class="btn btn-success" name="Create">Tạo Tài Khoản</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Bạn đã là thành viên?

                  <a href="#signin" class="to_register"> Đăng Nhập </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>