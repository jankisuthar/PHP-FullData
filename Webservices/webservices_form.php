<?php
// it usein allways in android and iphone for
// retrive data from server & database in $arr[] and than output convert 
//in array to json_encode 
// than call this page on call_webserveses.php and convert in encode to decode 


$conn=new Mysqli('localhost','root','','bookmyshow');

	$sel="select * from reg";
	$res=$conn->query($sel);
	while($r=$res->fetch_object())
		{
			$arr[]=$r;
		}
		
		//print_r($arr)."<br>";

		//arr convert into json;
		
		echo $json=json_encode($arr);
	
		
		
		
		//json convert into arr;
		/*
		echo "<br><br>";
		$array=json_decode($json);
		print_r($array);
		*/
	
?>