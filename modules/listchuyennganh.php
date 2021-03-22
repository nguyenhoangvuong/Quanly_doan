<div class="container-fluid  dashboard-content">
<div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Danh sách chuyên ngành</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                            <tr>
                                                <th>STT</th>
                                                <th>Mã chuyên ngành</th>
                                                <th>Tên chuyên ngành</th>
                                                <th>Tên khoa</th>
                                                <th>Mô tả</th>
                                                <th>Xử lý</th>
                                            </tr>

                                            <?php
                                                $sqlSelect = "select * from tbl_chuyennganh join tbl_khoa where tbl_chuyennganh.khoa_id = tbl_khoa.ma_khoa";
                                                $result = mysqli_query($conn,$sqlSelect);
                                                $i = 0;
                                                while($row = mysqli_fetch_assoc($result)){
                                                    $i++;
                                            ?>
                                            <tr>
                                                <td><?php echo $i ?></td>
                                                <td><?php echo $row["ma_chuyen_nganh"] ?></td>
                                                <td><?php echo $row["ten_chuyen_nganh"] ?></td>
                                                <td><?php echo $row["ten_khoa"] ?></td>
                                                <td><?php echo $row["mo_ta_chuyen_nganh"] ?></td>
                                                <td>
                                                    <a href="index.php?module=editchuyennganh&ma_chuyen_nganh=<?php echo $row["ma_chuyen_nganh"] ?>"><em class="fas fa-edit"></em></a>
                                                    <a onclick="return Del('<?php echo $row['ten_chuyen_nganh']; ?>')"  href="index.php?module=delchuyennganh&ma_chuyen_nganh=<?php echo $row["ma_chuyen_nganh"] ?>"><em class="fas fa-trash-alt"></em></a>
                                                </td>
                                            </tr>

                                            <?php
                                                }
                                            ?>
                                    </table>
                                </div>
                                <div class="row" style="margin-top:2%">
                                            <div style="margin-left:90%">
                                                <p class="text-right">
                                                    <a href="index.php?module=addchuyennganh" class="btn btn-space btn-primary">Thêm mới</em></a>
                                                </p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>

                </div>
</div>
<script>
    function Del(ten_chuyen_nganh){
        return confirm("Bạn có chắc chắn muốn xóa chuyên ngành : " +ten_chuyen_nganh + "?");
    }
</script>