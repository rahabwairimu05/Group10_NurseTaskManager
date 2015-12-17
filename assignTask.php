<?php
	/**
	* Rahab Wangari
	*@date 17/12/2015
	*description:  a method which connects to the database to assign a task
	*Code starndard: PSR
	*/
	include "adb.php";

	class AssignTask extends adb{
		/**
	*@param $nurseid- the id of the nurse
	*@param $nursename - the name of the nurse
	*@param $taskid - the id of the task to be assigned to a nurse
	*@param $taskname - the name of the task to be assigned out
	*@param $taskdesc - the detailed description of the task
	*@param $sdate - start date of the task
	*@param $edate - the day the task is supposed to be completed
	*The method assigns a task to a nurse
	*/
	function assignTask($nurseId,$nurseName,$taskId,$taskName,$taskDesc,$sDate,$eDate){
		$str_query="INSERT INTO assigntask (nurseid,nursename,taskid,taskname,taskdesc,sdate,edate)
		Values($nurseId,'$nurseName',$taskId,'$taskName','$taskDesc','$sDate','$eDate')";

		return  $this->query($str_query);
	}
}
?>