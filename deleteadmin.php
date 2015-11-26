<?php
/**
*Connecting the adb function to the deleteNurse function to include functionalities
*/
    include_once ("adb.php");
    class Administrator extends adb{
/**
*Creating a the class, delete administrators
*/
    function deleteAdministrator($id){
/**
*Code that queries the database and removes the selected administrator from the database
*/
	$str_query = "delete from administrators
				  where employee_id = '$id'";
    return $this->query($str_query);
		}
	}
?>
