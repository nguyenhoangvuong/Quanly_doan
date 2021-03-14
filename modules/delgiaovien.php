<?php
    if(isset($_GET["module"]) && isset($_GET["ma_giao_vien"])){
        $sqlDel = "delete from tbl_giaovien where ma_giao_vien = ".$_GET["ma_giao_vien"];
        mysqli_query($conn,$sqlDel);
        header('Location: index.php?module=listgiaovien');
    }
?>