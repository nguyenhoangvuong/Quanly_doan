<?php
    $ten_nien_khoa = "";

    if(isset($_GET["module"]) && isset($_GET["ma_nien_khoa"])){
        $ma_nien_khoa = $_GET["ma_nien_khoa"];
        $sqlGetId = "select * from tbl_nienkhoa where ma_nien_khoa = ".$ma_nien_khoa;
        $result = mysqli_query($conn,$sqlGetId);
        $row = mysqli_fetch_row($result);

        $ten_nien_khoa = $row[1];
    }

    // phần cập nhật
    if(isset($_POST["addNew"])){
        $ten_nien_khoa = $_POST["ten_nien_khoa"];
        $sqlInsert = "update tbl_nienkhoa set ten_nien_khoa ='$ten_nien_khoa' where ma_nien_khoa = ".$_GET["ma_nien_khoa"];

        mysqli_query($conn,$sqlInsert) or die("Lỗi cập nhật");
        header('Location: index.php?module=listnienkhoa');
    }
?>

<div class="container-fluid  dashboard-content">
            <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">chỉnh sửa niên khóa</h5>
                                <div class="card-body">
                                    <form action="#" id="basicform" data-parsley-validate="" method="post">
                                        <div class="form-group">
                                            <label for="inputUserName">Tên niên khóa</label>
                                            <input id="ten_nien_khoa" type="text" name="ten_nien_khoa" placeholder="Nhập niên khóa" class="form-control" value="<?php echo $ten_nien_khoa ?>">
                                        </div>
                                        <div class="row">
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