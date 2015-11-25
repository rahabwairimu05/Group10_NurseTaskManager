<?php
include "adb.php";
/*A nurse class*/
class Nurses extends adb{
	/*Function to add nurse*/
	function addNurse($id,$firstname,$secondname,&contact){
		$str_query="INSERT INTO addnurse (nurseid,nursefname,nursesname,nursecontact)
		            Values($id,'$firstname','$secondname','&contact')";
		           // echo "$str_query";
		return  $this->query($str_query);
	}

}

?>