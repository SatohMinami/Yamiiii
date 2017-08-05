<?php


function role_admin()
{
    if($_SESSION['ID_Role']==4){
      header ('location:../index.php');
    }
}

function action($action)
{   
    global $con;
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $now = getdate(); 
    $Username=$_SESSION['Username'];
    $time = $now["hours"] . ":" . $now["minutes"] . ":" . $now["seconds"] .  "  - " .  $now["mday"] . "/" . $now["mon"] . "/" . $now["year"] ; 
        // echo $time;die;
    $insert_action="INSERT INTO `history` ( `Username`, `Action`, `Time`) VALUES ('{$Username}', '{$action}', '{$time}')";
    
    $result_action=mysqli_query($con,$insert_action);
    
}

function add_banner()
{
    global $con;
    $Name_IMG=$_FILES['IMG']['name'];
    $TMP_IMG=$_FILES['IMG']['tmp_name'];

    $target_dir="../../img/";
    $target_file=$target_dir.basename($_FILES['IMG']['name']);
    if($Name_IMG!= ""){
        move_uploaded_file($TMP_IMG,$target_file);
        
    }
    $insert="INSERT INTO banner (Banner_IMG)
    VALUES ('$Name_IMG')";
    $result_insert=mysqli_query($con,$insert);
    action(' thêm Banner');
    header('location: banner_new.php');
}

function delete_banner()
{
    global $con;
    $ID_Banner= $_GET['ID_Banner'];
    $sql="DELETE FROM banner WHERE ID_Banner='$ID_Banner'";
    mysqli_query($con,$sql);
    action(' xóa Banner');
    header("location:banner_list.php");
    exit();
}

function add_carousel()
{   
    global $con;
    $Name_IMG=$_FILES['IMG']['name'];
    $TMP_IMG=$_FILES['IMG']['tmp_name'];

    $target_dir="image_product/";
    $target_file=$target_dir.basename($_FILES['IMG']['name']);
    if($Name_IMG!= ""){
        move_uploaded_file($TMP_IMG,$target_file);
        
    }
    $Noi_Dung    = $_POST["Noi_Dung"];
    $Rank   = $_POST["Rank"];
    $Link= $_POST["Link"];
    
        //kiem tra ten dang nhap ton tai chua
    $sql="SELECT IMG FROM  carousel WHERE IMG='".$Name_IMG."' ";
    $result=mysqli_query($con,$sql);
    $sql1="SELECT Rank FROM  carousel WHERE Rank='".$Rank."' ";
    $result1=mysqli_query($con,$sql1);
        //print_r($result);die;
    $count=mysqli_num_rows($result);
    $count1=mysqli_num_rows($result1);
        //echo $count;die;
    if($count!=0 && $count1!=0 ){
        $name_error1="Rank  tồn tại";
        $name_error="Ảnh  tồn tại";
    }elseif ($count1!=0){
        $name_error1="Rank  tồn tại";
    }elseif ($count!=0 ){
        $name_error="Ảnh  tồn tại";
    }else{
        $insert="INSERT INTO carousel (IMG,Noi_Dung,Rank,Link)
        VALUES ('$Name_IMG','$Noi_Dung','$Rank','$Link')";
        $result_insert=mysqli_query($con,$insert);
        action(' thêm Carousel');
        
        header('location: carousel_new.php');
    }
    
}

function delete_carousel()
{
    global $con;
    $ID_Carousel= $_GET['ID_Carousel'];
    $sql="DELETE FROM carousel WHERE ID_Carousel='$ID_Carousel'";
    mysqli_query($con,$sql);
    action(' xóa Carousel');
    header("location:carousel_list.php");
    exit();
}

