<?php
require_once "models/index_model.php";

$ob3 = new sample();
$ob3 -> id = $_GET['id'];
$ob3 -> sql = "SELECT * FROM newsInfo WHERE id=".$ob3 -> id;
$mysql = $ob3 -> sql_sel();
require_once "views/newspage_view.php"?>