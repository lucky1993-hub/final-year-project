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

											<li class="active">
												<a href="Mechanic_details.php">Mechanic</a>
													</li>
													<!-- eof Mechanic -->

													<li>
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
													
													<li>
														<a href="Register1.php">Registration</a>
														
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


			</div>

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
										<a href="#">All</a>
									</li>
									<li class="breadcrumb-item active">
										Mechanic
									</li>
								</ol>
							</div>

						</div>
					</div>
				</section>


			</div>
            

			<section class="ls s-py-60 s-py-lg-100 s-py-xl-150">
				<div class="container">
					<div class="row c-gutter-40">
						<main class="col-lg-7 col-xl-8 order-lg-2">
						<?php
                                                 $query = "SELECT * FROM `user` WHERE `role`='Mechanic' OR `role`='Garage'";
                                                 $result = mysqli_query($connect,$query);
                                                 if(mysqli_num_rows($result) > 0){

                                                     while($row = mysqli_fetch_array($result)){
                                                         $t_id    = $row['user_id'];

                                            ?>
							<article class="post side-item text-center text-md-left content-padding bordered event-post">
								<div class="row">
									<div class="col-xl-4 col-lg-5 col-md-5">
										<div class="item-media cover-image">
											<img src="images/gallery/<?php echo $row["mechanic_profile_image"]; ?>" alt="">
											<div class="media-links">
												<a class="abs-link" title="" href="event-single-left.html"></a>
											</div>
										</div>
									</div>

									<div class="col-xl-8 col-lg-7 col-md-6">
										<div class="divider-11 d-none d-xl-block"></div>
										<div class="item-content">
											<h6>
												<a href="event-single-left.html"><?php echo $row["user_name"];?></a>
											</h6>

											<div class="mb-10 item-meta color-darkgrey">
												<span>
													<i class="fa fa-calendar color-main"></i> <span><?php echo $row["created_by"];?></span>
												</span>
												<span>
													<i class="fa fa-clock-o color-main"></i> <span>01:15 pm - 04:30 pm</span>
												</span>
											</div>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dictum bibendum dui, nec malesuada urna laoreet non. Maecenas id semper nisi.
											</p>

										</div>
									</div>
								</div>
							</article>

							
							<?php
					}
				}
			?>
			

							<nav class="navigation pagination " role="navigation">
								<h2 class="screen-reader-text">Posts navigation</h2>
								<div class="nav-links">
									
										<?php
// Next button 
$query1 = "SELECT * FROM `user` WHERE `role`='Mechanic' OR `role`='Garage' AND user_id>$t_id  order by user_id ASC";
$next = mysqli_query($connect,$query1);
if($row = mysqli_fetch_array($next))
{
	echo '<a class="next page-numbers" href="mechanic_details.php?id='.$row['user_id'].'">
  <span class="screen-reader-text">Next page</span>
  <i class="fa fa-angle-right"></i>
</a>'; 

  } 
 

// Previous button 
$quesry2 =  "SELECT * FROM `user` WHERE `role`='Mechanic' OR `role`='Garage' AND user_id<$t_id order by user_id DESC";
$previous= mysqli_query($connect,$quesry2);
if($row = mysqli_fetch_array($previous))
{
 

echo '<a class="prev page-numbers" href="mechanic_details.php?id='.$row['user_id'].'"> <i class="fa fa-angle-left"></i><span class="screen-reader-text">Previous page</span></a>';  

} 


