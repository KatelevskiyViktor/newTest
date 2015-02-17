<?php 
	require_once 'blocks/db.php';
	require_once 'blocks/func_lib.php';
	addImg($_POST['name']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http //www.w3.org/TR/xhtml1/DTD/xhtml-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Главная страница галереи</title>
	</head>
	<body>
	
	<form action = '' method = 'post' enctype = 'multipart/form-data' >
		<input placeholder = 'Введите название фото...' type='text' name ='name' /><br />
		<input type = 'file' name = 'img' /><br />
		<input type = 'submit' value='Загрузить фотку'>
	</form>
	
	<?php echoImg(); ?>
	</body>


</html>