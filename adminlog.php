<?php
session_start();
require_once('dbconnect.php'); // Create this file to connect to your MySQL database

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header('Location: admin.php');
    } else {
       echo "<script>alert('Invalid Details');</script>";
    }
} 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Site Zenith Login</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/datepicker3.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  
</head>
<body>

  <div class="row">
      <h2 align="center"><b>Site Zenith</b></h2>
  <hr />
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">Log in</div>
        <div class="panel-body">
           <a href="login.php" class="btn btn-primary"><h5 style="color: white;"><b>As User</b></h5></a>
          <p style="font-size:16px; color:red" align="center"> </p>
          <form role="form" action="" method="post" id="" name="login">
            <fieldset>
              <div class="form-group">
                <input class="form-control" placeholder="username" name="username" type="text" autofocus="" required="true">
              </div>              
              <div class="form-group">
                <input class="form-control" placeholder="Password" name="password" type="password" value="" required="true">
              </div>
              <div class="checkbox">
                <center><button type="submit" value="login" name="login" class="btn btn-primary"><h4 style="color: white;"><b>Login</b></h4></button><span></span>
                
              </div>
              </fieldset>
          </form>
        </div>
      </div>
    </div><!-- /.col-->
  </div><!-- /.row -->  
  

<script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
