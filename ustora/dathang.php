<?php
    include 'admin/connect.php';
    if(isset($_POST['submit'])){

        //thongtinkhachhang
        $Ten_KH=    $_POST['Ten_KH'];
        $DiaChi=    $_POST['DiaChi'];
        $Email=     $_POST['Email'];
        $Phone=     $_POST['Phone'];
        
        $insert="INSERT INTO thongtinkhachhang (Ten_KH,DiaChi,Email,Phone) VALUES ('$Ten_KH','$DiaChi','$Email','$Phone')";
        // echo $insert;die;
        $result=mysqli_query($con,$insert);

        $ID_KH=mysqli_insert_id($con);

        //thongtindonhang
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $now = getdate(); 
        $time = $now["hours"] . ":" . $now["minutes"] . ":" . $now["seconds"] .  "  - " .  $now["mday"] . "/" . $now["mon"] . "/" . $now["year"] ; 

        $insert_DH="INSERT INTO thongtindonhang (ID_KH,Time) VALUES ('$ID_KH','$time')";
        $result_DH=mysqli_query($con,$insert_DH);

        $ID_DH=mysqli_insert_id($con);

        //chitietdonhang


        foreach($_SESSION['cart'] as $key => $qty){
            $Qty=$qty;
            $ID_SP=$key;
             $sql="SELECT * FROM sp Where ID_SP='$key' ";
             $query=mysqli_query($con,$sql);
             $rowList=mysqli_fetch_assoc($query);
             $multi=$rowList['Gia_Sale']*$qty;
            $insert_TTDH="INSERT INTO chitietdonhang (ID_DH,ID_SP,Qty,Price) VALUES ('$ID_DH','$ID_SP','$Qty','$multi')";
            $result_TTDH=mysqli_query($con,$insert_TTDH);
            
        }
    unset($_SESSION['cart']);
    unset($_SESSION['total']);
    }
?>
<?php
    include 'include/navbar.php';
?>
    <div class="container">
            <div class="row">
                <div style="margin: 50px 0px 200px 350px;"><h1>Cảm ơn bạn đã mua hàng!!!</h1>
                <a href="index.php"><br>Quay lại trang chủ</a>
                </div>
            </div>
    </div>
<?php
    include 'include/footer.php';
?>
    