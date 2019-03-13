<?php 
		ob_start();
		session_start();

		if (!isset($_SESSION['login'])){
			header("Location: ../../index.php?authorizationError=3", true);
			die();
		}
		else  {
			if (isset($_SESSION['type'])) {
				if ($_SESSION['type'] == 2) {
					//student login
					header("Location: ../../index.php?authorizationError=2", true);
					die();
				}
			}
		}

		include "../includes/db.php";
		require "../includes/functions.php";
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/customstyles.css"> -->

	<title>BrightLearn</title>
</head>

<body>
	<header class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="">
				<img src="../misc/logo_half.jpg" width="30" height="30" class="d-inline-block align-top" alt="">BrightLearn
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			   	<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="../my-courses.php">My Courses</a></li>
					<li class="nav-item"><a class="nav-link" href="../reports.php">Report Issues</a></li>
				</ul>
			</div>
		</nav>
	</header>
