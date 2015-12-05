<!DOCTYPE html>
<!-- this -->
<html>
	<head>
		<title>Nurse Task Manager Homepage</title>
		<link rel="stylesheet" href="css/style1.css"/>
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/jquery-2.1.3.js"></script>
		<script>
		/**
		*function to highlight the selected click input option(task)
		*/
		$(document).ready(function(){
		$('#task').click(function(){
		$('#form_overlay').fadeIn('slow');
		$('#form_overlay_div').fadeIn('slow');
		    });
		});
		/**
		*function to highlight the selected click input option(close button)
		*/
		$(document).ready(function(){
		$('.close-button').click(function(){
		$('#form_overlay').fadeOut('fast');
		$('#form_overlay_div').fadeOut('fast');
		    });
		});
		/**
		*function to highlight the selected click input option(view)
		*/
		$(document).ready(function(){
		$('#view').click(function(){
		$('#table_overlay').fadeIn('slow');
		$('#table_overlay_div').fadeIn('slow');
			});
		});
		/**
		*function to highlight the selected click input option(close button)
		*/
		$(document).ready(function(){
		$('.close-button').click(function(){
		$('#table_overlay').fadeOut('fast');
		$('#table_overlay_div').fadeOut('fast');
			});
		});
		</script>
	</head>
	<body>
		<?php
			/**
		    *function to view all task
		    */
			include("Tasks.php");
			$obj=new Tasks();	
			$obj->viewTasks();
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
            echo "<tr><td>{$row["task_id"]}</td><td><a href=tasksdisplayselected.php?id=".$row["task_name"].">{$row["task_name"]}</td>";
            echo"<td>{$row["task_description"]}</td><td>{$row["start_date"]}</td>
                  <td>{$row["end_date"]}</td><td>{$row["location"]}</td>";
                  $row=$obj->fetch();
            }
            echo"</table>";
		?>
			</div>
	</body>
</html>