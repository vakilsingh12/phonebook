<!DOCTYPE html>
<html>
<head>
	<title>csenotes12.in</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container m-5">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="card">
				<div class="card-body" style="background-color:#3498DB;color: #ffffff;">
					<h3>RM-PHONEBOOK</h3>
				</div>
		<div class="card-body">
		<input class="form-control" type="text" placeholder="Search" aria-label="Search">
		</div>
		<?php
        $con=mysqli_connect('localhost','root','','company');
        $sql="select * from insertcontact";
        $res=mysqli_query($con,$sql);
        if(mysqli_num_rows($res)>0)
        {
        	while($data=mysqli_fetch_assoc($res))
        	{
        ?>
			
				<div class="card-body border">
				<div class="accordion" id="accordionExample">
				  <div class="card">
				    <div class="card-header" id="headingOne">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				          <h5 class="text-dark"><b><?php  echo $data['name']; ?></b></h5>
				        </button>
				      </h2>
				    </div>

				    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
				      <div class="card-body">
				       <h5 class="float-left"><?php echo $data['dob']; ?></h5>
				       <button class="float-right btn btn-danger mx-2">Remove</button>
				       <a href="edit.php"><input type='hidden' value='".$data["id"]."' name='id'/><input type='submit' class="float-right" name='edit' value='update'/></a>
				      </div><br><hr>
                      <div class="card-body">
                      	<div class="float-left">
                      	<p><i class="fa fa-phone"></i> +91:<?php echo $data['mobile']; ?></p>
                       	</div>
                       	<div class="float-right">
                      	<p><i class="fa fa-envelope"></i> <?php echo $data['email']; ?></p>
	                     
                       	</div>
                      </div>
				    </div>
				  </div>
				</div>
			</div>
			<?php
				}
				}
			?>
				<br><br>
				    <nav aria-label="Page navigation example" class="align-self-center">
				    <ul class="pagination">
				    <li class="page-item"><a class="page-link" href="nav.php">Previous</a></li>
				    <li class="page-item"><a class="page-link" href="nav.php">1</a></li>
				    <li class="page-item"><a class="page-link" href="nav.php">2</a></li>
				    <li class="page-item"><a class="page-link" href="nav.php">3</a></li>
				    <li class="page-item"><a class="page-link" href="nav.php">4</a></li>
				    <li class="page-item"><a class="page-link" href="nav.php">5</a></li>
				    <li class="page-item"><a class="page-link" href="nav.php">Next</a></li>
				  </ul>
				</nav><br>
		<h2><a href="contact.php"><i class="fa fa-plus float-right"></i></a></h2>
		</div>
		<br>
		</div>
		</div>
		</div>
		<div class="col-md-1"></div>
	</body>	    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>