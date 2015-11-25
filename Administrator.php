<html>
    <body>
	    <link rel="stylesheet" href="MyStyle.css">
		<?php
        /**
         * @author Courage Kpotosu
         * @access public
         */
         include_once ("adb.php");
         /**
         *This class extends the Adb class and contains the various functions that
         *allow to perform queries on the database.
         */
         class Administrator extends adb{
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
		?>
	</body>
</html>


