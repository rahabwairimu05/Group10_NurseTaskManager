<?php
include "adb.php";
/**
*@param $nurseid- the id of the nurse
*@param $nursename - the name of the nurse
*@param $taskid - the id of the task to be assigned to a nurse
*@param $taskname - the name of the task to be assigned out
*@param $taskdesc - the detailed description of the task
*@param $sdate - start date of the task
*@param $edate - the day the task is supposed to be completed
*/
class AssignTask extends adb{
	function assignTask($nurseid,$nursename,$taskid,$taskname,$taskdesc,$sdate,$edate){
		$str_query="INSERT INTO assigntask (nurseid,nursename,taskid,taskname,taskdesc,sdate,edate)
		            Values($nurseid,'$nursename',$taskid,'$taskname','$taskdescription','$startdate',$enddate)";
		           // echo "$str_query";
		return  $this->query($str_query);
	}
}
?>