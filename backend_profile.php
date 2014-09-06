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
$con=mysqli_connect('localhost','root','','database');
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM create_quiz");
$result1 = mysqli_query($con,"SELECT u_id FROM create_quiz WHERE 1");
//echo $result1 ;
$u_id = mysqli_fetch_array($result1);
//echo $u_id['u_id'];
echo "<br>";
while($row = mysqli_fetch_array($result)) {
  echo "Username :";
   echo $row['u_name'];
   echo "<br>";
   echo "Name :";
  echo $row['f_name'] . " " . $row['l_name'];
  echo "<br>";
  echo "Date of birth :";
  echo $row['dob'];
  echo "<br>";
  echo "Gender :";
  echo $row['gender'];
  echo "<br>";
  echo $row['u_id'];
  echo "<br>";
  
}

mysqli_close($con);
?> 
