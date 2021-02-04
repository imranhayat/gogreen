<?php 
include('../class/User.php');
$user = new User();
$errorMessage =  $user->adminLogin();
include('include/header.php');
?>

<div class="d-flex vh-100 align-items-center justify-content-center">
	<div class="card" style="width:470px">
		<div class="card-body">
			<div class="text-center">
				<img src="../images/logo.png" width="200">
				<h3 class="text-center my-4">
					Admin Login
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
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password" required>
				</div>
				<input type="submit" name="login" value="Login" class="btn btn-primary mb-3">
				<div>Email: admin@admin.com - Password:123</div>
			</form>
		</div>
	</div>
</div>
<?php include('include/footer.php');?>