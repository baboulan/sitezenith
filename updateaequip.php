
<?php
include('includes/dbconnection.php');
    if(isset($_POST['add'])){
     $id=$_POST['id'];
     $name=$_POST['name'];
     $type=$_POST['description'];
     $quantity=$_POST['quantity']; 
     $remove=$_POST['remove'];
     $qua=$quantity+$remove;    
     $qry=mysqli_query($con, "UPDATE  equipments1 set id='$id', name='$name',description='$type', quantity='$qua' where id='$id'");
     header('location:equipmentview.php');
   
    }else{
      echo "can't update";
    }
    ?>