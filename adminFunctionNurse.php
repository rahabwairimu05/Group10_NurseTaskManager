<!DOCTYPE html>
<!-- this -->
<html>
    <head>
	    <title>Nurse Task Manager Homepage</title> 
		<link rel="stylesheet" href="css/style1.css"/>
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
		*function to highlight the selected click input option(task)
		*/
		// $(document).ready(function(){
		// 	$('#task').click(function(){
		// 		$('#form_overlay').fadeIn('slow');
		// 		$('#form_overlay_div').fadeIn('slow');
		// 	});
		// });
		/**
		*function to highlight the selected click input option(close button)
		*/
		// $(document).ready(function(){
		// 	$('.close-button').click(function(){
		// 		$('#form_overlay').fadeOut('fast');
		// 		$('#form_overlay_div').fadeOut('fast');
		// 	});
		// });
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
					<!-- <li>
						<a href="#" class="button big" id="task">Add Administrator</a>
					</li> -->
					<!-- <li>
						<a href="#" class="button big" id="update">Update Administrator</a>
					</li> -->
					<!-- <li>
						<a href="#" class="button big" id="admin">Delete Administrator</a>
					</li> -->
					<li>
						<a href="#" class="button big" id="view">View Administrator</a>
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
		*function to add and view administrator
		*/
        include_once ("admin.php");
        $obj = new Administrator();
	    $obj->viewAdministrators();
        if(!$row=$obj->fetch()){
        echo "There is no administrator now";
	    }
        /**
		*Setting a table to contain the contents of administrator objects
		*/
	    echo "<center><table border='1'>";
	    echo "<tr ><td>Employee_id</td><td>First Name</td><td>Last Name</td><td>Contact</td>
	    </tr>";
	    while ($row) {
		if ($i%2==0){
	    $style ="style='background-color: BurlyWood'";
	    }
	    else{
		$style ="style='background-color:cornsilk'";
	    }
	    $i++;
		echo "<tr><td>{$row['employee_id']}</td><td>{$row['first_name']}</td><td>{$row['last_name']}</td>";
		echo "<td>{$row['Contact']}</td></tr>";
		$row =$obj->fetch();
	    }
	    echo "</table></center>";
	    ?>
			</div>
	</body>
</html>