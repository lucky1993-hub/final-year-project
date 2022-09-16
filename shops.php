<!DOCTYPE html>

<html class="no-js">



<head>
	<title>autoMan</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/shop.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/style.css">
	<script src="javascript.js"></script>
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	

</head>

<body>
	

	<!--<div class="preloader">
		<div class="preloader_image"></div>
	</div>->

	

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div><!-- eof .modal -->

	


	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<div class="header_absolute s-parallax ds bs s-overlay">

				<!--topline section visible only on small screens|-->
				<section class="page_toplogo ds s-overlay s-pt-10 s-pb-5 s-py-lg-30">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-12">
								<div class="d-lg-flex justify-content-lg-end align-items-lg-center">
									<div class="mr-auto">
										
										<div class="d-none d-lg-flex justify-content-center justify-content-lg-start">
											<a href="index.html" class="logo">
												<img src="images/logo.png" alt="">
												<span class="logo-text fw-200">auto<span class="fw-500">Man</span></span>
											</a>
										</div>
									</div>
									
								</div>
								<!-- header toggler -->
							</div>
						</div>
					</div>
				</section>


				<!--eof topline-->

				<!-- header with single Bootstrap column only for navigation and includes. Used with topline and toplogo sections. Menu toggler must be in toplogo section -->
				<header class="page_header s-py-10 s-py-lg-0 ds ms s-overlay nav-bordered justify-nav-center">
					<div class="container-fluid">
						<div class="row align-items-center">
							<div class="d-lg-none col-11">
								<a href="index.html" class="logo">
									<img src="images/logo.png" alt="">
									<span class="logo-text fw-200">auto<span class="fw-500">Man</span></span>
								</a>
							</div>
							<div class="col-xl-12">

								<div class="nav-wrap">
									<!-- main nav start -->
									<nav class="top-nav">
										<ul class="nav sf-menu">
											<li>
												<a href="index.php">Home</a>
												
											</li>

											<li>
												<a href="Mechanic_details.php">Mechanic</a>
													</li>
													<!-- eof Mechanic -->

													<li class="active">
														<a href="carts/index.php">Shops</a>
													</li>
													<!-- eof Shops -->
													<li>
														<a href="#">Insurance Company</a>
													</li>
													<!-- Insurance Copany -->
													<li>
														<a href="signIn.php">Sign In</a>
													</li>
													
													<li >
														<a href="Registration.php">Registration</a>
														
														</li>

													</ul>
												</div> <!-- eof mega menu -->
											</li>
											

									</nav>
									<!-- eof main nav -->


								</div>

							</div>
						</div>
					</div>

					<!-- header toggler -->

					<span class="toggle_menu"><span></span></span>

				</header>

				<section class="page_title ds s-pt-105 s-pb-50 s-pt-lg-115 s-pb-lg-60">
					<div class="divider-3 d-none d-lg-block"></div>
					<div class="container">
						<div class="row">

							<div class="col-md-12">
								<h1 class="bold text-center text-lg-left">Register</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="index.php">Home</a>
									</li>
									<li class="breadcrumb-item">
										<a href="Registration.php">Registeration</a>
									</li>
									
								</ol>
							</div>

						</div>
					</div>
				</section>


			</div>
			<section class="ls map-left container-px-0">
				<div class="container-fluid">
					<div class="row align-items-center c-gutter-85">
						<div class="col-xl-6 col-lg-6 col-md-6 col-xs-12">
							<div class="animate page_map" data-animation="scaleAppear">
							<div id="map-canvas"></div>

                                <script src="javascript.js"></script>
                                   <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDE8aB6dRwjXeFv5K19_3ZvThdX7RurR1Q&libraries=places&callback=initialize"></script>
								   
								<!-- .marker -->
							</div>
							
										
									
							<!--.col-* -->
						</div>
						<div class="col-xl-4 col-lg-5 col-md-5 col-12">
							<div class="contact-item animate" data-animation="scaleAppear">
								<h3 class="special-heading">Shops<span class="text-gradient">Registration</span></h3>
								<div class="divider-35"></div>
								<form class=" c-mb-30 c-gutter-20" method="post" action="shops.php">
									<div class="row">
										<div class="col-sm-12">
											<div class="has-placeholder">
												<label for="name">Shop Name </label>
												<input type="text" aria-required="true" size="30" value="" name="shop_name" id="name"  placeholder="Shop Name">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="has-placeholder">
												<label for="address">Address </label>
												<input type="text" aria-required="true" size="30" value="" name="address" id="map-search" placeholder="Address">
											</div>
										</div>
									</div>
									<div class="row">
									<div class="col-sm-12">
											<div class="form-group has-placeholder">
												<label for="lat">latitude </label>
												<input type="text" aria-required="true" size="30" value="" name="latitude" id="lat" class="latitude" placeholder="latitude">
											</div>
										</div>
</div>
<div class="row">
									
									
										<div class="col-sm-12">
											<div class="form-group has-placeholder">
												<label for="longitude">longitude </label>
												<input type="text" aria-required="true" size="30" value="" name="longitude" id="longitude" class="longitude" placeholder="longitude">
											</div>
										</div>
