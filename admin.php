<?php
    include_once ("adb.php");
    class Administrator extends adb{
    function viewAdministrators(){
	    $str_query = "select employee_id, first_name,last_name, Contact
				     from administrators";
				     return $this->query($str_query);
			}
		}
		?>