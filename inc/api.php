<?php

include("connect.php");
 
if(isset($_POST['taginput'])){
	//create object for api key
	$api_object = new helperClass;
	$api_key = $api_object->key();

	$tag = $_POST['taginput'];
	$perPage = '12';
	$url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
	$url.= '&api_key='.$api_key;
	$url.= '&tags='.$tag;
	$url.= '&per_page='.$perPage;
	$url.= '&format=json';
	$url.= '&nojsoncallback=1';	
}


//check if input is not empty 
if(!empty($tag)){
	$response = json_decode(file_get_contents($url));
	$photo_array = $response->photos->photo;
}
//check if the array is not empty or the link is correct
if(!empty($photo_array)){
	//access the array by using foreach loop	
	foreach($photo_array as $single_photo){
 
		$farm_id = $single_photo->farm;
		$server_id = $single_photo->server;
		$photo_id = $single_photo->id;
		$secret_id = $single_photo->secret;
		$size = 'm';
 
		$title = $single_photo->title;
 
		$photo_url = 'http://farm'.$farm_id.'.staticflickr.com/'.$server_id.'/'.$photo_id.'_'.$secret_id.'_'.$size.'.'.'jpg';
    	echo "<div class='thumb-img'>";
		echo "<img class='img-in img-responsive' title='".$title."' src='".$photo_url."' />";
		echo "</div>"; 
	}
}else{
	echo $api_object->not_found();
}	