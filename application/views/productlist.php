<!DOCTYPE html>



<html lang="en">

<head>



   <meta charset="utf-8">

   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

   <title><?php echo $product_details['0']['page_title']; ?> </title>



   <meta name="description" content="<?php echo $product_details['0']['meta_description']; ?>">

</head>

   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">

   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">

   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">



   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/themify-icons.css">



   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/revslider7.css">



   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">



   <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/icons/favicon.png">



   <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>assets/images/icons/faviconx57.png">



   <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/images/icons/faviconx72.png">



   <!-- Modernizr -->



   <script src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>



   <!--- jQuery -->



   <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.3.min.js"></script>



</head>  <style>

    select option{

      padding:7%;

    }

    .spec-details li hr{

      display:none;

    }

    .alert-danger{

      padding-left: 20px;

    margin-top: 0px;

    margin-bottom: 0px

    }

    </style>

 <div id="content" class="abt">

            <div class="container">

			         <ol class="breadcrumb">

                <li><a href="<?php echo base_url(); ?>">Home</a></li>

                  <?php $bred_array = explode('/',$product_name);?>

                <li class="active"><a href="<?php echo base_url().$bred_array['0']; ?>"><?php echo $bred_array['0']; ?></a></li>

                <li class="active"><a href="<?php echo base_url().$bred_array['0'].'/'.$bred_array['1']; ?>"><?php echo $bred_array['1']; ?> </a></li>

                <li class="active"><a href="<?php echo base_url().$bred_array['0'].'/'.$bred_array['1'].'/'.$bred_array['2']; ?>"><?php echo $bred_array['2']; ?> </a></li>

             </ol>

            </div>

    </div>

 <div id="content">

  <div class="container">

    <div class="row"  itemscope itemtype="http://schema.org/Product">

      <div class="col-md-9 col-md-push-3">

        <div class="compare">

            <a href="javascript:" class="btn btn-danger pull-right btn-compare"

            style="display:none;"> COMPARE </a>

            <br>

        </div>

                    <div class="col-md-12 sort-panel">

                    <label style="padding:1.3%;">View Per Page : </label>

                      <select onChange="product_number()" id="page_val" class="" name="number" style="display: block !important; width: 15%; height: 40px;color: rgb(24, 63, 104);font-weight: 600;border: 2px solid;border-radius: 25px;padding: 1%;">

                          <option style="font-weight: 500;font-size: 15px;" selected> All Products </option>

                          <option style="font-weight: 500;font-size: 15px;" value="5">5</option>

                          <option style="font-weight: 500;font-size: 15px;" value="10">10</option>

                          <option style="font-weight: 500;font-size: 15px;" value="15">15</option>

                          <option style="font-weight: 500;font-size: 15px;" value="20">20</option>

                      </select>

                    </div>

							<?php

              if($prod_list == !""){

               $i = 0;

               foreach ($prod_list as $key => $value) { ?>

               <div class="col-md-12 pad0_cl">

                 <div class="col-md-11">

                     <div class="for_product product_id_<?php echo $i++; ?>" id="all_products_<?php echo $value['id']; ?>">



                        <div class="product-top" align="center">



                           

                              <a href="<?php echo base_url(); ?><?php echo $value['page_url']; ?>" title="<?php echo $value['name']; ?>">



                              <?php  $image_json = str_replace(array("\t","\n"), "", $value['image_urls']);

                                $image_text = json_decode($image_json);

                                foreach ($image_text as $key => $img_v) {

                                $product_img = $img_v;

                                break;

                              } ?>

                                <img  src="<?php echo base_url(); ?><?php if($product_img == ""){ echo "assets/images/products/image_not_found.jpg" ;} else { echo $product_img; } ?>" alt="Product image" class="product-image_cl">

                              </a>

                           

                        </div>

                        <!-- End .product-top -->

                        <div class="add_pro_cl">

                           <h3 class="product-title text-center">

                              <a itemprop="url" href="<?php echo base_url(); ?><?php echo $value['page_url']; ?>" title="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></a>

                           </h3>

                           <p>

                           <ul class="spec-details text-center">

                              <?php $spec_data = json_decode($value['specifications']);

                                    $j = 1;

                                    foreach($spec_data as $param => $values){

                                      if($values){

                                        echo "<li><b>".$param."</b> <i class='fa fa-caret-right'></i> ".$values."</li>";

                                      }

                                      $j++;

                                      if($j >= 6){break;}

                                    }

                              ?>

                            </ul>

                          </p>



                         <div class="product-action text-center">

                              <!-- <a href="<?php echo base_url(); ?><?php echo $value['page_url']; ?>" class="list-btn list-btn-add">View Details</a> -->

                              <!-- <a href="product.php" class="list-btn list-btn-wishlist"><i class="fa fa-heart"></i>Add to Wishlist</a> -->

                           </div>

                           <!-- End .product-action-wrapper -->

                           <!-- <span class="label label-hot rotated">New</span> -->

                        </div>

                        <!-- End .product-list-content -->

                     </div>

                   </div>

                   <div class="col-md-1">

                     <label class="action action--compare-add" style="border:0px">

                       <input class="check-hidden checkbox" type="checkbox" autocomplete="off"	value="<?= $value['id']?>">

                       <i class="fa fa-plus"></i>

                       <i class="fa fa-check"></i>

                       <span class="action__text action__text--invisible">Add to compare</span>

                     </label>

                   </div>

                    </div>

                   <?php }

                 } else{ ?>

                         <div class="alert alert-danger"> Error..! Not Found </div>

                       <?php } ?>







                  </div>



                  <!-- End .col-md-9 -->



                  <div class="xlg-margin visible-sm visible-xs"></div>



                  <!-- space -->



                  <aside class="col-md-3 col-md-pull-9 sidebar shop-sidebar">

                     <div class="widget category-widget-box">

                        <h3 class="widget-title bigger">Categories</h3>

                        <ul id="category-widget">

                            <li class="open">

                              <ul>

                                <?php foreach($categories_list as $value){ ?>

                              	<li><a onClick="get_subcat(<?php echo $value['id']; ?>)" href="javascript:;"><?php echo $value['name']; ?></a></li>

                                <div id="sub_cat_<?php echo $value['id']; ?>"> </div>

                              <?php } ?>

            							  	</ul>

            						 	 </li>

                        </ul>

                     </div>

                  </aside>



               </div>



               <!-- End .row -->



			   <div class="row" itemscope itemtype="http://schema.org/Product">



                  <div class="col-lg-12">



                     <div role="tabpanel" class="product-tab-carousel">



                        <!-- Nav tabs -->



                        <div class="header">



                           <h4>Related Product</h4>



                           <ul class="nav nav-lava nav-lava-sm" role="tablist">



                        <li role="presentation" class="active"><a href="#featuredproducts" aria-controls="featuredproducts" role="tab" data-toggle="tab"><span>1</span></a></li>



                        <li role="presentation"><a href="#popularproducts" aria-controls="popularproducts" role="tab" data-toggle="tab"><span>2</span></a></li>



                        <li role="presentation"><a href="#newarrivals" aria-controls="newarrivals" role="tab" data-toggle="tab"> <span>3</span></a></li>







                           </ul>



                        </div>



                        <div class="clearfix"></div>



                        <!-- Tab Panes -->



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

                                                                         <img src="<?php echo base_url();?><?php echo $product_img; ?>" alt="image not found" class="product-image padimgg">

                                                                      </a>

                                                                      </a>

                                                                   </figure>

                                                                </div>

                                                              <!-- End .product-top -->

                                                                <div class="product_hover">

                                                                   <!-- <div class="product-cats"><a href="#" title="Category Name">10 Product</a></div> -->

                                                                   <!-- End .product-cats -->

                                                                   <h2 class="product-title"><a href="<?php echo base_url(); ?><?php echo $value['page_url']; ?>" title="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></a></h2>

                                                                   <span class="txta"> <?php echo $value['meta_description']; ?> </span>

                                                                   <!-- End .product-ratings -->

                                                                   <div class="product-action-container"> </div>

                                                                   <!-- end .product-action-container -->

                                                                   <a href="href="<?php echo base_url(); ?><?php echo $value['page_url']; ?>"" class="product-btn product-add-btn"></i>View Details</a>

                                                                </div>

                                                                <!-- End .product -->

                                                             </div>

                                                          </div>

                                                          <?php } ?>











                              </div>



                              <!-- end .product-featured-carousel-sm -->



                           </div>



                           <!-- End .tab-pane -->



                           <div role="tabpanel" class="tab-pane" id="popularproducts">



                              <div class="row">







                                                          <?php foreach ($Related_product_2 as $value) {  ?>

                                                           <div class="col-lg-3 col-md-3 col-sm-6">

                                                             <div class="product text-left ">

                                                                <div class="product-top">

                                                                 <a href="#" class="product-btn btn-icon" title="Compare"><i class="fa fa-retweet"></i></a>

                                                                   <a href="#" class="product-btn btn-icon top-right" title="Favorite"><i class="fa fa-heart"></i></a>

                                                                   <figure class="owl-carousel product-slider">

                                                                      <a href="<?php echo base_url(); ?><?php echo $value['page_url']; ?>" title="Pullover Batwing Sleeve Zigzag">

                                                                        <?php  $image_json = str_replace(array("\t","\n"), "", $value['image_urls']);



                                                                          $image_text = json_decode($image_json);



                                                                          foreach ($image_text as $key => $img_v) {



                                                                          $product_img = $img_v;



                                                                          break;



                                                                        } ?>

                                                                         <img src="<?php echo base_url();?><?php echo $product_img; ?>" alt="image not found" class="product-image padimgg">

                                                                      </a>

                                                                      </a>

                                                                   </figure>

                                                                </div>

                                                              <!-- End .product-top -->

                                                                <div class="product_hover">

                                                                   <!-- <div class="product-cats"><a href="#" title="Category Name">10 Product</a></div> -->

                                                                   <!-- End .product-cats -->

                                                                   <h2 class="product-title"><a href="<?php echo base_url(); ?><?php echo $value['page_url']; ?>" title="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></a></h2>

                                                                   <span class="txta"> <?php echo $value['meta_description']; ?> </span>

                                                                   <!-- End .product-ratings -->

                                                                   <div class="product-action-container"> </div>

                                                                   <!-- end .product-action-container -->

                                                                   <a href="<?php echo base_url(); ?><?php echo $value['page_url']; ?>" class="product-btn product-add-btn">View Details</a>

                                                                </div>

                                                                <!-- End .product -->

                                                             </div>

                                                          </div>

                                                          <?php } ?>

                              </div>



                              <!-- end .product-popular-carousel -->



                           </div>



                           <style>

                           .product_hover .txta {

                               white-space: nowrap;

                               width: 250px;

                               overflow: hidden;

                               text-overflow: ellipsis;

                           }

                           </style>                         <!-- End .tab-pane -->



                           <div role="tabpanel" class="tab-pane" id="newarrivals">



                              <div class="row">









                                                          <?php foreach ($Related_product_1 as $value) {  ?>

                                                           <div class="col-lg-3 col-md-3 col-sm-6">

                                                             <div class="product text-left ">

                                                                <div class="product-top">

                                                                 <a href="#" class="product-btn btn-icon" title="Compare"><i class="fa fa-retweet"></i></a>

                                                                   <a href="#" class="product-btn btn-icon top-right" title="Favorite"><i class="fa fa-heart"></i></a>

                                                                   <figure class="owl-carousel product-slider">

                                                                      <a href="<?php echo base_url(); ?><?php echo $value['page_url']; ?>" title="Pullover Batwing Sleeve Zigzag">

                                                                        <?php  $image_json = str_replace(array("\t","\n"), "", $value['image_urls']);



                                                                          $image_text = json_decode($image_json);



                                                                          foreach ($image_text as $key => $img_v) {



                                                                          $product_img = $img_v;



                                                                          break;



                                                                        } ?>

                                                                         <img src="<?php echo base_url();?><?php echo $product_img; ?>" alt="image not found" class="product-image padimgg">

                                                                      </a>

                                                                      </a>

                                                                   </figure>

                                                                </div>

                                                              <!-- End .product-top -->

                                                                <div class="product_hover">

                                                                   <!-- <div class="product-cats"><a href="#" title="Category Name">10 Product</a></div> -->

                                                                   <!-- End .product-cats -->

                                                                   <h2 class="product-title"><a href="<?php echo base_url(); ?><?php echo $value['page_url']; ?>" title="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></a></h2>

                                                                   <span class="txta"> <?php echo $value['meta_description']; ?> </span>

                                                                   <!-- End .product-ratings -->

                                                                   <div class="product-action-container"> </div>

                                                                   <!-- end .product-action-container -->

                                                                   <a href="<?php echo base_url(); ?><?php echo $value['page_url']; ?>" class="product-btn product-add-btn">View Details</a>

                                                                </div>

                                                                <!-- End .product -->

                                                             </div>

                                                          </div>

                                                          <?php } ?>









                              </div>



                              <!-- end .product-newarrivals-carousel-sm -->



                           </div>











						   <div role="tabpanel" class="tab-pane" id="newarrivals1">



                              <div class="row">







								 <?php



								$img=0;



								for( $i = 1; $i < 5; $i++ ){



								if($i>8){



								$img=0;



								}



								$img++;



								 ?>



                                 <div class="col-lg-3 col-md-3 col-sm-6">



                                    <div class="product text-left ">







                                       <div class="product-top">



                                          <a href="#" class="product-btn btn-icon" title="Compare"><i class="fa fa-retweet"></i></a>



                                          <a href="#" class="product-btn btn-icon top-right" title="Favorite"><i class="fa fa-heart"></i></a>



                                          <figure class="owl-carousel product-slider">



                                             <a href="productlist.php" title="Pullover Batwing Sleeve Zigzag">



                                             <img src="image/img/<?php echo $img?>.png" alt="Product image" class="product-image padimgg">



                                             </a>







                                          </figure>



                                       </div>



                                       <!-- End .product-top -->





                                       <!-- End .product -->



                                    </div>



                                 </div>



                                   <?php } ?>











                              </div>



                              <!-- end .product-newarrivals-carousel-sm -->



                           </div>



                           <!-- End .tab-pane -->



                        </div>



                        <!-- End .tab-content -->



                     </div>



                     <!-- end role[tabpanel] -->



                  </div>



               </div>







            </div>



            <!-- End .container -->



            <div class="xlg-margin hidden-xs hidden-sm"></div>



         </div>

         <input type="hidden" id="base" value="<?= base_url(); ?>">



      <footer id="footer" class="footer-simple footer-dark">

    <?php



        include('footer.php');



        ?>



      <a href="#wrapper" id="scroll-top" title="Top"><i class="fa fa-angle-up"></i></a>



      <!-- END -->



