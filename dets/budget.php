<?php
include('includes/dbconnection.php');

if(isset($_POST['submit']))
  {
     $name=$_POST['name'];
     $quantity=$_POST['quantity'];
     $price=$_POST['price'];
     $total=$quantity*$price;
    $query=mysqli_query($con, "insert into budget(bid,bname,bquantity,bunit,btotal) value('','$name','$quantity','$price','$total')");
if($query){
echo "<script>alert('Item Added');</script>";
echo "<script>window.location.href='budget.php'</script>";
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
	<title>Zenith | Budget</title>
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
				<li class="active">Budget</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
			
				
				
				<div class="panel panel-default">
					<div class="panel-heading">Budget</div>
					<div class="panel-body">
						<a href="budgetview.php"><button><h4>View all Budget</h4></button></a></center> <p>
					
  	
  <form role="form" method="post" action="">

  	<center><u><h4>Create Budget<h4></u></center>
						<div class="col-md-12">
								<div class="form-group">
									<label>Name Of Item</label>
									<input class="form-control" type="text" value="" required="true" name="name">
								</div>						
								<div class="form-group">
									<label>Quantity</label>
									<input class="form-control" type="number" value="" required="true" name="quantity" oninput="calculateTotal()" id="num1">
								</div>
								<div class="form-group">
									<label>Price per Item</label>
									<input class="form-control" type="number" value="" required="true" name="price" id="num2" oninput="calculateTotal()">
								</div>
										  <p>Total: <span class="form-control" id="totals" name="totals">0</span></p>
 <script>
        function calculateTotal() {
            var num1 = parseFloat(document.getElementById('num1').value);
            var num2 = parseFloat(document.getElementById('num2').value);
            var totalSpan = document.getElementById('totals');
            var total = num1 * num2;
            totalSpan.innerText =total.toFixed(2);
             
        }
    </script>

								<div class="form-group">
													
													
								<div class="form-group has-success">
									<button type="submit" class="btn btn-primary" name="submit">Submit</button>
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
