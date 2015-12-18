<?php
include "adb.php";
class Task extends adb{
	function addTask($taskid,$taskname,$taskdescription,$startdate,$enddate){
		$str_query="INSERT INTO task (taskid,taskname,taskdescription,startdate,enddate)
		            Values($taskid,'$taskname','$taskdescription','$startdate','$enddate')";
		           // echo "$str_query";
		return  $this->query($str_query);
	}
}
?>