<footer id="footer" >
			<!-- top footer -->
			    

      
                

			<!-- bottom footer -->
			
			<!-- /bottom footer -->
		</footer>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/actions.js"></script>
		<script src="js/sweetalert.min"></script>
		<script src="js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="js/script.js"></script>

    
    <script src="js/compressed.js"></script>
	
	<script src="js/switcher.js"></script>
		<script>var c = 0;
        function menu(){
          if(c % 2 == 0) {
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu active";    
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg active";    
            c++; 
              }else{
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu disable";        
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg disable";        
            c++;
              }
        }
           
		
</script>
    <script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>
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
                  <a href="#"><i class="ico-check-circle"></i>Estimate Cost</a>
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
