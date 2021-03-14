<?php
    $ten_chuyen_nganh = "";
    $mo_ta ="";
    $khoa_id = "";
    $ten_khoa ="";
    

    if(isset($_GET["module"]) && isset($_GET["ma_chuyen_nganh"])){
        $ma_chuyen_nganh = $_GET["ma_chuyen_nganh"];
        $sqlGetId = "select * from tbl_chuyennganh,tbl_khoa where ma_chuyen_nganh = ".$ma_chuyen_nganh;
        $result = mysqli_query($conn,$sqlGetId);
        $row = mysqli_fetch_row($result);
        $ten_chuyen_nganh = $row[1];
        $mo_ta = $row[2];
        $ten_khoa = $row[3];
    }
    if(isset($_POST["addNew"])){
        $ten_chuyen_nganh = $_POST["ten_chuyen_nganh"];
        $sqlInsert = "update tbl_chuyennganh set ten_chuyen_nganh ='$ten_chuyen_nganh',mo_ta='$mo_ta',khoa_id='$khoa_id' where ma_chuyen_nganh = ".$_GET["ma_chuyen_nganh"];

        mysqli_query($conn,$sqlInsert) or die("Lỗi cập nhật");
        header('Location: index.php?module=listchuyennganh');
    }

    
?>

<div class="container-fluid  dashboard-content">
            <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Chỉnh sửa chuyên ngành</h5>
                                <div class="card-body">
                                    <form action="#" id="basicform" data-parsley-validate="" method="post">
                                        <div class="form-group">
                                            <label for="inputUserName">Tên chuyên ngành</label>
                                            <input id="ten_chuyen_nganh" type="text" name="ten_chuyen_nganh" placeholder="Nhập tên chuyên ngành" class="form-control" value="<?php echo $ten_chuyen_nganh ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputUserName">Mô tả</label>
                                            <textarea id="mo_ta" type="text" name="mo_ta" placeholder="Nhập mô tả" class="form-control" value=""><?php echo $mo_ta ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail">Loại sản phẩm</label>
                                            <select name="khoa_id" id="khoa_id" class="form-control">
                                                <option value="">-- Chọn khoa --</option>
                                                <?php
                                                    while($rowCat = mysqli_fetch_assoc($resultCat)){
                                                ?>
                                                    <option value="<?php echo $rowCat["ma_khoa"]?>"><?php echo $rowCat["ten_khoa"]?></option>
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