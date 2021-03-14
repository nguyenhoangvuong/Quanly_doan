<?php
include 'DBController.php';
$db_handle = new DBController();
$productResult = $db_handle->runQuery("select * from tbl_khoa");

if (isset($_POST["export"])) {
    $filename = "Export_excel.xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $isPrintHeader = false;
    if (! empty($productResult)) {
        foreach ($productResult as $row) {
            if (! $isPrintHeader) {
                echo implode("\t", array_keys($row)) . "\n";
                $isPrintHeader = true;
            }
            echo implode("\t", array_values($row)) . "\n";
        }
    }
    exit();
}
?>

<div id="table-container">
    <div class="btn">
        <form action="" method="post">
            <button type="submit" id="btnExport" name='export'
                value="Export to Excel" class="btn btn-info" style="background:green">Export to
                excel</button>
        </form>
    </div>
</div>