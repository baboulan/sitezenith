
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zenith Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="stylex.css" rel="stylesheet">
    
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
                <li class="active">Home</li>
            </ol>
        </div><!--/.row-->
        <br>
<center><h1><b>Welcome <?php echo "$username";  ?>, To Site Zenith</b></h1></center><p>
<p><center> <br>
<ul>
<br>
<a href="system.php" class="btn btn-primary"><h4 style="color: white;">Manage System User</h4></a>&nbsp;&nbsp;
<a href="viewemployee.php" class="btn btn-primary"><h4 style="color: white;">Employee Records</h4></a>&nbsp;&nbsp;
    <a href="viewsalary.php" class="btn btn-primary"><h4 style="color: white;">Salary Management</h4></a>&nbsp;&nbsp;     
       <a href="viewdashboard.php" class="btn btn-primary"><h4 style="color: white;">Dashboards</h4></a>&nbsp;&nbsp;

    </ul></center>
        <!--/.row-->
    </div>  <!--/.main-->
    
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/chart.min.js"></script>
    <script src="js/chart-data.js"></script>
    <script src="js/easypiechart.js"></script>
    <script src="js/easypiechart-data.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/custom.js"></script>
    <script>
        window.onload = function () {
    var chart1 = document.getElementById("line-chart").getContext("2d");
    window.myLine = new Chart(chart1).Line(lineChartData, {
    responsive: true,
    scaleLineColor: "rgba(0,0,0,.2)",
    scaleGridLineColor: "rgba(0,0,0,.05)",
    scaleFontColor: "#c5c7cc"
    });
};
    </script>
        
</body>
</html>
