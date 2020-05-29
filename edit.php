<?php	
$con=new mysqli('localhost','root','','company');
if(isset($_REQUEST['update']))
{
   	$name=$_REQUEST['name'];
   	$dob=$_REQUEST['dob'];
   	$mobile=$_REQUEST['mobile'];
   	$email=$_REQUEST['email'];
   	$sql="UPDATE insertcontact SET name='$name',dob='$dob',mobie='$mobile',email='$email' where id={$_REQUEST['id']}";
   	if(mysqli_query($con,$sql))
   	{
   		echo "data updated";
   	}else
   	{
   		echo "not updated";
   	}
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
	<?php
	if(isset($_REQUEST['edit']))
	{
		$sql="SELECT * from student where id={$_REQUEST['id']}";
		$query=$con->query($sql);
		$res=$query->fetch_assoc();
	}
	?>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 border m-2">
			<h2><a href="nav.php" class="text-dark"><i class="fa fa-arrow-left"></i></a>Edit Contact</h2><br><hr>
			<form class="form-group" action="edit.php" method="post">
			<label>Name</label>
			<input type="text" name="name" id="name" class="form-control" value="<?php if(isset($res['name'])){echo $res['name'];} ?>">
			<label>DOB</label>
			<input type="Date" name="dob" id="dob" class="form-control" value="<?php if(isset($res['dob'])){echo $res['dob'];} ?>">
			<label>Mobile Number</label>
			<input type="text" name="mobile" id="mobile" class="form-control" value="<?php if(isset($res['mobile'])){echo $res['mobile'];} ?>">
			<label>Email</label>
			<input type="email" name="email" id="email" class="form-control" value="<?php if(isset($res['email'])){echo $res['email'];} ?>"><br>
			<input type="hidden" name="id" value="<?php echo $res['id'] ?>">
		<button type="submit" class="btn btn-success float-right" name="update">Update</button><br>
			<br><br>
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
