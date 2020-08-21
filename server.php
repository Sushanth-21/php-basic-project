<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'asd');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$a = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		$branch=mysqli_real_escape_string($db, $_POST['branch']);
		$year=mysqli_real_escape_string($db, $_POST['year']);
		$dateofbirth=mysqli_real_escape_string($db, $_POST['DOB']);

		// form validation: ensure that the form is correctly filledy
	
if (empty($a)) {
			array_push($errors, "Username is required");
		}
		if (empty($password_1)) {
			array_push($errors, "Password is required");
		}
		if (empty($email)) {
			array_push($errors, "email is required");
		}
		
if($password_1 !=$password_2)
{
array_push($errors, "passwords didnot mathced ");
}

		// register user if there are no errors in the form
		if (count($errors) == 0) {

			$password = md5($password_1);
			$query = "INSERT INTO yyy (uname, uemail, password,Branch,Year,dateofbirth) 
					  VALUES('$email', '$a', '$password','$branch','$year','$dateofbirth')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM yyy WHERE uname='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>
