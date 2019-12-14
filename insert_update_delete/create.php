<?php
include 'dbconfig.php';

	
	if($_POST)
	{
		$emp_name = $_POST['emp_name'];
		$emp_dept = $_POST['emp_dept'];
		$emp_salary = $_POST['emp_salary'];
		
		try{
			$sql="INSERT INTO `tbl_employees` (`emp_name` ,`emp_dept` ,`emp_salary`)VALUES ('$emp_name','$emp_dept','$emp_salary')";

			$stmt =mysqli_query($con,$sql);
		
			if($con->query($stmt) === TRUE)
			//if($stmt->execute())
			{
				//echo "Successfully Added";
				echo "Query Problem";
			}
			else{
				//echo "Query Problem";
				echo "Successfully Added";

			}	
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

?>