<?php
include('includes/dbconnection.php');
if (isset($_POST['delete'])) {
$sql=mysqli_query($con,"DELETE from budget");
if ($sql) {
	header('location:budget.php');
}
}else{
	echo "byanze bro";
}
?>