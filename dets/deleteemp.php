

<?php
include('includes/dbconnection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Perform deletion operation using the provided ID
  $sql=mysqli_query($con,"DELETE FROM employee WHERE id = $id");
    
    header('location:viewemployee.php');
} else {
    echo "Invalid request.";
}
?>