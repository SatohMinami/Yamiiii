<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    
	include 'admin/connect.php';
	include 'function.php';
    
    include 'include/navbar.php';
?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
</head>

<body>
    <div class="maincontent-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <ul>
                        <?php
                            $sql="SELECT * FROM dm_news ";
                            $query=mysqli_query($con,$sql);
                            while($rowDM=mysqli_fetch_assoc($query))
                            {
                        ?>
                        <li>
                            <a href="tin-tuc1.php?ID_DM=<?php echo $rowDM['ID_DM']; ?>"> <span><?php echo $rowDM['Ten_DM'] ?></span></a>
                        </li>
                        <?php
                            }
                        ?>
                    </ul>
                </div>
                <div class="col-md-9">
                    <?php
                        include 'tin-tuc1.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

<?php
    include 'include/footer.php';
?>

</html>