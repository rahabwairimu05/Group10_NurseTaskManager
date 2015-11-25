<?php
    include_once ("adb.php");
	/**
	*creating a class for view administrators
	*/
    class Administrator extends adb{
    function viewAdministrators(){
	/**
	*Setting a query for administrators to be called from database
	*/
    $str_query = "select employee_id, first_name,last_name, Contact
		         from administrators";
    return $this->query($str_query);
			}
		}
?>
		