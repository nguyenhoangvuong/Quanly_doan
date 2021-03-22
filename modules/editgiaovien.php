<?php

            $sql = "select * from tbl_khoa,tbl_chuyennganh,tbl_giaovien where tbl_giaovien.chuyennganh_id = tbl_chuyennganh.ma_chuyen_nganh and tbl_giaovien.khoa_id = tbl_khoa.ma_khoa and ma_giao_vien = '$_GET[ma_giao_vien]'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result);
            $ma_giao_vien = $_GET['ma_giao_vien'];


			if(isset($_POST["addNew"]))
			{
                $ten_chuyen_nganh = $_POST["ten_chuyen_nganh"];
                $ten_khoa = $_POST["ten_khoa"];

				$ten_giao_vien = mysqli_escape_string($conn,$_POST["ten_giao_vien"]);
                $hinh_giao_vien = $_FILES['hinh_giao_vien']['name'];
                $gmail_giao_vien = mysqli_escape_string($conn,$_POST["gmail_giao_vien"]);
                $khoa_id = mysqli_escape_string($conn,$_POST["khoa_id"]);
                $chuyennganh_id = mysqli_escape_string($conn,$_POST["chuyennganh_id"]);
				if($hinh_giao_vien != null)
				{
				    $path = "upload/";
				    $tmp_name = $_FILES['hinh_giao_vien']['tmp_name'];
				    $hinh_giao_vien = $_FILES['hinh_giao_vien']['name'];

				    move_uploaded_file($tmp_name,$path.$hinh_giao_vien);
					$sql1 = "update tbl_giaovien set set ten_giao_vien = '$ten_giao_vien'  , hinh_giao_vien = '$hinh_giao_vien', gmail_giao_vien = '$gmail_giao_vien' , khoa_id = '$khoa_id', chuyennganh_id = '$chuyennganh_id' where ma_giao_vien = '$_GET[ma_giao_vien]' ";
					mysqli_query($conn,$sql1);
                    header('Location: index.php?module=listgiaovien');
				}
                $sql = "update tbl_giaovien set ten_giao_vien = '$ten_giao_vien'  , hinh_giao_vien = '$hinh_giao_vien', gmail_giao_vien = '$gmail_giao_vien' , khoa_id = '$khoa_id', chuyennganh_id = '$chuyennganh_id' where ma_giao_vien = '$_GET[ma_giao_vien]' ";
			    mysqli_query($conn,$sql);
				header('Location: index.php?module=listgiaovien');
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
                                            <input id="ten_giao_vien" type="text" name="ten_giao_vien" placeholder="Nhập gmail giáo viên" class="form-control" value="<?php echo $row['ten_giao_vien']; ?>" >
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRepeatPassword">Ảnh</label></label>
                                            <input type="file" name="hinh_giao_vien">
                                            </br>
				                            <img src="uploads/<?php echo $row['hinh_giao_vien']; ?>" style="max-width: 200px;" alt="">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputUserName">Gmail</label>
                                            <input id="gmail_giao_vien" type="gmail" name="gmail_giao_vien" placeholder="Nhập gmail giáo viên" class="form-control" value="<?php echo $row['gmail_giao_vien']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="inputEmail">Khoa</label>
                                            <select name="khoa_id" id="khoa_id" class="form-control">
                                            <?php
                                                $sqlSelectCat = "select * from tbl_khoa,tbl_giaovien where tbl_giaovien.khoa_id = tbl_khoa.ma_khoa and ma_giao_vien =".$ma_giao_vien;
                                                $resultCat = mysqli_query($conn,$sqlSelectCat);
                                                    $rowCat = mysqli_fetch_assoc($resultCat)
                                                    ?>
                                                    <option value="<?php echo $rowCat["ma_khoa"]?>"><?php echo $rowCat["ten_khoa"]?></option>
   
                                                <?php
                                                $sqlSelectCat1 = "select * from tbl_giaovien,tbl_khoa where ma_giao_vien =".$ma_giao_vien;
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
                                            <label for="inputEmail">Chuyên ngành</label>
                                            <select name="chuyennganh_id" id="chuyennganh_id" class="form-control">
                                            <?php
                                                $sqlSelectCat = "select * from tbl_chuyennganh,tbl_giaovien where tbl_chuyennganh.ma_chuyen_nganh = tbl_giaovien.chuyennganh_id and ma_giao_vien =".$ma_giao_vien;
                                                $resultCat = mysqli_query($conn,$sqlSelectCat) or die("Lỗi truy vấn khoa");
                                                    $rowCat = mysqli_fetch_assoc($resultCat)
                                                    ?>
                                                    <option value="<?php echo $rowCat["ma_chuyen_nganh"]?>"><?php echo $rowCat["ten_chuyen_nganh"]?></option>
   
                                                <?php
                                                $sqlSelectCat1 = "select * from tbl_giaovien,tbl_chuyennganh where ma_giao_vien =".$ma_giao_vien;
                                                $resultCat1 = mysqli_query($conn,$sqlSelectCat1) or die("Lỗi truy vấn khoa");
                                                    while($rowCat = mysqli_fetch_assoc($resultCat1)){
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
                                                    <button type="submit" name="addNew" class="btn btn-space btn-primary">Cập nhật</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
</div>