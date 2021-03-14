<?php
    if(isset($_GET["module"]) && isset($_GET["ma_hdt"])){
        $sqlDel = "delete from tbl_hedaotao where ma_hdt = ".$_GET["ma_hdt"];
        mysqli_query($conn,$sqlDel);
        header('Location: index.php?module=listhedaotao');
    }
?>