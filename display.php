<!DOCTYPE html>
<html lang="en">
<head>
<title>Table</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,intial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<tbody>
<div class="container">
<table class="table">
<thead>
<tr> 
<th>S.NO</th>
<th>Name</th>
<th>Email</th>
<th>Branch</th>
<th>Year</th>
<th>DOB</th>
<th>Action</th>
</tr>
</thead>




	
<?php
//Data Base connection
$con=mysqli_connect("localhost","root","","asd");


		
//Sql query
$sql="SELECT * FROM yyy  ";
//Executive the query
$query=mysqli_query($con,$sql);
//Serial Number for Dynamic
$i=1;
//fetch the data from data base through while condition
while($user=mysqli_fetch_assoc($query))
{
?>
<body>
<tr>
<td><?php echo $i++;?></td>
<td><?php echo $user['uname'];?></td>
<td><?php echo $user['uemail'];?></td>
<td><?php echo $user['Branch'];?></td>
<td><?php echo $user['Year'];?></td>
<td><?php echo $user['dateofbirth'];?></td>
<td><a href="edit.php">Edit</a> <a href="delete.php">Delete </a></td>
</tr>
<?php
}
?>
</tbody>
</table>

<a href="export.php?export=true" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>
</body>
</html>
