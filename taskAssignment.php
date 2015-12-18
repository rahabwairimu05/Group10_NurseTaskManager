<?php
	/**
	*@author Rahab Wangari
	*@date 17/12/2015
	*description:file to assign a task
	*Code starndard: PSR
	*/
	/**
	*checking whether the variable cmd is empty
	*/
	if(!isset($_REQUEST['cmd'])){
		echo '{"result": 0, "message": "unknown command"}';
		return;
	}
	$cmd = $_REQUEST['cmd'];
	/*If cmd=1, it executes the assignTask method*/
	switch ($cmd) {
		case '1':
		assignTask();
		break;

		
		default:
		echo '{"result": 0, "message": "Unknown command"}';
		return;
		break;
	}

	/**
	*function to receive information from the javascript page
	*/
	function assignTask(){
		include "assignTask.php";
		$theTask = new AssignTask();
		$id= $_GET['nId'];
		$name= $_GET['name'];
		$tId= $_GET['taskId'];
		$tName= $_GET['taskName'];
		$desc= $_GET['taskDesc'];
		$sDate= $_GET['sDate'];
		$eDate= $_GET['eDate'];
	/**
	*executes the assign method  which inserts to the database
	*@param $id - this is the id of the nurse who takes the task
	*@param $name - this is the name of the nurse who takes the task
	*@param $tId - the id of the task being assigned to the nurse
	*@param $tName -the name of the task being allocated
	*@param $desc - the description of the task being allocated
	*@param $sDate - the date the nurse is supposed to start the task
	*@param $eDate - the date the nurse is supposed to end the task
	*passing the variables to assign task to the nurse
	*/
	if (!$theTask->assigTask($id,$name,$tId,$tName,$desc,$sDate,$eDate)) {

		echo '{"result": 0, "message": "could not assign task"}';
	}
	else
	{
		echo '{"result": 1, "message": "Task  was assigned  sucessfully"}';
	}return;

}


?>