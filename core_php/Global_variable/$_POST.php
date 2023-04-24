
<?PHP
/*
method get == $_GET  / $_REQUEST 
Not secure desplay all data in URL
olny get 100 char 
Method post === $_POST  / $_REQUEST  USE ALWAYS THIS 
*/
?>
<html>
<head>
<title> </title>
</head>
<body>
<form action="" method="post">
<p>Name: <input type="text" name="name"/></p>
<p>Age: <input type="text"name="age"/></p>
<p><input type="submit" name="submit"value="Click"/></p>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
echo $name=$_POST["name"];  // get value by post method by $_POST function
echo $age=$_REQUEST["age"];
}

echo 
?>