<html>
<head>
<title>$_get </title>
</head>
<body>



<form action="" method="get">      <?  // make form with action on $_GET function?>
<p>Name: <input type="text" name="name"/></p>
<p>Age: <input type="text" name="age"/></p>
<p><input type="submit" name="submit" value="Click"/></p>
</form>




</body>
</html>


<?php
if(isset($_GET['submit']))
{
echo $name=$_GET["name"];  // get value by post method by $_POST function
echo $age=$_REQUEST["age"];
}
?>
	