<?php
	ob_start();
	session_start();
	
	if (isset($_SESSION['login'])){
		if (isset($_SESSION['type'])) {
			if ($_SESSION['type'] == 0) {
				//admin login
				header("Location: manage-courses.php", true);
				die();
			}
			else if ($_SESSION['type'] == 1) {
				//teachers login
				header("Location: manage-courses.php", true);
				die();
			}
			else if ($_SESSION['type'] == 2) {
				//student login
				header("Location: ../index.php?authorizationError=2", true);
				die();
			}
		}
	}
	else {
		header("Location: ../index.php?authorizationError=3", true);
		die();
	}
	die();
?>