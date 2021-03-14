<?php
    if(isset($_GET["module"]) && isset($_GET["ma_khoa"])){
        $sqlDel = "delete from tbl_khoa where ma_khoa = ".$_GET["ma_khoa"];
        mysqli_query($conn,$sqlDel);
        header('Location: index.php?module=listkhoa');
    }
?>