<?php
include('includes/dbconnection.php');
if(isset($_POST['submit'])){  	
    $names=$_POST['names'];
     $user=$_POST['username'];
     $pass=$_POST['password'];
     $email=$_POST['gmail'];
     $phone=$_POST['phone'];
     
    $query=mysqli_query($con, "insert into user(id,fullname,username,password,email,phone) value('','$names','$user','$pass','$email','$phone')");
if($query){
echo "<script>alert('User Added');</script>";
echo "<script>window.location.href='system.php'</script>";
} else {
echo "<script>alert('Something went wrong. Please try again');</script>";

}
  
}
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zenith | add admin</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<?php include_once('includes/header.php');?>
	<?php include_once('includes/mainbar.php');?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active"> add User</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
			
				
				
				<div class="panel panel-default">
					<div class="panel-heading">Create User</div>
					<div class="panel-body">
						<a href="system.php"><button><h4>Back To Viewing all Users</h4></button></a></center> <p>
					
  	
  <form role="form" method="post" action="">

  	<center><u><h4>Create Admin<h4></u></center>
						<div class="col-md-12">
								<label>Fullnames</label>
									<input class="form-control" type="text" value=""  name="names" required="">
								<div class="form-group">
									<label>Username</label>
									<input class="form-control" type="text" value=""  name="username">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input class="form-control" type="text" value=""  name="password" required="">
								</div>
							
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" type="email" value="" required="true" name="gmail" placeholder="Optional">
								</div>
								<div class="form-group">
									<label>Phone</label>
									<input class="form-control" type="number" value="" name="phone" placeholder="Optional">
								</div>	
								<div class="form-group has-success">
									<button type="submit" class="btn btn-primary" name="submit">Create</button>
								</div>
								
								
								</div>
								
							</form>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			
		</div><!-- /.row -->
	</div><!--/.main-->
	
<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>
