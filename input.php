<?php
require_once ('dbhelp.php');
$s_fullname = $s_age = $s_address = '';

if (!empty($_POST)) {
	$s_id = '';

	if (isset($_POST['TenDaoTao'])) {
		$s_fullname = $_POST['TenDaoTao'];
	}

	if (isset($_POST['MaDaoTao'])) {
		$s_id = $_POST['MaDaoTao'];
	}

	$s_fullname = str_replace('\'', '\\\'', $s_fullname);
	$s_id       = str_replace('\'', '\\\'', $s_id);

	if ($s_id != '') {
		//update
		$sql = "update tblhedaotao set TenDaoTao = '$s_fullname' where MaDaoTao = '.$s_id'";
		execute($sql);
	} else {
		//insert
		$sql = "insert into tblhedaotao(TenDaoTao) value ('$s_fullname')";
		execute($sql);
		echo 'Thêm thành công';
	}

	
}

$id = '';
if (isset($_GET['MaDaoTao'])) {
	$id          = $_GET['MaDaoTao'];
	$sql         = 'select * from tblhedaotao where MaDaoTao = '.$id;
	$studentList = executeResult($sql);
	if ($studentList != null && count($studentList) > 0) {
		$std        = $studentList[0];
		$s_fullname = $std['TenDaoTao'];

	} else {
		$id = '';
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registation Form * Form Tutorial</title>
	<!-- Latest compiled and minified CSS -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
            <div class="hdt-tittle">
                <form method="post">
                    <em class="fas fa-home"></em> Thêm mới hệ đào tạo
                        </div>
                            <div class="left">
                                <div class="add-left">Tên hệ đào tạo: </div>
                            </div>
                            <div class="right">
                                <div class="add-right"><input required="true" type="text" class="form-control" id="usr" name="TenDaoTao" value="<?=$s_fullname?>" placeholder="VD:Chính quy" ></div>
                                <div class="add-right"><inputtype="number" name="MaDaoTao" value="<?=$id?>" style="display: none;" placeholder="VD:CQ"></div>
                            </div>
                                <div class="btn-action">
                                    <button class="btn btn-success"><em class="fas fa-save"></em> Lưu</button>
                                    <button class="btn btn-back"><em class="fas fa-exit"></em> Hủy bỏ</button>
                                </div>
                </form>
		</div>
	</div>
</body>
</html>