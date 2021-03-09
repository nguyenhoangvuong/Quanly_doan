<?php
require_once ('dbhelp.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Sinhvien.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="filereader-input-example.js"></script>

    <!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="images/cat1.png">
    <title>Quản lý đồ án sinh viên</title>
</head>

<body>

    <!-- header -->
    <header style="background:#91b2d6">
        <div class="container flex j-between">
            <div class="header-left flex j-center a-center">
                <div class="bar flex">
                    <h2>Pla<span>g</span>iarism</h2>
                    <button><em class="fas fa-bars"></em></button>
                </div>
            </div>

            <div class="header-right flex j-center a-center">
                <ul class="use flex">
                    <li><i class="fa fa-user" aria-hidden="true"></i><a href="#" style="color:white"> Hoàng Vương</a>
                        <div class="sub-menu-1" style="background:#91b2d6">
                            <ul>
                                <li><a href="#">Đổi tài khoản</a></li>
                                <li><a href="#">Đăng xuất</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Content -->
    <div class="app">
        <!-- Section 1 -->
        <section class="section-1">
            <div class="container flex">
                <div class="content-left">
                    <nav>
                        <ul>
                            <li>
                                <button class="btn home"><em class="fas fa-school"></em> Trang chủ</button>
                            </li>
                            <li>
                                <button class="btn home1"><em class="fas fa-book-reader"></em> Quản lý khoa</button>
                            </li>
                            <li>
                                <button class="btn home2"><em class="fas fa-boxes"></em> Quản lý hệ đào tạo</button>
                            </li>
                            <li>
                                <button class="btn home3"><em class="fas fa-school"></em> Quản lý lớp</button>
                            </li>
                            <li>
                                <button class="btn home4"><em class="fas fa-chalkboard-teacher"></em> Quản lý giáo
                                    viên</button>
                            </li>
                            <li>
                                <button class="btn home5"><em class="fas fa-id-card"></em> Quản lý sinh viên</button>
                            </li>
                            <li>
                                <button class="btn home6"><em class="fas fa-warehouse"></em> Quản lý đồ án sinh
                                    viên</button>
                            </li>
                            <li>
                                <button class="btn home7"><em class="fas fa-tasks"></em> Kiểm tra đồ án</button>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="content-right">
                    <!-- Trang chủ -->
                    <div class="center-parent">
                        <h2 style="text-align: center;">Trang chủ</h2>
                        <div class="project flex f-wrap">
                            <div class="project-content" style="background-color: rgb(130, 162, 151);">
                                <h2>5</h2>
                                <p>Tổng số sinh viên</p>
                                <button>xem</button>
                            </div>
                            <div class="project-content" style="background-color: rgb(96, 90, 128);">
                                <h2>5</h2>
                                <p>Tổng số khoa</p>
                                <button>xem</button>
                            </div>
                            <div class="project-content" style="background-color: rgb(134, 131, 228);">
                                <h2>5</h2>
                                <p>Tổng số lớp</p>
                                <button>xem</button>
                            </div>
                            <div class="project-content" style="background-color: rgb(194, 184, 145);">
                                <h2>5</h2>
                                <p>Tổng số giáo viên</p>
                                <button>xem</button>
                            </div>
                            <div class="project-content" style="background-color: rgb(213, 137, 156);">
                                <h2>5</h2>
                                <p>Tổng số sinh viên</p>
                                <button>xem</button>
                            </div>
                            <div class="project-content" style="background-color: rgb(205, 218, 150);">
                                <h2>5</h2>
                                <p>Tổng số đồ án</p>
                                <button>xem</button>
                            </div>
                        </div>
                    </div>

                    <!-- Quản lý khoa -->
                    <div class="center-parent1">
                        <h2 style="text-align: center;">Quản lý khoa</h2>
                    </br>
                    <div class="tittle-list">
                        <em class="fas fa-home"></em>
                        <span class="student">
                            > Khoa >
                        </span>
                        <button class="btn-addnew btn-hdt"><em class="fas fa-plus"></em> Thêm mới</button>

                        <!--  -->
                        <div class="content-hdt-full conn">
                            <div class="hdt-tittle">
                                <em class="fas fa-home"></em> Thêm mới khoa
                            </div>
                            <div class="left">
                                <div class="add-left">Tên khoa: </div>
                                <div class="add-left">Mã khoa: </div>
                                <div class="add-left">Ngày thành lập: </div>
                                <div class="add-left">Mô tả: </div>
                            </div>
                            <div class="right">
                                <div class="add-right"><input type="text" placeholder="VD:Chính quy"></div>
                                <div class="add-right"><input type="text" placeholder="VD:CQ"></div>
                            </div>
                            <div class="btn-action">
                                <button class="btn btn-save"><em class="fas fa-save"></em> Lưu</button>
                                <button class="btn btn-refresh" id="hdt-back"><em class="fas fa-save"></em> Làm mới</button>
                                <button class="btn btn-back"><em class="fas fa-save"></em> Trở về</button>
                            </div>
                        </div>
                    </div>

                    <div class="content-hdt-full">
                        <div class="content-hdt">
                            <div class="hdt-tittle">
                                <em class="fas fa-home"></em> Danh sách
                            </div>
                        </div>
                        <br>
                        <div class="content-table">
                            <table class="table-k" role="grid" aria-describedby="dataTableBuilder_info">
                                <thead>
                                    <tr>
                                        <th id="name-k" style="width: 30%;">Tên khoa</th>
                                        <th id="ma-k">Mã khoa</th>
                                        <th id="day-k">Ngày thành lập</th>
                                        <th id="dir-k" style="width: 27%;">Mô tả</th>
                                        <th id="action-k">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                    <!-- Quản lý hệ đào tạo -->
                    <div class="center-parent2">
                        <h2 style="text-align: center;">Quản lý hệ đào tạo</h2>
                        </br>
                        <div class="tittle-list">
                            <em class="fas fa-home"></em>
                            <span class="student">
                                > Hệ đào tạo >
                            </span>
                            <button class="btn-addnew btn-hdt"><em class="fas fa-plus"></em> Thêm mới</button>

                            <!--  -->
                            <div class="content-hdt-full conn">
                                <?php
                                require_once ('input.php');
                                ?>
                                </form>
                            </div>
                        </div>

                        <div class="content-hdt-full">
                            <div class="content-hdt">
                                <div class="hdt-tittle">
                                    <em class="fas fa-home"></em> Danh sách
                                </div>
                            </div>
                            <br>
                            <div class="content-table">
                                <table class="table-hdt" role="grid" aria-describedby="dataTableBuilder_info">
                                <thead>
                                    <tr>
                                        <th id="stt-hdt" >STT</th>
                                        <th id="ma-hdt" >Mã hệ đạo tạo</th>
                                        <th id="name-mdt" >Tên mã đào tạo</th>
                                        <th id="action-hdt" >Sửa</th>
                                        <th id="action-hdt" >Xóa</th>
                                    </tr>
                                </thead>    
                                <tbody>
                                    <?php
                                        if(isset($_GET['s']) && $_GET['s'] != ''){
                                            $sql ='select * from tblhedaotao where TenDaoTao like "%'.$_GET['s'].'%"';
                                        }
                                        else{
                                            $sql ='select * from tblhedaotao';
                                        }

                                        $studentList = executeResult($sql);

                                        $index = 1;
                                        foreach ($studentList as $std) {
	                                        echo '<tr>
			                                        <td>'.($index++).'</td>
			                                        <td>'.$std['MaDaoTao'].'</td>
                                                    <td>'.$std['TenDaoTao'].'</td>
                                                    <td><button class="btn btn-warning btn-hdt" onclick=\'window.open("input.php?MaDaoTao='.$std['MaDaoTao'].'","_self")\'>Edit</button></td>
			                                        <td><button class="btn btn-dange" onclick="deleteStudent('.$std['MaDaoTao'].')">Delete</button></td>
		                                        </tr>';
                                        }
                                    ?>
                                </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>

                    <!-- Xóa hệ đào tạo -->
                    <script type="text/javascript">
		                function deleteStudent(id) {
			            option = confirm('Bạn có muốn xoá sinh viên này không')
			            if(!option) {
				            return;
			            }
			            console.log(id)
			            $.post('delete_student.php', {'MaDaoTao': id}, function(data) {
				        alert(data)
				        location.reload()
			                })
		                }
	                </script>

                    <!-- Quản lý lớp -->
                    <div class="center-parent3">
                        <h2 style="text-align: center;">Quản lý lớp</h2>
                    </div>
                    <!-- Quản lý giáo viên -->
                    <div class="center-parent4">
                        <h2 style="text-align: center;">Quản lý giáo viên</h2>
                    </div>
                    <!-- Quản lý sinh viên -->
                    <div class="center-parent5">
                        <h2 style="text-align: center;">Quản lý sinh viên</h2>
                        </br>
                        <div class="tittle-list">
                            <em class="fas fa-home"></em>
                            <span class="student">
                                > Sinh Viên >
                            </span>
                            <button class="btn-addnew"><em class="fas fa-plus"></em> Thêm mới</button>
                        </div>

                        <div class="action-sv">
                            <span class="search-sv">
                                <input type="text" placeholder="Mã sinh viên">
                            </span>
                            <label for="hedaotao">--Hệ đạo tào:</label>
                            <select name="hedaotao">
                                <option value="it">All</option>
                                <option value="it">Chính quy</option>
                                <option value="kt">Vừa học vừa làm</option>
                                <option value="ct">Cao học</option>
                            </select>

                            <label for="khoa">--Khóa:</label>
                            <select name="khoa">
                                <option value="it">Khóa 59</option>
                                <option value="kt">Khóa 58</option>
                                <option value="ct">Khóa 57</option>
                            </select>

                            <label for="lop">--Lớp:</label>
                            <select name="lop">
                                <option value="it">Công nghệ thông tin</option>
                                <option value="kt">Kinh tế</option>
                                <option value="ct">Công trình</option>
                            </select>
                            <button class="btn-refresh"><em class="fas fa-search"></em>Tìm kiếm</button>
                            <button class="btn-refresh"><em class="fas fa-restart"></em>Làm mới</button>
                        </div>
                    </div>
                    <!-- Quản lý đồ án sinh viên -->
                    <div class="center-parent6">
                        <h2 style="text-align: center;">Quản lý đồ án sinh viên</h2>
                    </div>
                    <!-- kiếm tra đồ án -->
                    <div class="center-parent7">
                        <h2 style="text-align: center;margin-bottom: 25px;">Quản Lý Tài Liệu</h2>
                        <div class="tittle">
                            <button id="btn-close-tip" type="button" class="close" data-dismiss="alert"
                                aria-hidden="true" data-plugin-tooltip="" data-toggle="tooltip" title=""
                                data-original-title="Không hiện lại thông báo này" aria-describedby="tooltip111111">×
                            </button>
                            <b>Tip</b> bạn nên sử dụng văn bản <b>tiếng Việt</b> với định dạng <b>PDF</b> để có được kết
                            quả tốt nhất!</p>
                        </div>
                        <div class="up">
                            <div>
                                <input type="file" onchange="changeHandler(event)" class="btnSelectTT">

                            </div>
                            <div class="select">
                                <label>
                                    Tìm:
                                    <input type="search" class="form-control input-sm" placeholder="Tên tài liệu"
                                        aria-controls="dataTableBuilder">
                                </label>
                            </div>
                        </div>

                        <!-- Bảng đồ án -->
                        <div class="row">
                            <div class="col-sm-12">
                                <table
                                    class="table table-bordered table-striped table-hover md-none full-width dataTable no-footer"
                                    id="dataTableBuilder" role="grid" aria-describedby="dataTableBuilder_info"
                                    style="width: 800px;">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" scope="..."
                                                aria-controls="dataTableBuilder" rowspan="1" colspan="1"
                                                aria-label="Tên tài liệu: activate to sort column ascending"
                                                style="width: 180px;">
                                                Tên tài liệu
                                            </th>
                                            <th class="sorting" tabindex="0" scope="..."
                                                aria-controls="dataTableBuilder" rowspan="1" colspan="1"
                                                aria-label="Điểm trùng lặp: activate to sort column ascending"
                                                style="width: 180px;">
                                                Điểm trùng lặp
                                            </th>
                                            <th class="sorting_desc" tabindex="0" scope="..."
                                                aria-controls="dataTableBuilder" rowspan="1" colspan="1"
                                                aria-label="Ngày tải lên: activate to sort column ascending"
                                                style="width: 180px;" aria-sort="descending">
                                                Ngày tải lên
                                            </th>
                                            <th class="sorting" tabindex="0" scope="..."
                                                aria-controls="dataTableBuilder" rowspan="1" colspan="1"
                                                aria-label="Trạng thái: activate to sort column ascending"
                                                style="width: 120px;">
                                                Trạng thái
                                            </th>
                                            <th class="sorting_disabled" scope="..." rowspan="1" colspan="1"
                                                aria-label="Hành động" style="width: 110px;">
                                                Hành động
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr class="odd">
                                            <td colspan="5" class="dataTables_empty">Không có dữ liệu trong bảng</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div id="dataTableBuilder_processing" class="dataTables_processing panel panel-default"
                                    style="display: none;"><i class="fa fa-spin fa-spinner"></i> Đang xử lý...
                                </div>
                            </div>
                        </div>
                        <div style="overflow: auto; height: 50vh;">
                            <output id="log-div"></output>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <!-- footer -->
    <footer id="footer" class="section footer">
        <div class="container">
            <div class="footer-container">
                <div class="footer-center">
                    <h3>EXTRAS</h3>
                    <a href="#">Brands</a>
                    <a href="#">Gift Certificates</a>
                    <a href="#">Affiliate</a>
                    <a href="#">Specials</a>
                    <a href="#">Site Map</a>
                </div>
                <div class="footer-center">
                    <h3>INFORMATION</h3>
                    <a href="#">About Us</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Contact Us</a>
                    <a href="#">Site Map</a>
                </div>
                <div class="footer-center">
                    <h3>MY ACCOUNT</h3>
                    <a href="#">My Account</a>
                    <a href="#">Order History</a>
                    <a href="#">Wish List</a>
                    <a href="#">blogletter</a>
                    <a href="#">Returns</a>
                </div>
                <div class="footer-center">
                    <h3>CONTACT US</h3>
                    <div>
                        <span>
                            <em class="fas fa-map-marker-alt"></em>
                        </span>
                        41/58A Cầu Xây, P. Tân Phú, Quận 9, TP.HCM
                    </div>
                    <div>
                        <span>
                            <em class="far fa-envelope"></em>
                        </span>
                        hoangvuong1225@gmail.com
                    </div>
                    <div>
                        <span>
                            <em class="fas fa-phone"></em>
                        </span>
                        034769482
                    </div>
                    <div>
                        <span>
                            <em class="far fa-paper-plane"></em>
                        </span>
                        Plagiarism, Việt Nam
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="main.js"></script>

</html>