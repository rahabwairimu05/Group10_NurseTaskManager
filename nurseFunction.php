<!DOCTYPE html>
<html>
	<head>
		<title>Nurse Task Manager Homepage</title>
		<link rel="stylesheet" href="css/style1.css"/>
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/jquery-2.1.3.js"></script>
		<script>
		/**
		*function to highlight the selected click input option(view)
		*/
		$(document).ready(function(){
		$('#view').click(function(){
		$('#table_overlay').fadeIn('slow');
		$('#table_overlay_div').fadeIn('slow');
			});
		});
		/**
		*function to highlight the selected click input option(close button)
		*/
		$(document).ready(function(){
		$('.close-button').click(function(){
		$('#table_overlay').fadeOut('fast');
		$('#table_overlay_div').fadeOut('fast');
			});
		});
		/**
		*function to highlight the selected click input option(delete)
		*/
		$(document).ready(function(){
			$('#del').click(function(){
				$('#table_overlay1').fadeIn('slow');
				$('#table_overlay_div1').fadeIn('slow');
			});
		});
		/**
		*function to highlight the selected click input option(close button)
		*/
		$(document).ready(function(){
			$('.close-button').click(function(){
				$('#table_overlay1').fadeOut('fast');
				$('#table_overlay_div1').fadeOut('fast');
			});
		});
		</script>
	    </head>
	    <body>
		<!-- Header -->
			<header id="header">
				<h1><a href="index.html">Ghana Health Services</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="AboutUs.html">About Us</a></li>
						<li><a href="elements.html">Contact</a></li>
						<!-- <li><a href="#" class="button special">Sign Up</a></li> -->
                </nav>
		<!-- Banner -->
				<section id="banner">
				<h2 style="color:#3cadd4">Nurses Task Manager</h2>
				<p>Efficient, Quick and Reliable way to manage nurses' activities</p>
				<ul class="actions">
					<li>
						<a href="#" class="button big" id="task">Add Nurse</a>
					</li>
					<li>
						<a href="#" class="button big" id="update">Update Nurse</a>
					</li>
					<li>
						<a href="#" class="button big" id="del">Delete Nurse</a>
					</li>
					<li>
						<a href="#" class="button big" id="view">View Nurses</a>
					</li>
				</ul>
			    </section>
					</ul>
				
			</header>
	    </div>
	    <div id="table_overlay"></div>
			<div id="table_overlay_div">
				<div class="close-button">X</div>
	    		<?php
				/**
				*function to view nurses
				*/
        		include_once ("nurses.php");
        		$objnurse = new Nurses();
	    		$objnurse->viewAllNurses();
        		if(!$row=$objnurse->fetch()){
        			echo "There are no nurses currently";
	    		}
	    		/**
				*Setting a table to contain the contents of tasks objects
				*/
	    			echo "<center><table border='1'>";
	    			echo "<tr><td>Employee_id</td><td>First Name</td><td>Last Name</td><td>Department</td>
	          		<td>Contact</td></tr>";
	    			while ($row) {
						echo "<tr><td>{$row['employee_id']}</td><td>{$row['first_name']}</td><td>{$row['last_name']}</td>";
						echo "<td>{$row['contact']}</td></tr>";
						$row =$objnurse->fetch();
	    			}
	    			echo "</table></center>";
	    		?>
		</div>
		<div id="table_overlay1"></div>
			<div id="table_overlay_div1">
				<div class="close-button">X</div>
				<?php
				/**
				*function to view and delete nurses
				*/
				include_once ("nurses.php");
				$objnurse = new Nurses();
				$objnurse->viewAllNurses();

				if(!$row=$objnurse->fetch()){
					echo "There are no nurses currently";
				}

					echo "<center><table border='1'>";
					echo "<tr><td>Employee_id</td><td>First Name</td><td>Last Name</td>
	    			<td>Contact</td></tr>";
					while ($row) {
						echo "<tr><td>{$row['employee_id']}</td><td>{$row['first_name']}</td><td>{$row['last_name']}</td>";
						echo "<td>{$row['contact']}</td></tr>";
						$row =$objnurse->fetch();
					}
					echo "</table></center>";	
				?>

<!-- A form to take in the id of nurse that will be deleted-->
<center><form action="nurseFunction.php" method="GET">
<p><i><b>Delete a nurse</b></i></p>
	<div>Employee id:<input type="Text" name="id" size="30"></div>
	<div><input type="Submit" value="Delete"></div>
</form></center>

				<?php 
				/**
				 *implementation of the delete nurse function
				**/
				if (isset($_REQUEST['id'])){
					include_once("nurses.php");
					$obj_nurse= new Nurses();
					$theId=$_REQUEST['id'];
		
					if(!$obj_nurse->deleteNurse($theId)){
						echo "The nurse was not deleted";
					}
					else{
						echo "A nurse was deleted successfully";
					}
				}
				?>
	</body>
</html>