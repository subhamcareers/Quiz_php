<?php
//include "class/admin.php";
include "class/users.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Minor Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body> 

<div class="container">
			<div class="row">
				<div class="col-sm-12">			
					<div class="panel panel-danger">
						<div class="panel-heading"><h4>Online quiz system in php</h4></div>
						<div class="panel-body">Quiz in php</div>
					</div>
				</div>
			</div>
</div>
	
	
 
	<div class="container">
		<div class="row">
				<div class="col-sm-6">
					<div class="panel panel-info">
					<div class="panel-heading">Signin Form</div>
					  <div class="panel-body">
					  <?php
					  if(isset($_GET['run']) && $_GET['run']=="failed")
					  {
						  echo "Your email or password is not correct";
					  }
					  
					  ?>
							<form role="form" action="signin_sub.php" method="post">
							 <div class="form-group">
								<label for="email">Email:</label>
								<input type="email" class="form-control" name="e" id="email" placeholder="Enter email" required>
							 </div>
							 <div class="form-group">
								<label for="pwd">Password:</label>
								<input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password" required>
							 </div>
					          <button type="submit" class="btn btn-default">Submit</button>
							</form>
						</div>
					</div>
				    </div>
					
				<div class="row">
				<div class="col-sm-6">
					<div class="panel panel-info">
					<div class="panel-heading">Login as Admin</div>
					  <div class="panel-body">
					  <?php
					  if(isset($_GET['run1']) && $_GET['run1']=="failed")
					  {
						  echo "Your email or password is not correct";
					  }
					  
					  ?>
							<form role="form" action="admin_signin.php" method="post">
							 <div class="form-group">
								<label for="email">Email:</label>
								<input type="email" class="form-control" name="em" id="em" placeholder="Enter email" required>
							 </div>
							 <div class="form-group">
								<label for="pwd">Password:</label>
								<input type="password" class="form-control" name="pa" id="pa" placeholder="Enter password" required>
							 </div>
					          <button type="submit" class="btn btn-default">Submit</button>
							</form>
						</div>
					</div>
				    </div>
				  </div>
			
		
			<div class="row-sm-6">
				<div class="panel panel-primary">
					<div class="panel-heading">Signup Form </div>
					  <div class="panel-body">
					  <?php
					  if(isset($_GET['run'])&& $_GET['run']=="success")
					  {
							  echo "<mark>Your registration is done successfully</mark>";
											  
					  }
					  ?>
					  
							<form role="form" method="post" action="signup_sub.php" enctype="multipart/form-data">
							<div class="form-group">
								<label for="name">Name:</label>
								<input type="text" class="form-control" name="n" id="name" placeholder="Enter name" required>
							 </div>
							 <div class="form-group">
								<label for="email">Email:</label>
								<input type="email" class="form-control" name="e" id="email" placeholder="Enter email" required>
							 </div>
								<div class="form-group">
								  <label for="pwd">Password:</label>
								  <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password" required>
								</div>
								<div class="form-group">
								  <label for="pwd">Phone Number:</label>
								  <input type="phone" class="form-control" name="p" id="pwd" placeholder="Enter Phone Number" required>
								</div>
								<div class="form-group">
								  <label for="pwd">Upload your image</label>
								  <input type="file" class="form-control" name="img" required>
								</div>
					
								<button type="submit" class="btn btn-default">Submit</button>
							</form>
						</div>
					</div>
					
			</div>
			
	
		</div>
		
	</div>

</body>
</html>
