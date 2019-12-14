<?php
include 'dbconfig.php';

if($_POST['del_id'])
{
	$id = $_POST['del_id'];	
	$stmt=mysqli_query($con,"DELETE FROM tbl_employees WHERE emp_id=$id");
}
?>