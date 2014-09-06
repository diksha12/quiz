<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="other.css">
	<link rel="stylesheet" type="text/css" href="reset.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Indie+Flower|Pacifico' rel='stylesheet' type='text/css'>
	<style type="text/css">
		.box2
		{
			background-color: #e74c3c;
			color: white;
			
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
		.image
		{
			height: 93px;
			width: 119px;
			background-color: black;
			margin-left: 300px;
			margin-top: -71px;
			background-image: url(./quiz_icon.gif);
			background-size: 120px;
			background-repeat: no-repeat; 
			border-radius: 3px;
		}
		.box
		{
			background-color: #95a5a6;
			width: 1500px;
			height: 700px;
		}
		.create_form
		{
			width: 1500px;
			height: 700px;
			margin: auto;
			background-image: url(./quiz_1.jpg);
			background-repeat: no-repeat;
			background-size: cover;
		}
		.form_box
		{
			width: 600px;
			height: 700px;
			background-color: #3A539B;
			border-radius: 10px;
			margin: auto;
		}
		.l_name
	{
  	width: 200px;
	height: 40px;
	margin-left: 15px;
	margin-top: 10px;
	border-radius: 7px;
	border-color: grey;
	background-color: #ecf0f1;
	font-size: 20px;
	}
.f_name
	{
	width: 200px;
	height: 40px;
	margin-left: 104px;
	margin-top: 10px;
	border-radius: 7px;
	border-color: grey;
	background-color: #ecf0f1;
	font-size: 20px;
	}
.u_name
	{
	width: 420px;
	height: 40px;
	margin-left: 73px;
	margin-top: 10px;
	border-radius: 7px;
	border-color: grey;
	background-color: #ecf0f1;
	font-size: 20px;
	}
.pass
	{
	width: 420px;
	height: 40px;
	margin-left: 79px;
	margin-top: 10px;
	border-radius: 7px;
	border-color: grey;
	background-color: #ecf0f1;
	font-size: 20px;
	}
.r_pass
	{
	width: 420px;
	height: 40px;
	margin-left: 23px;
	margin-top: 10px;
	border-radius: 7px;
	border-color: grey;
	background-color: #ecf0f1;
	font-size: 20px;

	}
.dob
	{
	width: 420px;
	height: 40px;
	margin-left: 51px;
	margin-top: 10px;
	border-radius: 7px;
	border-color: grey;
	background-color: #ecf0f1;
	font-size: 20px;
	}
.check_m
	{
	margin-left: 51px;
	margin-top: 20px;
	}
.check_f
	{
	margin-left: 161px;
	margin-top: 20px;
	}
.submit
	{
	width: 162px;
	height: 62px;
	background-color: #2c3e50;
	font-size: 19px;
	color: white;
	padding: 0px;
	border:none;
	margin-left :150px;
	margin-top: 30px;
	border-radius: 3px;
	cursor: pointer;
	}

	</style>

</head>
<body>
<div id='page_2'>
	<div class="box2 ">
		<div class="in_box " id="home">
		<h2>Quizy Mainia</h2>
			<div class="image">
			</div>
		</div>
	<div class="box ">
		<div class="create_form">
			<div class="form_box">
			<form method="post" class="abb" action="page_3.php">
			Name         : 
			<input type="text" name="name1" placeholder="First name" class="f_name">
			<input type="text" name="name2" placeholder="Last name" class='l_name' >
			<br>
			Username       :
			<input type="text" name="user_name" placeholder="Username" class="u_name"><br>
			Password :
			<input type="password" name="password" placeholder="Password" class="pass"><br>
			Repeat Password :
			<input type="password" name="password1" placeholder="Repeat Password" class="r_pass">
			<br>
			date of Birth :
			<input type="date" name="dob" class="dob">
			<br>
			<input type="radio" class="check_f" value="Female" name="gender">
			Female
			<input type="radio" name="gender" class="check_m" value="male">
			male
			<br>
			<input type="submit" value="Create my account" class="submit">
			</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('#home').click(function(){
			window.location.assign("/skillclas/add.php");
		});
	$("button").click(function(){
			window.location.assign("/skillclas/page_5.php")
	});
</script>
</body>
</html>
