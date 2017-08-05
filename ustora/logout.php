<?php
    include 'admin/connect.php';
    session_destroy();
    header('location:index.php');
?>