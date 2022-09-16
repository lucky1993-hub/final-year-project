<?php
session_start();
$connect = mysqli_connect("localhost","root","","fleet");

?>
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
												<a href="about.html">Mechanic</a>
													</li>
													<!-- eof Mechanic -->

													<li>
														<a href="gallery-image.html">Shops</a>
													</li>
													<!-- eof Shops -->
													<li>
														<a href="pricing.html">Insurance Company</a>
													</li>
													<!-- Insurance Copany -->
													<li>
														<a href="appointment.php">Appointment</a>
													</li>
													
													<li class="active">
														<a href="logout.php">Logout</a>
														
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
								<h1 class="bold text-center text-lg-left">Appointment</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="index.php">Home</a>
									</li>
									<li class="breadcrumb-item">
										<a href="Registration.php">Mechanic</a>
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
						<main class="col-xl-12">
							<article>
								<header class="entry-header mb-30">
									<h1 class="entry-title">Appointment</h1>
									
								</header>
								<!-- .entry-header -->
								<div class="entry-content">
									<div class="woocommerce">
											<form  method="post" action="appointment.php">	
                                              <div class="row">
										        <div class="col-md-6">
											      <div class="form-group  textarea">
											           <label for="customer_name">Customer Name </label>
													   <input type="text" aria-required="true" size="30" value="" name="customer_name" id="customer_name" placeholder="">
											
                                                            </select>
                                                    </div>
												</div>
												<div class="col-md-6">
											      <div class="form-group  textarea">
											            <label for="name">Vehicle Type </label>
                                                             <select id="vehicle_type"  class="form-control selectized" required="true" name="vehicle_type">
                                                               <option value="">Select Vehicle</option>
															   <option value="d">toyota</option>
															   <?php  foreach ($vechiclelist as $key => $vechiclelists) { ?>
                           <option value="<?php echo output($vechiclelists['v_id']) ?>"><?php echo output($vechiclelists['v_name']).' - '. output($vechiclelists['v_registration_no']); ?></option>
                           <?php  } ?>
                                                             </select>
                                                   </div>
												</div>
											  </div>
															  
										   <div class="row">
										        <div class="col-md-6">
											         <div class="form-group  textarea">
												             <label for="mechanic_name">Mechanic </label>
                                                                  <input type="text" aria-required="true" size="30" value="" name="mechanic_name" id="mechanic_name" placeholder="">
											
                                                      </div>
												</div>
												<div class="col-md-6">
													<div class="form-group  textarea">
									                        <label for="name">Service Type </label>
                                                               <select id="service_type"  class="form-control selectized" required="true" name="service_type">
                                                                    <option value="">Service Type</option>
                        <option <?php if((isset($tripdetails)) && $tripdetails[0]['t_type'] == 'repair'){ echo 'selected';} ?> value="repair">Repair</option>
                        <option <?php if((isset($tripdetails)) && $tripdetails[0]['t_type'] == 'fuel'){ echo 'selected';} ?> value="fuel">Fuel</option>
                                                                 </select>
                                                     </div>
												 </div>
											</div>
                                     
												
											<div class="row">
										        <div class="col-md-6">
											         <div class="form-group  textarea">
												             <label for="Email">Email</label>
                                                                  <input type="text" aria-required="true" size="30" value="" name="Email" id="Email" placeholder="">
											
                                                      </div>
												</div>
												<div class="col-md-6">
													<div class="form-group  textarea">
									                        <label for="phone_no">Phone no </label>
															<input type="text" aria-required="true" size="30" value="" name="phone_no" id="phone_no" placeholder="">
											
                                                     </div>
												 </div>
											</div>
											<div class="row">
										        <div class="col-md-6">
											         <div class="form-group  textarea">
												             <label for="address">Address</label>
                                                                  <input type="text" aria-required="true" size="30" value="" name="address" id="address" placeholder="">
											
                                                      </div>
												</div>
												<div class="col-md-6">
													<div class="form-group  textarea">
									                        <label for="date">Appointment Date </label>
															<input type="date" aria-required="true" size="30" value="" name="date" id="date" placeholder="">
											                </div>
												 </div>
											</div>
											
									
									<div class="row">
										<div class="col-sm-12 mt-20">
											
												<button type="submit" id="submit" name="submit" value ="Submit" class="btn btn-small btn-outline-maincolor"><span>Add Appointment</span>
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

$customer_name=$_POST['customer_name'];

$vehicle_type=$_POST['vehicle_type'];

$mechanic_name=$_POST['mechanic_name'];

$service_type=$_POST['service_type'];

$Email=$_POST['Email'];

$phone_no=$_POST['phone_no'];

$address=$_POST['address'];

$date=$_POST['date'];





$query = "INSERT INTO `appointment`(`shop_name`, `email`, `address`,`city`,`latitude`,`longitude`, `password`, `phone_no`, `image`,`description`, `owner_name`) VALUES ('$customer_name','$vehicle_type','$mechanic_name','$service_type','$Email','$phone_no','$address','$date')";


if(mysqli_query($con,$query)){
    echo '<div class="alert alert-sucess" role="alert"> Records added successfully.</div>';
    
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