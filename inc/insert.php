<?php
include("connect.php");

if(isset($_POST['que'])){
	//create object for data sanitizing
	$clean = new helperClass;

	$query = "SELECT * FROM tbl_list WHERE list_name LIKE '%".$_POST["que"]."%'";
	$result = mysqli_query($connect, $query); 
	$count = mysqli_num_rows($result);
	//access the clean method in helper class
    $data = $clean->clean($_POST['que']);
      if($count == 0){

      	$query = "INSERT INTO tbl_list (list_name) VALUES ('$data')";
      	$result = mysqli_query($connect, $query);
      	
  		}
}