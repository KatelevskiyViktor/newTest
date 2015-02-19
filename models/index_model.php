<?php 
	function sql_sel($sql){
			$res = mysql_query($sql) or die('Ошибка! Выборка из базы данных не прошла. Код ошибки: '.mysql_error());
			//$mysql = mysql_fetch_assoc($res);
			
			while($mysql = mysql_fetch_assoc($res))
			{
				$myArr[] = $mysql;
			}
			return $myArr;
	}
?>