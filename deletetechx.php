

<?php
include('includes/dbconnection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Perform deletion operation using the provided ID
  $sql=mysqli_query($con,"DELETE FROM  technical WHERE id = $id");
    
    header('location:technical3.php');
} else {
    echo "Invalid request.";
}
?>