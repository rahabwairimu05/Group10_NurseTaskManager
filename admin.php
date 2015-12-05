<?php
    include_once ("adb.php");
	/**
	*Initializing the administrator class
	*/
    class Administrator extends adb{
	/**
	*This function allows for the view administrators queries to be performed
	*/
    function viewAdministrators(){
	/**
	*Database is querried and then the admin with the unique id will be added/deleted
	*/
	    $str_query = "select employee_id, first_name,last_name, Contact
				     from administrators";
				     return $this->query($str_query);
			}
	/**
    *Add an administrator to the database
    *
    *
    *@param String $empid employee id of the administrator
    *@param String $fname firstname of the administrator
    *@param String $lname lastname of the admnistartor
    *@param String $con contact of the administrator
    *@return Dataset
    */
	
    function addAdministrator($empid,$fname, $lname,$con){
	    $str_query ="insert into administrators set
				     employee_id = '$empid',
				     first_name = '$fname',
				     last_name = '$lname',
				     Contact = '$con'";
				     print($str_query);
			         return $this->query($str_query);
	        }
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