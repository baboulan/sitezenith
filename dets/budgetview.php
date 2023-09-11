
<TYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zenith View Budget</title>
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
	<?php include_once('includes/mainbarx.php');?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Budget</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
			
				
				
				<div class="panel panel-default">
					<div class="panel-heading">Budget</div>
					<div class="panel-body">
					<center><a href="deletebudget.php" class="btn btn-primary" target="_blank"  rel="nocloser" rel="noreferrer"><h4 style="color: white;">Delete Budget</h4></a></center>
 
						<div class="col-md-12">
								<a href="Budget.php"><button><h5>Back To Budgeting</h5></button></a></center> <p>
							<div class="table-responsive">
            <table class="table table-bordered mg-b-0">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Items</th>                  
                  <th>Quantity</th>
                  <th>Cost</th>
                  <th>Total</th>
                  <th>Action</th>
                 </tr>
              </thead>
              <?php
              $userid=$_SESSION['username'];
$ret=mysqli_query($con,"select * from budget where UserId='$userid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              <tbody>
                <tr>
                  <td><?php echo $cnt;?></td>
              
                  <td><?php  echo $row['bname'];?></td>                  
                  <td><?php  echo $ttlsl=number_format($row['bquantity'],0);?></td>
                  <td><?php  echo $ttlsl=number_format($row['bunit'],0);?></td>
                  <td><?php  echo $ttlsl=number_format($row['btotal'],0);?></td><td><a href="updatepurchase.php?bid=<?php echo $row['bid'];?>" class="btn btn-primary">Edit</a>&nbsp;&nbsp;<a href="deletebud.php?id=<?php echo $row['bid']; ?>" onclick="return confirm('Are you sure you want to delete?')"class="btn btn-primary">Delete</a></td>
                </tr>
                <?php
                $totalse+=$row['btotal']; 
$cnt=$cnt+1;
}?>
 <center><h4><b><u>Total Budget:</u></b> &nbsp;<b><?php echo number_format($totalse,0);?></b></h4></center>               
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