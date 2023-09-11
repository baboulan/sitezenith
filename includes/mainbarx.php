<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>


<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
    
            </div>
            <div class="profile-usertitle">
            
                <div class="profile-usertitle-name"><?php echo $username; ?></div>
               
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        
        <ul class="nav menu">
            <li class="active"><a href="admin.php"><em class="fa fa-home">&nbsp;</em> <b>HOME</b></a></li>
           <li><a href="viewbudget.php"><em class="fa fa-folder">&nbsp;</em> <b>BUDGET</U></b></a></li>
            <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-navicon">&nbsp;</em>&nbsp;&nbsp;<b>Manage</b><span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-1">
                    <li><a class="" href="viewemployee.php">
                        <span class="fa fa-arrow-right">&nbsp;</span>Employees
                    </a></li>                    
                     <li><a class="" href="assetsview.php">
                        <span class="fa fa-arrow-right">&nbsp;</span>Assets
                    </a></li>
                    <li><a class="" href="equipmentview.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Equipments
                    </a></li>
                    <li><a class="" href="salary.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Salary
                    </a></li>
                    
                </ul>

            </li>
     <P> 
         <li><a href="reports.php"><em class="fa fa-file">&nbsp;</em> <b>REPORTS</U></b></a></li>
         <li><a href="expenseview.php"><em class="fa fa-plus">&nbsp;</em> <b>ADD EXPENSE</U></b></a></li>
         <li><a href="expense-reports.php">&nbsp;&nbsp;<em class="">&nbsp;</em>   Generate Report</a></li>
            <li><a href="importedview.php"><em class="fa fa-plus">&nbsp;</em> <b>IMPORT</U></b></a></li>
            <li><a href="importeddashboard.php">&nbsp;&nbsp;<em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
             <li><a href="expense-datewise-reports.php">&nbsp;&nbsp;&nbsp;</em> Generate Report</a></li>
            <li><a href="exportedview.php"><em class="fa fa-plus">&nbsp;&nbsp;</em><b>EXPORT</u></b></a></li>
             <li><a href="exportdashboard.php">&nbsp;&nbsp;<em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
             <li><a href="change-password.php">&nbsp;&nbsp;&nbsp;&nbsp;</em> Generate Report</a></li>
                 &nbsp;&nbsp;&nbsp; <a onclick="window.print()" class="btn btn-primary"> <b>Print</b></a>
        
                <li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> <b>Logout</U></b></a></li>



        </ul>
<p>


    </div>
