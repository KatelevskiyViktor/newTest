<?php abstract class articles{
		function addNewNews(){
			echo "<a id='add' href='add.php'>Добавить новость</a>";
		}
	
}
class news extends articles{
		public function arrSql($myArr){
			foreach($myArr as $mys){
				echo "<li>
					<img src='$mys[img]' alt='$mys[title]' title='$mys[title]' />
					<h4>$mys[title]</h4>
					<p>$mys[date]</p>
					<p>";
					$myStr = mb_substr($mys['text'],0,100);
					echo $myStr."...
					<a href='newspage.php?id=$mys[id]'>Подробнее</a></p>
					</li>";
		}
	
}
}
?>


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
			$myOb = new news();
			$myOb -> arrSql($mysql);
			
			?>
				
			</ul>
			<?php 
			$myOb -> addNewNews();
			?>
		</fieldset>
	
	</body>


</html>