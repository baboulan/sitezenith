<TYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zenith Imported Report</title>
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
			
				
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
			
				
				
				<div class="panel panel-default">
					<div class="panel-heading">Datewise Imported Report</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center"> <?php if($username){
    echo $username;
  }  ?> </p>
						<div class="col-md-12">
					


							<form role="form" method="post" action="impraport.php" name="bwdatesreport">
								<div class="form-group">
									<label>Insert Imported Date</label>
									<input class="form-control" type="date"  id="fromdate" name="fromdate" required="true">
								</div>
							
								
							
								
								<div class="form-group has-success">
									<button type="submit" class="btn btn-primary" name="submit">Submit</button>
								</div>
								
								
								</div>
								
							</form>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
		
				
				<div class="panel panel-default">
					<div class="panel-heading">Imported</div>
					<div class="panel-body">
						
						<div class="col-md-12">								
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
                  <th>Action</th>
                </tr>
              </thead>
              <?php
              
$ret=mysqli_query($con,"SELECT tblexpense.*,budget.bname FROM tblexpense JOIN budget ON tblexpense.bname=budget.bid order by ExpenseDate desc;");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              <tbody>
                <tr>
                  <td><?php echo $cnt;?></td>
              
                  <td><?php  echo $row['bname'];?></td>
                  <td><?php  echo $row['type'];?></td>
                  <td><?php  echo $row['quantity'];?></td>
                  <td><?php  echo $row['ExpenseCost'];?></td>
                  <td><?php  echo $row['Total'];?></td>
                  <td><?php  echo $row['ExpenseDate'];?></td>	
                 <td><a href="updateimport.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Edit</a>&nbsp;&nbsp;<a href="deleteimpo.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete?')"class="btn btn-primary">Delete</a></td>
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
