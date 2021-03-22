<div class="container-fluid  dashboard-content">
<div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Danh sách lớp</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                            <tr>
                                                <th>STT</th>
                                                <th>Mã lớp</th>
                                                <th>Tên lớp</th>
                                                <th>Tên khoa</th>
                                                <th>Tên chuyên ngành</th>
                                                <th>Thông tin</th>
                                                <th>Xử lý</th>
                                            </tr>

                                            <?php
                                                $sqlSelect = "select * from tbl_lop,tbl_khoa,tbl_chuyennganh where tbl_lop.khoa_id = tbl_khoa.ma_khoa and tbl_chuyennganh.ma_chuyen_nganh = tbl_lop.chuyennganh_id";
                                                $result = mysqli_query($conn,$sqlSelect);
                                                $i = 0;
                                                while($row = mysqli_fetch_assoc($result)){
                                                    $i++;
                                            ?>
                                            <tr>
                                                <td><?php echo $i ?></td>
                                                <td><?php echo $row["ma_lop"] ?></td>
                                                <td><?php echo $row["ten_lop"] ?></td>
                                                <td><?php echo $row["ten_khoa"] ?></td>
                                                <td><?php echo $row["ten_chuyen_nganh"] ?></td>
                                                <td><?php echo $row["thong_tin"] ?></td>
                                                <td>
                                                    <a href="index.php?module=editlop&ma_lop=<?php echo $row["ma_lop"] ?>"><em class="fas fa-edit"></em></a>
                                                    <a onclick="Del('<?php echo $row['ten_lop'] ?>')" href="index.php?module=dellop&ma_lop=<?php echo $row["ma_lop"] ?>"><em class="fas fa-trash-alt"></em></a>
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
                                                    <a href="index.php?module=addlop" class="btn btn-space btn-primary">Thêm mới</em></a>
                                                </p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>

                </div>
</div>
<script>
    function Del(ten){
        return confirm("Bạn có chắc chắn muốn xóa lớp : "+ten+" ?")
    }
</script>