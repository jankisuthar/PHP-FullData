<!DOCTYPE html>
<html lang="en">
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

	
	<!--  Method 2
	
	default method get  /// not use
	
	secure // data deisplay in url
	only 100 char get 
	
	
	
	use only post
	-->
	
	<body>
	
	<div class="container">
	
	
		<h1 align="center">Register Form</h1>
		<form action="reg.php" method="post" class="form-group" >
		<table border="2" class="table table-dark">
			<caption>Register Form</caption>
			
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="raj" class="form-control" ></td>
			</tr>
			
			<tr>
				<td>User Name / Email</td>
				<td><input type="email" name="email"  class="form-control"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="pass" class="form-control"></td>
			</tr>
			
			<tr>
				<td>Number</td>
				<td><input type="number" name="Number" class="form-control"></td>
			</tr>
			
			
			<tr>
				<td>Mobile</td>
				<td><input type="number" name="mobile" class="form-control"></td>
			</tr>
			
			<tr>
				<td>Gender</td>
				<td>
					Male:&nbsp;&nbsp;&nbsp;<input type="radio" name="gen" value="Male">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Female:&nbsp;&nbsp;&nbsp;<input type="radio" name="gen" value="Female">
				</td>
			</tr>
			
			<tr>
				<td>Lau</td>
				<td>
					Hindi:&nbsp;&nbsp;&nbsp;<input type="checkbox" name="lag[]" value="Hindi">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					English:&nbsp;&nbsp;&nbsp;<input type="checkbox" name="lag[]" value="English">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Gujarati:&nbsp;&nbsp;&nbsp;<input type="checkbox" name="lag[]" value="Gujarati">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>Date of Birth</td>
				<td><input type="date" name="dob" class="form-control"></td>
			</tr>
			
			<tr>
				<td>Time</td>
				<td><input type="time" name="time" class="form-control"></td>
			</tr>
				
			<tr>
				<td>Date & Time</td>
				<td><input type="datetime-local" name="datetime" class="form-control" ></td>
			</tr>
			
			<tr>
				<td>Profile Pic</td>
				<td><input type="file" name="profile" class="form-control"></td>
			</tr>
			
			<tr>
				<td>Color</td>
				<td><input type="color" name="color" class="form-control"></td>
			</tr>
			
			<tr>
				<td>Address</td>
				<td>
				<textarea name="adres" cols="40" rows="5" class="form-control"></textarea>
				</td>
			</tr>
			
			<tr>
				<td>Country</td>
				<td>
					<select name="country" class="form-control" >
						<option>----Select Country-----</option>
						<option value="India">India</option>
						<option value="Japan">Japan</option>
						<option value="USA">USA</option>
						<option value="UK">UK</option>
						
					</select>
					
				</td>
			</tr>
			
			<tr>
				<td>
				<input type="submit" name="reg" value="Register Here" class="btn btn-outline-primary">
				</td>
			</tr>
			
			
		</table>
		</form>
		</div>
		
		
		
		
	</div>	
	</body>
	
</html>