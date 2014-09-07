<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="other.css">
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link href='http://fonts.googleapis.com/css?family=Indie+Flower|Pacifico' rel='stylesheet' type='text/css'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<style type="text/css">
	.upper_block
		{
			background-color: #e74c3c;
			width: 100%;
			height: 100px;
			font-size: 44px;
			color: white;
			position: absolute;
			
		}
		.page_3
		{
			height: 700px;
			width: 1499px;
			background-color: #FDE3A7;
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
			margin-left: 481px;
			margin-top: -95px;
			background-image: url(./quiz_icon.gif);
			background-size: 120px;
			background-repeat: no-repeat; 
			border-radius: 3px;
		}
		.icon
		{
			background-image: url(./icon.png);
			background-repeat: no-repeat;
			margin-top: -550px;
			height:70px;
			margin-left: 20px;
		}
		.list_option_1 
		{
			font-size:40px;
			cursor:pointer;
			color:#D35400;
			font-style:Pacifico;
			margin-left:70px;
		}
		.icon_2
		{
			background-image: url(./icon.png);
			background-repeat: no-repeat;
			margin-top: 23px;
			height:70px;
			margin-left: 20px;
		}
		.list_option_2
		{
			font-size:40px;
			cursor:pointer;
			color:#D35400;
			font-style:Pacifico;
			margin-left:70px;
		}
		.credit_box
		{
			width: 446px;
			height: 581px;
			margin-left: 1050px;
			margin-top: -213px;
			background-color: #C0392B;
			border-radius: 109px;
			font-size: 30px;
			color: black;
			padding-top: 95px;
			padding-left: 44px;
		}
		.size
		{
			font-size: 40px;
		}

	</style>
</head>
<body>
<div id="page_3 " class="size">
	<div class="page_3 ">
		<div class="upper_block">
			<div class="in_box" id="home">
			<h2>Quizy Mainia</h2></div>
			<div class="quiz_image"></div>
		</div>
	</div>
	<div class="icon ">
		<div class="list_option_1">Design your own quiz</div>
	</div>
	<div class="icon_2 ">
		<div class="list_option_2">Play your quiz</div>
	</div>
	<div class="credit_box">
	Hi!! User<br>
	Your Credits :
	</div>
</div>
<script type="text/javascript">
	$('#home').click(function(){
		window.location.assign("/skillclas/quiz/page_3.php");
	});
	$('.list_option_1').click(function(){
		window.location.assign("/skillclas/quiz/page_5.php");
	});
	$('.list_option_2').click(function(){
	window.location.assign("/skillclas/quiz/page_4.php");
	});
	

</script>
</body>
</html>
<?php
	session_start();
	
	echo $_SESSION['u_id'];
?>
