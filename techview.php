
<TYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zenith Technical View</title>
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
  <?php include_once('includes/sidebarx.php');?>
    
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#">
          <em class="fa fa-home"></em>
        </a></li>
        <li class="active">Report</li>
      </ol>
    </div><!--/.row-->
    
    
        
    
    <div class="row">
      <div class="col-lg-12">
      
        
        
        <div class="panel panel-default">
          <div class="panel-heading">Report</div>
          <div class="panel-body">
            <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
            <div class="col-md-12">
                <center><a href="technical4.php" ><button class="btn btn-primary"><h4 style="color: white;">Start Reporting</h4></button></a></center> <p>
              <div class="table-responsive">
            <table class="table table-bordered mg-b-0">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Description</th>
                  <th>Time</th>     
                  <th>Delete</th>
                </tr>
              </thead>
              <?php
              $userid=$_SESSION['detsuid'];
$ret=mysqli_query($con,"select * from technical2  order by timestamp desc");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              <tbody>
                <tr>
                  <td><?php echo $cnt;?></td>
              
                  <td style="word-wrap: break-word; max-width: 200px;"><?php  echo $row['description'];?></td>                          
                  <td><?php  echo $ttlsl=$row['timestamp'];?></td>                                    
                  <td><a href="deletetex.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete?')"class="btn btn-primary">Remove</a></td>
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
<?php
include('includes/dbconnection.php');
if (isset($_POST['id'])) {
  $id=$_POST['id'];
  $query="DELETE FROM tblexpense where id=$id";
header('location:importedview.php');
}else{
  echo "byanze";
}
?>