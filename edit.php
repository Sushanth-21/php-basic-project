<?php 
$con =mysqli_connect("localhost","root","","asd");
@$id=$_GET["email"];
$query="SELECT * FROM users WHERE id='$id'";
$result =mysqli_query($con,$query);
$row =mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">
	<input type="hidden" name='id' value="<?php $row['id'];?>">


		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $row['username'];?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $row['email'];?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<label>Branch</label>
		<select name="branch">
		<option value="">select branch</option>
		 <option value="IT">IT</option>
		 <option value="CSE">CSE</option>
		 <option value="ECE">ECE</option>
		 </select>
		</div>
		<div class="input-group">
		 <label>Year</label>
		 <select name="year">
		 <option value="">select year</option>
		 <option value="2019">2019</option>
		 <option value="2018">2018</option>
		 <option value="2017">2017</option>
		 <option value="2016">2016</option>
		 </select>
		 </div>
		 <div class="input-group">
		 <label>DOB</label>
		 <input type="date" placeholder="Enter DOB" name="DOB" required>
		 </div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>
