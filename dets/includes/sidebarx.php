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
    
                <div class="profile-usertitle-name"></div>
               
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        
        <ul class="nav menu">
            <li class="active"><a href="dashboard.php"><em class="fa fa-home">&nbsp;</em> <b>HOME</b></a></li>
            
            
           
            <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-navicon">&nbsp;</em>&nbsp;&nbsp;<b>MANAGE</b><span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-1">
                     <li><a class="" href="itemx.php">
                        <span class="fa fa-arrow-right">&nbsp;</span>Employees
                    </a></li>                    
                     <li><a class="" href="equipmentx.php">
                        <span class="fa fa-arrow-right">&nbsp;</span>Assets
                    </a></li>
                    <li><a class="" href="equipment1x.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Equipments
                    </a></li>
                    <li><a class="" href="salaryx.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Salary
                    </a></li>
                   
                    
                </ul>

            </li>
     <P> 
         <li><a href="addreport.php"><em class="fa fa-file">&nbsp;</em> <b>MAKE REPORT</U></b></a></li>
       
         <li><a href="expense1.php"><em class="fa fa-plus">&nbsp;</em> <b>ADD EXPENSE</U></b></a></li>
         <li><a href="expense-reports1.php">&nbsp;&nbsp;<em class="">&nbsp;</em>   Generate Report</a></li>
            <li><a href="addpurchase.php"><em class="fa fa-plus">&nbsp;</em> <b>IMPORT</U></b></a></li>
             <li><a href="expense-datewise-reports1.php">&nbsp;&nbsp;&nbsp;</em> Generate Report</a></li>
            <li><a href="export1.php"><em class="fa fa-plus">&nbsp;&nbsp;</em><b>EXPORT</u></b></a></li>           
             <li><a href="change-password1.php">&nbsp;&nbsp;&nbsp;&nbsp;</em> Generate Report</a></li>
              &nbsp;&nbsp;&nbsp; <a onclick="window.print()" class="btn btn-primary"> <b>Print</b></a>
<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> <b>LogOut</U></b></a></li>



        </ul>
<p>


    </div>
