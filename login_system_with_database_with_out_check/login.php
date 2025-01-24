


<!DOCTYPE html>
<html lang=EN-US>
    <head>
<style>
<?php include 'styles.css'; ?>
<?php include 'bootstrap.css'; ?>
</style>
        <title>
i am jayanta
        </title>

    </head>


    <body>
    	<div class="container">

    		<div class="row">
    				<div class="col-lg-6">
    					<h2>Login :<h2>
    					<form action="validation1_without_check.php" method="post">

    						<div class="form-group">
    							<label>username</label>
    							<input type="text" name="user" class="form-control">
    						</div>

    						<div class="form-group">
    							<label>password</label>
    							<input type="password" name="password" class="form-control">
    						</div>

    						<button type="submit" class="btn btn-primary">Login</button>


    					</form>


    				</div>
	


    			<div class="col-lg-6">
    					<h2>Registration :<h2>
    					<form action="registration1_without_check.php" method="post">

    				<div class="form-group">
    							<label>Username</label>
    							<input type="text" name="user" class="form-control">
    						</div>


                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email"  class="form-control">
                            </div> 


                            <div class="form-group">
                                <label>Phone</label>
                                <input type="phone" name="phone"  class="form-control">
                            </div>




    						<div class="form-group">
    							<label>Password</label>
    							<input type="password" name="password" class="form-control">
    						</div>
    						<button type="submit" class="btn btn-primary">Register</button>


    					</form>


    				</div>

    		</div>


    	</div>


    </body>
</html>

