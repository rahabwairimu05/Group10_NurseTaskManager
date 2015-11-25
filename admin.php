<?php
    include_once ("adb.php");
    class Administrator extends adb{
    function viewAdministrators(){
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
		}
		?>