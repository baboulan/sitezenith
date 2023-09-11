
<TYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zenith | Budget Usage</title>
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
    <?php include_once('includes/mainbarx.php');?>
        
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
                       
                        
<?php
include('includes/dbconnection.php');
$sql1 = "SELECT * FROM budget order by bid"; 
$result1 = $con->query($sql1);

$sql2 = "SELECT sum(quantity)as quantity,sum(Total)as Total,ExpenseCost as ExpenseCost,ExpenseDate,type,bname FROM tblexpense GROUP BY bname HAVING COUNT(*)";
$result2 = $con->query($sql2);
?><table border="1" class="table table-bordered mg-b-0">
    <tr>
        <th border="2" colspan="4" style="background-color: green; color:white;">Budget</th> <th border="2" colspan="3" style="background-color: red;color:white;">Purchase</th>
    </tr>

    <tr>
        <th>Item Name</th>
        <th>Quantity</th>
        <th>Price/Unit</th>
        <th>Total</th>
        <th>Quantity</th>
        <th>Price/Unit</th>
         <th>Total</th>
       
    </tr>

    <?php
    while ($row1 = $result1->fetch_assoc() and $row2 = $result2->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row1['bname'] . "</td>";
        echo "<td>" . number_format($row1['bquantity'],0) . "</td>";
        echo "<td>" . number_format($row1['bunit'],0) . "</td>";
        echo "<td>" . number_format($row1['btotal'],0) . "</td>";
        echo "<td>" . number_format($row2['quantity'],0) . "</td>";        
        echo "<td>" . number_format($row2['ExpenseCost'],0) . "</td>";
        echo "<td>" . number_format($row2['Total'],0) . "</td>";
        echo "</tr>";
    
     $totalsexp+=$row2['Total'];
     $totalse+=$row1['btotal'];
$cnt=$cnt+1;
}
?>

</table>   
<h4><b>Budget:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo number_format($totalse,0);?></h4> 
<h4><b>Purchases:&nbsp;</b><?php echo number_format($totalsexp,0);?></h4>

 

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
