<!-- form card login -->
<div class="card rounded-0"> 
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
    </div>
</div>