<?php
include('includes/dbconnection.php');
    if(isset($_POST['submit'])){
     $id=$_POST['id'];
     $fullname=$_POST['fullname'];
     $username=$_POST['username'];
     $password=$_POST['password'];
     $email=$_POST['email'];
     $phone=$_POST['phone'];
     $qry=mysqli_query($con, "UPDATE  user set id='$id', fullname='$fullname',username='$username', password='$password',email='$email',phone='$phone' where id='$id'");
     echo "<script>alert('Admin updated successfully');</script>";
     header('location:system.php');
   
    }else{
      echo "can't update";
    }
    ?>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>zenith update Admin</title>
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
        <li class="active">Update Admin</li>
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
        $sql = "SELECT * FROM user WHERE id = $id";
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
                  <label> Full names: </label> <input class='form-control' type='text' name='fullname' value='" . $row['fullname'] . "'required ><br>
                  Username: <input  class='form-control' type='text' name='username' value='" . $row['username'] . "'required ><br>
                  Password: <input class='form-control' type='text' name='password' value='" . $row['password'] . "'required ><br>
                  Email: <input class='form-control' type='text' name='email' value='" . $row['email'] . "' ><br>
                  Phone Number: <input class='form-control' type='number' name='phone' value='" . $row['phone'] . "' ><br>
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



