<?php

if(!isset($_REQUEST['cmd'])){
	echo '{"result": 0, "message": "sijui command"}';
	return;
}
$cmd = $_REQUEST['cmd'];

switch ($cmd) {
	case '1':
		addNurse();
		break;
	case '2':
		deleteNurse();
		break;
	
	default:
echo '{"result": 0, "message": "Unknown command"}';
	return;
	break;
}

function addNurse(){
	include "nurses.php";
	$theNurse = new Nurses();
	$id= $_GET['nurseid'];
	$firstname= $_GET['nursefname'];
	$secondname= $_GET['nursesname'];
	$contact= $_GET['nursecontact'];

	if (!$theNurse->addNurse($id,$firstname,$secondname,$contact)) {

		echo '{"result": 0, "message": "could not add nurse"}';
	}
	else
	{
	echo '{"result": 1, "message": "Nurse was added successfully"}';
	}return;

}
function deleteNurse(){
	include "nurses.php";
	$theNurse = new Nurses();
	$id = $_GET['nurseid'];
}

?>