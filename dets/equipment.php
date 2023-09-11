<?php
include('includes/dbconnection.php');

if(isset($_POST['submit']))
  {
    $name=$_POST['name'];     
     $qua=$_POST['quantity'];     
     $conn=$_POST['condition'];

     
    $query=mysqli_query($con, "insert into equipment(id,name,reason,quantity) value('','$name','$conn','$qua')");
if($query){
echo "<script>alert('Asset Added');</script>";
echo "<script>window.location.href='equipment.php'</script>";
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
	<title>Zenith Add Asset</title>
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
				<li class="active">Register assets</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
			
				
				
				<div class="panel panel-default">
					<div class="panel-heading">Assets</div>
					<div class="panel-body">
						<a href="assetsview.php"><button style="color: dodgerblue;"class="btn btn-primary"><h4 style="color: white">View all Assets </h4></button></a>
						
					
  <form role="form" method="post" action="">

  	<center><u><h4>Register Assets<h4></u></center>
						<div class="col-md-12">
								<div class="form-group">
									<label>Name Of Asset</label>
									<input class="form-control" type="text" value="" required="true" name="name">
								</div>
								<div class="form-group">
									<label>Condition</label>
								<select class="form-control"  id="condition"  name="condition" required="">
									<option><br></option>
									<option>New</option>
									<option>Good</option>
									<option>Old</option>
									<option>Bad</option>
								</select>
								</div>							
								<div class="form-group">
									<label>Quantity</label>
									<input class="form-control" type="number" value=""  name="quantity" >
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
