<!DOCTYPE html>
<html>
<head>
	<title>error</title>
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link rel="stylesheet" type="text/css" href="other.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<style type="text/css">
	.error
	{
		width: 100%;
		height: 700px;
		background-image: url(errorpage.jpg);
		background-size: 1432px;
		background-repeat: no-repeat;
	}
	.image
	{	
		width: 200px;
		height: 186px;
		background-color: yellow;
		background-image: url(./error.jpg);
		background-repeat: no-repeat;
		background-size: 230px;
		margin-left: 888px;
		margin-top: -86px;
	}
	.error1
	{
		width: 800px;
		height: 150px;
		color: rgb(158, 158, 49);
		font-family: sans-serif;
		font-size: 100px;
		margin-left: 100px;
		padding-top: 200px;
	}
	.home
	{
		width: 50px;
		height: 30px;
		color: rgb(158, 158, 49);
		margin-left: 800px;
		margin-top: 33px;
		font-size: 20px;
		cursor: pointer;
	}
	</style>
</head>
<body>
<div class="error">
	<div class="error1">
	<u>ERROR OCCUR</u>
	</div>
<div class="image"></div>
<div class="home"><u>home</u></div>
	
</div>
<script type="text/javascript">
	$('.home').click(function(){
		window.location.assign("/skillclas/quiz/page_1.php");
	});
</script>
</body>
</html>