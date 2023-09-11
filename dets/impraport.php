
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zenith Datewise Report</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	
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
				<li class="active">Import Report</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
			
				
				
				<div class="panel panel-default">
					<div class="panel-heading"><center>Results From The Search</center></div>
					<div class="panel-body">

						<div class="col-md-12">
					
<?php
$fdate=$_POST['fromdate'];
?>
<h5 align="center" style="color:blue">Datewise Import Report from <?php echo $fdate?></h5>
<hr />
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <tr>
              <th>S.NO</th>
             
              <th>Name</th>
              <th>Type</th>
                    <th>Quantity</th>
              <th>Price Per Unit</th>       
        <th>Total</th>
        <th>Date</th>
        <th>Action</th>

                </tr>
                                        </tr>
                                        </thead>
 <?php
$userid=$_SESSION['username'];
$ret=mysqli_query($con,"SELECT tblexpense.ExpenseDate,budget.bname,tblexpense.id,tblexpense.type,tblexpense.quantity,tblexpense.ExpenseCost,tblexpense.Total
from tblexpense join budget on tblexpense.bname=budget.bid
 where ExpenseDate = '$fdate' order by ExpenseDate asc");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              
                <tr>
                  <td><?php echo $cnt;?></td>
           
                  <td><?php  echo $row['bname'];?></td>
                  <td><?php  echo $row['type'];?></td>
                  <td><?php  echo number_format($row['quantity'],0);?></td>                             
                   <td><?php  echo number_format($row['ExpenseCost'],0);?></td>
                  <td><?php  echo number_format($row['Total'],0);?></td>
                  <td><?php  echo $row['ExpenseDate'];?></td>              
                  
                  <td><a href="updateimport1.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Edit</a>&nbsp;&nbsp;<a href="deleteimpo1.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete?')"class="btn btn-primary">Delete</a></td>
           
           
                </tr>
                <?php

$cnt=$cnt+1;
}?>


                                    </table>




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
