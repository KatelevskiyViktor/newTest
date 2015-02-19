<?php

function addNews($sql){
	$myAdd = mysql_query($sql) or die('Добавление в базу данных не произошло. Код ошибки: '.mysql_error());	
}