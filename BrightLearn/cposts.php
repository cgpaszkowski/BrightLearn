<?php include"includes/header.php"; ?>

<div class="container">
	<div class="row">
		<div class="col-lg-4 form-group">
			<br>
			<?php include"includes/issue-card.php"; ?>
		</div>

		<div class="col-lg-8">
			<?php
				if(isset($_GET['id'])){
				    $id = $_GET['id'];
				    $courseID = "CSCI " . $id;

					$sql = 'SELECT * FROM cposts INNER JOIN courses ON cposts.cp_course_id=courses.c_id WHERE courses.c_code=' . "'" . $courseID . "';";
					$result = $conn->query($sql);

			    	if ($result->num_rows > 0) {
			    		while($row = $result->fetch_assoc()){
				    		if($row["cp_type"] == 1){		//type 1 indicates the course welcome post content
				    			echo '<br>
										<div class="card">
										<div class="card-body">
											<h3 class="card-title"><a href="#">' . $row["c_code"] . ': ' .  $row["c_name"] . '</a></h5>
											<br>
											<h5 class="card-subtitle mb-2">Welcome to the course!</h5>
											<br>
											<h6 class="card-subtitle mb-2">Posted by <a href="#">' . $row["c_instructor"] . '</a>, on 20/January/2018, 9:45am</h6>
											<p class="card-text">
												<br>' . $row["c_desc"] . '
											</p>
										</div>
										</div>
										<br>';
				    		}
				    		else {		//else 0 indicates other course post content (future assignments)
								echo "Future Functionality";
				    		}
				    	}
			    	}
			    	else {
						echo "<br>Something went wrong, please try again. (Error_CGP:001)";		//no data was retrieved from the db
					}	
				}
				else {
			    	echo "<br>Welcome!<br>There is currently no information to display. (Error_CGP:002)";		//there was no id tag passed through the url
			    }	
			?>
		</div>
	</div>
</div>

<?php include"includes/footer.php"; ?>