


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Regna Bootstrap Template</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicons -->
	<link href="<?php echo e(asset('users/img/favicon.png')); ?>" rel="icon">
	<link href="<?php echo e(asset('users/img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700"
		  rel="stylesheet">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'
		  integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<!-- Bootstrap CSS File -->
	<link href="<?php echo e(asset('users/lib/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

	<!-- Libraries CSS Files -->
	<link href="<?php echo e(asset('users/lib/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('users/lib/animate/animate.min.css')); ?>" rel="stylesheet">


	<link href="<?php echo e(asset('users/lib/slick/slick.css')); ?>" rel="stylesheet">

	<!-- Main Stylesheet File -->
	<link href="<?php echo e(asset('users/css/mainStyle.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('users/css/modal.css')); ?>" rel="stylesheet">


</head>

<body>

<!--==========================
Header
============================-->
<header id="header">
	<div class="container">

		<div id="logo" class="pull-left">
			<h1><a href="#hero">B+</a></h1>
		</div>

		<nav id="nav-menu-container">
			<ul class="nav-menu">
				<li class="menu-active"><a href="#hero">Home</a></li>
				<li><a href="#portfolio">Blood</a></li>
				<li><a href="#charities">Charities</a></li>
				<li><a href="#team">Team</a></li>
				<li><a href="#contact">Contact Us</a></li>
				<li><a href="" data-toggle="modal" data-target="#registration">Register</a></li>
				<li><a href="" data-toggle="modal" data-target="#login"> Login</a></li>
			</ul>
		</nav><!-- #nav-menu-container -->
	</div>
</header><!-- #header -->
<!---- registration modal----->
<div class="modal" id="registration">
	<div class="modal-dialog slideDownAnimation">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<span>Registration</span>
				<i class='fab fa-wpforms p-3'> </i>
			</div>
			<div class="modal-body">
				<div class="d-flex justify-content-between">
					<span> Step 1</span>
					<span> Step 2</span>
				</div>
				<div class="progress mb-5">
					<div id="progressbar"class="progress-bar" style="width:0%"></div>
				</div>
				<form id="regForm" action="action.php" method="POST">
					<div class="tab">
						<h3 class="step-Header">STEP 1</h3>
						<div class="form-group">
							<input type="text" name="name" class="form-control" placeholder="name">
						</div>
						<div class="form-group">
							<input type="text" name="username" class="form-control" placeholder="user name">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" placeholder="mail">
						</div>
						<div class="form-group">
							<input type="password" name="password" class="form-control" placeholder="password">
						</div>
						<div class="form-group">
							<input type="password" name="confirmpassword" class="form-control" placeholder="confirm password">
						</div>
					</div>
					<div class="tab">
						<h3 class="step-Header">STEP 2</h3>
						<div class="form-group">
							<input type="phone" name="phone" class="form-control" placeholder="phone number">
						</div>
						<div class="form-group">
							<select class="form-control" name="city">
								<option disabled selected="true">City</option>
								<option>Assuit</option>
								<option>cairo</option>
								<option>Alex</option>
								<option>malawy</option>
							</select>
						</div>
						<div class="form-group">
							<input type="text" placeholder="date" name="birthdate" class="form-control" onfocus="(this.type='date')">
						</div>
						<div class="form-check-inline">
							<label class="form-check-label">
								<input type="radio" class="form-check-input" name="gender">male
							</label>
						</div>
						<div class="form-check-inline">
							<label class="form-check-label">
								<input type="radio" class="form-check-input" name="gender"> female
							</label>
						</div>
					</div>
					<div class="mt-2">
						<div class="d-flex justify-content-center">
							<button type="button"  class="mr-2"id="prevBtn" onclick="nextPrev(-1)">Previous</button>
							<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
						</div>
					</div>
					<!-- Circles which indicates the steps of the form: -->
					<div style="text-align:center;margin-top:40px;">
						<span class="step"></span>
						<span class="step"></span>
					</div>
				</form>










				<!---- <form action="" class="modal-form">
                    <div class="step1-registration">
                      <h3 class="step1-Header">STEP 1</h3>
                      <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="name">
                      </div>
                      <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="user name">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="mail">
                      </div>
                      <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="password">
                      </div>
                      <div class="form-group">
                        <input type="password" name="confirmpassword" class="form-control" placeholder="confirm password">
                      </div>
                      <div class="d-flex justify-content-end">
                        <button class="btn toStep2-btn"> Step 2</button>
                      </div>
                    </div>
                    <div class="step2-registration">
                      <div class="form-group">
                        <input type="phone" name="phone" class="form-control" placeholder="phone number">
                      </div>
                      <div class="form-group">
                        <select class="form-control" name="city">
                          <option disabled selected="true">City</option>
                          <option>Assuit</option>
                          <option>cairo</option>
                          <option>Alex</option>
                          <option>malawy</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <input type="text" placeholder="date" name="birthdate" class="form-control" onfocus="(this.type='date')">
                      </div>
                      <div class="form-check-inline">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="gender">male
                        </label>
                      </div>
                      <div class="form-check-inline">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="gender"> female
                        </label>
                      </div>
                      <div class="d-flex justify-content-between mt-3">
                        <button class="btn toStep1-btn"> Step 1</button>
                        <input type="submit" class="btn submit" value="Finish">
                      </div>
                    </div>


                  </form>
                -->
			</div>
		</div>
	</div>
