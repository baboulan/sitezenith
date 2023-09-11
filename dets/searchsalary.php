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
	<title>Daily Expense Tracker || Manage Expense</title>
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
			
   
				<div  class="panel panel-default">
					<center><form method="post" action="searchsalary.php"><br>
							<h4>Search employee</h4><input type="text" name="search" placeholder="search by name">
							<input  type="submit" name="search" value="search">
					</form></center><br>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading"><u><center>View Employees Records</center></u></div>
					<div class="panel-body">
					
						<div class="col-md-12">
							
							<div class="table-responsive">
        
          
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
    // Database connection code (not shown here, assume it's already established)
include('includes/dbconnection.php');
       if(isset($_POST['search'])){
        $search=$_POST['search'];

        // Perform the SQL query to search your database table
        $sql = "SELECT * FROM employee WHERE name LIKE '%$search%'";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) > 0) {
            echo "<table border='1'>";
            echo "<tr>
            <th>id</th>
            <th>First Name</th>
            <th>Last name</th>
            <th>Gender</th>	
            <th>Id Number</th>	
            <th>Field</th>
            <th>Position</th>
            <th>Join date</th>
            <th>Salary</th>          
            </tr>";  
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['lname'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['indangamuntu'] . "</td>";
                echo "<td>" . $row['field'] . "</td>";
                echo "<td>" . $row['position'] . "</td>";
                echo "<td>" . $row['joindate'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "No results found.";
        }

        // Close the database connection
        mysqli_close($con);
    }
    ?>