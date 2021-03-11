<?php
    if(isset($_GET["module"]) && isset($_GET["id"])){
        $sqlDel = "delete from tbl_category where id = ".$_GET["id"];
        mysqli_query($conn,$sqlDel);
        header('Location: index.php?module=listcategory');

    }
?>