<!DOCTYPE html>
<html>
<head>
	<title>Design quiz</title>
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link rel="stylesheet" type="text/css" href="other.css">
	<link href='http://fonts.googleapis.com/css?family=Indie+Flower|Pacifico' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<style type="text/css">
		.page_4
		{
			background-color: #F1A9A0;
		}
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
			background-color: #C0392B;
			margin-top: 90px;
			font-style: open-sans;
		}
		.option_window button
		{
			height: 70px;
			width: 247px;
			color: black;
			background-color: #F62459;
			cursor: pointer;
			font-size: 30px;
			font-style: open-sans;

		}
		.third_block
		{
			height: 70px;
			width: 100%;
			background-color: #F62459;
			color: #674172;
			padding-top: 20px;
			font-size: 40px;
			padding-bottom: 20px;
		}
		.credit
		{
			width: 100%;
			height: 70px;
			background-color: #F62459;
			color: black;
			color: #674172;
			padding-top: 20px;
			font-size: 40px;
			padding-bottom: 20px;
		}
		.design
		{
			background-color: #FFECDB;
			width: 100%;
			height: 350px;
			font-size: 52px;
			font-style: open-sans;
			color: white;
			text-align: center;
		}
		.design input
		{
			width: 200px;
			height: 50px;
			font-size: 30px;
			border-radius: 4px;
		}
		.submit
		{
			background-color:  grey;
		}
		.hide
		{
			display: none;
		}
		.design_1
		{
			background-color: #FFECDB;
			width: 100%;
			height: 400px;
			font-size: 30px;
			font-style: open-sans;
			color: black;
			text-align: center;
		}
		.design_1 input
		{
			width: 300px;
			height: 50px;
			font-size: 30px;
			border-radius: 4px;
			margin-top: 3px;
		}
		.design_2
		{
			background-color: #FFECDB;
			width: 100%;
			height: 400px;
			font-size: 30px;
			font-style: open-sans;
			color: black;
			text-align: center;
		}
	</style>
</head>
<body>
<div id="page_4" class="page_4">
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
	<div class="third_block" id="hello_user">
		Hello User...
	</div>
	
	<div class="credit">
		Your Credits :
	</div>
	<div class="design ">
		<form method="post">
			Name of Quiz :
			<input type="text" name="name_of_quiz" placeholder="Quiz name">
			<br>
			Type of Quiz:
			<input type="text" name="type_of_quiz" placeholder="Quiz type">
			<br>
			<input type="submit" name="submit" value="Submit" class="submit">
		</form>
	</div>
	<div class="design_1 ">
		<form method="post">
			Enter the question:
			<br>
			<input type="text" name="question" placeholder="Enter the Question"><br>
			Enter the option:
			<br>
			<input type="text" name="option_1" placeholder="option 1"><br>
			<input type="text" name="option_2" placeholder="option 2"><br>
			<input type="text" name="option_3" placeholder="option 3"><br>
			<input type="text" name="option_4" placeholder="option 4"><br>
			<input type="submit" name="submit_2" value="Submit">
		</form>
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
		});
		$('.home').click(function(){
			window.location.assign("/skillclas/quiz/page_3.php");
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
	if ($_SERVER['REQUEST_METHOD']=='POST')
	{
		$link = new mysqli('localhost','root','','database');
		if (isset($_POST['name_of_quiz'])) {
			$name_of_quiz = $_POST['name_of_quiz'];
			$type_of_quiz = $_POST['type_of_quiz'];
			$query ="INSERT INTO name_quiz (name_quiz, type_quiz) VAlUES (?,?)";
			$stmt = $link-> prepare($query);
			$stmt -> bind_param('ss',$name_of_quiz, $type_of_quiz);
			$stmt -> execute();
			$stmt -> close();
		}
		else
		{
			echo "error";
		}
		
	}



?>
