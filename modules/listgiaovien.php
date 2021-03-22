<div class="container-fluid  dashboard-content">
<div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Danh sách giáo viên</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                            <tr>
                                                <th>Mã giáo viên</th>
                                                <th>Tên giáo viên</th>
                                                <th>Gmail</th>
                                                <th>Hình ảnh</th>
                                                <th>Khoa</th>
                                                <th>Chuyên ngành</th>
                                                <th>Xử lý</th>
                                            </tr>

                                            <?php
                                                $sqlSelect = "select * from tbl_giaovien,tbl_khoa,tbl_chuyennganh where tbl_giaovien.khoa_id = tbl_khoa.ma_khoa and chuyennganh_id= tbl_chuyennganh.ma_chuyen_nganh";
                                                $result = mysqli_query($conn,$sqlSelect);
                                                while($row = mysqli_fetch_assoc($result)){
                                            ?>
                                            <tr>
                                                <td><?php echo $row["ma_giao_vien"] ?></td>
                                                <td><?php echo $row["ten_giao_vien"] ?></td>
                                                <td><?php echo $row["gmail_giao_vien"] ?></td>
                                                <td>
                                                    <img src="uploads/<?php echo $row["hinh_giao_vien"] ?> " width="50" alt="">
                                                </td>
                                                <td><?php echo $row["ten_khoa"] ?></td>
                                                <td><?php echo $row["ten_chuyen_nganh"] ?></td>
                                                <td>
                                                    <a href="index.php?module=editgiaovien&ma_giao_vien=<?php echo $row["ma_giao_vien"] ?>"><em class="fas fa-edit"></em></a>
                                                    <a href="index.php?module=delgiaovien&ma_giao_vien=<?php echo $row["ma_giao_vien"] ?>"><em class="fas fa-trash-alt"></em></a>
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
                                                    <a href="index.php?module=addgiaovien" class="btn btn-space btn-primary">Thêm mới</em></a>
                                                </p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>

                </div>
</div>