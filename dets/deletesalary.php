

<?php
include('includes/dbconnection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Perform deletion operation using the provided ID
  $sql=mysqli_query($con,"DELETE FROM salary WHERE id = $id");
    
    header('location:viewsalary.php');
} else {
    echo "Invalid request.";
}
?>