<?php
if (isset($_POST['MaDaoTao'])) {
	$id = $_POST['MaDaoTao'];

	require_once ('dbhelp.php');
	$sql = 'delete from tblhedaotao where MaDaoTao = '.$id;
	execute($sql);

	echo 'Xoá thành công';
}
?>