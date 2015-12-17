<!--
Author:courage
Description:updating the task
-->
<html>
	<head>
		<title>Index</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/mystyle.css">
		<script>
			
		</script>
	</head>
	<body>

	<center><form action="updateTask.php" method="GET">
<p><i><b>Update task  information</b></i></p>
<table>
<tr>
	<td><div>Task id:</td><td><input type="Text" name="id" size="40"></div></td>
	</tr>
	<td><div>Task name:</td><td><input type="text" name="taskname" size="40"></div></td>
	</tr>
	<tr>
	<td><div>Description:</td><td><input type="text" name="description" size="40"></div></td>
	</tr>
	<tr>
	<td><div>Start Date</td><td><input type="date" name="sdate" size="40"></div></td>
	</tr>
	<tr>
	<td><div>End date:</td><td><input type="date" name="edate" size="40"></div></td>
	</tr>
	<td><div>Location:</td><td><input type="text" name="location" size="40"></div></td>
	</tr>
	<tr>
		<td><div><input type="Submit" value="Update" size="40"></div></td>	
	</tr>
</table>
</form></center>


<?php 
/**
* Update task function to change the details of a particular task
*
*/
if (isset($_REQUEST['id'])){
	include_once("Tasks.php");
	$obj_task= new Tasks();
	$tid=$_REQUEST['id'];
	$tname =$_REQUEST['taskname'];
	$tdesc =$_REQUEST['description'];
	$start_date = $_REQUEST['sdate'];
	$end_date = $_REQUEST['edate'];
	$loc = $_REQUEST['location'];

	/**
	* A method to check is the task is successfully updated
	*
	*@param string  $tid id of the task
    *@param varchar $name name of the task
    *@param varchar description of task
    *@param date $s_date start date of the job
    *@param date $e_date end date of the job
    *@param string $location location of job
    *@return Task successfully updated or update not successful
	*/
	
	if(!$obj_task->updateTask('$tid','$tname','$tdesc','$start_date','$end_date', '$loc')){
		echo "The task was not updated";
	}
	else{
		echo "A task was successfully updated";
	}
	
}
?>
	</body>
</html>	

 