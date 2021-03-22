<?php
    if(isset($_GET["module"]) && isset($_GET["ma_chuyen_nganh"])){
        $ma_chuyen_nganh = $_GET["ma_chuyen_nganh"];
        $sqlGetId = "select * from tbl_chuyennganh,tbl_khoa where tbl_chuyennganh.khoa_id = tbl_khoa.ma_khoa and ma_chuyen_nganh = ".$ma_chuyen_nganh;
        $result = mysqli_query($conn,$sqlGetId);
        // fetch lấy ra dòng dạng mảng
        $row = mysqli_fetch_row($result);
        $ten_chuyen_nganh = $row[1];
        $ten_khoa = $row[2];
        $mo_ta_chuyen_nganh = $row[3];
    }
    // phần cập nhật
        if(isset($_POST["addNew"])){
        $ten_chuyen_nganh = $_POST["ten_chuyen_nganh"];
        $ten_khoa = $_POST["ten_khoa"];
        $mo_ta_chuyen_nganh = $_POST["mo_ta_chuyen_nganh"];
        $ma_khoa = $_POST["khoa_id"];
        $sqlInsert = "update tbl_chuyennganh set ten_chuyen_nganh ='$ten_chuyen_nganh',mo_ta_chuyen_nganh='$mo_ta_chuyen_nganh',khoa_id='$ma_khoa' where ma_chuyen_nganh = ".$_GET["ma_chuyen_nganh"];

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
                                    <form action="" method = "POST" enctype="multipart/form-data" id="basicform" data-parsley-validate="" >
                                        <div class="form-group">
                                            <label for="inputUserName">Tên chuyên ngành</label>
                                            <input id="ten_chuyen_nganh" type="text" name="ten_chuyen_nganh" placeholder="Nhập tên chuyên ngành" class="form-control" value="<?php echo $ten_chuyen_nganh ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail">Khoa</label>
                                            <select name="khoa_id" id="khoa_id" class="form-control">
                                            <?php
                                                $sqlSelectCat = "select * from tbl_khoa,tbl_chuyennganh where tbl_khoa.ma_khoa = tbl_chuyennganh.khoa_id and ma_chuyen_nganh =".$ma_chuyen_nganh;
                                                $resultCat = mysqli_query($conn,$sqlSelectCat) or die("Lỗi truy vấn khoa");
                                                    $rowCat = mysqli_fetch_assoc($resultCat)
                                                    ?>
                                                    <option value="<?php echo $rowCat["ma_khoa"]?>"><?php echo $rowCat["ten_khoa"]?></option>
   
                                                <?php
                                                $sqlSelectCat1 = "select * from tbl_chuyennganh,tbl_khoa where ma_chuyen_nganh =".$ma_chuyen_nganh;
                                                $resultCat1 = mysqli_query($conn,$sqlSelectCat1) or die("Lỗi truy vấn khoa");
                                                    while($rowCat = mysqli_fetch_assoc($resultCat1)){
                                                ?>
                                                    <option value="<?php echo $rowCat["ma_khoa"]?>"><?php echo $rowCat["ten_khoa"]?></option>
                                                <?php        
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputUserName">Mô tả</label>
                                            <textarea id="mo_ta_chuyen_nganh" type="text" name="mo_ta_chuyen_nganh" placeholder="Nhập mô tả" class="form-control" value=""><?php echo $mo_ta_chuyen_nganh ?></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" name="addNew" class="btn btn-space btn-primary">Cập nhật</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
</div>