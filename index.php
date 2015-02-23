<?php
require_once "models/index_model.php";
	$ob = new sample();
	$ob -> sql = 'SELECT * FROM newsInfo ORDER BY date DESC';
	$mysql = $ob -> sql_sel();
require_once "views/index_view.php";
?>
