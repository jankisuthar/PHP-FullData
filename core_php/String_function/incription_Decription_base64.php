<?php
$text="Love";
echo $text;

echo "<br>";

echo base64_encode($text);

echo "<br>";

echo base64_decode('TG92ZQ==');

echo "<br>";

echo md5($text);

echo "<br>";

$pass="Love1";
if(md5($pass)=="8bd7a1153a88761ad9d37e2f2394c947")
{
	echo "Login Success";
}
else
{
	echo "Login Failed";
}

echo "<br>";

echo sha1($text);

echo "<br>";

echo password_hash($text,PASSWORD_DEFAULT);
?>  