function edit_carousel()
{   
    global $con;
    global $ID_Carousel;

    if(isset($_POST['submit'])){
        $Name_IMG=$_FILES['IMG']['name'];
        $TMP_IMG=$_FILES['IMG']['tmp_name'];

        $target_dir="image_carousel/";
        $target_file=$target_dir.basename($_FILES['IMG']['name']);
        if($Name_IMG!= ""){
            move_uploaded_file($TMP_IMG,$target_file);
            
        }

        $Noi_Dung     = $_POST["Noi_Dung"];
        $Rank         = $_POST["Rank"];
        $Link         = $_POST["Link"];
        if($Name_IMG==""){
            $update="UPDATE carousel SET Noi_Dung='$Noi_Dung', Rank='$Rank',  Link='$Link' 
            WHERE ID_Carousel='$ID_Carousel' ";
            mysqli_query($con,$update);
            
        }else{
            $update="UPDATE carousel SET IMG='$Name_IMG',Noi_Dung='$Noi_Dung', Rank='$Rank', Link='$Link'
            WHERE ID_Carousel='$ID_Carousel' ";
            
            mysqli_query($con,$update); }
            action(' sửa Carousel');
            header("location:carousel_list.php");
            exit();
    }       
           
}
    


function delete_categories() 
{   global $con;
    $ID_Categories= $_GET['ID_Categories'];
    $sql="DELETE FROM categories WHERE ID_Categories='$ID_Categories'";
    mysqli_query($con,$sql);
    action(' xóa categories');
    header("location:categories_list.php");
    exit();
}

function add_categories() 
{
    global $con;
    $Name_Categories = $_POST["Name_Categories"];
    $Rank_Categories = $_POST["Rank_Categories"];
    $Link            = $_POST["Link"];
    $ID_Status    = $_POST["ID_Status"];
        //kiem tra ten dang nhap ton tai chua
    $sql="SELECT Name_Categories FROM  categories WHERE Name_Categories='".$Name_Categories."' ";
    $result=mysqli_query($con,$sql);
    $sql1="SELECT Rank_Categories FROM  categories WHERE Rank_Categories='".$Rank_Categories."' ";
    $result1=mysqli_query($con,$sql1);
        //print_r($result);die;
    $count=mysqli_num_rows($result);
    $count1=mysqli_num_rows($result1);
        //echo $count;die;
    if($count!=0 && $count1!=0){ 
        $name_error="Tên thể loại  tồn tại";
        $name_error1="Tên thể loại  tồn tại";
        
        
    }elseif ($count1!=0){
        $name_error1="Tên thể loại  tồn tại";
    }elseif ($count!=0){
        $name_error="Tên thể loại  tồn tại";
    }else{
        $insert="INSERT INTO categories (Name_Categories,Rank_Categories,Link,ID_Status) VALUE('$Name_Categories','$Rank_Categories','$Link','$ID_Status')";
        $result_insert=mysqli_query($con,$insert);
        action(' thêm categories');
        header('location: categories_new.php');
    }
}


function edit_categories()
{   
    global $con;
    global $ID_Categories;

    if(isset($_POST['submit'])){
        $Name_Categories=$_POST['Name_Categories'];
        $Rank_Categories=$_POST['Rank_Categories'];
        $Link=$_POST['Link'];
        $ID_Status=$_POST['ID_Status'];
        $update="UPDATE categories SET Name_Categories='$Name_Categories', Rank_Categories='$Rank_Categories', ID_Status='$ID_Status', Link='$Link' WHERE ID_Categories='$ID_Categories' ";
        mysqli_query($con,$update);
        // echo $na;die;
        action(' sửa categories');
        header('location:categories_list.php');
        exit();
    }
}

function add_hangsx()
{
    global $con;
    
    $Name_IMG=$_FILES['IMG_Hang']['name'];
    $TMP_IMG=$_FILES['IMG_Hang']['tmp_name'];

    $target_dir="image_hang/";
    $target_file=$target_dir.basename($_FILES['IMG_Hang']['name']);
    if($Name_IMG!= ""){
        move_uploaded_file($TMP_IMG,$target_file);
        
    }

    
    $Ten_Hang    = $_POST["Ten_Hang"];
    
        //kiem tra ten dang nhap ton tai chua
    $sql="SELECT Ten_Hang FROM  hang_sx WHERE Ten_Hang='".$Ten_Hang."' ";
    $result=mysqli_query($con,$sql);
        //print_r($result);die;
    $count=mysqli_num_rows($result);
        //echo $count;die;
    if($count==0){
        $insert="INSERT INTO hang_sx (Ten_Hang,IMG_Hang)
        VALUES ('$Ten_Hang','$Name_IMG')";
        
        $result_insert=mysqli_query($con,$insert);
        action(' thêm hãng sản xuất');
        header('location: hangsx_new.php');
    }else {
        $name_error="Tên hãng  tồn tại";
    }
    
}

