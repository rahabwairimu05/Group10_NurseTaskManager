<?php
include "adb.php";
class AssignTask extends adb{
	function assignTask($taskid,$taskname,$taskdescription,$startdate,$enddate){
		$str_query="INSERT INTO task (nurseid,nursename,taskid,taskname,taskdesc,sdate,edate)
		            Values($nurseid,'$nursename',$taskid,'$taskname','$taskdescription','$startdate',$enddate)";
		           // echo "$str_query";
		return  $this->query($str_query);
	}
}
?>