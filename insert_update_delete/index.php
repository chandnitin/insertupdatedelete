<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert, Update, Delete using jQuery, PHP and MySQL</title>
<?php
	include("common/csslink.php");
?>
</head>

<body>
    


	<div class="container">
      
        <h2 class="form-signin-heading">Employee Records.</h2><hr />
        <button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Add Employee</button>
        <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View Employee</button>
        <hr />
        
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th>Emp ID</th>
        <th>Emp Name</th>
        <th>department</th>
        <th>salary</th>
        <th>edit</th>
        <th>delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once 'dbconfig.php';
        
       // $stmt = $db_con->mysql_query("SELECT * FROM tbl_employees ORDER BY emp_id DESC");
         $stmt =mysqli_query($con,"SELECT * FROM tbl_employees ORDER BY emp_id DESC");
        //$stmt->execute();
		while($row=$stmt->fetch_assoc())
		{
			?>
			<tr>
			<td><?php echo $row['emp_id']; ?></td>
			<td><?php echo $row['emp_name']; ?></td>
			<td><?php echo $row['emp_dept']; ?></td>
			<td><?php echo $row['emp_salary']; ?></td>
			<td align="center">
			<a id="<?php echo $row['emp_id']; ?>" class="edit-link" href="#" title="Edit">
			<img src="edit.png" width="20px" />
            </a></td>
			<td align="center"><a id="<?php echo $row['emp_id']; ?>" class="delete-link" href="#" title="Delete">
			<img src="delete.png" width="20px" />
            </a></td>
			</tr>
			<?php
		}
		?>
        </tbody>
        </table>
        
        </div>

    </div>
    
    <br />
    
    <div class="container">
      
        <div class="alert alert-info">
        <a href="http://www.kundankotangale.esy.es/profile/" target="_blank">My Website</a>
        </div>

    </div>
    

    
<?php
	include("common/jslink.php");
?>

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
	$('#example').DataTable();//example is a table id

	$('#example')
	.removeClass( 'display' )
	.addClass('table table-bordered');
});
</script>
<script type="text/javascript">
$(document).ready(function(){
	
	$("#btn-view").hide();//btn-view is a button view
	
	$("#btn-add").click(function(){//add button 
		$(".content-loader").fadeOut('slow', function()
		{
			$(".content-loader").fadeIn('slow');
			$(".content-loader").load('add_form.php');
			$("#btn-add").hide();
			$("#btn-view").show();
		});
	});
	
	$("#btn-view").click(function(){
		
		$("body").fadeOut('slow', function()
		{
			$("body").load('index.php');
			$("body").fadeIn('slow');
			window.location.href="index.php";
		});
	});
	
});
</script>
</body>
</html>