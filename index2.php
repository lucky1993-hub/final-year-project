<?php

	include 'login.php';

	/*if (!empty($_SESSION['login_user'])){

		header("location: profile.php?user=".$_SESSION['login_user']);

		exit();

	}

	$error = $_GET['error'];

	$error = stripslashes($_GET['error']);

	$error = mysql_real_escape_string($_GET['error']);

	$error = strip_tags($_GET['error']);

	echo "<center>$error</center>";*/

?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


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
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form" action="#">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="btn">Search</button>
			</form>
		</div>
	</div>

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

	<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="modalLoginForm" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="row c-gutter-0">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span>??</span>
				</button>
				<div class="col-6">
					<div class="modal-content">
						<div class="modal-header justify-content-center">
							<h4 class="modal-title">Sign in</h4>
						</div>
						<div class="modal-body">
							<form action="login.php">
								<div class="form-group has-placeholder">
									<label for="name-sigin">Your Name:</label>
									<input type="text" class="form-control" id="name-sigin" placeholder="Enter your Email" name="log_email">
								</div>
								<div class="form-group has-placeholder">
									<label for="sigpassword">Password:</label>
									<input type="password" class="form-control" id="sigpassword" placeholder="Password" name="log_passwd">
								</div>
								<div class="modal-password">
									<a href="#" class="modal-password-btn">Forgot password?</a> or <a href="Register1.php" class="modal-password-btn">Sign Up</a>
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

			<!-- template sections -->

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
				<!-- header with two Bootstrap columns - left for logo and right for navigation and includes (search, social icons, additional links and buttons etc -->
				<header class="page_header s-py-10 s-py-lg-0 ds ms s-overlay nav-bordered">
					<div class="container">
						<div class="row align-items-center">
							<div class="d-lg-none col-11">
								<a href="index.html" class="logo">
									<img src="images/logo.png" alt="">
									<span class="logo-text fw-500">Candy<span class="fw-200">Car</span></span>
								</a>
							</div>
							<div class="col-xl-12 col-lg-8 col-md-7 col-1">
								<div class="nav-wrap">

									<!-- main nav start -->
									<nav class="top-nav">
										<ul class="nav sf-menu">
											<li class="active">
												<a href="index-2.html">Home</a>
												<ul>
													<li>
														<a href="index-2.html">Home 1</a>
													</li>
													<li>
														<a href="index-alt.html">Home 2</a>
													</li>
													<li>
														<a href="index_static.html">Static Intro</a>
													</li>
													<li>
														<a href="index_singlepage.html">Single Page</a>
													</li>
												</ul>
											</li>

											<li>
												<a href="about.html">Pages</a>
												<ul>
													<li>
														<a href="team.html">Team</a>
														<ul>
															<li>
																<a href="team.html">Team List</a>
															</li>
															<li>
																<a href="team-single.html">Team Member</a>
															</li>
														</ul>
													</li>
													<!-- blog -->
													<li>
														<a href="blog-right.html">Blog</a>
														<ul>

															<li>
																<a href="blog-right.html">Right Sidebar</a>
															</li>
															<li>
																<a href="blog-left.html">Left Sidebar</a>
															</li>
															<li>
																<a href="blog-full.html">No Sidebar</a>
															</li>
															<li>
																<a href="blog-grid.html">Blog Grid</a>
															</li>

															<li>
																<a href="blog-single-right.html">Post</a>
																<ul>
																	<li>
																		<a href="blog-single-right.html">Right Sidebar</a>
																	</li>
																	<li>
																		<a href="blog-single-left.html">Left Sidebar</a>
																	</li>
																	<li>
																		<a href="blog-single-full.html">No Sidebar</a>
																	</li>
																</ul>
															</li>

															<li>
																<a href="blog-single-video-right.html">Video Post</a>
																<ul>
																	<li>
																		<a href="blog-single-video-right.html">Right Sidebar</a>
																	</li>
																	<li>
																		<a href="blog-single-video-left.html">Left Sidebar</a>
																	</li>
																	<li>
																		<a href="blog-single-video-full.html">No Sidebar</a>
																	</li>
																</ul>
															</li>

														</ul>
													</li>
													<!-- eof blog -->

													<li>
														<a href="gallery-image.html">Gallery</a>
														<ul>
															<!-- Gallery image only -->
															<li>
																<a href="gallery-image.html">Gallery Regular</a>
																<ul>
																	<li>
																		<a href="gallery-image-2-cols.html">2 columns</a>
																	</li>
																	<li>
																		<a href="gallery-image.html">3 columns</a>
																	</li>
																	<li>
																		<a href="gallery-image-4-cols-fullwidth.html">4 columns</a>
																	</li>

																</ul>
															</li>
															<!-- eof Gallery image only -->

															<!-- Gallery with title -->
															<li>
																<a href="gallery-title.html">Gallery Title</a>
																<ul>
																	<li>
																		<a href="gallery-title-2-cols.html">2 columns</a>
																	</li>
																	<li>
																		<a href="gallery-title.html">3 column</a>
																	</li>
																	<li>
																		<a href="gallery-title-4-cols-fullwidth.html">4 columns</a>
																	</li>
																</ul>
															</li>
															<!-- eof Gallery with title -->

															<!-- Gallery with excerpt -->
															<li>
																<a href="gallery-excerpt.html">Gallery Excerpt</a>
																<ul>
																	<li>
																		<a href="gallery-excerpt-2-cols.html">2 columns</a>
																	</li>
																	<li>
																		<a href="gallery-excerpt.html">3 column</a>
																	</li>
																	<li>
																		<a href="gallery-excerpt-4-cols-fullwidth.html">4 columns</a>
																	</li>
																</ul>
															</li>
															<!-- eof Gallery with excerpt -->


															<li>
																<a href="gallery-tiled.html">Tiled Gallery</a>
															</li>
															<!-- Gallery item -->

															<li>
																<a href="gallery2.html">Direction Gallery</a>
															</li>
															<li>
																<a href="gallery-single.html">Gallery Single</a>
																<ul>
																	<li>
																		<a href="gallery-single.html">Gallery Single</a>
																	</li>
																	<li>
																		<a href="gallery-single2.html">Gallery Single 2</a>
																	</li>
																</ul>
															</li>
															<!-- eof Gallery item -->
														</ul>
													</li>
													<!-- eof Gallery -->
													<li>
														<a href="pricing.html">Pricing</a>
													</li>
													<!-- shop -->
													<li>
														<a href="shop-right.html">Shop</a>
														<ul>
															<li>
																<a href="shop-account-dashboard.html">Account</a>
																<ul>

																	<li>
																		<a href="shop-account-details.html">Account details</a>
																	</li>
																	<li>
																		<a href="shop-account-addresses.html">Addresses</a>
																	</li>
																	<li>
																		<a href="shop-account-address-edit.html">Edit Address</a>
																	</li>
																	<li>
																		<a href="shop-account-orders.html">Orders</a>
																	</li>
																	<li>
																		<a href="shop-account-order-single.html">Single Order</a>
																	</li>
																	<li>
																		<a href="shop-account-downloads.html">Downloads</a>
																	</li>
																	<li>
																		<a href="shop-account-password-reset.html">Password Reset</a>
																	</li>
																	<li>
																		<a href="shop-account-login.html">Login/Logout</a>
																	</li>

																</ul>
															</li>
															<li>
																<a href="shop-right.html">Right Sidebar</a>
															</li>
															<li>
																<a href="shop-left.html">Left Sidebar</a>
															</li>
															<li>
																<a href="shop-product-right.html">Product Right Sidebar</a>
															</li>
															<li>
																<a href="shop-product-left.html">Product Left Sidebar</a>
															</li>
															<li>
																<a href="shop-cart.html">Cart</a>
															</li>
															<li>
																<a href="shop-checkout.html">Checkout</a>
															</li>
															<li>
																<a href="shop-order-received.html">Order Received</a>
															</li>

														</ul>
													</li>
													<!-- eof shop -->

													<!-- features -->
													<li>
														<a href="shortcodes_iconbox.html">Shortcodes</a>
														<ul>
															<li>
																<a href="shortcodes_typography.html">Typography</a>
															</li>
															<li>
																<a href="shortcodes_buttons.html">Buttons</a>
															</li>

															<li>
																<a href="shortcodes_iconbox.html">Icon Boxes</a>
															</li>
															<li>
																<a href="shortcodes_progress.html">Progress</a>
															</li>
															<li>
																<a href="shortcodes_tabs.html">Tabs &amp; Collapse</a>
															</li>
															<li>
																<a href="shortcodes_bootstrap.html">Bootstrap Elements</a>
															</li>
															<li>
																<a href="shortcodes_animation.html">Animation</a>
															</li>
															<li>
																<a href="shortcodes_icons.html">Template Icons</a>
															</li>
															<li>
																<a href="shortcodes_socialicons.html">Social Icons</a>
															</li>
														</ul>
													</li>
													<!-- eof shortcodes -->

													<li>
														<a href="shortcodes_widgets_default.html">Widgets</a>
														<ul>
															<li>
																<a href="shortcodes_widgets_default.html">Default Widgets</a>
															</li>
															<li>
																<a href="shortcodes_widgets_shop.html">Shop Widgets</a>
															</li>
															<li>
																<a href="shortcodes_widgets_custom.html">Custom Widgets</a>
															</li>
														</ul>

													</li>


													<!-- events -->
													<li>
														<a href="events-left.html">Events</a>
														<ul>
															<li>
																<a href="events-left.html">Left Sidebar</a>
															</li>
															<li>
																<a href="events-right.html">Right Sidebar</a>
															</li>
															<li>
																<a href="events-full.html">Full Width</a>
															</li>
															<li>
																<a href="event-single-left.html">Single Event</a>
																<ul>
																	<li>
																		<a href="event-single-left.html">Left Sidebar</a>
																	</li>
																	<li>
																		<a href="event-single-right.html">Right Sidebar</a>
																	</li>
																	<li>
																		<a href="event-single-full.html">Full Width</a>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<!-- eof events -->
													<li>
														<a href="comingsoon.html">Comingsoon</a>
													</li>
													<li>
														<a href="404.html">404</a>
													</li>

												</ul>
											</li>
											<!-- eof pages -->
											<li>
												<a href="services.html">Services</a>
												<ul>
													<li>
														<a href="services.html">Services 1</a>
													</li>
													<li>
														<a href="services2.html">Services 2</a>
													</li>
													<li>
														<a href="services3.html">Services 3</a>
													</li>
													<li>
														<a href="service-single.html">Single Service</a>
													</li>
												</ul>
											</li>
											<li>
												<a href="about.html">About Us</a>
											</li>
											<li>
											<li>
												<a href="faq.html">FAQ</a>
												<ul>
													<li>
														<a href="faq.html">FAQ</a>
													</li>
													<li>
														<a href="faq2.html">FAQ 2</a>
													</li>
												</ul>
											</li>
											<li>
												<a href="#">Features</a>
												<div class="mega-menu">
													<ul class="mega-menu-row">
														<li class="mega-menu-col">
															<a href="#">Headers</a>
															<ul>
																<li>
																	<a href="header1.html">Header Type 1</a>
																</li>
																<li>
																	<a href="header2.html">Header Type 2</a>
																</li>
																<li>
																	<a href="header3.html">Header Type 3</a>
																</li>
																<li>
																	<a href="header4.html">Header Type 4</a>
																</li>
																<li>
																	<a href="header5.html">Header Type 5</a>
																</li>
																<li>
																	<a href="header6.html">Header Type 6</a>
																</li>
															</ul>
														</li>
														<li class="mega-menu-col">
															<a href="#">Side Menus</a>
															<ul>
																<li>
																	<a href="header-side.html">Push Left</a>
																</li>
																<li>
																	<a href="header-side-right.html">Push Right</a>
																</li>
																<li>
																	<a href="header-side-slide.html">Slide Left</a>
																</li>
																<li>
																	<a href="header-side-slide-right.html">Slide Right</a>
																</li>
																<li>
																	<a href="header-side-sticked.html">Sticked Left</a>
																</li>
																<li>
																	<a href="header-side-sticked-right.html">Sticked Right</a>
																</li>
															</ul>
														</li>
														<li class="mega-menu-col">
															<a href="title1.html">Title Sections</a>
															<ul>
																<li>
																	<a href="title1.html">Title section 1</a>
																</li>
																<li>
																	<a href="title2.html">Title section 2</a>
																</li>
																<li>
																	<a href="title3.html">Title section 3</a>
																</li>
																<li>
																	<a href="title4.html">Title section 4</a>
																</li>
																<li>
																	<a href="title5.html">Title section 5</a>
																</li>
																<li>
																	<a href="title6.html">Title section 6</a>
																</li>
															</ul>
														</li>
														<li class="mega-menu-col">
															<a href="footer1.html#footer">Footers</a>
															<ul>
																<li>
																	<a href="footer1.html#footer">Footer Type 1</a>
																</li>
																<li>
																	<a href="footer2.html#footer">Footer Type 2</a>
																</li>
																<li>
																	<a href="footer3.html#footer">Footer Type 3</a>
																</li>
																<li>
																	<a href="footer4.html#footer">Footer Type 4</a>
																</li>
																<li>
																	<a href="footer5.html#footer">Footer Type 5</a>
																</li>
																<li>
																	<a href="footer6.html#footer">Footer Type 6</a>
																</li>
															</ul>
														</li>
														<li class="mega-menu-col">
															<a href="copyright1.html#copyright">Copyright</a>

															<ul>
																<li>
																	<a href="copyright1.html#copyright">Copyright 1</a>
																</li>
																<li>
																	<a href="copyright2.html#copyright">Copyright 2</a>
																</li>
																<li>
																	<a href="copyright3.html#copyright">Copyright 3</a>
																</li>
																<li>
																	<a href="copyright4.html#copyright">Copyright 4</a>
																</li>
																<li>
																	<a href="copyright5.html#copyright">Copyright 5</a>
																</li>
																<li>
																	<a href="copyright6.html#copyright">Copyright 6</a>
																</li>
															</ul>
														</li>

													</ul>
												</div> <!-- eof mega menu -->
											</li>
											<!-- eof features -->
											<!-- contacts -->
											<li>
												<a href="contact.html">Contact</a>
												<ul>
													<li>
														<a href="contact.html">Contact 1</a>
													</li>
													<li>
														<a href="contact2.html">Contact 2</a>
													</li>
													<li>
														<a href="contact3.html">Contact 3</a>
													</li>
													<li>
														<a href="contact4.html">Contact 4</a>
													</li>
												</ul>
											</li>
											<!-- eof contacts -->
										</ul>


									</nav>
									<!-- eof main nav -->

									<!--hidding includes on small devices. They are duplicated in topline-->
									<ul class="top-includes d-none d-xl-block">
										<li>

											<!--modal search-->
											<span>
												<a href="#" class="search_modal_button">
													<i class="fa fa-search"></i>
												</a>
											</span>


										</li>
										<li>
											<div class="dropdown shop-card-dropdown">
												<a class="dropdown-toggle dropdown-shopping-cart" href="#" role="button" id="dropdown-shopping-cart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="ico-shopping-bag"></i>
													<span class="badge bg-maincolor">2</span>
												</a>
												<div class="dropdown-menu dropdown-menu-right ls" aria-labelledby="dropdown-shopping-cart">
													<div class="widget woocommerce widget_shopping_cart">
														<h4>Shopping<span class="text-gradient">Cart</span></h4>
														<div class="widget_shopping_cart_content">

															<ul class="product_list_widget">
																<li>
																	<a href="shop-product-right.html">
																		<img src="images/shop/05.jpg" alt="">
																		<span class="product-title fw-500">shock absorber car</span>
																	</a>
																	<div class="d-flex justify-content-between shop-item">
																		<p>Auto parts</p>
																		<a href="#" class="remove" aria-label="Remove this item" data-product_id="73" data-product_sku=""><i class="fs-14 ico-trash color-main"></i></a>
																	</div>
																	<div class="d-flex align-items-center">
																		<div class="woocommerce-Price-amount amount">
																			<span class="woocommerce-Price-currencySymbol">$</span>55.00
																		</div>
																		<div class="quantity single">
																			<input type="button" value="+" class="plus">
																			<i class="fa fa-caret-up" aria-hidden="true"></i>
																			<input type="number" class="input-text qty text" step="1" min="1" max="1000" name="quantity" value="1" title="Qty" size="4">
																			<input type="button" value="-" class="minus">
																			<i class="fa fa-caret-down" aria-hidden="true"></i>
																		</div>
																	</div>
																</li>
																<li>
																	<a href="shop-product-right.html">
																		<img src="images/shop/01.jpg" alt="">
																		<span class="product-title fw-500">Oil filter car</span>
																	</a>
																	<div class="d-flex justify-content-between shop-item">
																		<p>Auto parts</p>
																		<a href="#" class="remove" aria-label="Remove this item" data-product_id="73" data-product_sku=""><i class="fs-14 ico-trash color-main"></i></a>
																	</div>
																	<div class="d-flex align-items-center">
																		<div class="woocommerce-Price-amount amount">
																			<span class="woocommerce-Price-currencySymbol">$</span>55.00
																		</div>
																		<div class="quantity single">
																			<input type="button" value="+" class="plus">
																			<i class="fa fa-caret-up" aria-hidden="true"></i>
																			<input type="number" class="input-text qty text" step="1" min="1" max="1000" name="quantity" value="1" title="Qty" size="4">
																			<input type="button" value="-" class="minus">
																			<i class="fa fa-caret-down" aria-hidden="true"></i>
																		</div>
																	</div>
																</li>
															</ul>

															<p class="woocommerce-mini-cart__total total">
																<strong>Subtotal:</strong>
																<span class="woocommerce-Price-amount amount fw-500">
																	<span class="woocommerce-Price-currencySymbol">$</span>
																	110.00
																</span>
															</p>

															<p class="woocommerce-mini-cart__buttons buttons">
																<a href="shop-cart.html" class="btn btn-small btn-maincolor button wc-forward">View cart</a>
																<a href="shop-checkout.html" class="btn btn-small btn-outline-maincolor button checkout wc-forward">Checkout</a>
															</p>
														</div>
													</div>


												</div>
											</div>
										</li>
										<li>
											<a href="#" data-toggle="modal" data-target="#modalLoginForm"><i class="ico-user-alt"></i></a>
										</li>
									</ul>

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
							<img src="images/slide02.jpg" alt="">
							<video loop="" muted="" class="myVideo">
								<source src="video/video.mp4" data-src="video/video.mp4" type="video/mp4">
							</video>
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<div class="intro_layers_wrapper text-center text-xl-left">
											<div class="intro_layers">
												<div class="divider-20 d-none d-lg-block d-xl-none"></div>
												<div class="intro_layer" data-animation="fadeInRight">
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
												<div class="intro_layer" data-animation="fadeInRight">
													<h2 class="text-uppercase intro_featured_word">
														& Auto Body Services
													</h2>
												</div>
												<div class="intro_layer" data-animation="fadeInUp">
													<ul class="list1">
														<li>Complete Restoration Available</li>
														<li>9 Foot Tall Spray Booth</li>
														<li>Can Paint & Repair Sprinter Vans</li>
														<li>We Work with Insurance Companies</li>
													</ul>
												</div>
												<div class="intro_layer" data-animation="fadeInUp">
													<div class="slide-button">
														<a class="btn btn-small btn-maincolor" href="#">Get Started</a>
													</div>
												</div>
											</div> <!-- eof .intro_layers -->

										</div> <!-- eof .intro_layers_wrapper -->
									</div> <!-- eof .col-* -->
								</div><!-- eof .row -->
							</div><!-- eof .container-fluid -->
							<div class="ds social-flex d-none d-lg-block">
								<p class="social-icons with-border">
									<span><a href="#" class="fa fa-facebook border-icon rounded-icon" title="facebook"></a></span>
									<span><a href="#" class="fa fa-paper-plane border-icon rounded-icon" title="telegram"></a></span>
									<span><a href="#" class="fa fa-instagram border-icon rounded-icon" title="instagram"></a></span>
								</p>
							</div>
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
												<div class="intro_layer gradient-layer text-center" data-animation="fadeInRight">
													<h2 class="text-uppercase">
														<span class="text-layer">
															<span class="color-main2">$20</span> Off Towing!
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
							<div class="ds social-flex d-none d-lg-block">
								<p class="social-icons with-border">
									<span><a href="#" class="fa fa-facebook border-icon rounded-icon" title="facebook"></a></span>
									<span><a href="#" class="fa fa-paper-plane border-icon rounded-icon" title="telegram"></a></span>
									<span><a href="#" class="fa fa-instagram border-icon rounded-icon" title="instagram"></a></span>
								</p>
							</div>
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
												<div class="intro_layer gradient-layer text-center" data-animation="fadeInRight">
													<h2 class="text-uppercase">
														<span class="text-layer">
															<span class="color-main2">$20</span> Off Towing!
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
							<div class="ds social-flex d-none d-lg-block">
								<p class="social-icons with-border">
									<span><a href="#" class="fa fa-facebook border-icon rounded-icon" title="facebook"></a></span>
									<span><a href="#" class="fa fa-paper-plane border-icon rounded-icon" title="telegram"></a></span>
									<span><a href="#" class="fa fa-instagram border-icon rounded-icon" title="instagram"></a></span>
								</p>
							</div>
						</li>
					</ul>
				</div> <!-- eof flexslider -->
			</section>

			<section class="ls s-py-60 s-py-lg-150">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="row align-items-center text-center text-lg-left c-gutter-0">
								<div class="col-lg-6">
									<img src="images/team/07.jpg" alt="">
									<div class="divider-40 d-block d-lg-none"></div>
								</div>
								<div class="left-content col-lg-6 text-center text-lg-left">
									<div class="divider-30 d-none d-lg-block"></div>
									<h4 class="mt-0">Stephen S.<span class="text-gradient">Hendrick</span></h4>
									<p class="fs-20 color-dark">The Car Repair Appointment Founder</p>
									<div class="divider-60 d-none d-xl-block"></div>
									<p>
										Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue dui.
									</p>
									<p>
										Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
									</p>
									<p>
										Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
									</p>
									<div class="divider-60 d-none d-xl-block"></div>
									<p class="signature text-center with-border overflow-hidden">
										<img src="images/signature.png" alt="">
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="ds bs s-py-60 s-pt-lg-145 s-pb-lg-150 call-to-action s-parallax s-overlay text-center text-lg-left" id="action">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-8 col-xl-7">
							<h3 class="special-heading">$25 Off<span class="text-gradient">Any Repair</span> Or Service</h3>
							<div class="divider-35 d-none d-md-block"></div>
							<p class="big fw-400">$25 off repairs totaling $150 or more in labor expenses. One coupon per visit. Not valid with other offer or special. Coupon must be presented.</p>
							<div class="divider-43 d-none d-md-block"></div>
							<a href="#" class="btn btn-small btn-maincolor">Get Started</a>
							<a href="#" class="btn btn-small btn-outline-maincolor">Schedule Maintenance</a>
						</div>
					</div>
				</div>
			</section>

			<section class="ls s-pt-55 s-pt-md-50 s-pb-5 s-pt-lg-140 s-pb-lg-145 service-section service2 text-center text-lg-left c-gutter-0" id="service">
				<div class="container">
					<div class=" col-12 mb-50 text-center">
						<h4>Our<span class="text-gradient">Services</span></h4>
						<p class="fs-20 color-dark">The Car Repair Appointment</p>
						<div class="divider-60 d-none d-xl-block"></div>
					</div>
					<div class="row align-items-center">
						<div class="col-lg-4 col-xl-3">
							<div class="media">
								<div class="icon-styled color-main fs-40">
									<i class="ico-tow-truck"></i>
								</div>
								<div class="media-body">
									<h6>
										Car Towing
									</h6>
									<p>
										Drumstick leberkas tenderloin swine laborum cupim bacon.
									</p>
								</div>
							</div>
							<div class="divider-130 d-none d-lg-block"></div>
							<div class="media">
								<div class="icon-styled color-main fs-40">
									<i class="ico-car"></i>
								</div>
								<div class="media-body">
									<h6>
										Flood Insurance
									</h6>
									<p>
										Drumstick leberkas tenderloin swine laborum cupim bacon.
									</p>
								</div>
							</div>
							<div class="divider-130 d-none d-lg-block"></div>
							<div class="media">
								<div class="icon-styled color-main fs-40">
									<i class="ico-car-alt"></i>
								</div>
								<div class="media-body">
									<h6>
										Fire Insurance
									</h6>
									<p>
										Drumstick leberkas tenderloin swine laborum cupim bacon.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-xl-6">
							<img src="images/02.png" alt="">
						</div>
						<div class="col-lg-4 col-xl-3">
							<div class="media">
								<div class="icon-styled color-main fs-40">
									<i class="ico-breakdown"></i>
								</div>
								<div class="media-body">
									<h6>
										Hail Damage
									</h6>
									<p>
										Drumstick leberkas tenderloin swine laborum cupim bacon.
									</p>
								</div>
							</div>
							<div class="divider-130 d-none d-lg-block"></div>
							<div class="media">
								<div class="icon-styled color-main fs-40">
									<i class="ico-accident"></i>
								</div>
								<div class="media-body">
									<h6>
										Accident Insurance
									</h6>
									<p>
										Drumstick leberkas tenderloin swine laborum cupim bacon.
									</p>
								</div>
							</div>
							<div class="divider-130 d-none d-lg-block"></div>
							<div class="media">
								<div class="icon-styled color-main fs-40">
									<i class="ico-motorcycle"></i>
								</div>
								<div class="media-body">
									<h6>
										Motorcycle Towing
									</h6>
									<p>
										Drumstick leberkas tenderloin swine laborum cupim bacon.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="ls ms s-pt-60 s-pb-45 s-pt-lg-145 s-pb-lg-140 s-pb-xl-150 c-gutter-10">
				<div class="container">
					<div class="col-12 mb-55">
						<h3 class="special-heading text-center">Our<span class="text-gradient">Pricing</span> Plans</h3>
						<p class="fs-20 color-dark">The Car Repair Appointment</p>
						<div class="divider-65 d-none d-lg-block"></div>
					</div>
					<div class="row c-mb-lg-10 c-mb-xl-0">
						<div class="col-xl-3 col-md-6">

							<div class="pricing-plan plan1 cs">
								<div class="plan-name">
									<h5 class="text-uppercase">
										Routine Maintenance
									</h5>
								</div>
								<div class="plan-description">
									<h6 class="fw-300 text-uppercase">
										Start from
									</h6>
								</div>
								<div class="price-wrap color-main2">
									<span class="plan-price">76</span>
									<span class="plan-sign">$</span>

								</div>
								<div class="plan-features">
									<ul>
										<li><i class="ico-check fs-12 fw-900"></i>6 x car wash</li>
										<li><i class="ico-check fs-12 fw-900"></i>1 x lights check</li>
										<li><i class="ico-check fs-12 fw-900"></i>1 x tires replacement</li>
										<li><i class="ico-check fs-12 fw-900"></i>1 x computer diagnose</li>
									</ul>
								</div>
								<div class="plan-button">
									<a href="#" class="btn btn-small btn-maincolor2">Get Started</a>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6">

							<div class="pricing-plan plan2 cs">
								<div class="plan-name">
									<h5 class="text-uppercase">
										Electronics Diagnostic
									</h5>
								</div>
								<div class="plan-description">
									<h6 class="fw-300 text-uppercase">
										Start from
									</h6>
								</div>
								<div class="price-wrap color-main2">
									<span class="plan-price">109</span>
									<span class="plan-sign">$</span>

								</div>
								<div class="plan-features">
									<ul>
										<li><i class="ico-check fs-12 fw-900"></i>9 x car wash</li>
										<li><i class="ico-check fs-12 fw-900"></i>2 x lights check</li>
										<li><i class="ico-check fs-12 fw-900"></i>2 x tires replacement</li>
										<li><i class="ico-check fs-12 fw-900"></i>2 x computer diagnose</li>
									</ul>
								</div>
								<div class="plan-button">
									<a href="#" class="btn btn-small btn-maincolor2">Get Started</a>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6">

							<div class="pricing-plan plan3 cs">
								<div class="plan-name">
									<h5 class="text-uppercase">
										Painting Works
									</h5>
								</div>
								<div class="plan-description">
									<h6 class="fw-300 text-uppercase">
										Start from
									</h6>
								</div>
								<div class="price-wrap color-main2">
									<span class="plan-price">159</span>
									<span class="plan-sign">$</span>

								</div>
								<div class="plan-features">
									<ul>
										<li><i class="ico-check fs-12 fw-900"></i>12 x car wash</li>
										<li><i class="ico-check fs-12 fw-900"></i>3 x lights check</li>
										<li><i class="ico-check fs-12 fw-900"></i>3 x tires replacement</li>
										<li><i class="ico-check fs-12 fw-900"></i>3 x computer diagnose</li>
									</ul>
								</div>
								<div class="plan-button">
									<a href="#" class="btn btn-small btn-maincolor2">Get Started</a>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6">

							<div class="pricing-plan plan4 cs">
								<div class="plan-name">
									<h5 class="text-uppercase">
										Collision Repair
									</h5>
								</div>
								<div class="plan-description">
									<h6 class="fw-300 text-uppercase">
										Start from
									</h6>
								</div>
								<div class="price-wrap color-main2">
									<span class="plan-price">199</span>
									<span class="plan-sign">$</span>

								</div>
								<div class="plan-features">
									<ul>
										<li><i class="ico-check fs-12 fw-900"></i>15 x car wash</li>
										<li><i class="ico-check fs-12 fw-900"></i>4 x lights check</li>
										<li><i class="ico-check fs-12 fw-900"></i>4 x tires replacement</li>
										<li><i class="ico-check fs-12 fw-900"></i>4 x computer diagnose</li>
									</ul>
								</div>
								<div class="plan-button">
									<a href="#" class="btn btn-small btn-maincolor2">Get Started</a>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>

			<section class="ls s-py-55 s-py-lg-75">
				<div class="container-fluid">
					<div class="divider-3"></div>
					<div class="row">
						<div class="col-sm-12 text-center">
							<div class="owl-carousel partners-carousel" data-center="true" data-loop="true" data-responsive-lg="10" data-responsive-md="6" data-responsive-sm="4" data-responsive-xs="3">
								<a href="#">
									<img src="images/partners/01.png" alt="">
								</a>
								<a href="#">
									<img src="images/partners/02.png" alt="">
								</a>
								<a href="#">
									<img src="images/partners/03.png" alt="">
								</a>
								<a href="#">
									<img src="images/partners/04.png" alt="">
								</a>
								<a href="#">
									<img src="images/partners/05.png" alt="">
								</a>
								<a href="#">
									<img src="images/partners/06.png" alt="">
								</a>
								<a href="#">
									<img src="images/partners/07.png" alt="">
								</a>
								<a href="#">
									<img src="images/partners/08.png" alt="">
								</a>
								<a href="#">
									<img src="images/partners/09.png" alt="">
								</a>
								<a href="#">
									<img src="images/partners/10.png" alt="">
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="ls ms contact-section text-center text-md-left">
				<div class="row align-items-center c-gutter-0">
					<div class="col-xl-6 col-lg-6 col-md-6 col-xs-12">
						<div class="animate page_map animated scaleAppear" data-animation="scaleAppear">
							<div class="marker">
								<div class="marker-address">sydney, australia, Liverpool street, 2</div>
								<div class="marker-title">Fourth Marker</div>
								<div class="marker-description">
									<p><strong>Sydney, Australia, Liverpool Street, 2</strong>.<br>
										Lorem ipsum dolor sit amet,
										consectetur adipisicing elit. Aliquid cumque,
										deserunt dolor.
									</p>
								</div>
								<img class="marker-icon" src="images/map_marker_icon.png" alt="">P
							</div>
							<!-- .marker -->
						</div>
						<!--.col-* -->
					</div>
					<div class="col-xl-3 col-md-6 col-10">
						<div class="divider-55 d-md-none"></div>
						<div class="item-content content-left-padding">
							<h3 class="special-heading">Find<span class="text-gradient">Us</span></h3>
							<p>Pro inimicus sapientem an, ad cibo velit mollis mei, ne vim adhuc gubergren.</p>
							<h6 class="fw-700">New Yourk</h6>
							<div class="media side-icon-box">
								<div class="icon-styled color-main">
									<i class="fa fa-map-marker"></i>
								</div>
								<p class="media-body">2688 Simpson Avenue<br> Harrisburg, PA 17109 </p>
							</div>
							<div class="media side-icon-box">
								<div class="icon-styled color-main">
									<i class="fa fa-phone"></i>
								</div>

								<p class="media-body">+1 234 56 78</p>
							</div>
							<div class="media side-icon-box">
								<div class="icon-styled color-main fs-14">
									<i class="fa fa-envelope"></i>
								</div>
								<p class="media-body links-grey">
									<a href="#">info@candycar.com</a>
								</p>
							</div>
							<a href="#" class="btn btn-small btn-outline-maincolor">Contact us</a>
						</div>
						<div class="divider-60 d-md-none"></div>
					</div>
					<!--.col-* -->
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
									<span class="logo-text fw-500">Candy<span class="fw-200">Car</span></span>
								</a>
								<div class="media side-icon-box">
									<div class="icon-styled color-main">
										<i class="fa fa-map-marker"></i>
									</div>
									<p class="media-body color-grey">2688 Simpson Avenue Harrisburg, PA 17109 </p>
								</div>
								<div class="media side-icon-box">
									<div class="icon-styled color-main">
										<i class="fa fa-phone"></i>
									</div>

									<p class="media-body color-grey">+1 234 56 78</p>
								</div>
								<div class="media side-icon-box">
									<div class="icon-styled color-main">
										<i class="fa fa-envelope"></i>
									</div>
									<p class="media-body color-grey">
										<a href="mailto:">info@candycar.com</a>
									</p>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-3 animate order-md-3 order-lg-2" data-animation="fadeInUp">
							<div class="widget widget_page_links">
								<h3>Useful Pages</h3>
								<ul>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Contact Us</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Blog post</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>About Us</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Services</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-md-6 col-lg-3 animate order-md-4 order-lg-3" data-animation="fadeInUp">
							<div class="widget widget_services_links">
								<h3>Services</h3>
								<ul>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Exterior Hand Wash</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Tower Hand Dry</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Tire Dressing</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Wheel Shine</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-md-6 col-lg-3 c-gutter-10 animate order-lg-4" data-animation="fadeInUp">
							<div class="widget widget_working_hours">
								<h3>Our Hours</h3>
								<ul>
									<li class="row">
										<div class="color-grey col-3">
											Mn-Fr
										</div>
										<div class="col-md-9 col-5">
											<span class="color-darkgrey">9.<sup>00</sup>am - 8.<sup>00</sup>pm</span>
										</div>
									</li>
									<li class="row">
										<div class="color-grey col-3">
											Sat
										</div>
										<div class="col-md-9 col-5">
											<span class="color-darkgrey">9.<sup>00</sup>am - 4.<sup>00</sup>pm</span>
										</div>
									</li>
									<li class="row">
										<div class="color-grey col-3">
											Sun
										</div>
										<div class="col-md-9 col-5">
											<span class="color-darkgrey">output</span>
										</div>
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
							<p><a target="_blank" href="https://templateshub.net">Templates Hub</a></p>
						</div>
						<div class="divider-20 d-none d-lg-block"></div>
					</div>
				</div>
			</section>


		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->


	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>

	<!-- Google Map Script -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0pr5xCHpaTGv12l73IExOHDJisBP2FK4&amp;callback=initGoogleMap"></script>

</body>


</html>