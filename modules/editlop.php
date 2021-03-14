<?php
    $ten_lop = "";

    if(isset($_GET["module"]) && isset($_GET["ma_lop"])){
        $ma_lop = $_GET["ma_lop"];
        $sqlGetId = "select * from tbl_lop where ma_lop = ".$ma_lop;
        $result = mysqli_query($conn,$sqlGetId);
        $row = mysqli_fetch_row($result);

        $ten_lop = $row[1];
    }

    // phần cập nhật
    if(isset($_POST["addNew"])){
        $ten_lop = $_POST["ten_lop"];
        $sqlInsert = "update tbl_lop set ten_lop ='$ten_lop' where ma_lop = ".$_GET["ma_lop"];

        mysqli_query($conn,$sqlInsert) or die("Lỗi cập nhật");
        header('Location: index.php?module=listlop');
    }
?>

<div class="container-fluid  dashboard-content">
            <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">chỉnh sửa lớp</h5>
                                <div class="card-body">
                                    <form action="#" id="basicform" data-parsley-validate="" method="post">
                                        <div class="form-group">
                                            <label for="inputUserName">Tên lớp</label>
                                            <input id="ten_lop" type="text" name="ten_lop" placeholder="Nhập tên lớp" class="form-control" value="<?php echo $ten_lop ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail">Khoa</label>
                                            <select name="khoa_id" id="khoa_id" class="form-control">
                                                <option value="">-- Chọn khoa --</option>
                                                <?php
                                                    while($rowCat = mysqli_fetch_assoc($resultCat)){
                                                ?>
                                                    <option value="<?php echo $rowCat["ten_khoa"]?>"><?php echo $rowCat["ma_khoa"]?></option>
                                                <?php        
                                                    }
                                                ?>
                                            </select>
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