</div>
<!---------login modal-------------->
<div class="modal" id="login">
	<div class="modal-dialog slideDownAnimation">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<span>Login</span>
				<i class='fas fa-lock p-3'> </i>
			</div>
			<div class="modal-body">
				<form action="" class="modal-form">
					<div class="form-group">
						<label for="mail-phone">Email address or Phone number:</label>
						<input type="text" class="form-control" id="mail-phone">
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" name="password" class="form-control" id="pwd">
					</div>
					<div class="form-group form-check d-flex  flex-wrap justify-content-between">
						<label class="form-check-label">
							<input class="form-check-input" type="checkbox"> Remember me
						</label>
						<a href="">Forget your password</a>
					</div>
					<input type="submit" class="btn submit" value="login">
				</form>
			</div>
		</div>
	</div>
</div>


<?php echo $__env->yieldContent('content'); ?>


<!--==========================
    Footer
  ============================-->
<footer id="footer">
	<div class="footer-top">
		<div class="container">

		</div>
	</div>

	<div class="container">
		<div class="copyright">
			&copy; Copyright <strong>Regna</strong>. All Rights Reserved
		</div>
		<div class="credits">
			Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
		</div>
	</div>
</footer>
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>



<!-- JavaScript Libraries -->
<script src="<?php echo e(asset('users/lib/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('users/lib/jquery/jquery-migrate.min.js')); ?>"></script>
<script src="<?php echo e(asset('users/lib/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('users/lib/easing/easing.min.js')); ?>"></script>
<script src="<?php echo e(asset('users/lib/wow/wow.min.js')); ?>"></script>
<script src="<?php echo e(asset('users/lib/waypoints/waypoints.min.js')); ?>"></script>
<script src="<?php echo e(asset('users/lib/counterup/counterup.min.js')); ?>"></script>
<script src="<?php echo e(asset('users/lib/superfish/hoverIntent.js')); ?>"></script>
<script src="<?php echo e(asset('users/lib/superfish/superfish.min.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="<?php echo e(asset('users/lib/slick/slick.js')); ?>"></script>

<!-- Contact Form JavaScript File -->
<script src="<?php echo e(asset('users/contactform/contactform.js')); ?>"></script>


<script src="<?php echo e(asset('users/js/main.js')); ?>"></script>
<script src="<?php echo e(asset('users/js/modal.js')); ?>"></script>

</body>

</html>
