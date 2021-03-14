<?php
    $ten_hdt = "";

    if(isset($_GET["module"]) && isset($_GET["ma_hdt"])){
        $ma_hdt = $_GET["ma_hdt"];
        $sqlGetId = "select * from tbl_hedaotao where ma_hdt = ".$ma_hdt;
        $result = mysqli_query($conn,$sqlGetId);
        // fetch lấy ra dòng dạng mảng
        $row = mysqli_fetch_row($result);
        $ten_hdt = $row[1];
    }

    // phần cập nhật
    if(isset($_POST["addNew"])){
        $ten_hdt = $_POST["ten_hdt"];
        $sqlInsert = "update tbl_hedaotao set ten_hdt ='$ten_hdt' where ma_hdt = ".$_GET["ma_hdt"];

        mysqli_query($conn,$sqlInsert) or die("Lỗi cập nhật");
        header('Location: index.php?module=listhedaotao');
    }
?>

<div class="container-fluid  dashboard-content">
            <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Chỉnh sửa hệ đào tạo</h5>
                                <div class="card-body">
                                    <form action="#" id="basicform" data-parsley-validate="" method="post">
                                        <div class="form-group">
                                            <label for="inputUserName">Tên danh mục</label>
                                            <input id="ten_hdt" type="text" name="ten_hdt" placeholder="Nhập tên hệ đào tạo" class="form-control" value="<?php echo $ten_hdt ?>">
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