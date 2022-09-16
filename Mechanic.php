<!DOCTYPE html>

<html class="no-js">



<head>
	<title>autoMan</title>
	<meta charset="utf-8">
	
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/shop.css" class="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	

</head>

<body>
	

	

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">
			

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

													<li>
														<a href="carts/index.php">Shops</a>
													</li>
													<!-- eof Shops -->
													<li>
														<a href="garages_details.php">Garages</a>
													</li>
													<!-- Insurance Copany -->
													<li>
														<a href="signIn.php">Sign In</a>
													</li>
													
													<li class="active">
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


			<section class="ls s-pt-50 s-pb-60 s-pt-lg-90 s-pb-lg-100 s-pt-xl-140 s-pb-xl-150">
				<div class="divider-3"></div>
				<div class="container">
					<div class="row">
						<main class="col-lg-12">
							<article>
								<header class="entry-header mb-30">
									<h1 class="entry-title">Mechanic Registration</h1>
									
								</header>
								<!-- .entry-header -->
								<div class="entry-content">
									<div class="woocommerce">
										
                                   

										

											<form  method="post" action="Mechanic.php">


												<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
													<label for="account_first_name">Name <span class="required">*</span>
													</label>
													<input type="text" class="form-control woocommerce-Input woocommerce-Input--text input-text" name="account_first_name" id="account_first_name" value="" placeholder="Name">
												</p>
												

												<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
													<label for="account_email">Email address <span class="required">*</span>
													</label>
													<input type="email" class="form-control woocommerce-Input woocommerce-Input--email input-text" name="email" id="account_email" value="username@gmail.com">
												</p>
                                                

                                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
													<label for="account_address">Address <span class="required">*</span>
													</label>
													<input type="texttextarea" class="form-control woocommerce-Input woocommerce-Input--address input-text" name="address" id="address" placeholder="Address">
												</p>

                                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
														<label for="password_1">Password</label>
														<input type="password" class="form-control woocommerce-Input woocommerce-Input--password input-text" name="password_1" id="password_1" placeholder="New password">
													</p>
											    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
														<label for="password_2">Confirm  password</label>
														<input type="password" class="form-control woocommerce-Input woocommerce-Input--password input-text" name="password_2" id="password_2" placeholder="Confirm new password">
											    </p>
                                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
													<label for="description">Description
													</label>
													<input type="text" class="form-control woocommerce-Input woocommerce-Input--description input-text" name="description" id="description" placeholder="Description">
												</p>

                                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
													<label for="phone">Phone No <span class="required">*</span>
													</label>
													<input type="text" class="form-control woocommerce-Input woocommerce-Input--phone input-text" name="phone" id="phone" placeholder="phone">
												</p>

                                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
													<label for="image">image <span class="required">*</span>
													</label>
													<input type="file" class="form-control woocommerce-Input woocommerce-Input--phone input-file" name="image" id="image" placeholder="Image">
                                                </p>

												
												<div class="clear"></div>
												<div class="divider-20"></div>
												<p>
													<button type="submit" class="woocommerce-Button btn btn-maincolor" name="submit" value="Submit"><span>Submit</span></button>
												</p>
											</form>

										</div>
									</div>
								</div>
								<!-- .entry-content -->
							</article>

						</main>
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

$first_name=$_POST['account_first_name'];

//$last_name=$_POST['account_last_name'];

$email=$_POST['email'];

$address=$_POST['address'];

$user_password=$_POST['password_1'];
if(CRYPT_MD5 ==1){
	$encrypted_pwd = crypt($user_password, '$12$hrd$reer');
}

$hash = password_hash($user_passwor, PASSWORD_DEFAULT);

$mobile=$_POST['phone'];

//$description=$_POST['description'];

$image = $_POST['image'];



$query = "INSERT INTO `drivers`(`d_name`, `d_email`, `d_address`, `password`, `d_mobile`, `d_image`) VALUES ('$first_name','$email','$address','$encrypted_pwd','$mobile','$image')";



//INSERT INTO `mechanic` (`id`, `name`, `email`, `address`, `password`, `phone_no`, `description`, `mechanic_image`, `status`) VALUES ('1', 'hh', 'g', 'ttt', '22222', '555', 'ttt', '', '1');

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