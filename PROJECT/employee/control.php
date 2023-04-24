<?php
include_once('model.php');  // add model class 

class control extends model  // for use model function extends model class
{
	
		function __construct()
		{
			
			model::__construct(); // also use model __construct for $conn 
			$url=$_SERVER['PATH_INFO'];
			switch($url)
			{
				case '/index':
				include('index.php');
				break;
				
				case '/dashboard':
				include('dashboard.php');
				break;
				
				case '/product':
				include('product.php');
				break;
				
				case '/addproduct':
				include('addproduct.php');
				break;
				
				case '/employee':
				include('employee.php');
				break;
				
				case '/addemployee':
				include('addemployee.php');
				break;
				
				case '/user':
				include('user.php');
				break;
				
				case '/inquiry':
				include('inquiry.php');
				break;
				case '/feedback':
				include('feedback.php');
				break;
			}	
		}
}
$obj=new control;



?>