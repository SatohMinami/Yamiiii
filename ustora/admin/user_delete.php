<?php
    require 'connect.php';
    include '../check_login.php' ;
    include '../function.php';
        role_admin();
        if($_SESSION['ID_Role']!=1){
      header('location:role_error.php');
    }
    delete_user();
?>