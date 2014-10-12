<!DOCTYPE html>
<html>
<head>
  <title>play game</title>
	<link href='http://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link rel="stylesheet" type="text/css" href="other.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <style type="text/css">
  .edit
  {
  width: 32px;
  height: 65px;
  color: rgb(126, 173, 151);
  margin-left: 1396px;
  cursor: pointer;
  font-size: 20px;
  margin-bottom: -85px;
  margin-top: auto;
  padding-top: 101px;
  }
  .answer1
  {
  	width: 100px;
	height: 50px;
	background-color: rgb(229, 208, 208);
	margin-bottom: -67px;
	margin-left: 28px;
	border-radius: 21px;
	font-size: 27px;
  }
  .submit
  {
  	width: 247px;
	height: 67px;
	border-radius: 46px;
	margin-left: 376px;
	margin-top: 8px;
	cursor: pointer;
	background-color: rgb(152, 209, 164);
	font-size: 34px;
	background-image: url(./button.jpg);
	background-repeat: no-repeat;
	background-size: 2454px;
	color: white;
	font-style: Shadows+Into+Light;
	}
	span.white-text
	{
    margin: 135px;}
    span.white-text_1
	{
    margin: 20px;}
    .radio_1
    {
    	margin-left: -800px;
    }
    .box
	{
		width: 102%;
		height: 1000px;
		margin-top: -11px;
		margin-left: -9px;
		background-image: url(./cover.jpg);
		background-repeat: no-repeat;
		background-size: 100%;
	}
	.firstbox
	{
		width: 100%;
		height: 144pxx;
	}
	.secondbox
	{
		width: 100%;
		height: 200px;
	}
	.thirdbox
	{
		width: 100%;
		height: 679px;
	}
	.logo
	{
		height: 118px;
		width: 286px;
		position: abosolute;
		margin-left: 232px;
		background-image: url(./logo.jpg);
		background-repeat: no-repeat;
		opacity: 0.8;
		border-radius: 9px;
		background-size: 285px;
		cursor: pointer;
	}
	.user
	{
		height: 62px;
		width: 177px;
		background-color: rgb(213, 21, 21);
		margin-left: 1150px;
		border-radius: 70px;
		font-size: 38px;
		color: yellow;
		font-family: sans-serif;
		padding-top: 10px;
		padding-left: 10px;
		cursor: pointer;
		margin-top: -59px;
	}
	.profile
	{
		width: 50px;
		height: 50px;
		background-color: black;
		margin-top: -48px;
		margin-left: 103px
	}
	.edit_box
	{
		width: 200px;
		height: 200px;
		background-color: black;
		margin-left: 1116px;
		position: relative;
		display: inline-block;
		border-radius: 5px;
		cursor: pointer;
	}
	.edit_box button
	{
		width: 100%;
		height: 50px;
		background-color: blue;
		cursor: pointer;
		font-size: 30px;
		font-family: Calligraffitti;
		background-color: rgb(203, 12, 12);
		color: yellow;
	}
	.box1
	{
		width: 211px;
		height: 250px;
		background-color: red;
		margin-left: 50px;
		position: absolute;
		display: inline-block;
	}
	.box1 button
	{
		height: 50px;
		width: 100%;
		background-color: rgb(203, 12, 12);
		color: yellow;
		font-size: 30px;
		font-family: Calligraffitti;
		cursor: pointer;
		border-radius: 5px;
	}
	.question_box_sports
	{
		width: 850px;
		height: 500px;
		margin-left: 390px;
		border-radius: 30px;
		font-size: 20px;
		padding-top: 20px;
		padding-left: 50px;
		font-family: sans-serif;
		color: yellow;
		background-image: url(./sports_background.jpg);
		background-repeat: no-repeat;
		background-size: 1000px;
	}
	.question_box
	{
		width: 850px;
		height: 500px;
		margin-left: 390px;
		border-radius: 30px;
		font-size: 20px;
		padding-top: 20px;
		padding-left: 50px;
		font-family: sans-serif;
		color: yellow;
	}
	.details_background
	{
		background-image: url(./details.jpg);
		background-repeat: no-repeat;
		background-size: 1000px;
	}
	.profile_background
	{
		background-image: url(./profile.jpg);
		background-repeat: no-repeat;
		background-size: 1000px;
	}
    
  </style>

