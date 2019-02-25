<!DOCTYPE html>
<html lang="en">
<head>
<title>Award Winning Website Development Company | Shift One Systems</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animate/animate.css');?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/select2/select2.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/util.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css');?>">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo base_url('assets/images/video-bg.jpg');?>');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" action="<?php echo base_url('Signin/signup');?>" method="post">
					<div class="login100-form-avatar">
						<img src="<?php echo base_url('assets/images/Shift-One-logo.png');?>" alt="AVATAR">
					</div>
				<?php if(!empty($message)){ ?>
					<span class="login100-form-title p-t-20 p-b-45">
					<div id="infoMessage"><?php echo $message;?></div>
					</span>
                <?php } ?>
                
                <div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="name" placeholder="User Name" value="<?php echo set_value('name');?>">
						<p><?php echo form_error('name');?></p>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Email is required">
						<input class="input100" type="email" name="email" placeholder="Email" value="<?php echo set_value('email');?>">
						<p><?php echo form_error('email');?></p>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password" value="<?php echo set_value('pass');?>">
						<p><?php echo form_error('pass');?></p>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-10" data-validate = "Confirm Password is required">
						<input class="input100" type="password" name="re-pass" placeholder="Password" value="<?php echo set_value('re-pass');?>">
						<p><?php echo form_error('re-pass');?></p>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
                    </div>
					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn">
							Signup
						</button>
					</div>

					<div class="text-center w-full" style="padding-top: 60px !important;">
						<a class="txt1" href="<?php echo base_url('Signin/login');?>">
						Already have your account? Signin
							<i class="fa fa-long-arrow-right"></i>						
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="<?php echo base_url('assets/vendor/jquery/jquery-3.2.1.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/bootstrap/js/popper.js');?>"></script>
	<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/select2/select2.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/js/main.js');?>"></script>

</body>
</html>