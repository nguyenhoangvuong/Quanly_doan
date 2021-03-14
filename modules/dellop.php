<?php
    if(isset($_GET["module"]) && isset($_GET["ma_lop"])){
        $sqlDel = "delete from tbl_lop where ma_lop = ".$_GET["ma_lop"];
        mysqli_query($conn,$sqlDel);
        header('Location: index.php?module=listlop');
    }
?>