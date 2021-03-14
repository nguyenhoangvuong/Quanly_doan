<?php
    if(isset($_GET["module"]) && isset($_GET["ma_nien_khoa"])){
        $sqlDel = "delete from tbl_nienkhoa where ma_nien_khoa = ".$_GET["ma_nien_khoa"];
        mysqli_query($conn,$sqlDel);
        header('Location: index.php?module=listnienkhoa');
    }
?>