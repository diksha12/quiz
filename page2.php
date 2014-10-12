<!DOCTYPE html>
<html>
<head>
	<title>login compleate</title>
	<link rel="stylesheet" type="text/css" href="other.css">
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link href='http://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet' type='text/css'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<style type="text/css">
	.box
	{
		width: 100%;
		height: 730px;
		background-color: black;	
	}
	
	.logo
	{
		height: 118px;
		width: 286px;
		position: relative;
		margin-left: 232px;
		background-image: url(./logo.jpg);
		background-repeat: no-repeat;
		opacity: 0.8;
		border-radius: 9px;
		background-size: 285px;
		cursor: pointer;
	}
	.credits
	{
		width: 300px;
		height: 500px;
		display: inline-block;
		margin-left: 1032px;
		margin-top: -272px;
		background-color: rgb(224, 14, 14);
		border-radius: 28px;
	}
	.List
	{
		color: rgb(237, 223, 0);
		font-size: 48px;
		margin-top: 187px;
		cursor: pointer;
		list-style: none;
		font-family: Calligraffitti;
	}
	</style>
</head>

<body>

<div class="box">
	<div class="logo"></div>
	<ul class="List">
		<li class="li_1"><H1><i>Play Your Quiz</i></H1></li>
		<li class="Li_2"><H1><i>Create Your Qwn Quiz</i></H1></li>
	</ul>
	<div class="credits"></div>
</div>
<script type="text/javascript">
	$('.li_1').click(function(){
		window.location.assign("/skillclas/quiz/page3.php");
	});
	$('.Li_2').click(function(){
		window.location.assign("/skillclas/quiz/page3.php");
	})

</script>
</body>
</html>

