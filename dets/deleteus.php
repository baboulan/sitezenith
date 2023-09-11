

<?php
include('includes/dbconnection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Perform deletion operation using the provided ID
  $sql=mysqli_query($con,"DELETE FROM  user WHERE id = $id");
    
    header('location:system.php');
} else {
    echo "Invalid request.";
}
?>