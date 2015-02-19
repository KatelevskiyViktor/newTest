<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http //www.w3.org/TR/xhtml1/DTD/xhtml-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<title>Главная страница сайта новостей.</title>
	</head>
	<body>
		<fieldset id="fi"><legend>Лента новостей.</legend>
			<ul>
				<?php 
				
				foreach($mysql as $mys){?>
				<li>
					<img src="<?php echo $mys['img']?>" alt="<?php echo $mys['title'];?>" title="<?php echo $mys['title'];?>" />
					<h4><?php echo $mys['title'];?></h4>
					<p><?php echo $mys['date']?></p>
					<p><?php 
						$myStr = mb_substr($mys['text'],0,100);
						echo $myStr."...";
						?><a href="./newspage.php?id=<?php echo $mys['id'];?>">Подробнее</a></p>
					
				</li>
				<?php } ?>
				
			</ul>
			<a id="add" href="./add.php">Добавить новость</a>
		</fieldset>
	
	</body>


</html>