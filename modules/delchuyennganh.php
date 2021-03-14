<?php
    if(isset($_GET["module"]) && isset($_GET["ma_chuyen_nganh"])){
        $sqlDel = "delete from tbl_chuyennganh where ma_chuyen_nganh = ".$_GET["ma_chuyen_nganh"];
        mysqli_query($conn,$sqlDel);
        header('Location: index.php?module=listchuyennganh');
    }
?>