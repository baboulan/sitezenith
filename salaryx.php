<?php
include('includes/dbconnection.php');

if(isset($_POST['submit']))
  {
    $field=$_POST['field'];
     $paid=$_POST['paid'];
     $per=$_POST['per'];
     $total=$paid*$per;
     $date=$_POST['date'];
     
    $query=mysqli_query($con, "INSERT into salary(id,salary,date,perperson,field,total) values('','$paid','$date','$per','$field','$total')");
if($query){
echo "<script>alert('Salary Added');</script>";
echo "<script>window.location.href='viewsalaryq.php'</script>";
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
    <title>Zenith Add Salary</title>
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
                <li class="active">Add salary</li>
            </ol>
        </div><!--/.row-->

                <center>    <a href="viewsalaryq.php"><button style="color: dodgerblue;"class="btn btn-primary"><h4 style="color: white;">View Salary </h4></button></a></center> 
        <div class="row">
            <div class="col-lg-12">
            
                
                
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        
                    
    
  <form role="form" method="post" action="">

    <center><u><h4>Create Payment<h4></u></center>
                        <div class="col-md-12">
                               <div class="form-group">
                                    <label>Insert Field</label>
                                    <input class="form-control" type="text" value="" required="true" name="field">
                                </div>
                                        
                                <div class="form-group">
                                    <label>Total Paid Employees</label>
                                    <input class="form-control" type="number" value="" required="true" name="paid" id="num1" oninput="calculateTotal()">
                                </div>
                                        
                                <div class="form-group">
                                    <label>Amount Paid Each</label>
                                    <input class="form-control" type="number" value="" name="per" required="true" id="num2" oninput="calculateTotal()">
                                </div>  
                               <p>Total: <span class="form-control" id="total" name="total">0</span></p>
 <script>
        function calculateTotal() {
            var num1 = parseFloat(document.getElementById('num1').value);
            var num2 = parseFloat(document.getElementById('num2').value);
            var totalSpan = document.getElementById('total');
            var total = num1 * num2;
            totalSpan.innerText = total.toFixed(2);
        }
    </script>
                                </div>

                                          <div class="form-group">
                                    <label> Date</label>
                                    <input class="form-control" type="date" value="" required="true" name="date">
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
