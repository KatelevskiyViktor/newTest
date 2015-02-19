<?php
require_once '/blocks/db.php';
require_once '/models/add_model.php';
require_once '/blocks/func_lib.php';
if(!empty($_POST['text']) && !empty($_POST['title']) && !empty($_FILES) && ($_SERVER['HTTP_REFERER'] != 'http://'.$_SERVER['SERVER_NAME'].'/temp/newtest/add.php')){
$date = date('Y')."-".date('m')."-".date('d');
$title = $_POST['title']; 
$text = $_POST['text']; 
$img = addImgFold('img');
$sql = "INSERT INTO newsInfo(title, date, text, img) VALUES('$title', '$date', '$text', '$img')";
addNews($sql);
}

require_once './views/add_view.php';

?>