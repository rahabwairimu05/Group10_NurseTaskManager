<?php

if(!isset($_REQUEST['cmd'])){
	echo '{"result": 0, "message": "sijui command"}';
	return;
}
$cmd = $_REQUEST['cmd'];

switch ($cmd) {
	case '1':
		addTask();
		break;

	
	default:
echo '{"result": 0, "message": "Unknown command"}';
	return;
	break;
}

function addTask(){
	include "Task.php";
	$theTask = new Task();
	$id= $_GET['taskid'];
	$name= $_GET['taskname'];
	$desc= $_GET['tascdesc'];
	$sdate= $_GET['sdate'];
	$edate= $_GET['edate'];

	if (!$theTask->addTask($id,$name,$desc,$sdate,$edate)) {

		echo '{"result": 0, "message": "could not add task"}';
	}
	else
	{
	echo '{"result": 1, "message": "Task added sucessfully"}';
	}return;

}


?>