<?php
require_once __DIR__."/models/index_model.php";
require_once __DIR__."/blocks/func_lib.php";
if(!isset($_GET['id']) && !isset($_GET['add'])){	
	$outputAll = new outputNews;
	$outputAll->outputAll();
}
else if(isset($_GET['id']) && !isset($_GET['add'])){
	$outputOne = new outputNews;
	$outputOne->outputOne();
}
else if(isset($_GET['add'])){
	if(!empty($_POST['text']) && !empty($_POST['title']) && !empty($_FILES)){
		$addNews = new outputNews;
		$addNews->addNews();
		echo "<meta http-equiv='refresh' content='1;./index.php'>";
}
	else{
		require_once __DIR__."/views/add_view.php";
	}
	
}
?>
