<?php
$con = mysqli_connect("localhost","root","","registration");
if(isset($_POST['submit']))
{
	
	$name = $_POST['name'];
	
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$password = $_POST['password'];
	$branch=$_POST['branch'];
	$dateofbirth=$_POST['dateofbirth'];
	$yearofpassing=$_POST['yearofpassing'];
	$c_id = $_POST['c_id'];
	 $sql = "insert into users(name,email,mobile,password,branch,dateofbirth,yearofpassing,c_id)values('$name','$email','$mobile','$password','$branch','$dateofbirth','$yearofpassing','$c_id')";
	 
	 $query = mysqli_query($con,$sql);
	 if($query)
	 {
		 echo "success";
		 header("location:retrive.php");
		 
	 }
	 else
	 {
		 echo "not success";
	 }
}
?>