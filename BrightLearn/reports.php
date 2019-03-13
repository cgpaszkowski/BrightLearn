<?php include"includes/header.php"; ?>

<div class="container">
	<div class="row">		
		<div class="col-lg-4 form-group">
      <br>
      <?php include"includes/issue-card.php" ?>
    </div>
		<div class="col-lg-8">
      <br>
      <div class="card rounded-0">
        <div class="card-header">
          <h3 class="mb-0">Report an Issue</h3>
        </div>
        <div class="card-body">
          <form class="form" action="" role="form" id="formIssues" method="POST" >	
            <div class="form-group">
  						<label for="name">Preferred Name:</label>
  						<input type="text" class="form-control form-control-lg rounded-0" placeholder="Enter Name" name="preferredName" required>
  					</div>
            <div class="form-group ">
  						<label for="email">Email:</label>
  						<input type="text" class="form-control form-control-lg rounded-0" placeholder="Enter Email" name="email"  required>
  					</div>
            <div class="form-group">
  						<label for="issues">Type of Issue Being Reported:</label>
    					<select class="form-control form-control-lg rounded-0" name="errorType" required>
  							<option value="LinkNotFound">Link Not Found</option>
  							<option value="PageNotFound">Page Not Found</option>
  							<option value="IncorrectScript">Incorrect Script</option>
  					  </select>
  					</div>
            <div class="form-group">
  						<label for="details">Further Details:</label><br>
  						<textarea class="form-control form-control-lg rounded-0" name="issueDetails" rows="10" cols="60" placeholder="Please provide further details about your issue." required></textarea>
  					</div>
  					<input type="submit" class="btn btn-success" value="Submit">
            <input type="reset" class="btn btn-fail" value="Clear">
  				</form>
        </div>	
 			</div>
      <br>
		</div>
	</div>
</div>

<?php include"includes/footer.php"; ?>