<?php
	session_start();
	$con = mysqli_connect("localhost","root", "","ustore");
	mysqli_query($con,"SET NAMES 'UTF8'");
	// session_destroy();
			
?>