<!--Google Analytics Code -->



     <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>



      <script src="<?php echo base_url(); ?>assets/js/jquery.hoverIntent.min.js"></script>



      <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>



      <script src="<?php echo base_url(); ?>assets/js/waypoints.min.js"></script>



      <script src="<?php echo base_url(); ?>assets/js/waypoints-sticky.min.js"></script>



      <script src="<?php echo base_url(); ?>assets/js/jquery.debouncedresize.js"></script>



      <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>



      <script src="<?php echo base_url(); ?>assets/js/jquery.nouislider.all.min.js"></script>



      <script src="<?php echo base_url(); ?>assets/js/jquery.selectbox.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

      <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>

   </body>

   <script>



   var base = $('#base').val();

       //alert(base);

       var $btn_compare = $('.btn-compare');

       var get_checked_id = function (e) {

           var array = [];

           var count = 0;

           $(".action--compare-add .checkbox:checked").each(function () {

               count++;

               if (count > 4) {

                   swal("Cannot add more than 4 products to Compare..! ", "", "warning");

                   return false;

               }

               if (count > 0) {

                   $btn_compare.show();

               }

               if (count == 0 || count == null) {

                   $btn_compare.hide();

               }

               array.push(this.value);

               $btn_compare.text('COMPARE (' + count + ')');

           });

           if (count == 0) {

               $btn_compare.hide();

           }

           var ids = array.join(",");

           if (ids) {

                 $btn_compare.attr('href', base + 'compare/?product_id=' + ids);

           }

       };

       $(".checkbox").on("click", get_checked_id);

   // });

   </script>

<script>

// $(document).ready(function(){

//   $('#page_val').on('change', function(){

//     alert(6545);

//   });

// });

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

  var page = $("#page_val").val();

  for(var i = 0; i < page; i++){

    $('.product_id_'+i).show();

  }

};

</script>



</html>

