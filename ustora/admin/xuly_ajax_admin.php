<?php
include 'connect.php';
include '../function.php';
        role_admin();
    if($_GET['key']){
    $key=  $_GET['key'];
    $sql="SELECT * FROM sp WHERE Ten_SP LIKE '%".$key."%' ";
    
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $name=$row['Ten_SP'];
?>

<a href="product_list.php?ID_SP=<?php echo $row['ID_SP'];?> " ><?php echo $name ?></a>

<?php
        echo '<br>';
    }
}
?>