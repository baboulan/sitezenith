<?php
include('includes/dbconnection.php');
    if(isset($_POST['submit'])){
     $id=$_POST['id'];     
     $type=$_POST['type'];
     $qua=$_POST['quantity'];
     $price=$_POST['price'];
     $total=$qua*$price;
     $date=$_POST['date'];
     $qry=mysqli_query($con, "UPDATE  exported set id='$id',type='$type', quantity='$qua',ExpenseCost='$price',Total='$total', ExpenseDate='$date' where id='$id'");
     if($qry){
echo "<script>alert('Record Updated');</script>";
echo "<script>window.location.href='searchexp.php'</script>";
}
}
    ?>

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

  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#">
          <em class="fa fa-home"></em>
        </a></li>
        <li class="active">Import</li>
      </ol>
    </div><!--/.row-->
    
</head>
<body>

  <?php include_once('includes/header.php');?>
    <?php include_once('includes/mainbar.php');?>
         
    <?php
    // Establishing database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "detsdb";

    $con = new mysqli($servername, $username, $password, $dbname);

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
        $id = $_GET['id'];

        // Fetch data for the selected ID
        $sql = "SELECT exported.*,budget.bname FROM exported JOIN budget ON exported.bname=budget.bid WHERE id = $id";
        $result = $con->query($sql);

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            echo "

    <div class='row'>
      <div class='col-lg-12'>
      
<div class='panel panel-default'>
          <div class='panel-heading'>Exported</div>
          <div class='panel-body'>
            <a href='exportedview.php'><button><h4>View all Exported Items</h4></button></a></center> <p>
            <p style='font-size:16px; color:red' align='center'> 
            
            <form method='post' >
            
                  <input type='hidden' name='id' value='" . $row['id'] . "'>
            <div class='col-md-12'>
                  <label> Name: </label> <input class='form-control' type='text' name='name' value='" . $row['bname'] . "'readonly ><br>
                  Type: <input  class='form-control' type='text' name='type' value='" . $row['type'] . "'placeholder='Optional' ><br>
                  quantity: <input class='form-control' type='number' name='quantity' value='" . $row['quantity'] . "'required ><br>
                  Price Per Unit: <input  class='form-control' type='number' name='price' value='" . $row['ExpenseCost'] . "'required ><br>
                  Total: <input  class='form-control' type='' readonly name='total' value='" . $row['total'] . "'required ><br>
                  Date: <input class='form-control' type='date' name='date' value='" . $row['ExpenseDate'] . "'required ><br>
             
                  <input type='submit' class='btn btn-primary' name='submit' value='submit'>
              </div>
              </form>
                </div>
          </div>
        </div><!-- /.panel-->
      </div><!-- /.col-->
      
    </div><!-- /.row -->
  </div><!--/.main-->";
        } else {
            echo "Data not found.";
        }
    }
    $con->close();
    ?>

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



