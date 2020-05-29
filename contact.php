<?php
$con=mysqli_connect('localhost','root','','company');
if(isset($_REQUEST['submit']))
{
  	$name=$_REQUEST['name'];
  	$dob=$_REQUEST['dob'];
  	$mobile=$_REQUEST['mobile'];
  	$email=$_REQUEST['email'];
  	$sql="insert into insertcontact(name,dob,mobile,email) VALUES('$name','$dob','$mobile','$email')";
  	mysqli_query($con,$sql);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>phonebook</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 border m-2">
			<h2><a href="nav.php" class="text-dark"><i class="fa fa-arrow-left"></i></a> Add New Contact</h2><br><hr>
			<form class="form-group" action="contact.php" method="POST">
			<label>Name</label>
			<input type="text" name="name" class="form-control">
			<label>DOB</label>
			<input type="Date" name="dob" class="form-control">
			<label>Mobile Number</label>
			<input type="text" name="mobile" class="form-control">
			<label>Email</label>
			<input type="email" name="email" class="form-control"><br>
			<button type="submit" class="btn btn-success float-right" name="submit">Save</button><br><br>
            </form>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
