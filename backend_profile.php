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

  $query1 = " SELECT * FROM create_quiz WHERE u_id=";
        $link1 = mysql_connect('localhost','root','');
        mysql_select_db('database');
        $res = mysql_query($query1);
        echo mysql_error();
        $row = mysql_fetch_array($res);
    
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
  

mysqli_close($con);
?> 
