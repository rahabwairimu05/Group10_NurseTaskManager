<?php
/*checks whether cmd was passed*/
if(!isset($_REQUEST['cmd'])){
	echo '{"result": 0, "message": "sijui command"}';
	return;
}
/*checks the value of cmd, to assign to its relevant function*/
$cmd = $_REQUEST['cmd'];

switch ($cmd) {
	case '1':
		addNurse();
		break;
	
	default:
echo '{"result": 0, "message": "Unknown command"}';
	return;
	break;
}
/*function to add a nurse, its called incase cmd=1*/
function addNurse(){
	include "nurses.php";
	/*creats an object of the nurse class*/
	$theNurse = new Nurses();
	$id= $_GET['nurseid'];
	$firstname= $_GET['nursefname'];
	$secondname= $_GET['nursesname'];
	$contact= $_GET['nursecontact'];


	/*adds  a nurse to the database by calling addnurse method in the nurse class*/
	if (!$theNurse->addNurse($id,$firstname,$secondname,$contact)) {

		echo '{"result": 0, "message": "could not add nurse"}';
	}
	else
	{
	echo '{"result": 1, "message": "Nurse was added successfully"}';
	}return;

}


?>