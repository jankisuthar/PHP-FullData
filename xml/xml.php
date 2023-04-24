<?php
$conn=new mysqli('localhost','root','','bookmyshow');
$se="select * from inquiry";
$res=$conn->query($se);

$data='<?xml version="1.0"?>';
$data.='<inquiry>';
while($fetch=$res->fetch_object())
{
	$data.='<inq_id>'. $fetch->inq_id .'</inq_id>';
	$data.='<email>'. $fetch->email .'</email>';
	$data.='<sub>'. $fetch->sub .'</sub>';
	$data.='<comment>'. $fetch->comment .'</comment>';
	$data.='<status>'. $fetch->status .'</status>';
}
$data.='</inquiry>';

$file = fopen('inquiry_data.xml', 'w') or die("can't open file");
fwrite($file, $data);
fclose($file);

$myFile = "inquiry_data.xml";
$file = fopen('inquiry_data.xml','r');
echo fread($file,filesize('inquiry_data.xml'));
fclose($file);
?>