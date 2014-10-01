 <!DOCTYPE html>
 <?php
ob_start();
session_start();
?>
<html>
<head>
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="other.css">
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link href='http://fonts.googleapis.com/css?family=Indie+Flower|Pacifico' rel='stylesheet' type='text/css'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<style type="text/css">
	.hide
	{
		display: none;
	}
	.image_box
		{
			width: 100%;
			height: 616px;
			margin: auto;
			background-image: url(./quiz_1.jpg);
			background-repeat: no-repeat;
			background-size: cover;
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
		
		
		.upper_block
		{
			background-color: #e74c3c;
			width: 100%;
			height: 100px;
			font-size: 44px;
			color: white;
			position: absolute;
			
		}
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

		.form1
		{
			background-color: #e74c3c;
			font-size: 13px;
			color: white;
			margin-left: 764px;
			height: 84px;
			position: relative;
			width: 458px;
			font-family: open-sans;
			text-align: justify;
			margin-top: -84px;
			padding-top: 20px;

		}
		.input_text
		{
			width: 70px;
			height: 20px;
			background-color: #2c3e50;
			color: #95a5a6;
			border: 7px;
			font-size: 13px;
			font-weight: 400;
			border-color: white;
			border-radius: 5px;
		}
		.ab
		{
			width: 95px;
			height: 15px;
			border:none;
			font-size: 10px;
			background-color:  #e74c3c;
			color: white;
			font-family: open-sans;
			margin-left: 1352px;
			position: relative;
			margin-top: 63px;
			cursor: pointer;
			display: inline;
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
		.create
		{
			height: 100px;
			width: 100px;
			background-color: #e74c3c;
			position: relative;
			background-image: url(./create.png);
			background-repeat: no-repeat;
			background-size: 100px;
			border-radius: 64px;
			margin-left: 1230px;
			cursor: pointer;
		}
		.button
		{
			margin-top: -667px;
			margin-left: 1241px;
			height: 27px;
			width: 56px;
		}
		.login_error
		{
			margin-left: 23px;
		}
	</style>
</head>
<body>

<div class="box" id ="page_1">
	<div class="upper_block">
		<div class="in_box home">
		<h2>Quizy Mainia</h2>
		</div>
		<div class="quiz_image"></div>
	</div>
</div>
<div class="create" id="create"></div>
	<div class="form1">
	<form method="post" >
		username: <span style="display:inline-block; width: 135px; "></span> Password:<br>
		<input type="text" name="user_name" >
		<span style="display:inline-block; width: 10px; "></span>
		<input type="password" name="pass">
		<span style="display:inline-block; width: 10px; "></span>
		<input type="submit" value="Log In" class="Log_in" id="Log_in"><br>
		<input type="checkbox">
		<span style=" color :#ecf0f1; font-size :10px; " >keep me logged in</span>
		<span style="display:inline-block; width: 65px; "></span>
		<span id="login_error" style=" color :#ecf0f1; font-size :10px; cursor: pointer;" class='login_error'  ><u>can't log in?</u></span>
	</form>

	</div>
	<div class="image_box"></div>
	<div class="button"></div>
</div>
<script type="text/javascript">
	$('.button').click(function(){
		window.location.assign("/skillclas/quiz/page_3.php");
	});
	$('#create').hover(function(){
		var $this = $(this); 
            $this.data('initialText', $this.text());
            $this.text("create account");
	},
	function() {
            var $this = $(this);
            $this.text($this.data('initialText'));
        }
	);
	$('#create').click(function(){
		window.location.assign("/skillclas/quiz/page_2.php")
	});
	$('#login_error').click(function(){
		window.location.assign("/skillclas/quiz/error_page.php")
	});

</script>
</body>
</html>
<?php

if ($_SERVER['REQUEST_METHOD']=='POST') 
	{

		
		if (isset($_POST['user_name'])) 
		{
		
		$link = new mysqli('localhost','root','','database');
		$user_name = $_POST['user_name'];
		$pass = $_POST['pass'];
		$query ="INSERT INTO quiz_login_1 (username, password) VAlUES (?,?)";
		$stmt = $link-> prepare($query);
		$stmt->bind_param('ss',$user_name, $pass);
		$stmt->execute();
			
		$query1 = " SELECT password FROM create_quiz WHERE u_name='$user_name'";
 			$link1 = mysql_connect('localhost','root','');
 			mysql_select_db('database');
			$res = mysql_query($query1);
			echo mysql_error();
			$row = mysql_fetch_array($res);
			$cheack = $row['password'];					
			if ($cheack==$pass) 
			{
				header('location:page_3.php');
			}
			else
			{
				echo "<script type=\"text/javascript\">".
				  "window.alert('Error in username or password');".
		  			"</script>"; 
			}
		}
		elseif (isset($_POST['u_name'])) 
		{
			$link = new mysqli('localhost','root','','database');
			$f_name = $_POST['name1'];
			$l_name = $_POST['name2'];
			$u_name = $_POST['user_name'];
			$password = $_POST['password'];
			$r_pass = $_POST['password1'];
			$dob = $_POST['dob'];
			$gender = $_POST['gender'];
				if ($password===$r_pass) 
				{
				
				$query1 = "INSERT INTO create_quiz (f_name,l_name,u_name,password,dob,gender) VAlUES (?,?,?,?,?,?)";
				$stmt1 = $link->prepare($query1);
				$stmt1->bind_param('ssssss', $f_name, $l_name, $u_name,$password,$dob,$gender);
				
				$stmt1->execute();

				header('location:add.php');
				
				echo $link->error;

				$stmt1->close();

				}
				else
				{
				echo "<script type=\"text/javascript\">".
					  "window.alert('incorect password');".
		  				"</script>"; 
				}
			}

				$query2 = " SELECT u_id FROM create_quiz WHERE u_name='$user_name'";
				$link1 = mysql_connect('localhost','root','');
 				mysql_select_db('database');
				$result = mysql_query($query2);
				echo mysql_error();
				$row = mysql_fetch_array($result);
				$u_id = $row['u_id'];				
				$_SESSION['u_id']= $u_id;

		}
?>