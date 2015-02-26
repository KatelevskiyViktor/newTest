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
	
	class outputNews extends sample{
		
		public function outputAll(){
			$this->sql = 'SELECT * FROM newsInfo ORDER BY date DESC';
			$this->sql_sel();
			$mysql = $this->sql_sel();
			require_once __DIR__."/../views/index_view.php";
		
	}
		public function outputOne(){
			$this->sql = "SELECT * FROM newsInfo WHERE id=".$this->id = $_GET['id'];
			$this->sql_sel();
			$mysql = $this->sql_sel();
			require_once __DIR__."/../views/newspage_view.php";
	}
	
		public function addNews(){
			
			$this->sql = "INSERT INTO newsInfo(title, date, text, img) VALUES('".$title = $_POST['title']."', '".$date = date('Y')."-".date('m')."-".date('d')."', '".$text = $_POST['text']."', '".$img = addImgFold('img')."')";
			$this->sql_sel();
			require_once __DIR__."/../views/add_view.php";
	}
	}
	
	
	
	
?>