</div>
									
									<div class="row">
										<div class="col-sm-12">
											<div class=" has-placeholder">
												<label for="city">City </label>
												<input type="text" aria-required="true" size="30" value="" name="city" id="city" class="reg-input-city" placeholder="City">
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-sm-12">
											<div class="has-placeholder">
												<label for="email">Email</label>
												<input type="text" size="30" value="" name="email" id="email"  placeholder="Email">
											</div>
										</div>
                                    </div>
									<div class="row">
										<div class="col-sm-12">
											<div class="has-placeholder textarea">
												<label for="password_1">Password</label>
												<input type="password" aria-required="true" size="30" value="" name="password_1" id="password_1"  placeholder="Password">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="has-placeholder textarea">
												<label for="password_2">Confirm Password</label>
												<input type="password" aria-required="true" size="30" value="" name="password_2" id="password_2"  placeholder="Re- enter Password">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="has-placeholder textarea">
												<label for="phone">Confirm Password</label>
												<input type="text" aria-required="true" size="30" value="" name="phone" id="phone"  placeholder="Phone No">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="has-placeholder textarea">
												<label for="image">Shop Image</label>
												<input type="file" aria-required="true" size="30" value="" name="image" id="image"  placeholder="Shop Image">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group has-placeholder textarea">
												<label for="description">Description </label>
												<input type="text" aria-required="true" size="30" value="" name="description" id="description"  placeholder="Description">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12 mt-20">
											
												<button type="submit" id="submit" name="submit" value ="Submit" class="btn btn-small btn-outline-maincolor"><span>Register</span>
												</button>
											
										</div>
									</div>
								</form>
							</div>
						</div>
						<!--.col-* -->
					</div>
				</div>
			</section>


			

            <footer class="page_footer text-center text-md-left ds ms s-pt-65 s-pt-lg-125 s-pb-lg-35 c-gutter-40 main-footer">

<div class="container">
  <div class="row">
    <div class="divider-20 d-none d-lg-block"></div>

    <div class="col-md-6 col-lg-3 animate" data-animation="fadeInUp">

      <div class="widget widget_icons_list">
        <a href="index.html" class="logo">
          <img src="images/logo.png" alt="">
          <span class="logo-text fw-200">auto<span class="fw-500">Man</span></span>
        </a>
        <div class="media side-icon-box">
          <div class="icon-styled color-main">
            <i class="fa fa-map-marker"></i>
          </div>
          <p class="media-body color-grey">Lakmi, Godagedara, Balapitiya</p>
        </div>
        <div class="media side-icon-box">
          <div class="icon-styled color-main">
            <i class="fa fa-phone"></i>
          </div>

          <p class="media-body color-grey">+94 23 456 78 90</p>
        </div>
        <div class="media side-icon-box">
          <div class="icon-styled color-main">
            <i class="fa fa-envelope"></i>
          </div>
          <p class="media-body color-grey">
            <a href="mailto:">Info@autoMan.com</a>
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-3 animate order-md-3 order-lg-2" data-animation="fadeInUp">
      <div class="widget widget_page_links">
        <h3>Useful Pages</h3>
        <ul>
          <li>
            <a href="#"><i class="ico-check-circle"></i>Mechanic</a>
          </li>
          <li>
            <a href="#"><i class="ico-check-circle"></i>Shops</a>
          </li>
          <li>
            <a href="#"><i class="ico-check-circle"></i>Insurance Company</a>
          </li>
          
        </ul>
      </div>
    </div>

    <div class="col-md-6 col-lg-3 animate order-md-4 order-lg-3" data-animation="fadeInUp">
      <div class="widget widget_services_links">
        <h3>Services</h3>
        <ul>
          <li>
            <a href="#"><i class="ico-check-circle"></i>All island Garages</a>
          </li>
          <li>
            <a href="#"><i class="ico-check-circle"></i>Appointment</a>
          </li>
          <li>
            <a href="#"><i class="ico-check-circle"></i>Estimate Cosr</a>
          </li>
          <li>
            <a href="#"><i class="ico-check-circle"></i>Analytics</a>
          </li>
        </ul>
      </div>
    </div>

    

  </div>
</div>
			</footer>


			<section class="page_copyright ds ms s-pt-5 s-pb-25 s-py-lg-20">
				<div class="container">
					<div class="divider-2 d-none d-lg-block"></div>
					<div class="row align-items-center">
						<div class="divider-20 d-none d-lg-block"></div>

						<div class="col-md-12 text-center">
							<p class="social-icons with-border">
								<span><a href="https://www.facebook.com/" class="fa fa-facebook border-icon rounded-icon" title="facebook"></a></span>
								<span><a href="https://telegram.org/" class="fa fa-paper-plane border-icon rounded-icon" title="telegram"></a></span>
								<span><a href="https://www.instagram.com/" class="fa fa-instagram border-icon rounded-icon" title="instagram"></a></span>
							</p>
							<p><a target="_blank" href="https://autoMan.net">autoMan</a></p>
						</div>
						<div class="divider-20 d-none d-lg-block"></div>
					</div>
				</div>
			</section>


		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->

    <?php

    $con = mysqli_connect("localhost","root","","fleet");

    // Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    }


if (isset($_POST['submit'])) {

$shop_name=$_POST['shop_name'];

$email=$_POST['email'];

$address=$_POST['address'];

$latitude=$_POST['latitude'];

$longitude=$_POST['longitude'];

$city=$_POST['city'];

$user_password=$_POST['password_1'];

$mobile=$_POST['phone'];

$image=$_POST['image'];

$description=$_POST['description'];

$role = "Shop";



$query = "INSERT INTO `user`(`user_name`, `email`, `address`,`city`,`lat`,`lng`, `password`,`confirm_password`, `phone_no`, `image`,`description`, `role`) VALUES ('$shop_name','$email','$address','$city','$latitude','$longitude','$user_password', '$user_password_Confirm','$mobile','$image','$description','$role')";


if(mysqli_query($con,$query)){
    echo "Records added successfully.";
    
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

mysqli_close($con);

}






?>



	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>

   
</body>


</html>