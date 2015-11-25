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

	        /**
             *A method to select a particular administrator
             *
             *
             *@param String $id the id of the administrator selected
             *@return administrator details
             */
			function getAdministrator($id){
	            $str_query = "select employee_id, first_name, last_name,Contact
					         from administrators
					         where employee_id ='$id'";

			    if(!$this->query($str_query)){
				return false;
			    }
			    return $this->fetch();
                }
             /**
             *A method to update an administrator detail
             *
             *
             *@param String $id employee id of the administrator
             *@param String $fname firstname of the administrator
             *@param String $lname lastname of the admnistartor
             *@param String $contact contact of the administrator
             *@return Dataset
             */
			function updateAdministrator($id, $fname, $lname, $contact){
	            $str_query = "update administrators set
				  first_name = '$fname',
				  last_name = '$lname',
				  Contact = '$contact',
				  where employee_id = $id";
		        return $this->query($str_query);
				}
				/**
             *A method to delete an administrator
             *
             *
             *@param String $pid employee id to be deleted
             *@return Dataset
             */
			function deleteAdministrator($id){
	            $str_query = "delete from administrators
				              where employee_id = '$id'";
		        return $this->query($str_query);
		    }
		    /**
             *A method to search for an administrator
             *
             *
             *@param String $name name of the administrator searching for
             *@return Dataset
             */


			function searchAdministrator($name){
	            $str_query = "select * from administrators
				              where first_name like '%$name%'";
			    if(!$this->query($str_query)){
				return false;
			    }
				return $this->query($str_query);
		    }

		    /**
             *A method to view all administrators
             *The return value is the set of administrators
             *@return Dataset
             */
			function viewAdministrators(){
	            $str_query = "select employee_id, first_name,last_name, Contact
				              from administrators";
				return $this->query($str_query);
			}
		}
		?>
	</body>
</html>


