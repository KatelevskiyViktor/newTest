<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http //www.w3.org/TR/xhtml1/DTD/xhtml-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<title>Главная страница сайта новостей.</title>
	</head>
	<body>
		<fieldset id="fi"><legend>Лента новостей.</legend>
			
				<?php 
				
				foreach($mysql as $mys){?>
				
					<img src="<?php echo $mys['img']?>" alt="<?php echo $mys['title'];?>" title="<?php echo $mys['title'];?>" />
					<h4><?php echo $mys['title'];?></h4>
					<p><?php echo $mys['date']?></p>
					<p><?php echo $mys['text'];?></p>
					
				
				<?php } ?>
			
		</fieldset>
	
	</body>


</html>