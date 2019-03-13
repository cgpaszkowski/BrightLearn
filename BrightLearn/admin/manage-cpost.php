<?php
	include"includes/header.php";

	$style1 = "";
	$style2 = "style='display:none;'";
	if(isset($_SESSION['login'])){
	    $style1 = "style='display:none;'";
	    $style2 = "";
	    $usernameS = $_SESSION['username'];
	    if ($_SESSION['lastlogintime'] == 0) {
	    	$loginmessage = "This is your first time logging in.";
	    }
	    else {
	    	$lastlogintime = $_SESSION['lastlogintime'];
	    	$loginmessage = "You last accessed this site on: " . $lastlogintime;	
	    }
	}

?>	
	<div class="container">
		<div class="bg"> <!-- Half page background image -->
			<h1 class="welcome">Welcome to BrightLearn</h1>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4  form-group">  <!-- sidebar -->
				<br>
				<div class="card rounded-0" <?php echo $style1; ?>> 
				    <div class="card-header">
				        <h3 class="mb-0">Account Login</h3>
				    </div>
				    <div class="card-body">
				        
				    </div>
				</div>
				<div class="card rounded-0" <?php echo $style2; ?>>
					 <div class="card-header">
				        <h3 class="mb-0">Welcome, <?php echo $usernameS; ?>!</h3>
				    </div>
				    <div class="card-body">
				    	<?php echo $loginmessage; ?>
				    </div>
				</div>
				<br>
				<?php include"../includes/issue-card.php"; ?>
			</div>
			
			<div class="col-lg-8 ">  <!-- main section -->
				<br>
				
			</div>
		</div>
	</div>

<?php include"includes/footer.php"; ?>