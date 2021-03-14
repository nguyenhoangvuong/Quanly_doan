<div class="container-fluid  dashboard-content">
<div class="row">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Danh sách hệ đào tạo</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                            <tr>
                                                <th>STT</th>
                                                <th>ID</th>
                                                <th>Tên hệ đào tạo</th>
                                                <th>Xử lý</th>
                                            </tr>
                                            <!-- php -->
                                            <?php
                                                $sqlSelect = "select * from tbl_hedaotao";
                                                $result = mysqli_query($conn,$sqlSelect) or die("Lỗi truy vấn danh sách hệ đào tạo");
                                                if(mysqli_num_rows($result) > 0){
                                                    $count = 0;
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                        $count++;
                                            ?>
                                            <tr>
                                                <td><?php echo $count ?></td>
                                                <td><?php echo $row["ma_hdt"] ?></td>
                                                <td><?php echo $row["ten_hdt"] ?></td>
                                                <td>
                                                    <a href="index.php?module=edithedaotao&ma_hdt=<?php echo $row["ma_hdt"] ?>"><em class="fas fa-edit"></em></a>
                                                    <a href="index.php?module=delhedaotao&ma_hdt=<?php echo $row["ma_hdt"] ?>"><em class="fas fa-trash-alt"></em></a>
                                                </td>
                                            </tr>
                                            <?php }
                                            } ?>
                                    </table>
                                </div>
                                <div class="row" style="margin-top:2%">
                                            <div style="margin-left:90%">
                                                <p class="text-right">
                                                    <a href="index.php?module=addhedaotao" class="btn btn-space btn-primary">Thêm mới</em></a>
                                                </p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>