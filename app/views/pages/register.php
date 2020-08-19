<?php require APPROOT . '/views/components/header.php';?>

	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo URLROOT; ?>/public/images/img-01.png" alt="IMG">
				</div>
				
				<form class="login100-form validate-form" action="<?php echo URLROOT; ?>/auth/register" method="POST">
					<span class="login100-form-title">
						Member Register
					</span>

                    <?php require APPROOT . '/views/components/auth_message.php';?>
                    <p class="text-danger ml-4"><?php
						if(isset($data['name-err']))
						echo $data['name-err'];
					?></p>
                    <div class="wrap-input100 validate-input" data-validate = "Valid name is required !">
						
						<input class="input100" type="text" name="name" placeholder="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
						
					</div>
					
					<p class="text-danger ml-4"><?php
						if(isset($data['email-err']))
						echo $data['email-err'];
					?></p>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<p class="text-danger ml-4"><?php
						if(isset($data['password-err']))
						echo $data['password-err'];
					?></p>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Register
						</button>
					</div>

					<!-- <div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div> -->

					<div class="text-center p-t-136">
						<a class="txt2" href="<?php echo URLROOT; ?>">
							Login to your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<?php require APPROOT . '/views/components/footer.php';?>
