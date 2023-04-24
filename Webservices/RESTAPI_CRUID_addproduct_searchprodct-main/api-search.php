<?php

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");


$data = json_decode(file_get_contents("php://input"), true);

$psearch = $data["search"]; // s

require_once "dbconfig.php";

echo $query = "SELECT * FROM tbl_product WHERE product_name LIKE '%".$psearch."%' ";

$result = mysqli_query($conn, $query) or die("Search Query Failed.");

$count = mysqli_num_rows($result);

if($count > 0)
{	
	$row = mysqli_fetch_array($result);
	
	echo json_encode($row);
}
else
{	
	echo json_encode(array("message" => "No Search Found.", "status" => false));
}

?>