
<TYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zenith Imported</title>
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
				<li class="active">Imported</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
			
				
				
				<div class="panel panel-default">
					<div class="panel-heading">Imported</div>
					<div class="panel-body">
						
  <center>	<a href="searchimp.php"><button style="color: dodgerblue;"class="btn btn-primary"><h4 style="color: white;">Search Report</h4></button></a></center> <p>
						<div class="col-md-12">
								<a href="add-expense.php"><button><h5>Back To Importing</h5></button></a></center> <p>
							<div class="table-responsive">
            <table class="table table-bordered mg-b-0">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Items</th>
                  <th>Type</th>
                  <th>Quantity</th>
                  <th>Cost</th>
                  <th>Total</th>
                  <th>Date</th>     
                  
                </tr>
              </thead>
              <?php
              $userid=$_SESSION['username'];

$ret= mysqli_query($con,"SELECT sum(quantity)as quantity,sum(Total)as Total,SUM(ExpenseCost)as ExpenseCost,ExpenseDate,type,bname FROM tblexpense GROUP BY bname HAVING COUNT(*);");

$cnt=1;
while ($row=mysqli_fetch_array($ret)){

?>
              <tbody>
                <tr>
                  <td><?php echo $cnt;?></td>
                  <td><?php  echo $row['bname'];?></td>
                  <td><?php  echo $row['type'];?></td>
                  <td><?php  echo $ttlsl=number_format($row['quantity'],0);?></td>
                  <td><?php  echo $ttlsl=number_format($row['ExpenseCost'],0);?></td>
                  <td><?php  echo $ttlsl=number_format($row['Total'],0);?></td>
                  <td><?php  echo $row['ExpenseDate'];?></td>	
                  
                </tr>
                <?php 
$cnt=$cnt+1;
}?>
               
              </tbody>
            </table>
          </div>

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
<?php
include('includes/dbconnection.php');
if (isset($_POST['id'])) {
	$id=$_POST['id'];
	$query="DELETE FROM tblexpense where id=$id";
header('location:importedview.php');
}else{
	echo "byanze";
}
?>