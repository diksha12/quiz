<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="other.css">
<link rel="stylesheet" type="text/css" href="reset.css">
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
  </style>
</head>
<body>
<div class="edit">
<u><i>edit</i></u>
</div>
</body>
<script type="text/javascript">
  $('.edit').hover(function(){
    $(this).append($("edit info"));
  });
</script>
</html>
<?php
session_start();

echo "<br><br>";
echo "YOUR User Id is : ";
echo $_SESSION['u_id'];
echo "<br>";
$u_id = $_SESSION['u_id'];
$link = mysql_connect('localhost','root','');
mysql_select_db('database');
$f_name = " SELECT f_name FROM create_quiz WHERE u_id= '$u_id'";
$r_f_name = mysql_query($f_name);
$row_f_name = mysql_fetch_array($r_f_name);

$l_name = " SELECT l_name FROM create_quiz WHERE u_id= '$u_id'";
$r_l_name = mysql_query($l_name);
$row_l_name = mysql_fetch_array($r_l_name);

$u_name = " SELECT u_name FROM create_quiz WHERE u_id= '$u_id'";
$r_u_name = mysql_query($u_name);
$row_u_name = mysql_fetch_array($r_u_name);

$dob = " SELECT dob FROM create_quiz WHERE u_id= '$u_id'";
$r_dob = mysql_query($dob);
$row_dob = mysql_fetch_array($r_dob);

$gender = " SELECT gender FROM create_quiz WHERE u_id= '$u_id'";
$r_gender = mysql_query($gender);
$row_gender = mysql_fetch_array($r_gender);

echo "Name  : ";
echo $row_f_name['f_name']."   ".$row_l_name['l_name'];
echo "<br>";
echo "Username  : ";
echo $row_u_name['u_name'];
echo "<br>";
echo "Date of birth : ";
echo $row_dob['dob'];
echo "<br>";
echo "Gender : ";
echo $row_gender['gender'];

?>  