<body>
<div class="box">
	<div class="firstbox">
		<div class="logo"></div>

		<div class="user">User<div class="profile"></div></div>
	</div>

	<div class="secondbox">
		<div class="edit_box">
			<button class="user_info">User</button>
			<button class="profile_image">Profile</button>
			<button class="account">Account Setting</button>
			<button class="SignOut">Sign out</button>
		</div>
	</div>

	<div class="thirdbox">
		<div id="users">
			<div class="box1">
				<button id="profile">Profile</button>
				<button id="IT">IT</button>
				<button id="Sports">Sports</button>
				<button id="PC_games">PC games</button>
				<button id="Details">Details</button>
			</div>
		</div>
		<div class="profile_background question_box" id="profile_box"></div>
		<div class="details_background question_box"></div>		
		<div class="question_box_sports" id="sport_box">
			<?php
		//session_start();
		$score=0;
		echo "<br>";

		echo "<br>";
		//$u_id = $_SESSION['u_id'];
			if($_SERVER['REQUEST_METHOD']!='POST' || $_SERVER['REQUEST_METHOD']=='POST' && !isset($_POST['i']))
				$i=1;
			elseif (isset($_POST['i'])) 
			{
				$i = $_POST['i'];
			}
			do {

			
				$que = rand(1,20);
				//echo $que;
				$link = mysql_connect('localhost','root','');
				mysql_select_db('database');

				$que_n = " SELECT que_n FROM question_database_sport WHERE que_n= '$que'";
				$r_que_n = mysql_query($que_n);
				$row_que_n = mysql_fetch_array($r_que_n);

				$question = "  SELECT question FROM question_database_sport WHERE que_n= '$que'";
				$r_question = mysql_query($question);
				$row_question = mysql_fetch_array($r_question);

				$option_1 = "  SELECT option_1 FROM question_database_sport WHERE que_n= '$que'";
				$r_option_1 = mysql_query($option_1);
				$row_option_1 = mysql_fetch_array($r_option_1);

				$option_2 = "  SELECT option_2 FROM question_database_sport WHERE que_n= '$que'";
				$r_option_2 = mysql_query($option_2);
				$row_option_2 = mysql_fetch_array($r_option_2);

				$option_3 = "  SELECT option_3 FROM question_database_sport WHERE que_n= '$que'";
				$r_option_3 = mysql_query($option_3);
				$row_option_3 = mysql_fetch_array($r_option_3);

				$option_4 = "  SELECT option_4 FROM question_database_sport WHERE que_n= '$que'";
				$r_option_4 = mysql_query($option_4);
				$row_option_4 = mysql_fetch_array($r_option_4);

				$correct = "  SELECT correct FROM question_database_sport WHERE que_n= '$que'";
				$r_correct = mysql_query($correct);
				$row_correct = mysql_fetch_array($r_correct);

				//secho $i;
				//echo "<br>";

				echo "Que"."  ".$i.' '.$row_question['question'];
				echo "<br>";

				$size1 = strlen($row_option_1['option_1']);
				$size2 = strlen($row_option_2['option_2']);
				$size3 = strlen($row_option_3['option_3']);
				$size4 = strlen($row_option_4['option_4']);

				if (($size1<=20)&&($size2<=20)&&($size3<=20)&&($size4<=20)) 
				{

				echo '<div class="option1">'.'<input type="radio" name="answer" value="1" >'.'<span class="white-text_1"> &nbsp;'.$row_option_1['option_1']."</span>\n".'</div>';
				echo '<div class="option2">'.'<input type="radio" name="answer" value="2" >'.'<span class="white-text_1"> &nbsp;'.$row_option_2['option_2']."</span>\n".'</div>';

				echo "<br>";

				echo '<div class="option1">'.'<input type="radio" name="answer" value="3" >'.'<span class="white-text_1"> &nbsp;'.$row_option_3['option_3']."</span>\n".'</div>';
				echo '<div class="option2">'.'<input type="radio" name="answer" value="4" >'.'<span class="white-text_1"> &nbsp;'.$row_option_4['option_4']."</span>\n".'</div>';
				}

				else
				{	echo '<input type="radio" name="answer" value="1" >';
					echo $row_option_1['option_1'];
					echo "<br>";

					echo '	<input type="radio" name="answer" value="2" >';
					echo $row_option_2['option_2'];
					echo "<br>";

					echo '	<input type="radio" name="answer" value="3" >';
					echo $row_option_3['option_3'];
					echo "<br>";

					echo '	<input type="radio" name="answer" value="4" >';
					echo $row_option_4['option_4'];
					echo "<br>";
				}
				$result = "";
			if ($_SERVER['REQUEST_METHOD']=='POST') 
			{
				if(isset($_POST['answer']))
					$result = $_POST['answer'];	
				if ($row_correct['correct']==$result&&isset($result)) 
				{
				 $i++;	
				 $score= $score+10;
				}
				else
				{
					$score = $score-2;
					$i++;
				}
			}

		} while ( ($i <= 10)&&(isset($_POST['answer'])));
			echo "<form method='post' action='sports.php'>
				<input type='hidden' name='i' value='".$i."'>
				<button class='submit'>Submit</button>
			</form>";	
		?>
		</div>
</div>
	</body>

<script type="text/javascript">
	$('.profile_background').hide();
	$('.IT_background').hide();
	$('.PC_games_background').hide();
	$('.details_background').hide();
	$('.edit_box').hide();
	$('#sport_box').fadeIn();
$('.logo').click(function(){
		window.location.assign("/skillclas/quiz/page2.php");
	});

	$('.user').click(function(){
		$('.edit_box').fadeToggle();
	});
	$('#profile').click(function()
	{

		$('.profile_background').fadeIn();
		$('.IT_background').hide();
		$('.Sport_background').hide();
		$('.PC_games_background').hide();
		$('.details_background').hide();

		$.ajax({
				url: 'backend_profile1.php',
				type: 'POST',
				success:function(data){
					$('#profile_box').html(data);
				}
			});		
	});
	$('#Details').click(function()
	{
		$('#sport_box').hide();
		$('.profile_background').hide();
		$('.IT_background').hide();
		$('.Sport_background').hide();
		$('.PC_games_background').hide();
		$('.details_background').fadeIn();

	});
</script>