?>
										
									
									<!--<span class="page-numbers current">
										<span class="meta-nav screen-reader-text">Page </span>
										1
									</span>
									<a class="page-numbers" href="blog-right.html">
										<span class="meta-nav screen-reader-text">Page </span>
										2
									</a>
									<a class="page-numbers dots" href="blog-right.html">
										<span class="meta-nav screen-reader-text">Page </span>
										...
									</a>
									<a class="page-numbers" href="blog-right.html">
										<span class="meta-nav screen-reader-text">Page </span>
										5
									</a>-->
									
								</div>
							</nav>
						</main>
						
						<aside class="col-lg-5 col-xl-4 order-lg-1">
							<div class="bg-maincolor2 py-50 px-30 cs cs2">
								<div class="widget widget_search">
									<h5 class="widget-title">Search Widget</h5>
									<form role="search" method="get" class="search-form" action="http://webdesign-finder.com/">
										<label for="search-form-widget">
											<span class="screen-reader-text">Search for:</span>
										</label>
										<input type="search" id="search-form-widget" class="search-field" placeholder="Search" value="" name="search">
										<button type="submit" class="search-submit">
											<span class="screen-reader-text">Search</span>
										</button>
									</form>
								</div>

							</div>

							<div class="widget widget_categories">

								<h5 class="widget-title">Categories</h5>

								<ul>
									<li class="cat-item">
										<a class="active" href="blog-right.html">Car Towing</a>
										<ul class="children">
											<li class="cat-item">
												<a href="blog-right.html">Hail Damage
												</a>
											</li>
											<li class="cat-item">
												<a href="blog-right.html">Flood Insurance Coverage
												</a>
											</li>
										</ul>
									</li>
									<li class="cat-item">
										<a href="blog-right.html">Accident Insurance</a>
									</li>
									<li class="cat-item">
										<a href="blog-right.html">Fire Insurance</a>
									</li>
									<li class="cat-item">
										<a href="blog-right.html">Motorcycle Towing</a>
									</li>
									<li class="cat-item">
										<a href="blog-right.html">Break repair
										</a>
									</li>
									<li class="cat-item">
										<a href="blog-right.html">Ingnition test
										</a>
									</li>
								</ul>
							</div>


							<div class="widget widget_tag_cloud">
								<h5 class="widget-title">Tags</h5>
								<div class="tagcloud">
									<a href="blog-right.html" class="tag-cloud-link">
										<span>
											Repair
										</span>
									</a>
									<a href="blog-right.html" class="tag-cloud-link">
										<span>
											Diagnostic
										</span>
									</a>
									<a href="blog-right.html" class="tag-cloud-link">
										<span>
											Towing
										</span>
									</a>
									<a href="blog-right.html" class="tag-cloud-link">
										<span>
											Wash
										</span>
									</a>
									<a href="blog-right.html" class="tag-cloud-link">
										<span>
											Testing
										</span>
									</a>
								</div>
							</div>


							<div class="widget widget_portfolio">
								<h5 class="widget-title">Instagram</h5>
								<div class="photo">
									<a href="#">
										<img src="images/gallery/10.jpg" alt="">
									</a>
								</div>
								<div class="photo">
									<a href="#">
										<img src="images/gallery/01.jpg" alt="">
									</a>
								</div>
								<div class="photo">
									<a href="#">
										<img src="images/gallery/07.jpg" alt="">
									</a>
								</div>
								<div class="photo">
									<a href="#">
										<img src="images/gallery/05.jpg" alt="">
									</a>
								</div>
							</div>

							<div class="widget widget_recent_posts">

								<h5 class="widget-title">Recent Posts</h5>
								<ul class="list-unstyled">
									<li class="media align-items-center">
										<a class="media-image" href="blog-single-right.html">
											<img src="images/gallery/01.jpg" alt="">
										</a>
										<div class="tagcloud sticky-tag">
											<a href="blog-right.html" class="tag-cloud-link">
												<span>
													Repair
												</span>
											</a>
										</div>
										<div class="media-body">
											<h4>
												<a href="blog-single-right.html">Highstand – The next level of WordPress theme</a>
											</h4>
											<p class="item-meta">
												<i class="ico-clock-alt color-main"></i>
												2 min ago
											</p>
										</div>
									</li>
									<li class="media align-items-center">
										<a class="media-image" href="blog-single-right.html">
											<img src="images/gallery/02.jpg" alt="">
										</a>
										<div class="tagcloud sticky-tag">
											<a href="blog-right.html" class="tag-cloud-link">
												<span>
													Repair
												</span>
											</a>
										</div>
										<div class="media-body">
											<h4>
												<a href="blog-single-right.html">Highstand – The next level of WordPress theme</a>
											</h4>
											<p class="item-meta">
												<i class="ico-clock-alt color-main"></i>
												2 min ago
											</p>
										</div>
									</li>
									<li class="media align-items-center">
										<a class="media-image" href="blog-single-right.html">
											<img src="images/gallery/03.jpg" alt="">
										</a>
										<div class="tagcloud sticky-tag">
											<a href="blog-right.html" class="tag-cloud-link">
												<span>
													Repair
												</span>
											</a>
										</div>
										<div class="media-body">
											<h4>
												<a href="blog-single-right.html">Highstand – The next level of WordPress theme</a>
											</h4>
											<p class="item-meta">
												<i class="ico-clock-alt color-main"></i>
												2 min ago
											</p>
										</div>
									</li>
								</ul>
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

    <?php

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






?>


	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>
    <script src="js/sign.js"></script>

   
</body>


</html>
