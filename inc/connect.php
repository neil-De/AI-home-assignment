<?php

$s_name = "localhost";
$u_name = "root";	
$pass =	  "";
$db_name =  "db_flic";

$connect = mysqli_connect($s_name, $u_name, $pass, $db_name);

class helperClass{

	//method for api key
	function key(){
		$api_key = '42b85431eba6a84d17266021e817d2a6';
		return $api_key;
	}
	//method for sanitizing data before inserting to database
	//@param $data= string the input value of user
	function clean($data){
		$this->data = $data;
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	//display for not found tag or image
	function not_found(){
		echo "<h1>No Image Found!!</h1>";
		echo "<p class='text-muted'>try to search a tag in the Input box above.</p>";
	}

}