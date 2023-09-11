<?php
include('includes/dbconnection.php');

if(isset($_POST['submit']))
  {
    $name=$_POST['fname'];
     $lname=$_POST['lname'];
     $gender=$_POST['gender'];
     $idnumber=$_POST['idnumber'];
     $field=$_POST['field'];
     $position=$_POST['position'];
     $joindate=$_POST['joindate'];
     $salary=$_POST['salary'];
     
    $query=mysqli_query($con, "INSERT into employee(id,name,lname,gender,idnumber,field,position,joindate,salary) values('','$name','$lname','$gender','$idnumber','$field','$position','$joindate','$salary')");
if($query){
echo "<script>alert('Employee Added');</script>";
echo "<script>window.location.href='viewemployee.php'</script>";
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
	<title>Zenith Employee</title>
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
	<?php include_once('includes/sidebar.php');?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Add Employee</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
			
				
				
				<div class="panel panel-default">
					<div class="panel-heading">Register</div>
					<div class="panel-body">
						<a href="viewemployee.php"><button><h4>View All Employees </h4></button></a></center> <p>
						<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  	
  <form role="form" method="post" action="">

  	<center><u><h4>Register Employee<h4></u></center>
						<div class="col-md-12">
								<div class="form-group">
									<label>First Name</label>
									<input class="form-control" type="text" value="" required="true" name="fname">
								</div>
								<div class="form-group">
									<label>Last Name</label>
									<input class="form-control" type="text" value=""  name="lname" placeholder="">
								</div>
							
								<div class="form-group" class="form-control">
									<b>Gender:</b> &nbsp;<select name="gender" required="">
										<option>...</option>
										<option>Male</option>
										<option>Female</option>
									</select>									
								</div>
								<div class="form-group">
									<label> Id Number</label>
									<input class="form-control" type="number" value="" required="true" name="idnumber">
								</div>
										
								<div class="form-group">
									<label>Field</label>
									<input class="form-control" type="text" value="" name="field" required="true">
								</div>	
								<div class="form-group">
									<label> Join Date</label>
									<input class="form-control" type="date" value="" required="true" name="joindate">
								</div>
										
								<div class="form-group">
									<label>Position</label>
									<input class="form-control" type="text" value="" name="position" required="true">
								</div>	
								<div class="form-group">
									<label> Salary</label>
									<input class="form-control" type="number" value="" required="true" name="salary">
								</div>
										
													
								<div class="form-group has-success">
									<button type="submit" class="btn btn-primary" name="submit">Register</button>
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
