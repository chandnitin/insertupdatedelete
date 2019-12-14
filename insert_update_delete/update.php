<?php
require 'dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$emp_name = $_POST['emp_name'];
		$emp_dept = $_POST['emp_dept'];
		$emp_salary = $_POST['emp_salary'];
		
		$stmt = mysqli_query($con,"UPDATE tbl_employees SET emp_name='$emp_name', emp_dept='$emp_dept', emp_salary='$emp_salary' WHERE emp_id='$id'");
		
		if($con->query($stmt) === TRUE)
		{
			//echo "Successfully updated";
			echo "Query Problem";
		}
		else{
			//echo "Query Problem";
			echo "Successfully updated";
		}
	}

?>