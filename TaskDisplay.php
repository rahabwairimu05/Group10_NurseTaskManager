<?php
			if (isset($_REQUEST['id'])) {
			include("Tasks.php");
				
				//create object of manufacturers 
				$obj=new Tasks();
				$id=$_REQUEST['id'];
				if(!$obj->updateSelectedTask($id)){
					echo " Error displaying".mysql_error(); 
				}else{
					echo " displaying";
				}	
			}	
?>