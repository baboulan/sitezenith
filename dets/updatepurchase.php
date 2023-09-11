

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zenith Update</title>
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
    <?php include_once('includes/mainbarx.php');?>
         
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
    
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['bid'])) {
        $id = $_GET['bid'];

        // Fetch data for the selected ID
        $sql = "SELECT * FROM budget WHERE bid = $id";
        $result = $con->query($sql);

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            echo "

    <div class='row'>
      <div class='col-lg-12'>
      
<div class='panel panel-default'>
          <div class='panel-heading'>Import</div>
          <div class='panel-body'>
            <a href='importedview.php'><button><h4>Purchase New  Items</h4></button></a></center> <p>
            <p style='font-size:16px; color:red' align='center'> 
            
            <form method='post'>                    
            <div class='col-md-12'>
            <input type='hidden' name='bid' value='" . $row['bid'] . "'>
                  <label> Name:</label> <input class='form-control' type='text' name='name' required value='" . $row['bname'] . "'><br>                 
                  quantity: <input class='form-control' type='number' name='quantity' value='" . $row['bquantity'] . "' required oninput='calculateTotal()' id='num1'><br>
                  Price Per Unit: <input  class='form-control' type='number' name='price' 'required value='" . $row['bunit'] . "' oninput='calculateTotal()' id='num2'><br>
                     <p>Total: <span class='form-control' id='totals'>0</span></p>

 <script>
        function calculateTotal() {
            var num1 = parseFloat(document.getElementById('num1').value);
            var num2 = parseFloat(document.getElementById('num2').value);
            var totalSpan = document.getElementById('totals');
            var total = num1 * num2;
            totalSpan.innerText =total.toFixed(2);
             
        }
    </script>                 
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
<?php
include('includes/dbconnection.php');
    if(isset($_POST['submit'])){
     $id   =$_POST['bid'];
     $name =$_POST['name'];     
     $qua  =$_POST['quantity'];
     $price=$_POST['price'];
     $total=$qua*$price;
     $qry=mysqli_query($con,"UPDATE  budget set  bname='$name', bquantity='$qua',bunit='$price',btotal='$total' where budget.bid='$id'");
     }header('location:budgetview.php');
   
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

