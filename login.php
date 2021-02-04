<?php 
include('class/User.php');
$user = new User();
$errorMessage =  $user->login();
include('include/header.php');
?>
<div class="d-flex py-4 align-items-center justify-content-center">
	<div class="card" style="width:470px">
		<div class="card-body">
			<div class="text-center">
				<img src="images/logo.png" width="200">
				<h3 class="text-center my-4">
					User Login
				</h3>
			</div>
			<?php if ($errorMessage != '') { ?>
				<div id="login-alert" class="alert alert-danger" role="alert">
					<?php echo $errorMessage; ?>
				</div>
			<?php } ?>
			<form id="loginform" role="form" method="POST" action="">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" class="form-control" id="email" name="email" required value="<?php if(isset($_COOKIE["loginId"])) { echo $_COOKIE["loginId"]; } ?>">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password" required value="<?php if(isset($_COOKIE["loginPass"])) { echo $_COOKIE["loginPass"]; } ?>">
				</div>
				<div class="form-check mb-3">
					<input class="form-check-input" type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["loginId"])) { ?> checked <?php } ?>>
					<label class="form-check-label" for="remember">
						Remember me
					</label>
				</div>
				<a href="forget_password.php">Forget your password</a>
				<br/>
				<input type="submit" name="login" value="Login" class="btn btn-primary mt-3">
			</form>
		</div>
	</div>
</div>
<?php include('include/footer.php');?>