<!DOCTYPE html>
<html>
<head>
  <title></title>
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
  .answer
  {
  	width: 100px;
  	height: 50px;
  	background-color: red;
  	border-radius: 3px;
  }
  </style>
</head>
<body>
<form method="post">
	<div class="answer"></div>
	<button>Submit</button>
</form>
</body>
</html>
<?php
session_start();

echo "<br><br>";
echo "YOUR User Id is : ";
echo $_SESSION['u_id'];
echo "<br>";
$u_id = $_SESSION['u_id'];

		$que = rand(1,21);
		echo $que;
		$link = mysql_connect('localhost','root','');
		mysql_select_db('database');

		$que_n = " SELECT que_n FROM question_database_it WHERE que_n= '$que'";
		$r_que_n = mysql_query($que_n);
		$row_que_n = mysql_fetch_array($r_que_n);

		$question = "  SELECT question FROM question_database_it WHERE que_n= '$que'";
		$r_question = mysql_query($question);
		$row_question = mysql_fetch_array($r_question);

		$option_1 = "  SELECT option_1 FROM question_database_it WHERE que_n= '$que'";
		$r_option_1 = mysql_query($option_1);
		$row_option_1 = mysql_fetch_array($r_option_1);

		$option_2 = "  SELECT option_2 FROM question_database_it WHERE que_n= '$que'";
		$r_option_2 = mysql_query($option_2);
		$row_option_2 = mysql_fetch_array($r_option_2);

		$option_3 = "  SELECT option_3 FROM question_database_it WHERE que_n= '$que'";
		$r_option_3 = mysql_query($option_3);
		$row_option_3 = mysql_fetch_array($r_option_3);

		$option_4 = "  SELECT option_4 FROM question_database_it WHERE que_n= '$que'";
		$r_option_4 = mysql_query($option_4);
		$row_option_4 = mysql_fetch_array($r_option_4);

		$correct = "  SELECT correct FROM question_database_it WHERE que_n= '$que'";
		$r_correct = mysql_query($correct);
		$row_correct = mysql_fetch_array($r_correct);

		//secho $i;
		echo "<br>";

		echo $row_question['question'];
		echo "<br>";

		echo $row_option_1['option_1'];
		echo "<br>";

		echo $row_option_2['option_2'];
		echo "<br>";

		echo $row_option_3['option_3'];
		echo "<br>";

		echo $row_option_4['option_4'];
		echo "<br>";

		echo $row_correct['correct'];
		echo "<br>";
		if ($_SERVER['REQUEST_METHOD']=='POST') {
			
		}
?>  