function delete_hangsx()
{
    global $con;
    $ID_Hang= $_GET['ID_Hang'];
    $sql="DELETE FROM hang_sx WHERE ID_Hang='$ID_Hang'";
    mysqli_query($con,$sql);
    action(' xóa hãng sản xuất');
    header("location:hangsx_list.php");
    exit();
}



function edit_hangsx()
{
    global $con;
    global $ID_Hang;

    if(isset($_POST['submit'])){
    $Name_IMG=$_FILES['IMG_Hang']['name'];
    $TMP_IMG=$_FILES['IMG_Hang']['tmp_name'];

    $target_dir="image_carousel/";
    $target_file=$target_dir.basename($_FILES['IMG_Hang']['name']);
    if($Name_IMG!= ""){
        move_uploaded_file($TMP_IMG,$target_file);
        
    }

    $Ten_Hang     = $_POST["Ten_Hang"];
    if($Name_IMG==""){
    $update="UPDATE hang_sx SET Ten_Hang='$Ten_Hang'
    WHERE ID_Hang='$ID_Hang' ";
    action(' sửa hãng sản xuất');
    }else{
    $update="UPDATE hang_sx SET Ten_Hang='$Ten_Hang',IMG_Hang='$Name_IMG'
    WHERE ID_Hang='$ID_Hang' ";
    action(' sửa hãng sản xuất');}

    mysqli_query($con,$update);
    
    header('location:hangsx_list.php');
    exit();
    }
}

function new_infouser()
{
    global $con;
    if (isset($_POST['submit'])) {
        $Name_IMG=$_FILES['IMG']['name'];
        $TMP_IMG=$_FILES['IMG']['tmp_name'];
        // echo $Name_IMG;die;

        $target_dir="image_infouser/";
        $target_file=$target_dir.basename($_FILES['IMG']['name']);
        if($Name_IMG!= ""){
            move_uploaded_file($TMP_IMG,$target_file);
            
        }
        // lấy thông tin người dùng
        $Info_Name= $_POST["Info_Name"];
        $Info_Address = $_POST["Info_Address"];
        $Info_Phone   = $_POST["Info_Phone"];
        $Info_Email    = $_POST["Info_Email"];
        //kiem tra ten dang nhap ton tai chua
        $sql="SELECT  Info_Name FROM  infouser WHERE Info_Name='".$Info_Name."' ";
        $result=mysqli_query($con,$sql);
        //print_r($result);die;
        $count=mysqli_num_rows($result);
        //echo $count;die;
        if($count==0){
            $insert="INSERT INTO infouser (Info_Name,Info_Address,Info_Phone,Info_Email,Info_IMG) VALUES ('$Info_Name','$Info_Address','$Info_Phone','$Info_Email','$Name_IMG')";
            action(' thêm Info User');
            //echo $insert;die;
            $result_insert=mysqli_query($con,$insert);
            
            header('location: infouser_new.php');
        }else{
            $name_error="Tên đăng nhập  tồn tại";
        }

    }

}

function delete_infouser()
{
    global $con;
    $Info_Name= $_GET['Info_Name'];
    $sql="DELETE FROM infouser WHERE Info_Name='$Info_Name'";
    mysqli_query($con,$sql);
    action(' xóa Info User');
    header("location: infouser_list.php");
    exit();
}


