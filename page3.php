<!DOCTYPE html>
<html>
<head>
	<title>play game</title>
	<link href='http://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link rel="stylesheet" type="text/css" href="other.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<style type="text/css">
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
	.profile_background
	{
		background-image: url(./profile.jpg);
		background-repeat: no-repeat;
		background-size: 1000px;
	}
	.IT_background
	{
		background-image: url(./it_background.jpg);
		background-repeat: no-repeat;
		background-size: 1000px;
	}
	.Sport_background
	{
		background-image: url(./sports_background.jpg);
		background-repeat: no-repeat;
		background-size: 1000px;
	}	
	.PC_games_background
	{
		background-image: url(./games_background.jpg);
		background-repeat: no-repeat;
		background-size: 1000px;
	}
	.details_background
	{
		background-image: url(./details.jpg);
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
	</style>
</head>
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
			<div class="details_background question_box" id="detail_box"></div>		
	</div>
</div>
</body>
<script type="text/javascript">
	$('.profile_background').hide();
	$('.IT_background').hide();
	$('.Sport_background').hide();
	$('.PC_games_background').hide();
	$('.details_background').hide();
	$('.edit_box').hide();

	$('#profile').click(function()
	{

		$('.profile_background').fadeIn();
		$('.IT_background').hide();
		$('.Sport_background').hide();
		$('.PC_games_background').hide();
		$('.details_background').hide();

		$.ajax({
				url: 'profile.php',
				type: 'POST',
				success:function(data){
					$('#profile_box').html(data);
				}
			});		
	});

	$('#IT').click(function()
	{

		$('.profile_background').hide();
		$('.Sport_background').hide();
		$('.PC_games_background').hide();
		$('.details_background').hide();
		
		window.location.assign("/skillclas/quiz/it.php");

	});
	$('#Sports').click(function()
	{

		$('.profile_background').hide();
		$('.IT_background').hide();
		$('.PC_games_background').hide();
		$('.details_background').hide();
		window.location.assign("/skillclas/quiz/Sports.php");

	});
	$('#PC_games').click(function()
	{

		$('.profile_background').hide();
		$('.IT_background').hide();
		$('.Sport_background').hide();
		$('.details_background').hide();

		window.location.assign("/skillclas/quiz/games.php");
	});

	$('#Details').click(function()
	{

		$('.profile_background').hide();
		$('.IT_background').hide();
		$('.Sport_background').hide();
		$('.PC_games_background').hide();
		$('.details_background').fadeIn();

		$.ajax({
				url: 'details.php',
				type: 'POST',
				success:function(data){
					$('#detail_box').html(data);
				}
			});		
	});

	$('.logo').click(function(){
		window.location.assign("/skillclas/quiz/page2.php");
	});

	$('.user').click(function(){
		$('.edit_box').fadeToggle();
	})

</script>
</html>
