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
										<a href="Register1.php">All Mechanic</a>
									</li>
									
								</ol>
							</div>

						</div>
					</div>
				</section>


			</div>

            <section class="ls s-pt-60 s-pb-70 s-py-lg-100 s-py-xl-150">
				<div class="container">
					<div class="row">
						<main class="col-lg-8 col-xl-9">
							<div class="columns-3">
								<form class="form-inline shop-form bordered mb-30">
									<p class="woocommerce-result-count fs-14 fw-400">
										<?php
                                            
											$result = mysqli_query($connect,"SELECT count(*) as total FROM user WHERE `role`='Mechanic' OR `role`='Garage'");
											$data = mysqli_fetch_assoc($result);
											

                                        ?>
										<span class="color-dark fw-500 product-found fs-16"><?php echo $data['total'];?></span>Products Found
									</p>
									
									
									<div class="form-group view-product">
										<p class="fw-500">View</p>
										<a href="#" id="toggle_shop_view" class=""></a>
									</div>
								</form>
								<ul id="products" class="products list-unstyled grid-view">
                                    <?php
                                    $query = "SELECT * FROM `user` WHERE `role`='Mechanic' OR `role`='Garage'";
                                    $result = mysqli_query($connect,$query);
                                    if(mysqli_num_rows($result) > 0){

                                        while($row = mysqli_fetch_array($result)){
                                            //$t_id    = $row['user_id'];

                                            ?>
                                
									<li class="product vertical-item padding-small content-padding">
										<div class="product-inner bordered">
                                        <a class="link-scale" href="signIn.php">
												<img src="images/team/<?php echo $row["image"]; ?>" alt="">
											</a>
											<div class="item-content">
												<h5><?php echo $row["user_name"];?></h5>
												<div class="star-rating">
													<span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5</span>
												</div>
												<div class="address">
													
														<span>
															<span class="fw-500"> <?php echo $row["address"]; ?></span>
														</span>
													
													
                                        </div>
                                                <div class="email">
													
														<span>
															<span class="fw-500"> <?php echo $row["email"]; ?></span>
														</span>
													
													
                                        </div>
                                                <span class="status">
													
														
                                                <span>
                                                

                                                <?php if ($row["u_isactive"]==1){
                                                    echo '<span class="fw-500  bg-success">Active</span>';
                                                } else{

                                                    echo '<span class="fw-500  bg-danger">Inactive</span>';
                                                }
                                                  ?>          
                                               
												</span>
											</div>
										</div>
									</li>
									<?php
					}
				}
			?>
								</ul>
                                
							</div>
							<!-- columns 3 -->
                            
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
