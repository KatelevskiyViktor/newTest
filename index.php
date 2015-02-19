<?php require_once "/blocks/db.php";
require_once "/models/index_model.php";
$sql = 'SELECT * FROM newsInfo ORDER BY date DESC';
$mysql = sql_sel($sql);
require_once "/views/index_view.php";
?>
