<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>autoMan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    
	  <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
	  <link rel="stylesheet" href="css/main.css" class="color-switcher-link">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel ="stylesheet" href="css/dashboard.css">
  
	  <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/62879d15b0d10b6f3e733bc2/1g3grr81h';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
  
    
</head>
<body>
  

   <div class="preloader">
     <div class="preloader_image"></div>
  </div>


	<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="modalLoginForm" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="row c-gutter-0">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span>×</span>
				</button>
				<div class="col-6">
					<div class="modal-content">
						<div class="modal-header justify-content-center">
							<h4 class="modal-title">Sign in</h4>
						</div>
						<div class="modal-body">
							<form action="#">
								<div class="form-group has-placeholder">
									<label for="name-sigin">Your Name:</label>
									<input type="text" class="form-control" id="name-sigin" placeholder="Enter your name" name="First name">
								</div>
								<div class="form-group has-placeholder">
									<label for="sigpassword">Password:</label>
									<input type="password" class="form-control" id="sigpassword" placeholder="password" name="sigpassword">
								</div>
								<div class="modal-password">
									<a href="#" class="modal-password-btn">Forgot password?</a> or <a href="#" class="modal-password-btn">Sign Up</a>
								</div>
								<div class="modal-footer d-flex justify-content-center">
									<button type="submit" class="btn btn-small btn-maincolor log-btn">Log in</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-6 ds s-overlay">
					<img src="images/modal-login-form.jpg" alt="">
				</div>
			</div>
		</div>
	</div>


	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

    
			<div class="header_absolute slide_absolute ds bs s-overlay">
				<!--topline section visible only on small screens|-->
				<section class="page_toplogo ds s-overlay s-py-10 s-py-lg-30">
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
									
									<div class="d-flex justify-lg-content-end align-items-center meta-icons">
										<div class="media">
											<div class="icon-styled color-main fs-20">
												<i class="ico-email"></i>
											</div>
											<div class="media-body">
												<h6>Mail Us</h6>
												<p class="fw-400">
													Info@autoMan.com
												</p>
											</div>
										</div>
										<div class="media d-none d-md-flex">
											<div class="icon-styled color-main fs-20">
												<i class="ico-placeholder"></i>
											</div>
											<div class="media-body">
												<h6>Location</h6>
												<p class="fw-400">
													Galle
												</p>
											</div>
										</div>
										<div class="media">
											<div class="icon-styled color-main fs-20">
												<i class="ico-phone-call"></i>
											</div>
											<div class="media-body">
												<h6>Phone</h6>
												<p class="fw-400">
													+94 91 456 78 90
												</p>
											</div>
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
											<li class="active">
												<a href="index.php">Home</a>
												
											</li>

											<li>
												<a href="Mechanic_details.php">Mechanic</a>
											</li>
											<!-- eof pages -->
											<li>
												<a href="carts/store.php">Shops</a>
												
											</li>
											<li>
												<a href="garages_details.php">Garages</a>
											</li>
											
                      <?php  if(isset($_SESSION['customer_name']) ){ ?>
                          <li>
                          <span>
                            <a href="auto/profile.php"><i class="fa fa-user"></i> <?php echo $_SESSION['customer_name'] ?></a> 
                          </span>
                          </li>
                          <li>
                          <span>
                            <a href="auto/appointment.php"><i class="fa fa-user"></i> My Appointements</a> 
                          </span>
                          </li>
                          <li>
                          <span>
                            <a href="auto/dashboard.php"><i class="fa fa-user"></i> Book Appointments</a> 
                          </span>
                          </li>
											<?php } else { ?>
                        <li>
                          <span>
                            <a href="/src/auto/login.php"><i class="fa fa-user"></i> Login</a>
                          </span>
                        </li>
                        <li>
                          <span>
                              <a href="Register1.php"><i class="fa fa-lock"></i> Register</a>
                          </span>
                        </li>
                        <?php } ?>
										</ul>


									</nav>
									<!-- eof main nav -->

                  


								</div>

							</div>
						</div>
					</div>

					<!-- header toggler -->

					<span class="toggle_menu"><span></span></span>

				</header>

			</div>

		

        <section class="page_slider">
          <div class="flexslider" data-nav="false" data-dots="true">
            <ul class="slides">
              <li class="ds bs cover-image flex-slide">
                <span class="flexslider-overlay"></span>
                <img src="images/slide01.jpg" alt="">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="intro_layers_wrapper text-center text-xl-left">
                        <div class="intro_layers">
                          <div class="divider-20 d-none d-lg-block d-xl-none"></div>
                          <div class="intro_layer" data-animation="fadeInDown">
                            <h2 class="text-uppercase intro_featured_word">
                              <span class="color-main">Full</span>
                              <span class="flex-gradient">
                                <span id="typed-strings">
                                  <span>Collision</span>
                                  <span>Tuning</span>
                                  <span>Repair</span>
                                </span>
                                <span id="typed"></span>
                              </span>
                            </h2>
                          </div>
                          <div class="intro_layer" data-animation="fadeInDown">
                            <h2 class="text-uppercase intro_featured_word">
                              & Auto Body Services
                            </h2>
                          </div>
                          <div class="intro_layer" data-animation="fadeInDown">
                            <ul class="list1">
                              <li>Complete Restoration Available</li>
                              <li>Find Mechanic</li>
                              <li>Can Provide available stock</li>
                              <li>We Work with Insurance Companies</li>
                            </ul>
                          </div>
                          
                        </div> <!-- eof .intro_layers -->
  
                      </div> <!-- eof .intro_layers_wrapper -->
                    </div> <!-- eof .col-* -->
                  </div><!-- eof .row -->
                </div><!-- eof .container-fluid -->
                
              </li>
              <li class="ds bs cover-image flex-slide">
                <span class="flexslider-overlay"></span>
                <img src="images/slide02.jpg" alt="">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="intro_layers_wrapper justify-content-center">
                        <div class="intro_layers rotate_layers">
                          <div class="intro_layer" data-animation="fadeInRightBig">
                            <h2 class="text-uppercase intro_before_featured_word text-left">
                              All Makes &
                            </h2>
                          </div>
                          <div class="intro_layer gradient-layer text-center" data-animation="fadeInDown">
                            <h2 class="text-uppercase">
                              <span class="text-layer">
                                <span class="color-main2">RS 2000</span> Off Towing!
                              </span>
                            </h2>
                          </div>
                          <div class="intro_layer text-right" data-animation="fadeInLeftBig">
                            <h2 class="text-uppercase intro_after_featured_word">
                              Models Welcome
                            </h2>
                          </div>
                        </div> <!-- eof .intro_layers -->
  
                      </div> <!-- eof .intro_layers_wrapper -->
                    </div> <!-- eof .col-* -->
                  </div><!-- eof .row -->
                </div><!-- eof .container-fluid -->
               
              </li>
              <li class="ds bs cover-image flex-slide">
                <span class="flexslider-overlay"></span>
                <img src="images/slide03.jpg" alt="">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="intro_layers_wrapper justify-content-center">
                        <div class="intro_layers rotate_layers">
                          <div class="intro_layer" data-animation="fadeInRightBig">
                            <h2 class="text-uppercase intro_before_featured_word text-left">
                              All Makes &
                            </h2>
                          </div>
                          <div class="intro_layer gradient-layer text-center" data-animation="fadeInDown">
                            <h2 class="text-uppercase">
                              <span class="text-layer">
                                <span class="color-main2">RS 2000</span> Off Towing!
                              </span>
                            </h2>
                          </div>
                          <div class="intro_layer text-right" data-animation="fadeInLeftBig">
                            <h2 class="text-uppercase intro_after_featured_word">
                              Models Welcome
                            </h2>
                          </div>
                        </div> <!-- eof .intro_layers -->
  
                      </div> <!-- eof .intro_layers_wrapper -->
                    </div> <!-- eof .col-* -->
                  </div><!-- eof .row -->
                </div><!-- eof .container-fluid -->
               
              </li>
            </ul>
          </div> <!-- eof flexslider -->
        </section>
  
    </header>
    <main>
      <section id = "step" class="s-pt-55 s-pb-0 s-pt-md-50 s-pt-lg-140 s-pb-lg-145 ls ms text-center steps-section">
      <div class="row c-mb-45 c-mb-lg-0">
        <div class="divider-40 d-block d-lg-none"></div>
        <div class="offset-lg-2 col-lg-8 item-content text-center">
          <br/>
          <h3 class="special-heading text-center">Why<span class="text-gradient">Choose</span> Us</h3>
          <p class="fs-20 color-dark">The Car Repair Appointment</p>
          <div class="divider-60 d-none d-lg-block"></div>
          <p>autoMan is an eco-friendly, car Mechanic, Spare parts and detailing service based in Sri Lanka. Our company was founded back in 2015 by a team of experts with more then 10 years of professional car wash experience.</p>
          <p>Our goal is to provide our customers with the friendliest, most convenient hand car wash experience possible. We use the most modern and up-to-date.</p>
          <div class="row text-left c-gutter-60">
            <div class="divider-35"></div>
            <div class="col-md-4">
              <div class="icon-box text-center">
                <div class="icon-styled color-main2 fs-40">
                  <i class="ico-mechanic"></i>
                </div>
                <p>
                  We offer multiple services at a great value
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="icon-box text-center">
                <div class="icon-styled color-main2 fs-40">
                  <i class="ico-car-wash"></i>
                </div>
                <p>
                  Multiple car wash locations throughout Sri Lanka
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="icon-box text-center">
                <div class="icon-styled color-main2 fs-40">
                  <i class="ico-painting"></i>
                </div>
                <p>
                  Biodegradable and eco-friendly products
                </p>
              </div>
            </div>
          </div>
          <div class="divider-33 d-none d-lg-block"></div>
          
        </div>
      </div>
    </section>
     
      <section class="s-pt-55 s-pb-0 s-pt-lg-145 s-pb-lg-150 ls ms blog-section c-gutter-60" id="blog">
        <div class="container">
        <div class="search text-center">
          <h5> Search Whatever You Want</h5>
          <div class="team row">
          <div class="col-md-4 col-12">
              <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                <img src="images/gallery/04.jpg" class="img-fluid">
                <div class="card-body">
                  <h5 class="card-title">Mechanic</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="Mechanic_details.php" class="btn btn-primary">Search Now</a>
                </div>
              </div>
             </div>
          </div>

          <div class="col-md-4 col-12">
            <div class="card mr-2 d-inline-block shadow-lg">
              <div class="card-img-top">
              <img src="images/gallery/10.jpg" class="img-fluid">
              <div class="card-body">
                <h5 class="card-title">Shops</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="carts/index.php" class="btn btn-primary">Search Now</a>
              </div>
            </div>
           </div>
        </div>

        <div class="col-md-4 col-12">
          <div class="card mr-2 d-inline-block shadow-lg">
            <div class="card-img-top">
            <img src="images/gallery/06.jpg" class="img-fluid">
            <div class="card-body">
              <h5 class="card-title">Garages</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="garages_details.php" class="btn btn-primary">Search Now</a>
            </div>
          </div>
         </div>
        </div>  
      </div>
      </div>
      </div>
      </section>  
      

    </main>
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
                  <a href="Mechanic_details.php"><i class="ico-check-circle"></i>Mechanic</a>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  
  
  </body>
</html>