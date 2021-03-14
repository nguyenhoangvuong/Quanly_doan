<?php
    if(isset($_GET["module"]) && isset($_GET["ma_sinh_vien"])){
        $sqlDel = "delete from tbl_sinhvien where ma_sinh_vien = ".$_GET["ma_sinh_vien"];
        mysqli_query($conn,$sqlDel);
        header('Location: index.php?module=listsinhvien');
    }
?>