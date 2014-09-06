<?php
function($var1)
{


$link = new mysqli('localhost','root','','database');
		$var1 = rand(1,21);
		$query1 = "SELECT question FROM question_database_it WHERE que_n = (?)";
		$stmt1 = $link->prepare($query1);
	    $stmt1->bind_param('s', $var1);		
		$stmt1->execute();
		echo $query1;
}

?>  
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">

.background_image
{
	height: 700px;
	width: 100%;
	background-color: red;
	background-image: url(./wildlife.jpg);
	background-size: 1500px;
	background-repeat: no-repeat;
	opacity: 0.4;
}
</style>

<body>
<div class="background_image">
	diksha
</div>

</body>
</html>