<?php if($this->session->flashdata('suc_1') == 1){ ?>
  <div class="alert alert-success"> Successfully Register ..! </div>
<?php } ?>
<?php if($this->session->flashdata('suc_login') == 2){ ?>
  <div class="alert alert-success"> Successfully Login ..! </div>
<?php } ?>
<?php if($this->session->flashdata('error_msg') == 3){ ?>
  <div class="alert alert-danger">  Error.! You entered Invalid Email and password </div>
<?php } ?>
<?php if($this->session->flashdata('sub_q') == 1){ ?>
  <div class="alert alert-success">   Your Query Has Been Send Successfully..! </div>
<?php } ?>
<?php if($this->session->flashdata('suc_send') == 1){ ?>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
  swal({
  title: "Success!",
  text: "The Quote has been sent successfully ",
  icon: "success",
  button: "Exit",
});
</script>
<?php } ?>
<?php if($this->session->flashdata('logout') == 1){ ?>
  <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  <strong>Error!</strong> You are Not logged In...
</div>
<?php } ?>
<?php if($this->session->flashdata('suc_logout') == 1){ ?>
  <div class="alert alert-success">
  <strong>Success!</strong> you have successfully logged out...
</div>
<?php } ?>
<?php if($this->session->flashdata('suc_sub') == 1){ ?>
  <div class="alert-usr" style="background-color: blue !important;">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  <strong>Subscribed!</strong>
</div>
<?php } ?>
   <body class="home" itemscope itemtype="http://schema.org/Organization">
      <div id="wrapper">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/engine1/style.css" />
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/engine1/jquery.js"></script>
<!--<div id="content">
      <div class="padslid">
	<div id="wowslider-container1" style="margin:0px !important;">
   <div class="ws_images"><ul>
      <li><img itemprop="image" src="<?php //echo base_url(); ?>assets/data1/images/slider1.jpg" alt="Labmate" title="Labmate" id="wows1_0"/></li>
   </ul></div>
   </div> </div>
  </div> -->
  <div class="container-fluid" style="padding-left:0px;padding-right:0px">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <!--<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		  </ol>-->

		  <!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
			  <img itemprop="image" style="width:100%" src="<?php echo base_url(); ?>assets/data1/images/slider1.jpg" alt="Labotronics">
			</div>

		  <!-- Left and right controls -->
		</div>
	</div>
  </div>
	<script type="text/javascript" src="<?php //echo base_url(); ?>assets/engine1/wowslider.js"></script>
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/engine1/script.js"></script>
        <div id="content" class="home-about-content">
			<br><br>
            <div class="container">
               <div class="row">
					<div class="col-lg-8 abtt">
					<h3 class="text-uppercase">
						<span style="color:#033d61"><b><span style="color:#dc5724;">W</span>elcome to</b><span style="color:#033d61;border-top:3px solid;"> <b><span style="color:#dc5724;">L</span>abotronics</b></span></span>
					</h3><br>
        			<p class="fonthome"> Labotronics Ltd. is a renowned UK based laboratory and scientific equipments company.<br><br>We provide an extensive and dynamic range of analytical equipments, cooling and heating equipments, weighing equipments, spectroscopic equipments, sterilizers, safety equipments etc.<br><br>
        					  Our aim is to provide continuous programme of our products and services offering real-time information on the latest innovative scientific and laboratory products to our customers.<br><br>
        					  We have an experienced panel of R&D, sales and services specialist and technical professionals offering all the laboratory equipment solution to your applications.<br><br>
                    We are an ISO 9001: 2008 accredited company and also has certification like CE, GMP.<br>
                    Our products also comply with international standards such as ISO 13845 and has a well approved Quality Management System.</p>
					</div>
					<div class="col-lg-4 hidden-xs" >
						<img itemprop="image" src="<?= base_url('assets/image/lab.png'); ?>" alt="image">
						<br><br>
					</div>
               </div>
            </div>
        </div>

        <div id="content">
            <div class="container">
				<div class="row" itemscope itemtype="http://schema.org/Product">
					<div class="col-lg-12">
						<div role="tabpanel" class="product-tab-carousel">
							<div class="header">
							   <h4><span style="color:#033d61"><b><span style="color:#dc5724;">P</span>RODUCT</b> <b><span style="color:#dc5724;">C</span>ATEGORIES</b></span></h4>
							</div>
							<div class="clearfix"></div>
                        <!-- Tab Panes -->
							<div class="tab-content">
							   <div role="tabpanel" class="tab-pane active" id="pro_categories">
								  <div class="row">
									   <?php foreach ($Cat_list as $key => $value) { ?>
										  <div class="col-sm-6 col-md-3 col-xs-12" >
										<?php
											$image_name = base_url('assets/resources/images/category-images/'.str_replace(' ','-',$value['name']).'.jpg');
											if(file_exists($image_name)){
											  $image = $image_name;
											}else{
											  $image = base_url('assets/images/image_not_found.jpg');
											}
										?>
										  <a itemprop="url" href="<?php echo base_url(); ?><?php echo $value['page_url']; ?>">
											<div class="thumbnail catpro" style="padding:0;margin: 20px;">
											  <img itemprop="image" src="<?php echo $image_name; ?>" alt="<?php echo $value['name']; ?>">
											  <div style="height:60px;" class="caption">
												<a itemprop="image" href="<?php echo base_url(); ?><?php echo $value['page_url']; ?>" class="text-center">
													<p><span itemprop="name"><span style="font-family: sans-serif; font-weight: bold; color: #033d61;"><?php echo $value['name']; ?></span></span></p>
												</a>
											  </div>
											</div>
										  </a>
										  </div>
										  <?php } ?>
								  </div>
							   </div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
	</div>

