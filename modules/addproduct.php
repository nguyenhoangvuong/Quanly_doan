<?php
    $sqlSelectCat = "select * from tbl_category";
    $resultCat = mysqli_query($conn,$sqlSelectCat) or die("Lỗi truy vấn danh mục");

    if(isset($_POST["addNew"])){
        $table = "tbl_product";
        $data = $_POST;
        $data["sta_tus"] = ($data["sta_tus"])?$data["sta_tus"]:0; 

        $file = $_FILES['image'];
        $fileName = $_FILES['image']['name'];
        $fileTmpName = $_FILES['image']['tmp_name'];
        $fileSize = $_FILES['image']['size'];
        $fileError = $_FILES['image']['error'];
        $fileType = $_FILES['image']['type'];
        $fileNamene ="";
        $fileExt = explode('.',$fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg','jpeg','png','pdf','gif');

        if(in_array($fileActualExt,$allowed)){
            if($fileError === 0){
                if($fileSize < 1000000){
                    $fileNameNew = uniqid('',true).".".$fileActualExt;
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName,$fileDestination);
                }
                else{
                    echo "File quá lớn";
                }
            }
            else{
                echo "Lỗi error";
            }
        }
        else{
            echo "Lỗi";
        }

        $data['image'] = $fileDestination;
        $sqlInsert = save($table,$data);
        mysqli_query($conn,$sqlInsert) or die("Lỗi thêm mới sản phẩm".$sqlInsert);
        header('Location: index.php?module=listproduct');
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
                                            <label for="inputUserName">Tên sản phẩm</label>
                                            <input id="name" type="text" name="name" placeholder="Nhập tên sản phẩm" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail">Loại sản phẩm</label>
                                            <select name="cat_id" id="cat_id" class="form-control">
                                                <option value="">-- Chọn loại sản phẩm --</option>
                                                <?php
                                                    while($rowCat = mysqli_fetch_assoc($resultCat)){
                                                ?>
                                                    <option value="<?php echo $rowCat["id"]?>"><?php echo $rowCat["cat_name"]?></option>
                                                <?php        
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword">Giá</label>
                                            <input id="price" name="price" type="text" placeholder="Giá" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword">Sale off</label>
                                            <input id="sale_off" name="sale_off" type="text" placeholder="Giá sale" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRepeatPassword">Ảnh</label></label>
                                            <input id="image" name="image" type="file">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRepeatPassword">Mô tả</label></label>
                                            <textarea name="description" id="description" cols="70" rows="10"></textarea>
                                        </div>
                                        <div class="form-group">
                                                <label class="be-checkbox custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="sta_tus" id="sta_tus" value="1"><span class="custom-control-label">Remember me</span>
                                                </label>
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