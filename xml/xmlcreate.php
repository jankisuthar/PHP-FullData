<?php
$con=new mysqli("localhost","root","","form_db");

$sql="select * from reg";
$que=$con->query($sql);
$file=fopen("reg.xml","w");

$txt='<?xml version="1.0">';
$txt.='<reg>';
while($row=$que->fetch_object())
{
    $txt.="<uid>".$row->uid."</uid>";
    $txt.="<unm>".$row->unm."</unm>";
	$txt.="<pass>".$row->pass."</pass>";
	$txt.="<gen>".$row->gen."</gen>";
	$txt.="<lag>".$row->lag."</lag>";
	$txt.="<cid>".$row->cid."</cid>";
	$txt.="<file1>".$row->file1."</file1>";
	$txt.="<cid>".$row->cid."</cid>";
	$txt.="<reg_date_time>".$row->reg_date_time."</reg_date_time>";
	$txt.="<upd_date_time>".$row->upd_date_time."</upd_date_time>";
	$txt.="<status>".$row->status."</status>";
}
$txt.="</reg>";
fwrite($file,$txt);
fclose($file);

?>
 