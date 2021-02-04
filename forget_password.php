<?php 
include('class/User.php');
$user = new User();
$errorMessage = '';
if(!empty($_POST['forgetpassword']) && $_POST['forgetpassword']) {
	$errorMessage =  $user->resetPassword();
}
include('include/header.php');
?>
<div class="d-flex py-5 align-items-center justify-content-center">
	<div class="card" style="width:470px">
		<div class="card-body">
			<div class="text-center">
				<img src="images/logo.png" width="200">
				<h3 class="text-center my-4">
					Forgot Password?
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
					<input type="text" class="form-control" id="email" name="email" required>
				</div>
				<input type="submit" name="forgetpassword" value="Submit" class="btn btn-primary mb-3">
				<br/>
				If You've already an account! <a href="login.php">Login</a>
			</form>
		</div>
	</div>
</div>
<?php include('include/footer.php');?>