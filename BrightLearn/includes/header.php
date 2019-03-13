<?php 
		ob_start();
		session_start();

		if ( isset($_GET['authorizationError']) && $_GET['authorizationError'] == 3 ){	
			echo "You do not have permission to access that page. Please login.";
		}
		if ( isset($_GET['authorizationError']) && $_GET['authorizationError'] == 2 ){	
			echo "You do not have permission to access that page.";
		}

		$style0 = "style='display:none;'";
		$style00 = "style='display:none;'";
		$style22 = "style='display:none;'";
		$usernameS = "";

		if(isset($_SESSION['login'])){
	    	$usernameS = $_SESSION['username'];
	    	$style0 = "";
	    }

		if (isset($_SESSION['type'])) {
			if ($_SESSION['type'] == 0) {
				//admin login
				$style00 = "";
			}
			else if ($_SESSION['type'] == 1) {
				//teachers login
				$style00 = "";
			}
			else if ($_SESSION['type'] == 2) {
				//student login
				$style22 = "";
			}
		}

		include "includes/db.php";
		require "includes/functions.php";
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/styles.css">

	<title>BrightLearn</title>
</head>

<body>
	<header class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="index.php">
				<img src="misc/logo_half.jpg" width="30" height="30" class="d-inline-block align-top" alt="">BrightLearn
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			   	<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="my-courses.php">My Courses</a></li>
					<li class="nav-item"><a class="nav-link" href="reports.php">Report Issues</a></li>
					<li class="nav-item dropdown" <?php echo $style00; ?>>
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Course Admin</a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				        	<a class="dropdown-item" href="admin/manage-courses.php">Manage Courses</a>
				        	<a class="dropdown-item" href="admin/manage-courses.php?add=1">Add Course</a>
				        </div>
				    </li>
				    <li class="nav-item dropdown" <?php echo $style00; ?>>
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Course Posts</a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				        	<a class="dropdown-item" href="admin/manage-cpost.php">Manage Course Details</a>
				        	<a class="dropdown-item" href="admin/manage-cpost.php?add=1">Add Course Detail</a>
				        </div>
				    </li>					
				    <li class="nav-item dropdown" <?php echo $style22; ?>>
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Course Posts</a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				        	<a class="dropdown-item" href="#">Detail 1</a>
				        	<a class="dropdown-item" href="#">Detail 2</a>
				        </div>
				    </li>
				    <li class="nav-item dropdown" <?php echo $style0; ?>>
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $usernameS; ?></a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				        	<a class="dropdown-item" href="includes/logout.php">Logout</a>
				        </div>
				    </li>
				</ul>
			</div>
		</nav>
	</header>
