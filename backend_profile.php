<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
  .background_image
  {
    height: 700px;
      width: 100%;
      background-color: red;
      background-image: url(./profile.jpg);
      background-size: 1500px;
      background-repeat: no-repeat;
      opacity: 0.4;
       }
  </style>
</head>
<body>
<div class="background_image"></div>
</body>
</html>
<?php
session_start();

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

$u_name = " SELECT l_name FROM create_quiz WHERE u_id= '$u_id'";
$r_u_name = mysql_query($u_name);
$row_u_name = mysql_fetch_array($r_u_name);

$dob = " SELECT dob FROM create_quiz WHERE u_id= '$u_id'";
$r_dob = mysql_query($dob);
$row_dob = mysql_fetch_array($r_dob);

$gender = " SELECT gender FROM create_quiz WHERE u_id= '$u_id'";
$r_gender = mysql_query($gender);
$row_gender = mysql_fetch_array($r_gender);

echo "Name  :";
echo $row_f_name['f_name']."   ".$row_l_name['l_name'];
echo "<br>";
echo "Username  :";
echo $row_u_name['u_name'];
echo "<br>";
echo "Date of birth  ";
echo $row_dob['dob'];
echo "<br>";
echo "Gender";
echo $row_gender;

?>  
