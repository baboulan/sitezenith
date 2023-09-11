<?php
include('includes/dbconnection.php');
    if(isset($_POST['submit'])){
     $id=$_POST['id'];
     $name=$_POST['name'];
     $lname=$_POST['lname'];
     $gender=$_POST['gender'];
     $indangamuntu=$_POST['indangamuntu'];
     $field=$_POST['field'];
     $position=$_POST['position'];
     $joindate=$_POST['joindate'];
     $salary=$_POST['salary'];
     $qry=mysqli_query($con, "UPDATE  employee set id='$id', name='$name',lname='$lname', gender='$gender',indangamuntu='$indangamuntu',position='$position',joindate='$joindate', salary='$salary' where id='$id'");
     header('location:viewemployee.php');
   
    }else{
      echo "can't update";
    }
    ?>



<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Zenith Update</title>
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
        $sql = "SELECT * FROM employee WHERE id = $id";
        $result = $con->query($sql);

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            echo "

    <div class='row'>
      <div class='col-lg-12'>
      
<div class='panel panel-default'>
          <div class='panel-heading'>Salary</div>
          <div class='panel-body'>
            <a href='viewsalary.php'><button><h4>View Salary </h4></button></a></center> <p>
            <p style='font-size:16px; color:red' align='center'> 
            
            <form method='post' >
            
                  <input type='hidden' name='id' value='" . $row['id'] . "'>
            <div class='col-md-12'>
                  <label> First Name: </label> <input class='form-control' type='text' name='name' value='" . $row['name'] . "'required ><br>
               last Name: <input  class='form-control' type='text' name='lname' value='" . $row['lname'] . "'required ><br>
                  Gender: <input class='form-control' type='text' name='gender' value='" . $row['gender'] . "'required ><br>



                 Id Number: <input  class='form-control' type='number' name='indangamuntu' value='" . $row['indangamuntu'] . "'required ><br>
                  
                 Field: <input  class='form-control' type='idnumber' name='field' value='" . $row['field'] . "'required ><br>
                 
                 Position: <input  class='form-control' type='idnumber' name='position' value='" . $row['position'] . "'required ><br>
                 Joindate: <input  class='form-control' type='date' name='joindate' value='" . $row['joindate'] . "'required ><br>
                 Salary: <input  class='form-control' type='number' name='salary' value='" . $row['salary'] . "'required ><br>
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

