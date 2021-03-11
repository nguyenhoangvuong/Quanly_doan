<div class="container-fluid  dashboard-content">
<div class="row">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Basic Table</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                            <tr>
                                                <th>ID</th>
                                                <th>Tên Danh Mục</th>
                                                <th>Trạng Thái</th>
                                                <th>Xử lý</th>
                                            </tr>

                                            <!-- php -->
                                            <?php
                                                $sqlSelect = "select * from tbl_category";
                                                $result = mysqli_query($conn,$sqlSelect) or die("Lỗi truy vấn danh sách danh mục");
                                                if(mysqli_num_rows($result) > 0){
                                                    $count = 0;
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                        $count++;
                                            ?>
                                            <tr>
                                                <td><?php echo $count ?></td>
                                                <td><?php echo $row["cat_name"] ?></td>
                                                <td><?php echo ($row["sta_tus"])?"Hiển thị":"Ẩn" ?></td>
                                                <td>
                                                    <a href="index.php?module=editcategory&id=<?php echo $row["id"] ?>"><em class="fas fa-edit"></em></a>
                                                    <a href="index.php?module=delcategory&id=<?php echo $row["id"] ?>"><em class="fas fa-trash-alt"></em></a>
                                                </td>
                                            </tr>
                                            <?php }
                                            } ?>
                                            

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>