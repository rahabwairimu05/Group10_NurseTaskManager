<!DOCTYPE html>
<!-- this -->
<html>

	<body>
			<?php
			if(isset($_REQUEST['tn'])){
				include("tasks.php");
			/**
		    *function set and retrieve Tasks from database
		    */
		    $obj=new Tasks();
			$name=$_REQUEST['tn'];
			$description=$_REQUEST['td'];
			$s_date=$_REQUEST['sd'];
			$e_date=$_REQUEST['ed'];
			$location=$_REQUEST['location'];
			/**
		    *Adding objects to tasks section of database
		    */
			if(!$obj->addTask($name,$description,$s_date,$e_date,$location)){
			echo "Error adding".mysql_error();
			}else{
			echo "Adding $name, $description, $s_date, $e_date, $location";
				}
			}
		?>

		<?php
			/**
		    *function to view administrator
		    */
			include("Tasks.php");
			$obj=new Tasks();
			$obj->displayTask();
			if(!$row=$obj->fetch()){
			echo"there are no tasks currently";
			}
			/**
		    *Setting a table to contain the contents of tasks objects
		    */
			echo"<table border='2'>";
            echo"<tr><td>TASK ID</td><td>TASK NAME</td><td>TASK DESCRIPTION</td><td>START DATE</td>
                 <td>END DATE</td><td>LOCATION</td></tr>";
            while($row) {
            echo "<tr><td>{$row["task_id"]}</td><td><a href=tasksdisplayselected.php?id=".$row["task_name"].">
            {$row["task_name"]}</td>";
            echo"<td>{$row["task_description"]}</td><td>{$row["start_date"]}</td>
                  <td>{$row["end_date"]}</td><td>{$row["location"]}</td>";
                  $row=$obj->fetch();
            }
            echo"</table>";
		?>
			</div>
	</body>
</html>
