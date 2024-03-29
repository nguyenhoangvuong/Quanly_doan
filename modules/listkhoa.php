<div class="container-fluid  dashboard-content">
<div class="row">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div><h5  class="card-header">Danh sách khoa</h5></div>
                            <div class="card-body">
                                <div class="table-responsive">
                                <div style="float:left">
                                    <a href="export.php"><button  style="margin-bottom:5px;"  type="submit" id="btnExport" name='export' value="Export to Excel" class="btn btn-info">Excel,PDF</button></a>
                                </div>
                                
                                <div style="float:right;width:300px">
                                <form action="" method="get">
                                    <input class="form-control" type="text" placeholder="Search.." name="q">
                                    <a href="index.php?module=searchkhoa" class="btn btn-space btn-primary">Tìm kiếm</em></a>
                                </form>

                                </div>
                                    <table class="table table-striped table-bordered first">
                                            <tr>
                                                <th>STT</th>
                                                <th>ID</th>
                                                <th>Tên khoa</th>
                                                <th>Mô tả</th>
                                                <th>Xử lý</th>
                                            </tr>

                                            <!-- php -->
                                            <?php
                                                $sqlSelect = "select * from tbl_khoa";
                                                $result = mysqli_query($conn,$sqlSelect) or die("Lỗi truy vấn danh sách khoa");
                                                if(mysqli_num_rows($result) > 0){
                                                    $count = 0;
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                        $count++;
                                            ?>
                                            <tr>
                                                <td><?php echo $count ?></td>
                                                <td><?php echo $row["ma_khoa"] ?></td>
                                                <td><?php echo $row["ten_khoa"] ?></td>
                                                <td><?php echo $row["mo_ta"] ?></td>
                                                <td>
                                                    <a href="index.php?module=editkhoa&ma_khoa=<?php echo $row["ma_khoa"] ?>"><em class="fas fa-edit"></em></a>
                                                    <a onclick="return Del('<?php echo $row['ten_khoa']; ?>')" href="index.php?module=delkhoa&ma_khoa=<?php echo $row["ma_khoa"] ?>"><em class="fas fa-trash-alt"></em></a>
                                                </td>
                                            </tr>
                                            <?php }
                                            } ?>
                                    </table>
                                </div>
                                <div class="row" style="margin-top:2%">
                                            <div style="margin-left:90%">
                                                <p class="text-right">
                                                    <a href="index.php?module=addkhoa" class="btn btn-space btn-primary">Thêm mới</em></a>
                                                </p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
<script>
    function Del(ten_khoa){
        return confirm("Bạn có chắc chắn muốn xóa khoa : " +ten_khoa + "?");
    }
</script>