<?php
	function addImg($files){
	if(isset($files) && !empty($files)){
		if($_FILES['img']['name']){
			
			$newName = 'files/' . basename($_FILES['img']['name']);
			$res = copy($_FILES['img']['tmp_name'], $newName);
			if ($res) 
			{
				$result2 = mysql_query("INSERT INTO imageDir (name, dir) VALUES('$files','$newName')") or die('Произошла внутренняя ошибка, запись в базу не была произведена. Код ошибки: '.mysql_error());
				echo 'Фото добавлено';
			} 
			else 
			{
				echo 'Фото не добавлено';
				
			}
		}
		
	}
	}
	
	
	function echoImg(){
		$result = mysql_query('SELECT name, dir FROM imageDir') or die('Произошла внутренняя ошибка, выборка из базы данных не была произведена. Код ошибки: '.mysql_error());
		$mysql = mysql_fetch_array($result);
		$i=0;
	
			while($mysql = mysql_fetch_array($result)){
				
					echo "Имя фотографии: $mysql[name]</br><img src='$mysql[dir]'></br></br>";
				
				$i++;
				
			}
		
	}
	?>