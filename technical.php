<?php
include('includes/dbconnection.php');
if(isset($_POST['submit'])){
    $date = date('Y-m-d H:i:s');
  $name=$_POST['description'];
    $type=$_POST['type'];
    $sql = mysqli_query($con,"INSERT INTO technical (id,description,type,timestamp)VALUES ('','$name','$type','$date')");
    
    if ($sql) {
      header("location:technical1.php");
    } else {
        echo "Error inserting record:";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daily Expense Tracker || Add Expense</title>
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
				<li class="active">Technical & Requisition</li>
			</ol>
		</div><!--/.row-->
		
		
		<div class="row">
			<div class="col-lg-12">
			
				
			
				
				<div class="panel panel-default">
					<div class="panel-heading">Report 	</div>
					<div class="panel-body">
						
						<a href="technical1.php" ><button class="btn btn-primary"><h4 style="color: white;">View all Reports</h4></button></a></center> <p>
  	
  <form role="form" method="post" action="">

  	<center><u><h4>Report<h4></u></center>
						<div class="col-md-12">
								<div class="form-group">
									<label>Insert In Description</label>
									<input class="form-control" type="text" value="" required="true" name="description">
									
								</div><br>
								<div class="form-group">
									<label>Select The Type Of report:</label>
									<select class="form-control" name="type" required="">
										<option><br></option>
										<option>Technical</option>
										<option>Requisition</option>
									</select>
								</div><br>							
							<input  class="btn btn-primary" type="submit" name="submit">
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
