<!DOCTYPE html>
<html>
<head>
	<title>Play quiz</title>
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link rel="stylesheet" type="text/css" href="other.css">
	<link href='http://fonts.googleapis.com/css?family=Indie+Flower|Pacifico' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<style type="text/css">
		.upper_block_1
		{
			background-color: #e74c3c;
			width: 1518px;
			height: 100px;
			font-size: 44px;
			color: white;
			position: absolute;
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
			margin-top: -96px;
			background-image: url(./quiz_icon.gif);
			background-size: 120px;
			background-repeat: no-repeat; 
			border-radius: 3px;
		}
		.option_window
		{
			width: 100%;
			height: 70px;
			background-color: #DCC6E0;
			margin-top: 90px;
		}
		.option_window button
		{
			height: 70px;
			width: 247px;
			color: black;
			background-color: #F62459;
			cursor: pointer;
			font-size: 30px;
			font-style:Lobster; 
		}
		.third_block
		{
			height: 70px;
			width: 100%;
			background-color: #FDE3A7;
			color: #674172;
			padding-top: 20px;
			font-size: 40px;
			padding-bottom: 20px;
		}
		.quiz_block
		{
			height: 453px;
			width: 773px;
			border:2px solid;
			border-color: blue;
			margin: auto;
			margin-top: 30px;
			border-radius: 25px;
		}
		.design_2
		{
			background-color: #FFECDB;
			width: 100%;
			height: 100%;
			font-size: 30px;
			font-style: open-sans;
			color: black;
			text-align: left;
			margin-left: 2px;
		}
	</style>
</head>
<body>
<div id="page_4">
	<div class="upper_block_1">
		<div class="in_box home">
		<h2>Quizy Mainia</h2>
		</div>
		<div class="quiz_image">
		</div>
	</div>
	<br>
	<div class="option_window">
		<button value="PROFILE" class="profile">PROFILE</button>
		<button value="OPTION_1" class="it">IT</button>
		<button value="OPTION_2" class="wildlife">WILDLIFE</button>
		<button value="OPTION_3" class="sports">SPORTS</button>
		<button value="OPTION_4" class="pc_games">PC GAMES</button>
		<button value="OPTION_5" class="details">DETAILS</button>
	</div>
	<div class="third_block">
		Hello User...
	</div>
	<div class="quiz_block"></div>
	</div>
	<div id="profile" class="design_2" >
			<h1>Profile</h1>
		</div>
		<div id="IT" class="design_2">
			<h1>IT</h1>
		</div>
		<div id="Wildlife" class="design_2">
			<h1>Wildlife</h1>
		</div>
		<div id="sports" class="design_2">
			<h1>Sports</h1>
		</div>
		<div id="pc_games" class="design_2">
			<h1>PC_GAMES</h1>
		</div>
		<div id="details" class="design_2">
			<h1>DETAILS</h1>
		</div>
	</div>


	<script type="text/javascript">
		
		$('.design_1').hide();
		$('#details').hide();
		$('#profile').hide();
		$('#IT').hide();
		$('#Wildlife').hide();
		$('#sports').hide();
		$('#pc_games').hide();
		$('.quiz_block').hide();


		$('.profile').click(function(){
			$('#Wildlife').hide()
			$('#details').hide();;
			$('#sports').hide();
			$('#pc_games').hide();
			$('#IT').hide();
			$('.design').hide();
			$('.design_1').hide();
			$('#profile').show();

			$.ajax({
				url: 'backend_profile.php',
				type: 'POST',
				success:function(data){
					$('#profile').html(data);
				}
			});		
		});
		$('.it').click(function(){
			$('.design').hide();
			$('#sports').hide();
			$('#details').hide();
			$('#pc_games').hide();
			$('.design_1').hide();
			$('#Wildlife').hide();
			$('#profile').hide();
			$('#IT').show();

			$.ajax({
			url: 'backend_it.php',
			type: 'POST',
			success:function(data)
			{
			$('#IT').html(data);
			}
			});	
		});
		$('.wildlife').click(function(){
  			$('#profile').hide();
  			$('#sports').hide();
			$('#pc_games').hide()
			$('#details').hide();;
  			$('.design').hide();
			$('.design_1').hide();
			$('#IT').hide();
			$('#Wildlife').show();
			$.ajax({
				url: 'backend_wildlife.php',
				type: 'POST',
				success:function(data){
					$('#Wildlife').html(data);
				}
			});		
		});
		$('.sports').click(function(){
  			$('#profile').hide();
  			$('#Wildlife').hide();
			$('#pc_games').hide();
  			$('.design').hide();
			$('.design_1').hide();
			$('#details').hide();
			$('#IT').hide();
			$('#sports').show();
			$.ajax({
				url: 'backend_sports.php',
				type: 'POST',
				success:function(data){
					$('#sports').html(data);
				}
			});		
		});
		$('.pc_games').click(function(){
  			$('#profile').hide();
  			$('#sports').hide();
			$('#Wildlife').hide();
  			$('.design').hide();
			$('.design_1').hide();
			$('#IT').hide();
			$('#details').hide();
			$('#pc_games').show();
			$.ajax({
				url: 'backend_pc_games.php',
				type: 'POST',
				success:function(data){
					$('#pc_games').html(data);
				}
			});		
			});
		$('.details').click(function(){
  			$('#profile').hide();
  			$('#sports').hide();
  			$('#Wildlife').hide();
			$('#pc_games').hide();
  			$('.design').hide();
			$('.design_1').hide();
			$('#IT').hide();
			$('#details').show();

			$.ajax({
				url: 'backend_details.php',
				type: 'POST',
				success:function(data){
					$('#details').html(data);
				}
			});	
		});
		$('.home').click(function(){
			window.location.assign("/skillclas/page_3.php");
		});
		$('#hello_user').click(function(){
  			$('#details').hide();
  			$('#sports').hide();
  			$('#Wildlife').hide();
			$('#pc_games').hide();
  			$('.design').hide();
			$('.design_1').hide();
			$('#IT').hide();
			$('#profile').show();
		});

	</script>	

</body>
</html> 
<?php
$link = new mysqli('localhost','root','','database');
		 $var1 = rand(1,21);
		 $query1 = "SELECT question FROM question_database_it WHERE que_n = (?)";
		 $stmt1 = $link->prepare($query1);
		$stmt1->bind_param('s', $var1);		
		$stmt1->execute();

?>  