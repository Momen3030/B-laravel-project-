<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Be Positive</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicons -->
	<link href="<?php echo e(asset('users/img/favicon.png')); ?>" rel="icon">
	<link href="<?php echo e(asset('users/img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">
    
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
	<link href="<?php echo e(asset('users/css/profile.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('users/css/dropdownNotificationAndProfile.css')); ?>" rel="stylesheet">
                    <!------------------------------------- start header profile page ------------------------------>
    <header id="header">
        <div class="container">
            <div id="logo" class="pull-left">
                <h1><a href="#hero">B+</a></h1>
            </div>
            <nav id="nav-menu-container">                  <!------- start nav -------->
                <ul class="nav-menu">
                    <li>                                <!-- start  dropdown profile image -->
                        <div class='profile-pic d-flex justify-content-start mr-3' data-toggle="dropdown">
                            <img src="<?php echo e(asset('users/img/team-2.jpg')); ?>" class="img-responsive rounded-circle account-img mr-1" alt="user" width="50px" height="50px">
                            <p class="profile-userName pr-2"> Ahmed</p>
                        </div>
                        <div class="dropdown">
                            <div class="dropdown-menu profile-menu">
                                <div class="profile-title d-flex justify-content-between p-2">
                                    <p>Privacy</p>
                                    <i class="material-icons">settings</i>
                                </div>
                                <div class="profile-body">
                                    <a class="profile-body-items d-flex justify-content-start pt-1">
                                        <i class='fas fa-user m-2'></i>
                                        <p class="m-1">Edit Profile</p>
                                    </a>
                                    <a class="profile-body-items d-flex justify-content-start pt-1">
                                        <i class='fas fa-user m-2'></i>
                                        <p class="m-1">Edit Profile</p>
                                    </a>
                                    <hr>
                                    <a class="profile-body-items d-flex justify-content-start pt-1">
                                        <i class=' fa fa-question-circle m-2'></i>
                                        <p class="m-1">Help</p>
                                    </a>
                                    <a class="profile-body-items d-flex justify-content-start pt-1">
                                        <i class='fas fa-bullhorn m-2'></i>
                                        <p class="m-1">Rebort a Problem</p>
                                    </a>
                                    <hr>
                                    <a class="profile-body-items d-flex justify-content-start pt-1">
                                        <i class="material-icons">exit_to_app</i>
                                        <p class="m-1">Log Out</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>                            <!-- End  dropdown profile image -->
                    <li><a href="#blood-type">Home</a></li>
                    <li>                          <!-- start  dropdown Notifications Bell -->
                        <span class="badge badge-important dropdown-toggle" data-toggle="dropdown">2</span>
                        <i class='fa fa-bell-o fa-lg dropdown-toggle' data-toggle="dropdown"></i>
                        <div class="dropdown">
                            <div class="dropdown-menu notification-menu">
                                <div class="notification-title d-flex justify-content-between p-2">
                                    <p>Notifications</p>
                                    <i class="material-icons">settings</i>
                                </div>
                                <div class="notification-body">
                                    <div class="notification-recieved">
                                        <div class="d-flex justify-content-start pt-1">
                                            <img src="<?php echo e(asset('users/img/team-2.jpg')); ?>" class="img-responsive rounded-circle account-img pl-1" alt="user" width="40px" height="40px">
                                            <a href="" class="d-flex flex-column">
                                                <p class="p-2">
                                                    <span class="pl-1">Amira</span> send notification to you</p>
                                                    <p class="notification-time">20:8 pm</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="notification-recieved">
                                        <div class="d-flex justify-content-start pt-1">
                                            <img src="<?php echo e(asset('users/img/team-2.jpg')); ?>" class="img-responsive rounded-circle account-img pl-1" alt="user" width="40px" height="40px">
                                            <a  href="" class="d-flex flex-column">
                                                <p class="p-2">
                                                    <span class="pl-1">Amira</span> send notification to you</p>
                                                    <p class="notification-time">20:8 pm</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="notification-recieved">
                                        <div class="d-flex justify-content-start pt-1">
                                            <img src="<?php echo e(asset('users/img/team-2.jpg')); ?>" class="img-responsive rounded-circle account-img pl-1" alt="user" width="40px" height="40px">
                                            <a href="" class="d-flex flex-column">
                                                <p class="p-2">
                                                    <span class="pl-1">Amira</span> send notification to you</p>
                                                    <p class="notification-time">20:8 pm</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a class="notification-footer">
                                    <div>See All Notifications</div>
                                </a>
                            </div>
                        </div>
                    </li>                                     <!--End  dropdown Notifications Bell -->
                </ul>
            </nav>                                                 <!------- End nav -------->
        </div>
    </header>              <!------------------------------------- End header profile page ------------------------------>
    <br><br><br><br>
    <div class="container container-profile">  <!------------------------------------- Start  profile container ------------------------------>
        <div class="row">
            <div class="col-sm-3">
                <div class="profile-image">
                    <img src="<?php echo e(asset('users/img/team-2.jpg')); ?>" class="img-responsive rounded account-img" alt="user" width="200px" height="200px">
                </div><br>
                <div>
                    <p class="text-center mt-5">Blood Donation</p>
                    <div class="blood-Donation-info">
                        <div class="header">
                            <p class="day">1</p>
                        </div>
                        
                        <div class="footer">
                            <p>January 1, 2016</p>
                        </div>
                    </div>
                </div>
                   
            </div>
            <div class="col-sm-9 mt-3">
                <div class="myInfo">
                    <h2> My Information</h2>
                    <div class="mt-5">
                        <div class="d-flex justify-content-between odd p-2">
                            <p>Name</p>
                            <p class="valueOfInfo">Amira</p>
                        </div>
                        <div class="d-flex justify-content-between p-2">
                            <p>USer Name</p>
                            <p class="valueOfInfo">Amira Mohsen</p>
                        </div>
                        <div class="d-flex justify-content-between odd p-2">
                            <p>Age</p>
                            <p class="valueOfInfo">20 </p>
                        </div>
                        <div class="d-flex justify-content-between p-2">
                            <p>Blood</p>
                            <p class="valueOfInfo">AB+</p>
                        </div>
                        <div class="d-flex justify-content-between odd p-2">
                            <p>Phone</p>
                            <p class="valueOfInfo">01022553367</p>
                        </div>
                        <div class="d-flex justify-content-between p-2">
                            <p>City</p>
                            <p class="valueOfInfo">Alex</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!------------------------------------- End profile container ------------------------------>
    <br>

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
			&copy; Copyright <strong>B+</strong>. All Rights Reserved
		</div>
		<div class="credits">
			Made with love by <a href="#">Hamo2a Team</a>
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
<script src="<?php echo e(asset('users/js/dropdownNotificationAndProfile.js')); ?>"></script>
</body>

</html>
