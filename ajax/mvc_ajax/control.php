<?php
include('model.php');
session_start();
$obj=new model(); // call class model

$country=$obj->sel_country($conn,'country');

if(isset($_REQUEST['s']))
	{
		$id=$_REQUEST['s'];
		$where=array("cid"=>$id);
		$res=$obj->sel_where($conn,'state',$where);
		?>
         <option>----Select State----</option>
        <?php
		while($r=$res->fetch_object())
		{
		?>
			<option value="<?php echo $r->sid?>"><?php echo $r->snm?></option>
		<?php 
        }
	}
	
if(isset($_REQUEST['c']))
	{
		$id=$_REQUEST['c'];
		$where=array("sid"=>$id);
		$res=$obj->sel_where($conn,'city',$where);
		?>
         <option>----Select City----</option>
        <?php
		while($r=$res->fetch_object())
		{
		?>
			<option value="<?php echo $r->city_id;?>"><?php echo $r->city_name;?></option>
		<?php 
        }
	}

$show=$obj->sel_all($conn,'reg','country','state','city','reg.cid=country.cid','reg.sid=state.sid','reg.city_id=city.city_id');


if(isset($_REQUEST['submit']))
{
	$name=$_REQUEST['name'];
	$cid=$_REQUEST['cid'];
	$sid=$_REQUEST['sid'];
	$city_id=$_REQUEST['city_id'];	
	
	$data=array("name"=>$name,"cid"=>$cid,"sid"=>$sid,"city_id"=>$city_id);
	$insert=($obj->ins_all($conn,'reg',$data));
	if($insert)
		{
		?>
		<script>
		alert('Registration Succesfull');
		window.location="show.php"
		</script>
		<?php
		}
		else
		{
		echo "data not inserted";	
		}
}



?>
