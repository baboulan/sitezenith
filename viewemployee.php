    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function confirmAndDelete(id) {
            if (confirm("Are you sure you want to delete this data?")) {
                $.ajax({
                    type: "POST",
                    url: "delete.php",
                    data: { id: id },
                    success: function(response) {
                        alert(response);
                        location.reload(); // Refresh the page after deletion
                    }
                });
            }
        }
    </script>

<TYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zenith Manage Employees</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/stylex.css" rel="stylesheet">
	
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
				<li class="active">Employees</li>
			</ol>
		</div><!--/.row-->
		
<center>	<a href="item.php"><button style="color: dodgerblue;"class="btn btn-primary"><h4 style="color: white;">Create Employee </h4></button></a></center> <p>
	
		<div class="row">
			<div class="col-lg-12">		
				<div class="panel panel-default">
					<div class="panel-heading"><u><center>View Employees Records</center></u></div>
					<div class="panel-body">
					

						<div class="col-md-12">
							
							<div class="table-responsive">
        
            <table class="table table-bordered mg-b-0">
              <thead>
                <tr>
<th>No</th>
<th>First Name</th>
<th>Last Name</th>
<th>Gender</th>
<th>Id Number</th>
<th>Field</th>
<th>Position</th>
<th>Join date</th>
<th>Salary</th>
<th>Edit</th>
<th>Remove</th>
                </tr>
              </thead>
              <?php
$ret=mysqli_query($con,"SELECT * from employee ORDER BY joindate desc");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              <tbody>
                <tr>
                  <td><?php echo $cnt;?></td>      
<td><?php  echo $row['name'];?></td>
<td><?php  echo $row['lname'];?></td>
<td><?php  echo $row['gender'];?></td>
<td><?php  echo $row['indangamuntu'];?></td>
<td><?php  echo $row['field'];?></td>
<td><?php  echo $row['position'];?></td>
<td><?php  echo $row['joindate'];?></td>
<td><?php  echo number_format($row['salary'],0);?></td>           
                 <td><a href="updateemployee.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Edit</a>&nbsp;&nbsp;
            	<td><a href="deleteemp.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete?')"class="btn btn-primary">Delete</a></td>

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