<!-- Footer Section   -->
      <footer id="footer" class="footer-simple footer-dark">
         <div id="footer-top">
            <div class="container">
               <div class="row">
                  <div class="col-sm-4">
                     <div class="widget">
                        <h4 class="widget-title">Featured products</h4>
                        <ul class="products-list">
						 <?php foreach ($random_product_list as $value) {
						 ?>
             <?php  $image_json = str_replace(array("\t","\n"), "", $value['image_urls']);
               $image_text = json_decode($image_json);
               foreach ($image_text as $key => $img_v) {
               $product_img = $img_v;
               break;
             } ?>
                           <li>
                              <figure>
            							             <a itemprop="url" href="<?php echo base_url(); ?><?php echo $value['page_url']; ?>" title="<?php echo $value['name']; ?>"> <img itemprop="image" src="<?php echo base_url(); ?><?php if($product_img == ""){ echo "assets/images/products/image_not_found.jpg" ;} else { echo $product_img; } ?>" alt="image not found" class="product-image"> </a>
            							    </figure>
                              <h5 class="product-title"><a itemprop="name" href="<?php echo base_url(); ?><?php echo $value['page_url']; ?>" title="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></a></h5>
                              <div class="product-price-container"> <span class="product-price"><?php echo $value['head_title']; ?></span> </div>
                           </li>
						   <?php } ?>
                        </ul>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="widget">
                        <h4 class="widget-title">Top products</h4>
                        <ul class="products-list">
                          <?php
foreach ($random_product_list_1 as $value) {
                          ?>
                          <?php  $image_json = str_replace(array("\t","\n"), "", $value['image_urls']);
                            $image_text = json_decode($image_json);
                            foreach ($image_text as $key => $img_v) {
                            $product_img = $img_v;
                            break;
                          } ?>      <li>
                                         <figure>
                             <a  itemprop="url" href="<?php echo base_url(); ?><?php echo $value['page_url']; ?>" title="<?php echo $value['name']; ?>"> <img itemprop="image" src="<?php echo base_url(); ?><?php if($product_img == ""){ echo "assets/images/products/image_not_found.jpg" ;} else { echo $product_img; } ?>" class="product-image"> </a>
                             </figure>
                                           <h5 class="product-title"><a itemprop="url" href="<?php echo base_url(); ?><?php echo $value['page_url']; ?>" title="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></a></h5>
                                           <div class="product-price-container"> <span class="product-price"><?php echo $value['head_title']; ?></span> </div>
                                        </li>
                            <?php } ?>
                        </ul>
                        <!-- End .products-list -->
                     </div>
                     <!-- End .widget -->
                  </div>
                  <div class="col-sm-4">
                     <div class="widget">
                        <h4 class="widget-title">Popular products</h4>
                        <ul class="products-list">
                          <?php
foreach ($random_product_list as $value) {
                          ?>
                          <?php  $image_json = str_replace(array("\t","\n"), "", $value['image_urls']);
                            $image_text = json_decode($image_json);
                            foreach ($image_text as $key => $img_v) {
                            $product_img = $img_v;
                            break;
                          } ?>
                                        <li>
                                         <figure>
                             <a itemprop="url" href="<?php echo base_url(); ?><?php echo $value['page_url']; ?>" title="<?php echo $value['name']; ?>"> <img itemprop="image" src="<?php echo base_url(); ?><?php if($product_img == ""){ echo "assets/images/products/image_not_found.jpg" ;} else { echo $product_img; } ?>" class="product-image"> </a>
                             </figure>
                                           <h5 class="product-title"><a itemprop="url" href="<?php echo base_url(); ?><?php echo $value['page_url']; ?>" title="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></a></h5>
                                           <div class="product-price-container"> <span class="product-price"><?php echo $value['head_title']; ?></span> </div>
                                        </li>
                            <?php } ?>
                        </ul>
                        <!-- End .products-list -->
                     </div>
                     <!-- End .widget -->
                  </div>
                  <!-- End .col-md-4 -->
               </div>
               <!-- End .row -->
            </div>
            <!-- End .container -->
         </div>
    <?php
        include('footer.php');
        ?>
      <a href="#wrapper" id="scroll-top" title="Top"><i class="fa fa-angle-up"></i></a>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-83655511-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- End Google Analtics Code-->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.hoverIntent.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/waypoints-sticky.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.debouncedresize.js"></script>
<script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.lavalamp.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<script src="<?php echo base_url(); ?>assets/js/countdown.js"></script>
   </body>
</html>
