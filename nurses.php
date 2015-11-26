<?php
include "adb.php";

class Nurses extends adb{
	function viewAllNurses(){
		$str_query="SELECT employee_id, first_name,last_name,contact FROM nurses";
		return $this->query($str_query);
	}
}
?>