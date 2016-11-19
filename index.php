<!DOCTYPE html>
<html>
<head>
	<title>flickr search tag app</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/custom_js.js"></script>
	<script src="js/infinitescroll.js"></script>
</head>
<body>
<header id="top">
	<div class="container">
		<h2>Home Asssignment</h2>
		<p>A single page app which will show the amazing collection of photo's on flickr.</p>
		<form method="post" class="form-group">
  			<label for="tag">Enter Flickr tag</label>
  			<input class="form-control" id="taginput" type="text" placeholder="e.g moon, love, animals etc.">
  			<div id="list"></div>
		</form>
	</div>
</header>
<div class="content">
	<div class=" inner-content container">
		<div id="ajax-id" class="ajax-box">
			<h1>No Image Found!!</h1>
			<p class="text-muted">try to search a tag in the Input box above.</p>
		</div>
		<div id="loading">
			<h3>Loading...</h3>
			<p>fetching <strong>flickr</strong> images please wait. </p>
		</div>		
	</div>
</div>
<div id="to-top">
		<img src="img/to-top.jpg" alt="to top link">
</div>
<footer class="text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p>Powerd By: sample</p>
				<p>Author: sample</p>
				<p>&copy; Copyright 2016</p>
			</div>
		</div>
	</div>
</footer>
</body>
</html>