function edit_info()
{
    global $con;
    $ID_Info=$_GET['ID_Info'];

    if(isset($_POST['submit'])){
        $Name_IMG=$_FILES['IMG']['name'];
        $TMP_IMG=$_FILES['IMG']['tmp_name'];

        $target_dir="image_infouser/";
        $target_file=$target_dir.basename($_FILES['IMG']['name']);
        if($Name_IMG!= ""){
            move_uploaded_file($TMP_IMG,$target_file);
            
        }

        $Info_Name     = $_POST["Info_Name"];
        $Info_Address  = $_POST["Info_Address"];
        $Info_Phone    = $_POST["Info_Phone"];
        $Info_Email    = $_POST["Info_Email"];
        if($Name_IMG==""){
            $update="UPDATE infouser SET Info_Name='$Info_Name', Info_Address='$Info_Address',  Info_Phone='$Info_Phone',  Info_Email='$Info_Email' 
            WHERE ID_Info='$ID_Info' ";
            
        }else{
            $update="UPDATE infouser SET Info_Name='$Info_Name', Info_Address='$Info_Address', Info_Phone='$Info_Phone',  Info_Email='$Info_Email',	Info_IMG='$Name_IMG'
            WHERE ID_Info='$ID_Info' ";}
            
            $query=mysqli_query($con,$update); 
            // print_r ($update);die;
            header("location:info.php");
            exit();
    }       


}



function new_product()
{   global $con;
    if (isset($_POST['submit'])) {
        $Name_IMG=$_FILES['IMG']['name'];
        $TMP_IMG=$_FILES['IMG']['tmp_name'];

        $target_dir="image_product/";
        $target_file=$target_dir.basename($_FILES['IMG']['name']);
        if($Name_IMG!= ""){
            move_uploaded_file($TMP_IMG,$target_file);
            
        }

        $Ten_SP     = $_POST["Ten_SP"];
        $KichThuoc  = $_POST["KichThuoc"];
        $CPU        = $_POST["CPU"];
        $Camera     = $_POST["Camera"];
        $Card       = $_POST["Card"];
        $DPG        = $_POST["DPG"];
        $NgoaiVi    = $_POST["NgoaiVi"];
        $Gia        = $_POST["Gia"];
        
        $ID_Hang    = $_POST["ID_Hang"];
        $Gia_Sale   = $_POST["Gia_Sale"];
        $MoTa       = $_POST["MoTa"];
        $ID_Loai    = $_POST["ID_Loai"];
        $View       = $_POST["View"];
        $ID_Status  = $_POST["ID_Status"];
        //kiem tra ten dang nhap ton tai chua
        $sql="SELECT Ten_SP FROM  sp WHERE Ten_SP='".$Ten_SP."' ";
        $result=mysqli_query($con,$sql);
        //print_r($result);die;
        $count=mysqli_num_rows($result);
        //echo $count;die;
        if($count==0){
            $insert="INSERT INTO sp (Ten_SP,KichThuoc,CPU,Camera,Card,DPG,NgoaiVi,Gia,IMG,ID_Hang,Gia_Sale,MoTa,ID_Loai,View,ID_Status)
            VALUES ('$Ten_SP','$KichThuoc','$CPU','$Camera','$Card','$DPG','$NgoaiVi','$Gia','$Name_IMG','$ID_Hang','$Gia_Sale','$MoTa','$ID_Loai','$View','$ID_Status')";
            //echo $insert;die;
            $result_insert=mysqli_query($con,$insert);
            action('thêm sản phẩm');
            header('location: product_new.php');
        }else{
            $name_error="Tên sản phẩm  tồn tại";
        }
    }
}


function delete_product()
{
    global $con;
    $ID_SP= $_GET['ID_SP'];
    $sql="DELETE FROM sp WHERE ID_SP='$ID_SP'";
    mysqli_query($con,$sql);
    action('xóa sản phẩm');
    header("location:product_list.php");
    exit();
    
}

function edit_product()
{
    global $con;
    global $ID_SP;

    if(isset($_POST['submit'])){
    $Name_IMG=$_FILES['IMG']['name'];
    $TMP_IMG=$_FILES['IMG']['tmp_name'];

    $target_dir="image_product/";
    $target_file=$target_dir.basename($_FILES['IMG']['name']);
    if($Name_IMG!= ""){
        move_uploaded_file($TMP_IMG,$target_file);
        
    }

    $Ten_SP     = $_POST["Ten_SP"];
    $KichThuoc  = $_POST["KichThuoc"];
    $CPU        = $_POST["CPU"];
    $Camera     = $_POST["Camera"];
    $Card       = $_POST["Card"];
    $DPG        = $_POST["DPG"];
    $NgoaiVi    = $_POST["NgoaiVi"];
    $Gia        = $_POST["Gia"];
    $ID_Hang    = $_POST["ID_Hang"];
    $Gia_Sale   = $_POST["Gia_Sale"];
    $MoTa       = $_POST["MoTa"];
    $ID_Loai    = $_POST["ID_Loai"];
    $View       = $_POST["View"];
    $ID_Status  = $_POST["ID_Status"];
    if($Name_IMG==""){
    $update="UPDATE sp SET Ten_SP='$Ten_SP', KichThuoc='$KichThuoc', CPU='$CPU', Camera='$Camera', 
    Card='$Card', DPG='$DPG', NgoaiVi='$NgoaiVi', Gia='$Gia', ID_Hang='$ID_Hang', Gia_Sale='$Gia_Sale', 
    MoTa='$MoTa', ID_Loai='$ID_Loai', View='$View', ID_Status='$ID_Status'
    WHERE ID_SP='$ID_SP' ";
    action('sửa sản phẩm');
    }else{
    $update="UPDATE sp SET Ten_SP='$Ten_SP', KichThuoc='$KichThuoc', CPU='$CPU', Camera='$Camera', 
    Card='$Card', DPG='$DPG', NgoaiVi='$NgoaiVi', Gia='$Gia', IMG='$Name_IMG', ID_Hang='$ID_Hang', Gia_Sale='$Gia_Sale', 
    MoTa='$MoTa', ID_Loai='$ID_Loai', View='$View', ID_Status='$ID_Status' 
    WHERE ID_SP='$ID_SP' ";
    action('sửa sản phẩm');}
    // echo $update;die;
    mysqli_query($con,$update);
    
    header('location:product_list.php');
    exit();
    }
}

function new_user()
    {
        global $con;
        if (isset($_POST['submit'])) {
 // lấy thông tin người dùng
        $Username = $_POST["Username"];
        $Password = md5($_POST["Password"]);
        $ID_Role   = $_POST["ID_Role"];
        $ID_Status    = $_POST["ID_Status"];
        //kiem tra ten dang nhap ton tai chua
        $sql="SELECT username FROM  user WHERE username='".$Username."' ";
        $result=mysqli_query($con,$sql);
        //print_r($result);die;
        $count=mysqli_num_rows($result);
        //echo $count;die;
        if($count==0){
            $insert="INSERT INTO user (Username,Password,ID_Role,ID_Status) VALUES ('$Username','$Password','$ID_Role','$ID_Status')";
            
            $result_insert=mysqli_query($con,$insert);
            action('thêm User');
            header('location: user_new.php');
        }else{
            $name_error="Tên đăng nhập  tồn tại";
        }
        }
    }

function delete_user()
    {
        global $con;
        $ID_Ten= $_GET['ID_Ten'];
        $sql="DELETE FROM user WHERE ID_Ten='$ID_Ten'";
        mysqli_query($con,$sql);
        action('xóa User');
        header("location:user_list.php");
        exit();
    }

function edit_user()
    {
        global $con;
        global $ID_Ten;

        if(isset($_POST['submit'])){
        $Username=$_POST['Username'];
        $ID_Role=$_POST['ID_Role'];
        $ID_Status=$_POST['ID_Status'];
        $update="UPDATE user SET Username='$Username', ID_Role='$ID_Role', ID_Status='$ID_Status' WHERE ID_Ten='$ID_Ten' ";
        mysqli_query($con,$update);
        // echo $na;die;
        action('sửa User');
        header('location:user_list.php');
        exit();
    }
    }


function add_dmnews()
{
    global $con;

    
    $Ten_DM   = $_POST["Ten_DM"];
    
        //kiem tra ten dang nhap ton tai chua
    $sql="SELECT * FROM dm_news WHERE Ten_DM='".$Ten_DM."' ";
    
    $result=mysqli_query($con,$sql);
    $count=mysqli_num_rows($result);
        //echo $count;die;
    if($count==0){
        $insert="INSERT INTO dm_news (Ten_DM)
        VALUES ('$Ten_DM')";
        
        $result_insert=mysqli_query($con,$insert);
        
        action(' thêm danh mục tin tức');
        header('location: dm_news.php');
    }else {
        $name_error="Tên hãng  tồn tại";
    }
    
}

function delete_dmnews()
{
    global $con;
    $ID_DM= $_GET['ID_DM'];
    $sql="DELETE FROM dm_news WHERE ID_DM='$ID_DM'";
    mysqli_query($con,$sql);
    action(' xóa danh mục');
    header("location:dm_newslist.php");
    exit();
}



function edit_dmnews()
{
    global $con;
    global $ID_DM;

    if(isset($_POST['submit'])){
   

    $Ten_DM     = $_POST["Ten_DM"];
    $update="UPDATE dm_news SET Ten_DM='$Ten_DM'
    WHERE ID_DM='$ID_DM' ";
    action(' sửa danh mục tin tức');
    
    mysqli_query($con,$update);
    
    header('location:dm_newslist.php');
    exit();
    }
}

function add_news()
{
    global $con;

    $Ten_News   = $_POST["Ten_News"];
    $ID_DM   = $_POST["ID_DM"];

        $insert="INSERT INTO news (Ten_News,ID_DM)
        VALUES ('$Ten_News','$ID_DM')";
        
        $result_insert=mysqli_query($con,$insert);
        // echo $insert;die;
        
        action(' thêm tin tức');
        header('location: news_new.php');
    
}

function delete_news()
{
    global $con;
    $ID_News= $_GET['ID_News'];
    $sql="DELETE FROM news WHERE ID_News='$ID_News'";
    mysqli_query($con,$sql);
    action(' xóa tin tức');
    header("location:news_list.php");
    exit();
}



function edit_news()
{
    global $con;
    global $ID_News;

    if(isset($_POST['submit'])){
   
    $Ten_News     = $_POST["Ten_News"];
    $ID_DM     = $_POST["ID_DM"];
    $update="UPDATE news SET Ten_News='$Ten_News',ID_DM='$ID_DM'
    WHERE ID_News='$ID_News' ";
    action(' sửa  tin tức');
    // echo $ID_DM;die;
    
    mysqli_query($con,$update);
    
    header('location:news_list.php');
    exit();
    }
}


function ascii_name($str) 
	{
		$chars = array(
			'a'	=>	array('ấ','ầ','ẩ','ẫ','ậ','Ấ','Ầ','Ẩ','Ẫ','Ậ','ắ','ằ','ẳ','ẵ','ặ','Ắ','Ằ','Ẳ','Ẵ','Ặ','á','à','ả','ã','ạ','â','ă','Á','À','Ả','Ã','Ạ','Â','Ă'),
			'e' =>	array('ế','ề','ể','ễ','ệ','Ế','Ề','Ể','Ễ','Ệ','é','è','ẻ','ẽ','ẹ','ê','É','È','Ẻ','Ẽ','Ẹ','Ê'),
			'i'	=>	array('í','ì','ỉ','ĩ','ị','Í','Ì','Ỉ','Ĩ','Ị'),
			'o'	=>	array('ố','ồ','ổ','ỗ','ộ','Ố','Ồ','Ổ','Ô','Ộ','ớ','ờ','ở','ỡ','ợ','Ớ','Ờ','Ở','Ỡ','Ợ','ó','ò','ỏ','õ','ọ','ô','ơ','Ó','Ò','Ỏ','Õ','Ọ','Ô','Ơ'),
			'u'	=>	array('ứ','ừ','ử','ữ','ự','Ứ','Ừ','Ử','Ữ','Ự','ú','ù','ủ','ũ','ụ','ư','Ú','Ù','Ủ','Ũ','Ụ','Ư'),
			'y'	=>	array('ý','ỳ','ỷ','ỹ','ỵ','Ý','Ỳ','Ỷ','Ỹ','Ỵ'),
			'd'	=>	array('đ','Đ'),
			'-'	=>	array('!','@','#','$','%','^','&','*','\\','\'',',','/','"',':'),
		);
		foreach ($chars as $key => $arr) 
			foreach ($arr as $val)
				$str = str_replace($val,$key,$str);
		$str = str_replace(" ","-",$str);
                $str = strtolower($str);
		return $str;
	}
	
	// /* Ham su dung de lay ngay gio tieng viet tu mot chuoi so kieu int  
	//  * Tham so $time la chuoi so kieu int

function get_price($id)
{
    global $con;
    $sql = "SELECT Gia_Sale FROM sp WHERE ID_SP=$id";
    $query= mysqli_query($con,$sql);
    while($rowList=mysqli_fetch_assoc($query)){
        $gia=$rowList['Gia_Sale'];
    }
    return $gia;
    
}

function total_cart(){
    $cart=$_SESSION['cart'];
    $tong=0;
    
    foreach($cart as $key => $value )
    {
        $gia=get_price($key);
        $tong_sp=$gia*$value;
        $tong=$tong+$tong_sp;
    }
    return $tong;
}

?>