
<?php
    $sqlSelectCat1 = "select * from tbl_khoa";
    $resultCat1 = mysqli_query($conn,$sqlSelectCat1) or die("Lỗi truy vấn danh mục");
    $sqlSelectCat = "select * from tbl_chuyennganh";
    $resultCat = mysqli_query($conn,$sqlSelectCat) or die("Lỗi truy vấn danh mục");

    if(isset($_POST["addNew"])){
        $ten_giao_vien = mysqli_escape_string($conn,$_POST["ten_giao_vien"]);
        $hinh_giao_vien = $_FILES['hinh_giao_vien']['name'];
        $gmail_giao_vien = mysqli_escape_string($conn,$_POST["gmail_giao_vien"]);
        $khoa_id = mysqli_escape_string($conn,$_POST["khoa_id"]);
        $chuyennganh_id = mysqli_escape_string($conn,$_POST["chuyennganh_id"]);

        if($hinh_giao_vien != null){
            $path = "uploads/";
            $tmp_name = $_FILES['hinh_giao_vien']['tmp_name'];
            $hinh_giao_vien = $_FILES['hinh_giao_vien']['name'];

            move_uploaded_file($tmp_name,$path.$hinh_giao_vien);
            $sql = "insert into tbl_giaovien(ma_giao_vien,ten_giao_vien,hinh_giao_vien,gmail_giao_vien,khoa_id,chuyennganh_id) values('$ma_giao_vien','$ten_giao_vien','$hinh_giao_vien','$gmail_giao_vien','$khoa_id','$chuyennganh_id')";
            mysqli_query($conn,$sql);
            header('Location: index.php?module=listgiaovien');
        }
    }
?>

<div class="container-fluid  dashboard-content">
<div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Giáo viên</h5>
                                <div class="card-body">
                                    <form action="" method = "POST" enctype="multipart/form-data" id="basicform" data-parsley-validate="" >
                                        <div class="form-group">
                                            <label for="inputUserName">Tên giáo viên</label>
                                            <input id="ten_giao_vien" type="text" name="ten_giao_vien" placeholder="Nhập tên giáo viên" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRepeatPassword">Ảnh</label></label>
                                            <input id="hinh_giao_vien" name="hinh_giao_vien" type="file">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputUserName">Gmail</label>
                                            <input id="gmail_giao_vien" type="gmail" name="gmail_giao_vien" placeholder="Nhập gmail giáo viên" class="form-control">
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