<?php
include "adb.php";
<<<<<<< HEAD

class Nurses extends adb{
	function viewAllNurses(){
		$str_query="SELECT employee_id, first_name,last_name,contact FROM nurses";
		return $this->query($str_query);
	}
}
?>
=======
/*A nurse class*/
class Nurses extends adb{
	/**
	*@param $id id of the nurse
	*@param $firstname, first name of the nurse
	*@param $secondname, surname of the nurse
	*@param $contact, nurses contact
	*@return return a boolean value, yes or no
	*/
	function addNurse($id,$firstname,$secondname,$contact){
		$str_query="INSERT INTO addnurse (nurseid,nursefname,nursesname,nursecontact)
		            Values($id,'$firstname','$secondname','$contact')";
		           // echo "$str_query";
		return  $this->query($str_query);
	}

}

?>
>>>>>>> origin/addnurse
