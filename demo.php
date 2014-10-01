<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<style type="text/css">
	.body   
{    
   font: 70% Arial, Helvetica, sans-serif;    
   color: #063774;                    
}  
.photos li   
{  
   float: left;  
   display: block;  
   position: relative;  
   list-style-type: none;                 
   margin: 60px;   
   border: 5px solid #EEEEEE;  
   height: 100px;  
   width: 100px;  
}  
.frst
{
	width: 200px;
	height: 100px;
	background-color: red;
}
</style>
<body>
<ul class="photos">  
  <li class="frst"><img src="./box1.jpg" alt="Poppy" /></li>  
  <li><img src="./box2.jpg" alt="Poppy" /></li>  
  <li><img src="./box3.jpg" alt="Poppy" /></li>  
  <li><img src="./box4.jpg" alt="Poppy" /></li>  
</ul>

</body>
<script type="text/javascript">
$(document).ready(function() {  
  
//set opacity to 0.4 for all the images  
//opacity = 1 - completely opaque  
//opacity = 0 - invisible  
  
$('.photos img').css('opacity', 0.4);  
  
// when hover over the selected image change the opacity to 1  
$('.photos li').hover(  
   function(){  
      $(this).find('img').stop().fadeTo('slow', 1);  
   },  
   function(){  
      $(this).find('img').stop().fadeTo('slow', 0.4);  
   });  
  
});   
</script>
</html>