<?php require_once "/blocks/db.php";
require_once "/models/index_model.php";
$id=$_GET['id'];
$sql = "SELECT * FROM newsInfo WHERE id=$id";
$mysql = sql_sel($sql);
require_once "/views/newspage_view.php"?>