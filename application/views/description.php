  <style>
  .owl-carousel{
    display: block !important;
  }
  .selectbox{
    width: 100%;
    height: 40px;
    color: rgb(24, 63, 104);
    font-weight: 600;
    border: 2px solid;
    border-radius: 25px;
    padding: 3%;
}
.selectbox option{
  font-weight: 500;
  font-size: 15px;
}
.alert-danger{
  padding-left: 20px;
margin-top: 0px;
margin-bottom: 0px
}
</style>
<?php if($sub_cat == ""){ ?>
<body class="home">
  <div id="wrapper">
     <div id="content">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                <div class="col-md-12 sort-panel">
                  <label>View Per Page : </label>
                  <select onChange="product_number()" id="page_val" name="number" style="display:block !important;padding:1%;    margin: -1% 1%;">
                      <option selected> All Products </option>
                      <option value="5">5</option>
                      <option value="10">10</option>
                      <option value="15">15</option>
                      <option value="20">20</option>
                  </select>
                </div>
                <?php
                if($prod_list == !""){
                 $i = 1;
                 foreach ($prod_list as $key => $value) { ?>
                       <div class="product product-list product_id_<?php echo $i++; ?>" id="all_products_<?php echo $value['id']; ?>">
                          <div class="product-top">
                             <figure class="owl-carousel product-slider" style="display:block">
                                <a itemprop="url" href="<?php echo base_url(); ?>description/<?php echo $value['page_url']; ?>" title="<?php echo $value['name']; ?>">
                                <?php  $image_json = str_replace(array("\t","\n"), "", $value['image_urls']);
                                  $image_text = json_decode($image_json);
                                  foreach ($image_text as $key => $img_v) {
                                  $product_img = $img_v;
                                  break;
                                } ?>
                                  <img itemprop="image" src="<?php echo base_url(); ?><?php if($product_img == ""){ echo "assets/images/products/image_not_found.jpg" ;} else { echo $product_img; } ?>" alt="image not Available" class="product-image">
                                </a>
                             </figure>
                          </div>
                          <div class="product-list-content">
                             <h3 class="product-title"><a itemprop="url" href="<?php echo base_url(); ?>description/<?php echo $value['page_url']; ?>" title="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></a></h3>
                             <p>
                              <ul class="spec-details text-center">
                                  <?php $spec_data = json_decode($value['specifications']);
                                        $i = 1;
                                        foreach($spec_data as $param => $values){
                                          if($values){
                                            //echo $param." : ".$values;
                                            echo "<li><b>".$param."</b> <i class='fa fa-caret-right'></i> ".$values."</li>";
                                          }
                                          $i++;
                                          if($i >= 6){break;}
                                        }
                                  ?>
                                  </ul>
                              </p>
                          </div>
                        </div>
                    <?php }
               } else{ ?>
                    <div class="alert alert-danger"> Error..! Not Found </div>
                <?php } ?>
            </div>
        <!-- <div class="xlg-margin visible-sm visible-xs"></div>
          <aside class="col-md-3 col-md-pull-9 sidebar shop-sidebar">
            <div class="widget category-widget-box">
              <h3 class="widget-title bigger">Categories</h3>
                <ul id="category-widget">
                  <li class="open"> <a itemprop="url" href="javascript:;">Categories <span class="category-widget-btn"><i class="fa fa-angle-bottom"></i></span></a>
                    <ul>
                      <?php foreach($categories_list as $value){ ?>
                        <li><a itemprop="url" onClick="get_subcat(<?php echo $value['id']; ?>)" href="javascript:;"><?php echo $value['name']; ?></a></li>
                        <div id="sub_cat_<?php echo $value['id']; ?>"> </div>
                      <?php } ?>
                    </ul>
                  </li>
                </ul>
           </div>
        </aside>
    </div> -->
   <div class="row">
      <div class="col-lg-12">
         <div role="tabpanel" class="product-tab-carousel">
            <div class="header">
               <h4>Related Product</h4>
               <ul class="nav nav-lava nav-lava-sm" role="tablist">
                  <li role="presentation" class="active"><a href="#featuredproducts" aria-controls="featuredproducts" role="tab" data-toggle="tab"><span>1</span></a></li>
                  <li role="presentation"><a href="#popularproducts" aria-controls="popularproducts" role="tab" data-toggle="tab"><span>2</span></a></li>
                  <li role="presentation"><a href="#newarrivals" aria-controls="newarrivals" role="tab" data-toggle="tab"> <span>3</span></a></li>
               </ul>
          </div>
          <div class="clearfix"></div>
            <div class="tab-content">
               <div role="tabpanel" class="tab-pane active" id="featuredproducts">
                  <div class="row">
                     <?php foreach ($Related_product_3 as $value) {  ?>
    										 <div class="col-lg-3 col-md-3 col-sm-6">
    										   <div class="product text-left ">
    											  <div class="product-top">
    											   <a href="#" class="product-btn btn-icon" title="Compare"><i class="fa fa-retweet"></i></a>
    												 <a href="#" class="product-btn btn-icon top-right" title="Favorite"><i class="fa fa-heart"></i></a>
    												 <figure class="owl-carousel product-slider">
    													<a itemprop="url" href="<?php echo base_url(); ?><?php echo $value['page_url']; ?>" title="Pullover Batwing Sleeve Zigzag">
    													  <?php  $image_json = str_replace(array("\t","\n"), "", $value['image_urls']);
    														$image_text = json_decode($image_json);
    														foreach ($image_text as $key => $img_v) {
    														$product_img = $img_v;
    														break;
    													  } ?>
    													   <img itemprop="image" src="<?php echo base_url();?><?php echo $product_img; ?>" alt="image not found" class="product-image padimgg">
    													</a>
    												 </figure>
    											  </div>
    											<!-- End .product-top -->
    											  <div class="product_hover">
    												 <div class="product-cats"><a href="#" title="Category Name">10 Product</a></div>
    												 <!-- End .product-cats -->
    												 <h2 class="product-title"><a href="productlist.php" title="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></a></h2>
    												 <span class="txta"> <?php echo $value['meta_description']; ?> </span>
    												 <!-- End .product-ratings -->
    												 <div class="product-action-container"> </div>
    												 <!-- end .product-action-container -->
    												 <a href="#" class="product-btn product-add-btn"><i class="fa fa-shopping-cart"></i>Add to cart</a>
    											  </div>
    											  <!-- End .product -->
    										   </div>
    										</div>
	                   <?php } ?>
                    </div>
                </div>
             <div role="tabpanel" class="tab-pane" id="popularproducts">
                <div class="row">
										<?php foreach ($Related_product_2 as $value) {  ?>
										 <div class="col-lg-3 col-md-3 col-sm-6">
										   <div class="product text-left ">
											  <div class="product-top">
											   <a href="#" class="product-btn btn-icon" title="Compare"><i class="fa fa-retweet"></i></a>
												 <a href="#" class="product-btn btn-icon top-right" title="Favorite"><i class="fa fa-heart"></i></a>
												 <figure class="owl-carousel product-slider">
													<a itemprop="url" href="<?php echo base_url(); ?><?php echo $value['page_url']; ?>" title="Pullover Batwing Sleeve Zigzag">
													  <?php  $image_json = str_replace(array("\t","\n"), "", $value['image_urls']);
														$image_text = json_decode($image_json);
														foreach ($image_text as $key => $img_v) {
														$product_img = $img_v;
														break;
													  } ?>
													   <img itemprop="url" src="<?php echo base_url();?><?php echo $product_img; ?>" alt="image not found" class="product-image padimgg">
													</a>
													</a>
												 </figure>
											  </div>
											  <div class="product_hover">
  												 <div class="product-cats"><a href="#" title="Category Name">10 Product</a></div>
  												 <!-- End .product-cats -->
  												 <h2 class="product-title"><a href="productlist.php" title="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></a></h2>
  												 <span class="txta"> <?php echo $value['meta_description']; ?> </span>
  												 <!-- End .product-ratings -->
  												 <div class="product-action-container"> </div>
  												 <!-- end .product-action-container -->
  												 <a href="#" class="product-btn product-add-btn"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											  </div>
											  <!-- End .product -->
										   </div>
										</div>
								<?php } ?>
              </div>
            </div>
        <div role="tabpanel" class="tab-pane" id="newarrivals">
          <div class="row">
						<?php foreach ($Related_product_1 as $value) {  ?>
						 <div class="col-lg-3 col-md-3 col-sm-6">
						   <div class="product text-left ">
							  <div class="product-top">
							   <a href="#" class="product-btn btn-icon" title="Compare"><i class="fa fa-retweet"></i></a>
								 <a href="#" class="product-btn btn-icon top-right" title="Favorite"><i class="fa fa-heart"></i></a>
								 <figure class="owl-carousel product-slider">
									<a itemprop="url" href="<?php echo base_url(); ?><?php echo $value['page_url']; ?>" title="Pullover Batwing Sleeve Zigzag">
									  <?php  $image_json = str_replace(array("\t","\n"), "", $value['image_urls']);

										$image_text = json_decode($image_json);

										foreach ($image_text as $key => $img_v) {

										$product_img = $img_v;

										break;

									  } ?>
									   <img itemprop="image" src="<?php echo base_url();?><?php echo $product_img; ?>" alt="image not found" class="product-image padimgg">
									</a>
									</a>
								 </figure>
							  </div>
							<!-- End .product-top -->
							  <div class="product_hover">
								 <!-- End .product-cats -->
								 <h2 class="product-title"><a itemprop="url" href="productlist.php" title="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></a></h2>
								 <span class="txta"> <?php echo $value['meta_description']; ?> </span>
								 <!-- End .product-ratings -->
								 <div class="product-action-container"> </div>
								 <!-- end .product-action-container -->
								 <a href="#" class="product-btn product-add-btn"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							  </div>
							  <!-- End .product -->
						   </div>
						</div>
				<?php } ?>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<div class="xlg-margin hidden-xs hidden-sm"></div>
</div>
</div>
<footer id="footer" class="footer-simple footer-dark">

<?php } else{ ?>

<style type="text/css">
  .category-with-icon .thumbnail{
    margin-left: auto;
    margin-right: auto;
    width: 38%;
  }
  .category-with-icon .card .thumbnail:hover{
    width: 50%;
  }
  .category-with-icon .card{
    height: 120px;
    margin-bottom: 18%;
    background-color: rgba(246, 246, 246, 0);
    border: 1px solid rgba(246, 246, 246, 0);
  }
  .category-with-icon .card-body{
    padding: 0.25rem;
  }
  .product-glance-card .card-body{
    padding:0;
  }
  .product-glance-card .card-title {
    margin-bottom: -4%;
    padding-top: 2%;
  }
  .product-glance-card .table td, .table th{
    vertical-align: middle;
    padding: .65rem;
  }
  .product-glance-card .scroll{
    height:200px;
    overflow-y:scroll;
    border-top: 1px solid rgb(223, 223, 223);
  }
  .product-glance-card .card-img-top{
    margin: 0% 0% 0% 15%;
    width: 70%;
  }
  .gradient{
    background: #E0EAFC;
background: -webkit-linear-gradient(to bottom, #CFDEF3, #E0EAFC);
background: linear-gradient(to bottom, #CFDEF3, #E0EAFC);
  }
  .gradient .about-sev-tag p{
        color: #0f3661;
    font-size: 16px;
    font-weight: 600;
  }

.disccl {
    width: 20%;
}
.margsub {
    margin-bottom: 60px;
}
.container.addcldis1 {
       margin-bottom: 50px;
    margin-top: 30px;
}
.namediss {
    transform: rotate(45deg);
    border: 1px solid #043e62;
	overflow:hidden;
    height: 170px;
    width: 170px;
    border-radius: 25px;
    background: #fff;
    margin: 40px 29px;
    box-shadow: 15px -9px 17px 1px #e6e6e6;
    /* -webkit-animation: rotation 2s infinite linear; */
}
.namediss:hover {
    background: #033d61;
    border: 3px solid #f05a2b;
}
.namediss:hover span.angadd {
    color: #fff;
}
span.angadd {
    transform: rotate(-45deg);
    display: block;
    margin: 70px 0px;
    text-align: center;
    color: #f05a2b;
    font-weight: bolder;
}
span.angadd:hover{
    color: #043e62;
}
@media (min-width: 50px) and (max-width: 769px)
{
.namediss {
    transform: rotate(0deg);
    width: 100%;
    margin-bottom: 25px;
        margin: 20px 0px;
            border-radius: 5px;

}
.margsub {
    margin-bottom: 25px;
}

.container.addcldis1 {

    margin-top: 0;
}
.disccl {
    width: 100%;
}
}

.a.thumbnail{
  height: 125px;
}
</style>
</head>
<body class="home">
  <div id="wrapper">
    <div id="content" class="abt">
      <div class="container">
				<ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
					<li itemprop="itemListItem" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="<?php echo base_url(); ?>">Home</a><meta itemprop="position" content="1" />	</li>
					<li class="active" itemprop="itemListItem" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="<?php echo base_url(); ?><?php echo $product_url; ?>"><?php echo $product_url; ?></a><meta itemprop="position" content="2" /></li>
				</ol>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
            <div class="widget category-widget-box">
               <h3 class="widget-title bigger" style="margin:0px; color:#fff; font-weight:600;">Categories</h3>
               <ul id="category-widget">
                   <li class="open">
                     <ul>
                       <?php foreach($get_category as $value){ ?>
                       <li><a onClick="get_subcat(<?php echo $value['id']; ?>)" href="javascript:;"><?php echo $value['name']; ?></a></li>
                       <div id="sub_cat_<?php echo $value['id']; ?>"> </div>
                     <?php } ?>
                     </ul>
                  </li>
               </ul>
            </div>
       </div>
			<div class="col-sm-9">
				<div class="product-details">
					<h2 class="product-title"><?php echo str_replace('-',' ',$product_url); ?></h2>
					<?php if($sub_cat == ""){ ?>
					       <div class="alert alert-primary"> No Description </div>
					<?php } else {?>
					       <p><?php echo $sub_cat['0']['description']; ?><p>
					<?php } ?>
				</div>
  <div class="container addcldis1">
    <h2 class="margsub" align="left"><?php echo 'Range Of '.str_replace('-',' ',$product_url); ?></h2>
    <div class="row">
      <?php if($sub_cat == ""){ ?>
        <div class="alert alert-danger"> Sorry ! No Sub-Category Found </div>
        <h3> Suggest Sub Category </h3>
          <?php foreach ($random_sub_category as $key => $value) { ?> <?php
            $image_url  = base_url().'assets/images/category-icons/'.str_replace(' ','-',$value['name']).'.png';

          ?>
          <div class="col-md-2 col-sm-3 col-xs-4">
            <div class="card">
              <a itemprop="url" style="border: 1px solid #fff; height: 125px;" href="<?php echo base_url(); ?><?php echo $value['page_url']; ?>"  class="thumbnail">
                <img itemprop="image" style="height: 125px !important;"  class="card-img-top" src="<?= $image_url ?>" alt="<?php echo $value['name']; ?>">
              </a>
              <div class="card-body">
                <a itemprop="url" href="<?php echo base_url(); ?><?php echo $value['page_url']; ?>" class="text-center" >
                  <p><span itemprop="name"><?php echo $value['page_title']; ?></span></p>
                </a>
              </div>
            </div>
          </div>
      <?php }  }  else { foreach($sub_cat as $value){ ?><?php
            $image_url  = base_url().'assets/images/category-icons/'.str_replace(' ','-',$value['name']).'.png';
          ?>
          <div class="col-md-2 col-sm-3 col-xs-4">
            <div class="card">
              <a itemprop="url" style="border: 1px solid #fff;" href="<?php echo base_url(); ?><?php echo $value['page_url']; ?>" class="thumbnail">
                <img itemprop="image"  class="card-img-top" src="<?= $image_url ?>" alt="<?php echo $value['name']; ?>">
              </a>
              <div class="card-body">
                <a itemprop="url" href="<?php echo base_url(); ?><?php echo $value['page_url']; ?>" class="text-center" >
                  <p><span itemprop="name"><?php echo $value['page_title']; ?></span></p>
                </a>
              </div>
            </div>
          </div>
			<?php } }  ?>
        </div>
    </div>
  <?php } ?>
</div>
</div>
</div>
<footer id="footer" class="footer-simple footer-dark">
<?php
    include('footer.php');
    ?>
<a href="#wrapper" id="scroll-top" title="Top"><i class="fa fa-angle-up"></i></a>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   </body>
   <script>
   $(document).ready(function(){
     $('#sort').change('on', function(){
        var url =  $('#sort').val();
        if (url) { // require a URL
            window.location = "<?php echo base_url(); ?>"+url;
        }
        return false;
     });
   });
   function get_subcat(id){
     $.ajax({
       url:'<?php echo base_url(); ?>get-sub-cat',
       type: 'POST',
       data:{id:id},
       datatype:'html',
       success:(function(response){
         $('#sub_cat_'+id).html(response);
       })
     });
   };

   function product_number(){
     $('.product-list').hide();
     $('.quantity-selectbox').show();
     var page = $("#page_val").val();
     for(var i = 0; i < page; i++){
       $('.product_id_'+i).show();
     }
   };
   </script>
</html>
