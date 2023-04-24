<?php
$f=fopen("new.txt","r");
while(!feof($f))
{
	echo "<h1 style='color:red'>".fgets($f)."</h1><br>";
	//echo "<h1 style='color:red'>".fgetc($f)."</h1><br>";
}
fclose($f);

?>