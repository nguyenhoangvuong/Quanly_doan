<?php
    $catname = "";
    $sta_tus = 0;

    if(isset($_GET["module"]) && isset($_GET["id"])){
        $id = $_GET["id"];
        $sqlGetId = "select * from tbl_category where id = ".$id;
        $result = mysqli_query($conn,$sqlGetId);
        $row = mysqli_fetch_row($result);
        $catname = $row[1];
        $sta_tus = $row[2];
    }

    // phần cập nhật
    if(isset($_POST["addNew"])){
        $catName = $_POST["catName"];
        $sta_tus = ($_POST["sta_tus"])?$_POST["sta_tus"]:0;
        $sqlInsert = "update tbl_category set cat_name ='$catName',sta_tus ='$sta_tus' where id = ".$_GET["id"];

        mysqli_query($conn,$sqlInsert) or die("Lỗi cập nhật");
        header('Location: index.php?module=listcategory');
    }
?>

<div class="container-fluid  dashboard-content">
            <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Thêm mới danh mục</h5>
                                <div class="card-body">
                                    <form action="#" id="basicform" data-parsley-validate="" method="post">
                                        <div class="form-group">
                                            <label for="inputUserName">Tên danh mục</label>
                                            <input id="catName" type="text" name="catName" placeholder="Nhập tên danh mục" class="form-control" value="<?php echo $catname ?>">
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                <label class="be-checkbox custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="sta_tus" name="sta_tus" value="1" <?php echo ($sta_tus)?"checked":"" ?>><span class="custom-control-label">Trạng thái</span>
                                                </label>
                                            </div>
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary" name="addNew">Cập nhật</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>