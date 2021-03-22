<?php
    $sqlSelectCat = "select * from tbl_khoa";
    $resultCat = mysqli_query($conn,$sqlSelectCat) or die("Lỗi truy vấn khoa");

    if(isset($_POST["addNew"])){
        $table = "tbl_chuyennganh";
        $data = $_POST;
        $sqlInsert = save($table,$data);
        mysqli_query($conn,$sqlInsert) or die("Lỗi thêm mới chuyên ngành".$sqlInsert);
        header('Location: index.php?module=listchuyennganh');
    }
?>

<div class="container-fluid  dashboard-content">
<div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Chuyên ngành</h5>
                                <div class="card-body">
                                    <form action="" method = "POST" enctype="multipart/form-data" id="basicform" data-parsley-validate="" >
                                        <div class="form-group">
                                            <label for="inputUserName">Tên chuyên ngành</label>
                                            <input id="ten_chuyen_nganh" type="text" name="ten_chuyen_nganh" placeholder="Nhập tên chuyên ngành" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail">Khoa</label>
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
                                        <div class="form-group">
                                            <label for="inputUserName">Mô tả</label>
                                            <textarea id="mo_ta_chuyen_nganh" type="text" name="mo_ta_chuyen_nganh" placeholder="Nhập mô tả" class="form-control"></textarea>
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