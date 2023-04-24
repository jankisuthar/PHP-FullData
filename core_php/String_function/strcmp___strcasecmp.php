<?php
echo strcmp("Pratik","Pratik")."<br>";  // define compare to string in case (sensetive)
echo strcasecmp("pratik","Pratik");// define compare to string in case (insensetive)


$pass="1234";
$cpass="123v4";

$ans=strcmp($pass,$cpass);

if($ans==0)
{
	echo "Password match";
}
else
{
	echo "Password not match";
}
?>