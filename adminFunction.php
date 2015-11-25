<!DOCTYPE html>
<!-- this -->
<html>
    <head>
	    <title>Nurse Task Manager Homepage</title>
		<link rel="stylesheet" href="css/style1.css"/>
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/jquery-2.1.3.js"></script>
		<script>
		/**
		*function to highlight the selected click input option(task)
		*/
		$(document).ready(function(){
		    $('#task').click(function(){
				$('#form_overlay').fadeIn('slow');
				$('#form_overlay_div').fadeIn('slow');
			});
		});
		/**
		*function to highlight the selected click input option(close button)
		*/
		$(document).ready(function(){
			$('.close-button').click(function(){
				$('#form_overlay').fadeOut('fast');
				$('#form_overlay_div').fadeOut('fast');
			});
		});
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
						<a href="#" class="button big" id="task">Add Administrator</a>
					</li>
					<li>
						<a href="#" class="button big" id="update">Update Administrator</a>
					</li>
					<li>
						<a href="#" class="button big" id="admin">Delete Administrator</a>
					</li>
					<li>
						<a href="#" class="button big" id="view">View Administrator</a>
					</li>
				</ul>
			    </section>
					</ul>
				</header>
			<div id="form_overlay"></div>
			<div id="form_overlay_div">
			<div class="close-button">X</div>
			<form method ="GET" action ="adminFunction.php">
		    <h3><i><b>Add a new Administrator</b></i></h3>
        <table>
	        <tr>
		    <td>
		    <div>Employee id:</td><td><input type="Text" name="empid" size="40"></div>	</td>
		    </tr>
		    <tr>
			<td>
			<div>First Name:</td><td> <input type="text" name="fname" size="40"></div>
			</td>
		    </tr>
		    <tr>
			<td><div>Second Name:</td><td><input type="text" name="lname" size="40"></div></td>
		    </tr>
		    <tr>
			<td><div>Contact:</td><td><input type="text" name="contact" size="40"></div></td>
		    </tr>
		    <tr>
			<td><div><input type="Submit" value="Add"></div></td>
		    </tr>
        </table>
	        </form>
        <?php
        /**
		*function set and retrieve administrator information from database
		*/
		if (isset ($_REQUEST['empid'])){
	    include_once ("Administrator.php");
		$obj = new Administrator();
		$employee_id = $_REQUEST['empid'];
		$First_name = $_REQUEST['fname'];
		$Last_name = $_REQUEST['lname'];
		$Contact = $_REQUEST['contact'];
		/**
		*Adding object to administrator section of database
		*/
	    if(!$obj->addAdministrator($employee_id,$First_name,$Last_name,$Contact)){
		echo "Error adding";
	}
	else{
		echo "$First_name successfully added";
	}
			}
		?>

	</body>
</html>
