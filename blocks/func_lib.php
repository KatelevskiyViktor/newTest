<?php
	function addImgFold($files){
	if(empty($_FILES)){
		return false;
	}
	if(0 != $_FILES[$files]['error']){
		return false;
	}
	if(is_uploaded_file($_FILES[$files]['tmp_name'])){
			$res = move_uploaded_file($_FILES[$files]['tmp_name'], './img/'.$_FILES[$files]['name']);
			if (!$res) 
			{
				return false;
			} 
			else 
			{
				return './img/'.$_FILES[$files]['name'];
				
			}
		}
		return false;
	}
	
	
	
	
	?>