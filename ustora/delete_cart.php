<?php
    session_start();
    $ID_SP=$_GET['ID_SP'];
    // echo $_SESSION['cart'][$ID_SP];die;
    unset($_SESSION['cart'][$ID_SP]); 
    header('location:cart.php');
?>