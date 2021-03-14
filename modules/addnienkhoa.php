<!-- Lấy dữ liệu từ form lên -->
<?php
    if(isset($_POST["addNew"])){
        $ten_nien_khoa = $_POST["ten_nien_khoa"];
        $sqlInsert = save('tbl_nienkhoa',$_POST);
        mysqli_query($conn,$sqlInsert) or die("Lỗi thêm mới");
        header('Location: index.php?module=listnienkhoa');
    }
?>


          <div class="container-fluid  dashboard-content">
            <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Thêm mới niên khóa</h5>
                                <div class="card-body">
                                    <form action="" enctype="multipart/form-data" id="basicform" data-parsley-validate="" method="post">
                                        <div class="form-group">
                                            <label for="inputUserName">Tên hệ đào tạo</label>
                                            <input id="ten_nien_khoa" type="text" name="ten_nien_khoa" placeholder="Nhập niên khóa" class="form-control">
                                        </div>
                                        <div class="row">
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