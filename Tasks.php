<?php
/**
* @author Courage
* @access public
*/
include_once ("adb.php");
/*
*This class extends the adb class and contains the function
*to perform query on the database
*/
class Tasks extends adb{
     /*
     * A function to view all task
     */
    function viewTasks(){
        $str_query="select * from tasks";
        $result=$this->query($str_query).mysql_error();
        $row=$this->fetch;    }
      }
      
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
    function updateTask($tid, $tname,$tdesc,$start_date,$end_date, $loc){
    	$str_query = "UPDATE tasks set 
    				  task_name ='$tname',
    				  task_description = '$tdesc'
    				  start_date ='$start_date'
    				  end_date = '$end_date'
    				  location = '$loc'
    				  WHERE task_id = $tid";
    	return $this->query($str_query);
    }

    /**
    *A function to update a selected task
    *
    *@param $name the name of the selected task
    *
    *The function displays the various task with the same name using the while loop
    */

    function updateSelectedTask($name){
        $str_query = "select * from taskmanager.tasks 
     			      where task_name = '$name' ";
        $result = $this->query($str_query).mysql_error();
        $row = $this->fetch();
        echo"<table border='2'>";
            echo"<tr><td>TASK ID</td><td>TASK NAME</td><td>TASK DESCRIPTION</td><td>START DATE</td>
                 <td>END DATE</td><td>LOCATION</td><td>UPDATE</td></tr>";
            while($row) {
                  echo "<tr><td>{$row["task_id"]}</td><td><a href=Tasksdisplay.php?id=".$row["task_name"].">{$row["task_name"]}</td>";
                  echo"<td>{$row["task_description"]}</td><td>{$row["start_date"]}</td>
                  <td>{$row["end_date"]}</td><td>{$row["location"]}</td>"."<td><a href=updateTask.php?id=".$row["task_id"].">UPDATE</td></tr>";
                  $row=$this->fetch();
            }
            echo"</table>";
    }

?>