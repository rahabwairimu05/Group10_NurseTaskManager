<?php
/**
*checking whether the variable cmd is empty
*/
if(!isset($_REQUEST['cmd'])){
	echo '{"result": 0, "message": "unknown command"}';
	return;
}
$cmd = $_REQUEST['cmd'];

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
	$id= $_GET['nid'];
	$name= $_GET['name'];
	$tname= $_GET['taskname'];
	$tid= $_GET['taskid'];
	$desc= $_GET['taskdesc'];
	$sdate= $_GET['sdate'];
	$edate= $_GET['edate'];
/**
*executes the assign method  which inserts to the database
*/
	if (!$theTask->assignTask($id,$name,$tid,$tname,$desc,$sdate,$edate)) {

		echo '{"result": 0, "message": "could not assign task"}';
	}
	else
	{
	echo '{"result": 1, "message": "Task  was assigned  sucessfully"}';
	}return;

}


?>