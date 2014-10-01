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
    margin: 300px;}
    span.white-text_1
	{
    margin: 20px;}
    .radio_1
    {
    	margin-left: -800px;
    }
    
  </style>

<?php
session_start();
$score=0;
echo "<br>";

echo "<br>";
$u_id = $_SESSION['u_id'];
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
		//echo "<br>";

		echo "Que"."  ".$i.' '.$row_question['question'];
		echo "<br>";

		$size1 = strlen($row_option_1['option_1']);
		$size2 = strlen($row_option_2['option_2']);
		$size3 = strlen($row_option_3['option_3']);
		$size4 = strlen($row_option_4['option_4']);

		if (($size1<=10)&&($size2<=10)&&($size3<=10)&&($size4<=10)) 
		{

		echo '<input type="radio" name="answer" value="1" >';
		echo '<span class="white-text_1"> &nbsp;'.$row_option_1['option_1']    .       "</span>\n";
		echo '<input type="radio" name="answer" value="2" >';
		echo '<span class="white-text"> &nbsp;' .$row_option_2['option_2']     .       "</span>\n";

		echo "<br>";

		echo '<span class="white-text_1"> &nbsp;'.'<input type="radio" name="answer" value="3" >'."</span>\n";
		echo $row_option_3['option_3']    ;
		echo '<span class="white-text"> &nbsp;' .'<input type="radio" name="answer" value="4" >'."</span>\n";
		echo $row_option_4['option_4']     ;	
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
	echo "<form method='post' action='backend_it.php'>
		<input type='hidden' name='i' value='".$i."'>
		<button class='submit'>Submit</button>
	</form>";	
?>