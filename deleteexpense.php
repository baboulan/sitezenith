

<?php
include('includes/dbconnection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Perform deletion operation using the provided ID
  $sql=mysqli_query($con,"DELETE FROM expense WHERE id = $id");
    
    header('location:expenseview1.php');
} else {
    echo "Invalid request.";
}
?>