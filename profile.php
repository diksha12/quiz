
<?php
session_start();

echo "<br><br>";
//echo "YOUR User Id is : ";
//echo $_SESSION['u_id'];
//echo "<br>";
//$u_id = $_SESSION['u_id'];
$link = mysql_connect('localhost','root','');
mysql_select_db('database');
$f_name = " SELECT f_name FROM quiz_create WHERE u_id= '100'";
$r_f_name = mysql_query($f_name);
$row_f_name = mysql_fetch_array($r_f_name);

$l_name = " SELECT l_name FROM quiz_create WHERE u_id= '100'";
$r_l_name = mysql_query($l_name);
$row_l_name = mysql_fetch_array($r_l_name);

$u_name = " SELECT u_name FROM quiz_create WHERE u_id='100'";
$r_u_name = mysql_query($u_name);
$row_u_name = mysql_fetch_array($r_u_name);

$dob = " SELECT dob FROM quiz_create WHERE u_id= '100'";
$r_dob = mysql_query($dob);
$row_dob = mysql_fetch_array($r_dob);

$gender = " SELECT gender FROM quiz_create WHERE u_id= '100'";
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
