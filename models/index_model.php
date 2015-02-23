<?php 
	
	class sample{
		public $sql;
		public $id;
		public function __construct(){
			mysql_connect('localhost', 'root', '');
			mysql_select_db('news');	
		}
		public function sql_sel(){
			$res = mysql_query($this->sql) or die('Ошибка! Код ошибки: '.mysql_error());
			if($res !== TRUE){
				while($mysql = mysql_fetch_assoc($res))
					{
						$myArr[] = $mysql;
						
					}
					return $myArr;
			}
	}
		
	}
	
	
	
	
?>