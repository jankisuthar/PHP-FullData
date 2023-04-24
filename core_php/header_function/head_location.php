

<form method="post">
	<input type="submit" value="submit" name="submit">
</form>

<?php
if(isset($_POST['submit']))
{
header('location:wellcome_location.php'); //you will redirected in wellcome.php page  	
}
?>
