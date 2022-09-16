<?php
session_start();
$connect = mysqli_connect("localhost","root","","fleet");

?>

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
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	 
</head>

<body>
	

	<!--<div class="preloader">
		<div class="preloader_image"></div>
	</div>->

	

	<!- Unyson messages modal -->
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
														<a href="gallery-image.html">Shops</a>
													</li>
													<!-- eof Shops -->
													<li>
														<a href="pricing.html">Insurance Company</a>
													</li>
													<!-- Insurance Copany -->
													
													
													<li class="active">
														<a href="logout.php">SignOut</a>
														
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
								<h1 class="bold text-center text-lg-left">Mechanic</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="index.php">Home</a>
									</li>
									<li class="breadcrumb-item">
										<a href="Registration.php">All Mechanic</a>
									</li>
									
								</ol>
							</div>

						</div>
					</div>
				</section>


			</div>
            <section class="ls s-py-60 s-py-lg-100 s-py-xl-150 c-gutter-60">
				<div class="container">
					<div class="row">
						<main class="col-lg-7 col-xl-8">
							<div class="product">

								<div class="images">
                                    <?php
                                    
                                    $user_id = 0;
                                      $result = 0;

                                    if (isset($_GET['user_id'])) {
                                         $user_id =  $_GET['user_id'];

                                         
                                  } 
                                 // $user_id =  $_GET['user_id'];


                                  $query = "SELECT * FROM mechanic_table WHERE mechanic_id = $user_id";
                                    $result = mysqli_query($connect,$query);

                                    if(mysqli_num_rows($result) > 0){

                                        while($row = mysqli_fetch_array($result)){



                                            ?>
									<figure>
										<div data-thumb="images/shop/01.jpg">
											<a href="images/team/<?php echo $row["mechanic_profile_image"]; ?>">
                            
                                            <img src="images/team/<?php echo $row["mechanic_profile_image"]; ?>" alt="" data-caption="" data-src="images/shop/01.jpg" data-large_image="images/shop/01.jpg" data-large_image_width="1000" data-large_image_height="1000">
											</a>
										</div>
										

									</figure>
								</div>

								<div class="summary entry-summary text-center text-md-left">

									<h6 class="product_title"><?php echo $row["mechanic_name"];?></h6>
									<div class="woocommerce-product-rating">
										<div class="star-rating">
											<span style="width:72.6%">Rated <strong class="rating">4.33</strong> out of 5 based on <span class="rating">3</span> customer ratings</span>
										</div>
									</div>
									<div class="divider-20 d-none d-lg-block"></div>
									<div>
										<p class="address fw-500"><?php echo $row["mechanic_address"];?></p>
									</div>
                                    <div>
										<p class="email fw-500"><?php echo $row["mechanic_email_address"];?></p>
									</div>

									<form  method="post" action="login.php>
										<div class="single_variation_wrap">
											<?php if(isset($_SESSION['customer_name']) ) { ?>
											<!--<button type="button" name="get_appointment" class="btn btn-primary btn-sm get_appointment" data-id="<?php echo $row["mechanic_schedule_id"] ?> ">Get Job Card</button>-->
											
											<a href="#" class="btn btn-big btn-maincolor get_appointment" >Appointment</a>
											<?php } else{ ?>
												<a href="/src/auto/login.php" class="btn btn-big btn-maincolor" >Appointment</a>
												<?php }?>
										</div>
									</form>


								</div>
<div id="add_data_Modal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Booking</h4>
   </div>
   <div class="modal-body">
    <form method="post" id="insert_form">
     <label>Customer Name</label>
     <input type="text" name="name" id="name" class="form-control" />
     <br />
     <label>Customer Address</label>
     <textarea name="address" id="address" class="form-control"></textarea>
     <br />
     <label>Select Gender</label>
     <select name="gender" id="gender" class="form-control">
      <option value="Male">Male</option>  
      <option value="Female">Female</option>
     </select>
     <br />  
     <label>Vehicle Type</label>
     <input type="text" name="Vehicle_type" id="Vehicle_type" class="form-control" />
     <br />  
     <label>Appointment Date</label>
     <input type="date" name="date" id="date" class="form-control" />
     <br />
	 <label>Damage status</label>
     <select name="damage" id="damage" class="form-control">
      <option value="flue">Flue</option>  
      <option value="repair">Repair</option>
     </select>
     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />

    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>


								<!-- .summary -->


								<div class="woocommerce-tabs wc-tabs-wrapper">

									<ul class="tabs wc-tabs" role="tablist">
										<li class="description_tab" id="tab-title-description" role="tab" aria-controls="tab-description">
											<a href="#tab-description">Description</a>
										</li>
										<li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
											<a href="#tab-reviews">Reviews</a>
										</li>
									</ul>

									<div class="panel wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
										<h6>About Me</h6>
										<p>Times are changing…cars are changing. One of the biggest changes in today’s automotive industry is the perception of a “tune-up.” Ask 10 vehicle owners their definition of a tune-up and chances are there’ll be 10 different answers. The classic “tune-up” was once the heart of the automotive business and contrary to some beliefs; today’s modern vehicles still need tune-ups to keep.</p>
										</div>
									<div class="panel wc-tab" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
										<div id="reviews">
											<div id="comments">
												<ol class="commentlist">
													<li class="comment even thread-even depth-1" id="li-comment-34">

														<div id="comment-34" class="comment_container">

															<img alt="" src="images/team/comments-01.png">
															<div class="comment-text">

																<div class="star-rating">
																	<span style="width:80%">Rated <strong
	                                        class="rating">4</strong> out of 5</span>
																</div>
																<p class="meta">
																	<strong>Nimal Perera</strong> <span>–</span>
																	<time datetime="2021-06-07T11:43:13+00:00">June 7, 2021</time>
																</p>

																<div class="description">
																	<p>Nice T-shirt, I got one in black. Goes with
																		anything!</p>
																</div>
															</div>
														</div>
													</li>
													<!-- #comment-## -->
													<li class="comment odd alt thread-odd thread-alt depth-1" id="li-comment-35">

														<div id="comment-35" class="comment_container">

															<img alt="" src="images/team/comments-02.png">
															<div class="comment-text">

																<div class="star-rating">
																	<span style="width:80%">Rated <strong
	                                        class="rating">4</strong> out of 5</span>
																</div>
																<p class="meta">
																	<strong>Cobus
											Bester</strong> <span>–</span>
																	<time datetime="2013-06-07T11:55:15+00:00">June 7, 2013</time>
																</p>

																<div class="description">
																	<p>Very comfortable shirt, and I love the graphic!</p>
																</div>
															</div>
														</div>
													</li>
													<!-- #comment-## -->
													<li class="comment even thread-even depth-1" id="li-comment-36">

														<div id="comment-36" class="comment_container">

															<img alt="" src="images/team/comments-03.png">
															<div class="comment-text">

																<div class="star-rating">
																	<span style="width:100%">Rated <strong
	                                        class="rating">5</strong> out of 5</span>
																</div>
																<p class="meta">
																	<strong>Stuart</strong>
																	<span>–</span>
																	<time datetime="2013-06-07T13:02:14+00:00">June 7, 2013</time>
																</p>

																<div class="description">
																	<p>Great T-shirt quality, Great Design and Great
																		Service.</p>
																</div>
															</div>
														</div>
													</li>
													<!-- #comment-## -->
												</ol>
                                                <?php
					}
				} else{
					echo "User Not found";
				}
			?>

											</div>


											<div id="review_form_wrapper">
												<div id="review_form">
													<div id="respond" class="comment-respond">
														<span id="reply-title" class="comment-reply-title">Add a review <small>
																<a rel="nofollow" id="cancel-comment-reply-link" href="#respond" style="display:none;">Cancel reply</a>
															</small>
														</span>
														<form action="http://webdesign-finder.com/" method="post" id="commentform" class="comment-form" novalidate="">
															<p class="comment-notes">
																<span id="email-notes">Your email address will not be published.</span>
																Required fields are marked <span class="required">*</span>
															</p>
															<div class="comment-form-rating">
																<label>Your rating</label>
																<p class="stars">
																	<span>
																		<a class="star-1" href="#">1</a>
																		<a class="star-2" href="#">2</a>
																		<a class="star-3" href="#">3</a>
																		<a class="star-4" href="#">4</a>
																		<a class="star-5" href="#">5</a>
																	</span>
																</p>
															</div>
															<p class="comment-form-comment">
																<label for="comment">Your review <span class="required">*</span>
																</label>
																<textarea aria-required="true" rows="6" cols="45" name="comment" id="comment" class="form-control" placeholder="Your review "></textarea>
															</p>
															<p class="comment-form-author">
																<label for="author">Name <span class="required">*</span>
																</label>
																<input class="form-control" id="author" name="author" type="text" value="" size="30" aria-required="true" required="" placeholder="Full Name">
															</p>
															<p class="comment-form-email">
																<label for="email">Email <span class="required">*</span>
																</label> <input class="form-control" id="email" name="email" type="email" value="" size="30" aria-required="true" required="" placeholder="e-mail address">
															</p>
															<p class="form-submit">
																<button type="submit" id="submit" name="submit" class="btn btn-maincolor"><span>Submit</span></button>
															</p>
														</form>
													</div>
													<!-- #respond -->
												</div>
											</div>
											<div class="clear">
											</div>
										</div>
									</div>

								</div>


								<section class="up-sells upsells products">
									<div class="col-12 mb-60">
										<h3 class="special-heading text-center">Best<span class="text-gradient">Sellers</span></h3>
										<p class="fs-20 color-dark">The Car Repair Appointment</p>
									</div>
									<ul class="products">
										<li class="product vertical-item padding-small content-padding">
											<div class="product-inner bordered">
												<a class="link-scale" href="shop-product-right.html">
													<img src="images/shop/01.jpg" alt="">
												</a>
												<div class="item-content">
													<h2>Motor car candles</h2>
													<div class="star-rating">
														<span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5</span>
													</div>
													<span class="price">
														<del>
															<span>
																<span class="fw-500">$ </span>70.00
															</span>
														</del>
														<span>$ </span>55.00
													</span>
												</div>
											</div>
										</li>
										<li class="product vertical-item padding-small content-padding">
											<div class="product-inner bordered">
												<a class="link-scale" href="shop-product-right.html">
													<img src="images/shop/05.jpg" alt="">
												</a>
												<div class="item-content">
													<h2>DOZYANT 12 Feet Universal</h2>
													<div class="star-rating">
														<span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5</span>
													</div>
													<span class="price">
														<del>
															<span>
																<span class="fw-500">$ </span>70.00
															</span>
														</del>
														<span>$ </span>55.00
													</span>
												</div>
											</div>
										</li>
										<li class="product vertical-item padding-small content-padding">
											<div class="product-inner bordered">
												<a class="link-scale" href="shop-product-right.html">
													<img src="images/shop/08.jpg" alt="">
												</a>
												<div class="item-content">
													<h2>WarmGuard WG55F Insulated</h2>
													<div class="star-rating">
														<span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5</span>
													</div>
													<span class="price">
														<del>
															<span>
																<span class="fw-500">$ </span>70.00
															</span>
														</del>
														<span>$ </span>55.00
													</span>
												</div>
											</div>
										</li>
										<li class="product vertical-item padding-small content-padding">
											<div class="product-inner bordered">
												<a class="link-scale" href="shop-product-right.html">
													<img src="images/shop/02.jpg" alt="">
												</a>
												<div class="item-content">
													<h2>MTcisa 12V DC Portable Air</h2>
													<div class="star-rating">
														<span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5</span>
													</div>
													<span class="price">
														<del>
															<span>
																<span class="fw-500">$ </span>70.00
															</span>
														</del>
														<span>$ </span>55.00
													</span>
												</div>
											</div>
										</li>
										<li class="product vertical-item padding-small content-padding">
											<div class="product-inner bordered">
												<a class="link-scale" href="shop-product-right.html">
													<img src="images/shop/03.jpg" alt="">
												</a>
												<div class="item-content">
													<h2>Tire inflator, 20V Cordless Air </h2>
													<div class="star-rating">
														<span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5</span>
													</div>
													<span class="price">
														<del>
															<span>
																<span class="fw-500">$ </span>70.00
															</span>
														</del>
														<span>$ </span>55.00
													</span>
												</div>
											</div>
										</li>
										<li class="product vertical-item padding-small content-padding">
											<div class="product-inner bordered">
												<a class="link-scale" href="shop-product-right.html">
													<img src="images/shop/04.jpg" alt="">
												</a>
												<div class="item-content">
													<h2>hisWorx for TWC-01 Vacuum</h2>
													<div class="star-rating">
														<span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5</span>
													</div>
													<span class="price">
														<del>
															<span>
																<span class="fw-500">$ </span>70.00
															</span>
														</del>
														<span>$ </span>55.00
													</span>
												</div>
											</div>
										</li>
										<li class="product vertical-item padding-small content-padding">
											<div class="product-inner bordered">
												<a class="link-scale" href="shop-product-right.html">
													<img src="images/shop/06.jpg" alt="">
												</a>
												<div class="item-content">
													<h2>Beam Electronics Universal</h2>
													<div class="star-rating">
														<span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5</span>
													</div>
													<span class="price">
														<del>
															<span>
																<span class="fw-500">$ </span>70.00
															</span>
														</del>
														<span>$ </span>55.00
													</span>
												</div>
											</div>
										</li>
										<li class="product vertical-item padding-small content-padding">
											<div class="product-inner bordered">
												<a class="link-scale" href="shop-product-right.html">
													<img src="images/shop/09.jpg" alt="">
												</a>
												<div class="item-content">
													<h2>12V Tire Pump Unique</h2>
													<div class="star-rating">
														<span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5</span>
													</div>
													<span class="price">
														<del>
															<span>
																<span class="fw-500">$ </span>70.00
															</span>
														</del>
														<span>$ </span>55.00
													</span>
												</div>
											</div>
										</li>
										<li class="product vertical-item padding-small content-padding">
											<div class="product-inner bordered">
												<a class="link-scale" href="shop-product-right.html">
													<img src="images/shop/07.jpg" alt="">
												</a>
												<div class="item-content">
													<h2>Motor car candles </h2>
													<div class="star-rating">
														<span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5</span>
													</div>
													<span class="price">
														<del>
															<span>
																<span class="fw-500">$ </span>70.00
															</span>
														</del>
														<span>$ </span>55.00
													</span>
												</div>
											</div>
										</li>
									</ul>
								</section>

							</div>
							<!-- #product-22 -->


						</main>

						<aside class="col-lg-5 col-xl-4">

							<div class="widget woocommerce widget_product_categories">
								<h5 class="widget-title">Categories</h5>
								<ul class="product-categories">
									<li class="cat-item cat-parent">
										<a href="shop-right.html" class="active">CarTowing</a>
										<ul class="children">
											<li class="cat-item">
												<a href="shop-right.html">Hail Damage</a>
											</li>
											<li class="cat-item">
												<a href="shop-right.html">Flood Insurance Coverage</a>
											</li>
										</ul>
									</li>
									<li class="cat-item cat-parent">
										<a href="shop-right.html">Accident Insurance</a>
									</li>
									<li class="cat-item">
										<a href="shop-right.html">Fire Insurance</a>
									</li>
									<li class="cat-item cat-parent">
										<a href="shop-right.html">Motorcycle Towing</a>
									</li>
									<li class="cat-item">
										<a href="shop-right.html">Break repair</a>
									</li>
									<li class="cat-item cat-parent">
										<a href="shop-right.html">Ingnition test</a>
									</li>
								</ul>
							</div>


							<div class="widget woocommerce widget_product_categories">

								<h5 class="widget-title">Categories Dropdown</h5>

								<select name="product_cat" class="dropdown_product_cat">
									<option value="" selected="selected">Select a category</option>
									<option class="level-0" value="cartowing">CarTowing</option>
									<option class="level-1" value="hail-damage">Hail Damage</option>
									<option class="level-1" value="flood-insurance-coverage">Flood Insurance Coverage</option>
									<option class="level-0" value="accident-insurance">Accident Insurance</option>
									<option class="level-1" value="fire-insurance">Fire Insurance</option>
									<option class="level-1" value="motorcycle-towing">Motorcycle Towing</option>
									<option class="level-0" value="break-repair">Break repair</option>
									<option class="level-1" value="ingnition-test">Ingnition test</option>
								</select>
							</div>


						



						</aside>
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



	<div id="appointmentModal" class="modal fade">
  	<div class="modal-dialog">
    	<form method="post" id="appointment_form">
      		<div class="modal-content">
        		<div class="modal-header">
          			<h4 class="modal-title" id="modal_title">Make Appointment</h4>
          			<button type="button" class="close" data-dismiss="modal">&times;</button>
        		</div>
        		<div class="modal-body">
        			<span id="form_message"></span>
                    <div id="appointment_detail"></div>
                    <div class="form-group">
                    	<label><b>Reasone for Appointment</b></label>
                    	<textarea name="reason_for_appointment" id="reason_for_appointment" class="form-control" required rows="5"></textarea>
                    </div>
        		</div>
        		<div class="modal-footer">
          			<input type="hidden" name="hidden_mechanic_id" id="hidden_mechanic_id" />
          			<input type="hidden" name="hidden_mechanic_schedule_id" id="hidden_mechanic_schedule_id" />
          			<input type="hidden" name="action" id="action" value="book_appointment" />
          			<input type="submit" name="submit" id="submit_button" class="btn btn-success" value="Book" />
          			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        		</div>
      		</div>
    	</form>
  	</div>
