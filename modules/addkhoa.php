<?php
    if(isset($_POST["addNew"])){
        $ten_khoa = $_POST["ten_khoa"];
        $mo_ta = $_POST["mo_ta"];
        $sqlInsert = save('tbl_khoa',$_POST);
        mysqli_query($conn,$sqlInsert) or die("Lỗi thêm mới");
        header('Location: index.php?module=listkhoa');
    }
?>
          <div class="container-fluid  dashboard-content">
            <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Thêm mới khoa</h5>
                                <div class="card-body">
                                    <form action="" enctype="multipart/form-data" id="basicform" data-parsley-validate="" method="post">
                                        <div class="form-group">
                                            <label for="inputUserName">Tên khoa</label>
                                            <input id="ten_khoa" type="text" name="ten_khoa" placeholder="Nhập tên khoa" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputUserName">Mô tả</label>
                                            <textarea id="mo_ta" type="text" name="mo_ta" placeholder="Nhập mô tả" class="form-control"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary" name="addNew">Thêm mới</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>