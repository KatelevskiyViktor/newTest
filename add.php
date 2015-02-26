<?php

require_once __DIR__."/models/index_model.php";
require_once __DIR__."/blocks/func_lib.php";
if(!empty($_POST['text']) && !empty($_POST['title']) && !empty($_FILES) && ($_SERVER['HTTP_REFERER'] != 'http://'.$_SERVER['SERVER_NAME'].'/newtest/add.php')){
$date = date('Y')."-".date('m')."-".date('d');
$title = $_POST['title']; 
$text = $_POST['text']; 
$img = addImgFold('img');
$ob2 = new sample();
$ob2 -> sql = "INSERT INTO newsInfo(title, date, text, img) VALUES('".$title."', '".$date."', '".$text."', '".$img."')";
$mysql = $ob2 -> sql_sel();

}

require_once __DIR__."/views/add_view.php";

?>