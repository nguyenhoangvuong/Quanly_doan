
<?php
    
    $sqlSelectCat1 = "select * from tbl_khoa";
    $resultCat1 = mysqli_query($conn,$sqlSelectCat1) or die("Lỗi truy vấn danh mục");
    $sqlSelectCat = "select * from tbl_chuyennganh";
    $resultCat = mysqli_query($conn,$sqlSelectCat) or die("Lỗi truy vấn danh mục");
    if(isset($_POST["addNew"])){
        $table = "tbl_lop";
        $data = $_POST;
        $sqlInsert = save($table,$data);
        mysqli_query($conn,$sqlInsert) or die("Lỗi thêm mới lớp".$sqlInsert);
        header('Location: index.php?module=listlop');
    }
?>

<div class="container-fluid  dashboard-content">
<div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Product</h5>
                                <div class="card-body">
                                    <form action="" method = "POST" enctype="multipart/form-data" id="basicform" data-parsley-validate="" >
                                        <div class="form-group">
                                            <label for="inputUserName">Tên lớp</label>
                                            <input id="ten_lop" type="text" name="ten_lop" placeholder="Nhập tên lớp" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="inputEmail">Khoa</label>
                                            <select name="khoa_id" id="khoa_id" class="form-control">
                                                <option value="">-- Chọn khoa --</option>
                                                <?php
                                                    while($rowCat = mysqli_fetch_assoc($resultCat1)){
                                                ?>
                                                    <option value="<?php echo $rowCat["ma_khoa"]?>"><?php echo $rowCat["ten_khoa"]?></option>
                                                <?php        
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label for="inputEmail">Chuyên ngành</label>
                                            <select name="chuyennganh_id" id="chuyennganh_id" class="form-control">
                                                <option value="">-- Chọn chuyên ngành --</option>
                                                <?php
                                                    while($rowCat = mysqli_fetch_assoc($resultCat)){
                                                ?>
                                                    <option value="<?php echo $rowCat["ma_chuyen_nganh"]?>"><?php echo $rowCat["ten_chuyen_nganh"]?></option>
                                                <?php        
                                                    }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputRepeatPassword">Thông tin</label></label></label>
                                            <textarea name="thong_tin" id="thong_tin" cols="70" rows="10"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" name="addNew" class="btn btn-space btn-primary">Thêm mới</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
</div>