<?php
	include"includes/header.php";

	$style1 = "";
	$style2 = "style='display:none;'";
	if(isset($_SESSION['login'])){
	    $style1 = "style='display:none;'";
	    $style2 = "";
	    $usernameS = $_SESSION['username'];
	    if ($_SESSION['lastlogintime'] == "0") {
	    	$loginmessage = "This is your first time logging in.";
	    }
	    else {
	    	//$lastlogintime = $_SESSION['lastlogintime'];
	    	$loginmessage = "You last accessed this site on: " . $_SESSION['lastlogintime'];	
	    }
	}

?>
<main>
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
				        <form class="form" action="includes/login.php" role="form" id="formLogin" method="POST">
				            <div class="form-group">
				                <label for="uname">Username</label>
				                <input type="text" class="form-control form-control-lg rounded-0" placeholder="Enter Username" name="username" required>
				            </div>

				            <div class="form-group">
				                <label>Password</label>
				                <input type="password" class="form-control form-control-lg rounded-0" placeholder="Enter Password" name="password" required>
				                <a href="#" >Forgot password?</a><br>
				            </div>

				            <button type="submit" class="btn btn-success btn-lg float-right" name="submit">Login</button>
				        </form>
				        <?php 
					        if ( isset($_GET['loginError']) && $_GET['loginError'] == 1 ){
							    echo "<p style='color:red;'>The username or password are incorrect</p>";
							}
						?>
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
				<?php include"includes/issue-card.php"; ?>
			</div>
			
			<div class="col-lg-8 ">  <!-- main section -->
				<br>
				<div class="card">
					<div class="card-body">
						<h3 class="card-title"><a href="#">Welcome to BrightLearn!</a></h5>
						<br>
						<h6 class="card-subtitle mb-2">Posted by <a href="#">admin</a>, on 01/January/2019, 10:35pm</h6>
						<p class="card-text">
							<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi purus est, bibendum at pulvinar eget, tempus sed tortor. In tincidunt elementum ornare. Donec nulla massa, ultricies vel lorem quis, consectetur interdum felis. Sed suscipit lacus a orci vestibulum, id varius neque pellentesque. Proin luctus sodales odio, in commodo velit euismod a. Integer dolor velit, condimentum in ipsum sed, venenatis faucibus ligula. Mauris lobortis iaculis commodo. Nullam ac metus nec est tempor tempor sit amet non justo. Duis molestie enim id rutrum eleifend.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php include"includes/footer.php"; ?>