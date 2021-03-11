<!-- Lấy dữ liệu từ form lên -->
<?php
    if(isset($_POST["addNew"])){
        $catName = $_POST["catName"];
        $sta_tus = ($_POST["sta_tus"])?$_POST["sta_tus"]:0;
        $sqlInsert = save('tbl_category',$_POST);
        mysqli_query($conn,$sqlInsert) or die("Lỗi thêm mới");
        header('Location: index.php?module=listcategory');
    }
?>


          <div class="container-fluid  dashboard-content">
            <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Thêm mới danh mục</h5>
                                <div class="card-body">
                                    <form action="" enctype="multipart/form-data" id="basicform" data-parsley-validate="" method="post">
                                        <div class="form-group">
                                            <label for="inputUserName">Tên danh mục</label>
                                            <input id="cat_name" type="text" name="cat_name" placeholder="Nhập tên danh mục" class="form-control">
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                <label class="be-checkbox custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="sta_tus" name="sta_tus" value="1"><span class="custom-control-label">Trạng thái</span>
                                                </label>
                                            </div>
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary" name="addNew">Thêm mới</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>