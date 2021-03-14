<?php
    $ten_khoa = "";
    $mo_ta = "";

    if(isset($_GET["module"]) && isset($_GET["ma_khoa"])){
        $ma_khoa = $_GET["ma_khoa"];
        $sqlGetId = "select * from tbl_khoa where ma_khoa = ".$ma_khoa;
        $result = mysqli_query($conn,$sqlGetId);
        // fetch lấy ra dòng dạng mảng
        $row = mysqli_fetch_row($result);

        $ten_khoa = $row[1];
        $mo_ta = $row[2];
    }

    // phần cập nhật
    if(isset($_POST["addNew"])){
        $ten_khoa = $_POST["ten_khoa"];
        $mo_ta = $_POST["mo_ta"];
        $sqlInsert = "update tbl_khoa set ten_khoa ='$ten_khoa',mo_ta ='$mo_ta' where ma_khoa = ".$_GET["ma_khoa"];

        mysqli_query($conn,$sqlInsert) or die("Lỗi cập nhật");
        header('Location: index.php?module=listkhoa');
    }
?>

<div class="container-fluid  dashboard-content">
            <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Thêm khoa</h5>
                                <div class="card-body">
                                    <form action="#" id="basicform" data-parsley-validate="" method="post">
                                        <div class="form-group">
                                            <label for="inputUserName">Tên khoa</label>
                                            <input id="ten_khoa" type="text" name="ten_khoa" placeholder="Nhập tên danh mục" class="form-control" value="<?php echo $ten_khoa ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputUserName">Mô tả</label>
                                            <textarea id="mo_ta" type="text" name="mo_ta" placeholder="Nhập mô tả" class="form-control" value=""><?php echo $mo_ta ?></textarea>
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