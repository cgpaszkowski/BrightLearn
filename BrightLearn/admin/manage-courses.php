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
				<table class="table table-striped table-bordered table-hover" ">
					<tr>
				    	<th>Course Code</th>
				    	<th>Course Name</th> 
				    	<th>Description</th>
				    	<th>Instructor</th>
				    	<th>Manage</th>
				  	</tr>
					
					<?php
						$sql = 'SELECT * FROM courses';
						$result = $conn->query($sql);

					    if ($result->num_rows > 0) {
					    	while($row = $result->fetch_assoc()){
						   		echo '<tr><td>' . $row["c_code"] . '</td><td>' . $row["c_name"] . '</td><td>' . $row["c_desc"] . '</td><td>' . $row["c_instructor"] . '</td><td><button type="manage" class="btn btn-success btn-md" name="managecourse">manage</button></td></tr>';
						   	}
						}	
					?>
				</table>
			</div>
		</div>
	</div>

<?php include"includes/footer.php"; ?>