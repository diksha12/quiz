<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="other.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link href='http://fonts.googleapis.com/css?family=Indie+Flower|Pacifico' rel='stylesheet' type='text/css'>
	<style type="text/css">
		.upper_block_1
		{
			background-color: #e74c3c;
			width: 100%;
			height: 100px;
			font-size: 44px;
			color: white;
			position: absolute;
			margin-top: -100px;
		}
		.in_box
		{	
			padding-top: 20px;
			margin-left: 267px;
			background-color: #e74c3c;
			height: 100px;
			width: 480px;
			padding-top: 20px;
			margin-left: 181px;
			font-size: 47px;
			font-weight: 800;
			font-family: Pacifico;
			align-content: flex-end;
			cursor: pointer;
		}
		.quiz_image
		{
			height: 93px;
			width: 119px;
			background-color: black;
			margin-left: 457px;
			margin-top: -95px;
			background-image: url(./quiz_icon.gif);
			background-size: 120px;
			background-repeat: no-repeat; 
			border-radius: 3px;
}
		.error
		{
			background-color: #e74c3c;
			text-align:center;
			font-size: 48px;
			color: black;
			margin-top: 100px;
		}
		.button
		{
			color: blue;
			font-size: 10px;
			cursor: pointer;
		}
	</style>
</head>
<body>
<div id="error_page">
	<div class="upper_block_1">
		<div class="in_box home">
			<h2>Quizy Mainia</h2>
		</div>
			<div class="quiz_image">
			</div>
	</div>
	<div  class="error ">
	<h1><i><u>404 SERVER NOT FOUND</u></i></h1>
	<div id="home" class="button">
		<br><u>Home</u>
	</div>
	</div>
</div>
<script type="text/javascript">
	$('.home').click(function(){
		window.location.assign("/skillclas/quiz/add.php");
	});
	/*$('.button').click(function(){
		window.location.assign("/skillclas/add.php");
	});*/

</script>
</body>
</html>