<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http //www.w3.org/TR/xhtml1/DTD/xhtml-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<title>Главная страница сайта новостей.</title>
	</head>
	<body>
		<?php
			if((empty($_POST['text']) || empty($_POST['title']) || empty($_FILES)) && isset($_POST['submit']) ){
	echo "Вы не заполнили все поля, или не добавили изображение.";
	}
	else if(isset($img)){
	echo "<p class='notif'>Информация успешно добавлена!</p>";
	}
		?>
		<fieldset id="fi2"><legend>Форма добавления ностей</legend>
			<form action="" enctype="multipart/form-data" method="post">
				<input type="text" name="title"  placeholder="Введите заголовок..."/><br /><br />
				<textarea cols="19" name="text" placeholder="Введите текст..."></textarea><br /><br />
				<input type="file" name="img" /><br /><br />
				<input type="submit" name="submit">
			</form>
			
		</fieldset>
		<p class='notif'><a href="./index.php">Вернуться на главную</a></p>
	
	</body>


</html>