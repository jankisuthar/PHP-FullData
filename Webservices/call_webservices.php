<?php


$jason=file_get_contents("http://localhost/riya/Webservices/webservices_form.php");

print_r(json_decode($jason));
?>