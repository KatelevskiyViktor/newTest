<?php 
	function sql_sel($sql){
			$res = mysql_query($sql) or die('������! ������� �� ���� ������ �� ������. ��� ������: '.mysql_error());
			//$mysql = mysql_fetch_assoc($res);
			
			while($mysql = mysql_fetch_assoc($res))
			{
				$myArr[] = $mysql;
			}
			return $myArr;
	}
?>