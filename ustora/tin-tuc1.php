<?php
    if(isset($_GET['ID_DM'])){
            $sql="SELECT * FROM dm_news,news WHERE dm_news.ID_DM=news.ID_DM";
            $query=mysqli_query($con,$sql);
            while($row=mysqli_fetch_assoc($query)){
                echo $row['Ten_News'];
            }

    }

?>