</div>


    <?php/*

    $con = mysqli_connect("localhost","root","","fleet");

    // Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    }


if (isset($_POST['submit'])) {

$name=$_POST['name'];

$email=$_POST['email'];

$address=$_POST['address'];

$user_password=$_POST['password_1'];

$mobile=$_POST['phone'];


$query = "INSERT INTO `customers`(`c_name`, `c_mobile`, `c_email`, `c_address`, `c_pwd`) VALUES ('$name','$mobile','$email','$address','$user_password')";



if(mysqli_query($con,$query)){
    echo "Records added successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

mysqli_close($con);

}




*/

?>



	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>
	<script>  
$(document).ready(function(){
 $('#insert_form').on("submit", function(event){  
  event.preventDefault();  
  if($('#name').val() == "")  
  {  
   alert("Name is required");  
  }  
  else if($('#address').val() == '')  
  {  
   alert("Address is required");  
  }  
  else if($('#designation').val() == '')
  {  
   alert("Designation is required");  
  }
   
  else  
  {  
   $.ajax({  
    url:"insert.php",  
    method:"POST",  
    data:$('#insert_form').serialize(),  
    beforeSend:function(){  
     $('#insert').val("Inserting");  
    },  
    success:function(data){  
     $('#insert_form')[0].reset();  
     $('#add_data_Modal').modal('hide');  
     $('#employee_table').html(data);  
    }  
   });  
  }  
 });



 $(document).on('click', '.get_appointment', function(){

var mechanic_schedule_id = $(this).data('mechanic_schedule_id');
var mechanic_id =<?php echo $_GET['user_id'] ?>	;

$.ajax({
	url:"action.php",
	method:"POST",
	data:{action:'make_appointment', mechanic_schedule_id:<?php echo $_GET['user_id'] ?> },
	success:function(data)
	{
		$('#appointmentModal').modal('show');
		$('#hidden_mechanic_id').val(mechanic_id);
		$('#hidden_mechanic_schedule_id').val(mechanic_id);
		$('#appointment_detail').html(data);
	}
});

});





 $(document).on('click', '.view_data', function(){
  //$('#dataModal').modal();
  var employee_id = $(this).attr("id");
  $.ajax({
   url:"select.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){
    $('#employee_detail').html(data);
    $('#dataModal').modal('show');
   }
  });
 });
});  



$(document).on('click', '.get_appointment', function(){

var mechanic_schedule_id = <?php echo $_GET['user_id'] ?>;
var mechanic_id = <?php echo $_GET['user_id'] ?>;

$.ajax({
	url:"action.php",
	method:"POST",
	data:{action:'make_appointment', mechanic_schedule_id:mechanic_schedule_id},
	success:function(data)
	{
		$('#appointmentModal').modal('show');
		$('#hidden_mechanic_id').val(mechanic_id);
		$('#hidden_mechanic_schedule_id').val(mechanic_schedule_id);
		$('#appointment_detail').html(data);
	}
});

});	

$('#appointment_form').on('submit', function(event){

event.preventDefault();


	$.ajax({
		url:"action.php",
		method:"POST",
		data:$(this).serialize(),
		dataType:"json",
		beforeSend:function(){
			$('#submit_button').attr('disabled', 'disabled');
			$('#submit_button').val('wait...');
		},
		success:function(data)
		{
			$('#submit_button').attr('disabled', false);
			$('#submit_button').val('Book');
			if(data.error != '')
			{
				$('#form_message').html(data.error);
			}
			else
			{	
				window.location.href="auto/appointment.php";
			}
		}
	})



})

 </script>


   
</body>


</html>
