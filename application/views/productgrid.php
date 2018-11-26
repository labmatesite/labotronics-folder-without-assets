<!DOCTYPE html>



<html lang="en">







<head>



      <meta charset="utf-8">



      <title>Labmate</title>



      <meta name="description" content="Premium bootstrap based eCommerce template">



      <meta name="viewport" content="width=device-width, initial-scale=1.0">



      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">



      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">



      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.selectbox.css">



      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">



      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/themify-icons.css">



      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">



      <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/icons/favicon.png">



      <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>assets/images/icons/faviconx57.png">



      <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/images/icons/faviconx72.png">



      <!-- Modernizr -->



      <script src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>



      <!--- jQuery -->



      <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.3.min.js"></script>



   </head>



   <body class="home">



      <div id="wrapper">

 <div id="content" class="abt">

            <div class="container">

              <ol class="breadcrumb">

                       <li><a href="<?php echo base_url(); ?>index.php/labmate">Home</a></li>

                       <li class="active"><a href="<?php echo base_url(); ?>index.php/labmate/products_grid/<?php echo $category_name; ?>"><?php echo $category_name; ?></a></li>

                       <li class="active"><a href="<?php echo base_url(); ?>index.php/labmate/products_grid/<?php echo $product_name; ?>"><?php echo $product_name; ?> </a></li>

                    </ol>

          </div>

      </div>







   <div id="content">

            <div class="container">

               <div class="row">

                   <div class="col-md-9 col-md-push-3">

                     <div class="filter-row clearfix">

                        <div class="filter-row-box">

                           <!-- <span class="filter-row-label">Sort by</span>

                           <div class="small-selectbox sort-selectbox clearfix">

                              <select id="sort" name="sort" class="selectbox">

                                 <option value="Position">Position</option>

                                 <option value="Rate">Rate</option>

                                 <option value="Price">Price</option>

                                 <option value="Date">Date</option>

                              </select>

                           </div> -->



                           <!-- End .normal-selectbox-->



                           <!-- <a href="#" class="sort-arrow" title="Sort">Sort</a> -->



                        </div>



                        <!-- End .filter-row-box -->



                        <div class="filter-row-box second">

                           <!-- <a href="<?php echo base_url(); ?>index.php/labmate/products_list/<?php echo $product_name; ?>" class="btn active" title="Category grid"><i class="fa fa-th"></i></a> -->

                           <a href="<?php echo base_url(); ?>index.php/labmate/products/<?php echo $product_name; ?>" class="btn" title="Category List"><i class="fa fa-th-list"></i></a>

                        </div>



                        <!-- End .filter-row-box -->



                        <div class="clearfix visible-xs"></div>



                        <!-- End .clearfix -->



                        <div class="filter-row-box last">



                           <span class="filter-row-label">Show</span>



                           <div class="small-selectbox quantity-selectbox clearfix">



                              <select id="number" name="number" class="selectbox">



                                 <option value="12">12</option>



                                 <option value="18">18</option>



                                 <option value="24">24</option>



                                 <option value="30">30</option>



                              </select>



                           </div>



                           <!-- End .normal-selectbox-->



                           <span class="filter-row-label hidden-xss">per page</span>



                        </div>



                        <!-- End .filter-row-box -->



                        <!-- <nav class="filter-row-box right">



                           <ul class="pagination">



                              <li class="active"><a href="#">1</a></li>



                              <li><a href="#">2</a></li>



                              <li><a href="#">3</a></li>



                              <li>



                                 <a href="#" aria-label="Next">



                                 <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>



                                 </a>



                              </li>



                           </ul>



                        </nav> -->



                        <!-- End .filter-row-box -->



                     </div>



                     <!-- End .filter-row -->



                  <?php foreach ($prod_list as $key => $value) {?>



                  <div class="col-md-3 col-sm-6 pad02">

                  <div class="product prodd">

                     <div class="product-top">

                        <figure class="owl-carousel product-slider">

                           <a href="<?php echo base_url(); ?>index.php/labmate/view_product/<?php echo $value['page_url']; ?>" title="<?php echo $value['page_title']; ?>">

                           <img src="<?php echo base_url(); ?>assets/image/img/1.png" alt="<?php echo $value['image_alt']; ?>" class="product-image">

                         </a>

                        </figure>

                     </div>

                     <div class="product_hover">

                        <h2 class="product-title"><a href="<?php echo base_url(); ?>index.php/labmate/view_product/<?php echo $value['page_url']; ?>" title="<?php echo $value['page_title']; ?>"><?php echo $value['name']; ?></a></h2>

                        <div class="product-action-container"> </div>

                        <a href="<?php echo base_url(); ?>index.php/lamate/view_product/<?php echo $value['page_url']; ?>" class="product-btn product-add-btn"><i class="fa fa-shopping-cart"></i>View Details</a>

                     </div>

                  </div>

               </div>

             <?php } ?>



                     <!-- <nav class="pagination-container">



                        <span class="pagination-info">Showing: 1-12 of 16</span>



                        <ul class="pagination">



                           <li class="active"><a href="#">1</a></li>



                           <li><a href="#">2</a></li>



                           <li><a href="#">3</a></li>



                           <li>



                              <a href="#" aria-label="Next">



                              <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>



                              </a>



                           </li>



                        </ul>



                     </nav> -->



                     <!-- End .pagination-container -->



                  </div>



                  <!-- End .col-md-9 -->



                  <div class="xlg-margin visible-sm visible-xs"></div>



                  <!-- space -->



                  <aside class="col-md-3 col-md-pull-9 sidebar shop-sidebar">



                     <div class="widget category-widget-box">



                        <h3 class="widget-title bigger">Categories</h3>



                        <ul id="category-widget">

                          <li class="open">

                            <!-- <a href="javascript:;">Categories <span class="category-widget-btn"><i class="fa fa-angle-bottom"></i></span></a> -->

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



















			   <div class="row">



                  <div class="col-lg-12">



                     <div role="tabpanel" class="product-tab-carousel">



                        <!-- Nav tabs -->



                        <div class="header">



                           <h4>Related Product</h4>



                           <ul class="nav nav-lava nav-lava-sm" role="tablist">



                        <li role="presentation" class="active"><a href="#featuredproducts" aria-controls="featuredproducts" role="tab" data-toggle="tab"><span>1</span></a></li>



                        <li role="presentation"><a href="#popularproducts" aria-controls="popularproducts" role="tab" data-toggle="tab"><span>2</span></a></li>



                        <li role="presentation"><a href="#newarrivals" aria-controls="newarrivals" role="tab" data-toggle="tab"> <span>3</span></a></li>



						<li role="presentation"><a href="#newarrivals1" aria-controls="newarrivals1" role="tab" data-toggle="tab"> <span>4</span></a></li>



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

                                            <a href="productlist.php" title="Pullover Batwing Sleeve Zigzag">

                                               <img src="<?php echo base_url(); ?>assets/image/img/2.png" alt="Product image" class="product-image padimgg">

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



                              <!-- end .product-featured-carousel-sm -->



                           </div>

                           <style>

                           .product_hover .txta {

                               white-space: nowrap;

                               width: 250px;

                               overflow: hidden;

                               text-overflow: ellipsis;

                           }

                           </style>

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

                                                <a href="productlist.php" title="Pullover Batwing Sleeve Zigzag">

                                                   <img src="<?php echo base_url(); ?>assets/image/img/2.png" alt="Product image" class="product-image padimgg">

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



                              <!-- end .product-popular-carousel -->



                           </div>



                           <!-- End .tab-pane -->



                           <div role="tabpanel" class="tab-pane" id="newarrivals">



                              <div class="row">

                                <?php foreach ($Related_product_1 as $value) {  ?>

                                 <div class="col-lg-3 col-md-3 col-sm-6">

                                   <div class="product text-left ">

                                      <div class="product-top">

                                       <a href="#" class="product-btn btn-icon" title="Compare"><i class="fa fa-retweet"></i></a>

                                         <a href="#" class="product-btn btn-icon top-right" title="Favorite"><i class="fa fa-heart"></i></a>

                                         <figure class="owl-carousel product-slider">

                                            <a href="productlist.php" title="Pullover Batwing Sleeve Zigzag">

                                               <img src="<?php echo base_url(); ?>assets/image/img/2.png" alt="Product image" class="product-image padimgg">

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



                              <!-- end .product-newarrivals-carousel-sm -->



                           </div>











						   <div role="tabpanel" class="tab-pane" id="newarrivals1">



                              <div class="row">







                            <?php foreach ($Related_product_1 as $value) {  ?>

                             <div class="col-lg-3 col-md-3 col-sm-6">

                               <div class="product text-left ">

                                  <div class="product-top">

                                   <a href="#" class="product-btn btn-icon" title="Compare"><i class="fa fa-retweet"></i></a>

                                     <a href="#" class="product-btn btn-icon top-right" title="Favorite"><i class="fa fa-heart"></i></a>

                                     <figure class="owl-carousel product-slider">

                                        <a href="productlist.php" title="Pullover Batwing Sleeve Zigzag">

                                           <img src="<?php echo base_url(); ?>assets/image/img/2.png" alt="Product image" class="product-image padimgg">

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



























      <footer id="footer" class="footer-simple footer-dark">









    <?php



        include('footer.php');



        ?>



         <!-- End #footer-bottom -->







      <!-- End #footer -->











      <!-- End #wrapper -->



      <a href="#wrapper" id="scroll-top" title="Top"><i class="fa fa-angle-up"></i></a>



      <!-- END -->



<!--Google Analytics Code -->







<!-- End Google Analtics Code-->



     <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>



      <script src="<?php echo base_url(); ?>assets/js/jquery.hoverIntent.min.js"></script>



      <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>



      <script src="<?php echo base_url(); ?>assets/js/waypoints.min.js"></script>



      <script src="<?php echo base_url(); ?>assets/js/waypoints-sticky.min.js"></script>



      <script src="<?php echo base_url(); ?>assets/js/jquery.debouncedresize.js"></script>



      <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>



      <script src="<?php echo base_url(); ?>assets/js/jquery.nouislider.all.min.js"></script>



      <script src="<?php echo base_url(); ?>assets/js/jquery.selectbox.min.js"></script>



      <script src="<?php echo base_url(); ?>assets/js/main.js"></script>



      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>

         </body>

      <script>

      // $(document).ready(function(){

      //   $('#page_val').on('change', function(){

      //     alert(6545);

      //   });

      // });

      function get_subcat(id){

        $.ajax({

          url:'<?php echo base_url(); ?>index.php/labmate/get_sub_cat',

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

