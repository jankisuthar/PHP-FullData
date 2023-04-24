<html>
<head>
</head>
<body>
<?php
$color=array("red","yellow","green","blue");

print_r($color);  // arr print by print_r() function

echo $color[1]."<br>";


foreach($color as $a)  // arr loop foreach also convert arr to string
{
	echo $a."<br>";
	
}


?>
</body>
</html>