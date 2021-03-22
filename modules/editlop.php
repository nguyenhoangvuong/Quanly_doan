<?php
    if(isset($_GET["module"]) && isset($_GET["ma_lop"])){
        $ma_lop = $_GET["ma_lop"];
        $sqlGetId = "select * from tbl_lop,tbl_chuyennganh,tbl_khoa where tbl_lop.chuyennganh_id = tbl_chuyennganh.ma_chuyen_nganh and tbl_lop.khoa_id = tbl_khoa.ma_khoa and ma_lop = ".$ma_lop;
        $result = mysqli_query($conn,$sqlGetId);
        $row = mysqli_fetch_row($result);

        $ten_lop = $row[1];
        $ten_khoa = $row[2];
        $ten_chuyen_nganh = $row[3];
        $thong_tin = $row[4];
    }
    $sqlSelectCat11 = "select * from tbl_khoa";
    $resultCat11 = mysqli_query($conn,$sqlSelectCat11);

    // phần cập nhật
    if(isset($_POST["addNew"])){
        $ten_lop = $_POST["ten_lop"];
        $ma_khoa = $_POST["khoa_id"];
        $ten_khoa =$_POST["ten_khoa"];
        $ma_chuyen_nganh = $_POST["chuyennganh_id"];
        $ten_chuyen_nganh =$_POST["ten_chuyen_nganh"];
        $thong_tin = $_POST["thong_tin"];

        $sqlInsert = "update tbl_lop set ten_lop ='$ten_lop',khoa_id = '$ma_khoa',chuyennganh_id='$ma_chuyen_nganh',thong_tin='$thong_tin' where ma_lop = ".$_GET["ma_lop"];

        mysqli_query($conn,$sqlInsert) or die("Lỗi cập nhật");
        header('Location: index.php?module=listlop');
    }
?>

<div class="container-fluid  dashboard-content">
<div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Chỉnh sửa lớp</h5>
                                <div class="card-body">
                                    <form action="" method = "POST" enctype="multipart/form-data" id="basicform" data-parsley-validate="" >
                                        <div class="form-group">
                                            <label for="inputUserName">Tên chuyên ngành</label>
                                            <input id="ten_lop" type="text" name="ten_lop" placeholder="Nhập tên chuyên ngành" class="form-control" value="<?php echo $ten_lop ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail">Khoa</label>
                                            <select name="khoa_id" id="khoa_id" class="form-control">
                                            <?php
                                                $sqlSelectCat = "select * from tbl_khoa,tbl_lop where tbl_khoa.ma_khoa = tbl_lop.khoa_id and ma_lop =".$ma_lop;
                                                $resultCat = mysqli_query($conn,$sqlSelectCat);
                                                    $rowCat = mysqli_fetch_assoc($resultCat)
                                                    ?>
                                                    <option value="<?php echo $rowCat["ma_khoa"]?>"><?php echo $rowCat["ten_khoa"]?></option>
   
                                                <?php
                                                $sqlSelectCat1 = "select * from tbl_lop,tbl_khoa where ma_lop =".$ma_lop;
                                                $resultCat1 = mysqli_query($conn,$sqlSelectCat1);
                                                    while($rowCat = mysqli_fetch_assoc($resultCat1)){
                                                ?>
                                                    <option value="<?php echo $rowCat["ma_khoa"]?>"><?php echo $rowCat["ten_khoa"]?></option>
                                                <?php        
                                                    }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputEmail">Khoa</label>
                                            <select name="chuyennganh_id" id="chuyennganh_id" class="form-control">
                                            <?php
                                                $sqlSelectCat = "select * from tbl_chuyennganh,tbl_lop where tbl_chuyennganh.ma_chuyen_nganh = tbl_lop.chuyennganh_id and ma_lop =".$ma_lop;
                                                $resultCat = mysqli_query($conn,$sqlSelectCat);
                                                    $rowCat = mysqli_fetch_assoc($resultCat)
                                                    ?>
                                                    <option value="<?php echo $rowCat["ma_chuyen_nganh"]?>"><?php echo $rowCat["ten_chuyen_nganh"]?></option>
   
                                                <?php
                                                $sqlSelectCat1 = "select * from tbl_lop,tbl_chuyennganh where ma_lop =".$ma_lop;
                                                $resultCat1 = mysqli_query($conn,$sqlSelectCat1);
                                                    while($rowCat = mysqli_fetch_assoc($resultCat1)){
                                                ?>
                                                    <option value="<?php echo $rowCat["ma_chuyen_nganh"]?>"><?php echo $rowCat["ten_chuyen_nganh"]?></option>
                                                <?php        
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRepeatPassword">Thông tin</label></label></label>
                                            <textarea name="thong_tin" id="thong_tin" cols="70" rows="10" value=""><?php echo $thong_tin ?></textarea>
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