<div class="container-fluid  dashboard-content">
<div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Danh sách sản phẩm</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Cat name</th>
                                                <th>Price</th>
                                                <th>Sale off</th>
                                                <th>Images</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Xử lý</th>
                                            </tr>

                                            <?php
                                                $sqlSelect = "select * from tbl_product";
                                                $result = mysqli_query($conn,$sqlSelect);
                                                $i = 0;
                                                while($row = mysqli_fetch_assoc($result)){
                                                    $i++;
                                            ?>
                                            <tr>
                                                <td><?php echo $i ?></td>
                                                <td><?php echo $row["name"] ?></td>
                                                <td><?php echo $row["cat_id"] ?></td>
                                                <td><?php echo $row["price"] ?></td>
                                                <td><?php echo $row["sale_off"] ?></td>
                                                <td>
                                                    <img src="<?php echo $row["image"] ?>" alt="" width="50">
                                                </td>
                                                <td><?php echo $row["description"] ?></td>
                                                <td><?php echo ($row["sta_tus"])?"Hiển thị":"Ẩn" ?></td>
                                                <td>
                                                    <a href="index.php?module=editproduct&id=<?php echo $row["id"] ?>"><em class="fas fa-edit"></em></a>
                                                    <a href="index.php?module=editproduct&id=<?php echo $row["id"] ?>"><em class="fas fa-trash-alt"></em></a>
                                                </td>
                                            </tr>

                                            <?php
                                                }
                                            ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
</div>