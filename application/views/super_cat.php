<style>

.product_hover .txta {

    white-space: nowrap;

    width: 250px;

    overflow: hidden;

    text-overflow: ellipsis;

}

</style>

     <?php if($sub_cat == ""){ ?>

            <div id="wrapper">

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

                     <div class="row">

                        <div class="col-md-9 col-md-push-3">

            <style>

            .owl-carousel{

              display: block !important;

            }

            </style>

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

                              <!-- End .product-top -->

                              <div class="product-list-content">

                                 <h3 class="product-title">

                                    <a itemprop="url" href="<?php echo base_url(); ?>description/<?php echo $value['page_url']; ?>" title="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></a>

                                 </h3>

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

                           <nav class="pagination-container">

                              <!-- <span class="pagination-info">Showing: 1-12 of 16</span> -->

                           </nav>

                        </div>

                      <div class="xlg-margin visible-sm visible-xs"></div>

                    <aside class="col-md-3 col-md-pull-9 sidebar shop-sidebar">

                       <div class="widget category-widget-box">

                        <h3 class="widget-title bigger">Categories</h3>

                          <ul id="category-widget">

                            <li class="open">

                              <ul>

                                <?php foreach($categories_list as $value){ ?>

                                <li><a itemprop="name" onClick="get_subcat(<?php echo $value['id']; ?>)" href="javascript:;"><?php echo $value['name']; ?></a></li>

                                <div id="sub_cat_<?php echo $value['id']; ?>"> </div>

                              <?php } ?>

                              </ul>

                           </li>

                        </ul>

                      </div>

                  </aside>

              </div>

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

                                                  </a>

                                               </figure>

                                            </div>

                                          <!-- End .product-top -->

                                            <div class="product_hover">

                                               <div class="product-cats"><a href="#" title="Category Name">10 Product</a></div>

                                               <!-- End .product-cats -->

                                               <h2 class="product-title"><a itemprop="name" href="productlist.php" title="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></a></h2>

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

                                                   <img itemprop="image" src="<?php echo base_url();?><?php echo $product_img; ?>" alt="image not found" class="product-image padimgg">

                                                </a>

                                                </a>

                                             </figure>

                                          </div>

                                        <!-- End .product-top -->

                                          <div class="product_hover">

                                             <div class="product-cats"><a href="#" title="Category Name">10 Product</a></div>

                                             <!-- End .product-cats -->

                                             <h2 class="product-title"><a itemprop="name" href="productlist.php" title="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></a></h2>

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

                                               <div class="product-cats"><a href="#" title="Category Name">10 Product</a></div>

                                               <!-- End .product-cats -->

                                               <h2 class="product-title"><a itemprop="name" href="productlist.php" title="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></a></h2>

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

            <footer id="footer" class="footer-simple footer-dark">

<?php  } else{ ?>

<style type="text/css">

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

    /*transform: rotate(45deg);*/

    border: 1px solid #043e62;

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

    /*transform: rotate(-45deg);*/

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

</style>

      <div id="wrapper">

        <div id="content" class="abt">

            <div class="container">

              <ol class="breadcrumb">

                <li><a itemprop="url" href="<?php echo base_url(); ?>">Home</a></li>

                <?php

                $bred_array = explode('/',$product_name);?>

                <li class="active"><a href="<?php echo base_url().$bred_array['0']; ?>"><?php echo $bred_array['0']; ?></a></li>

                <li class="active"><a href="<?php echo base_url().$bred_array['0'].'/'.$bred_array['1']; ?>"><?php echo $bred_array['1']; ?> </a></li>

                  <!-- <li class="active"><a href="<?php echo base_url().$bred_array['0'].'/'.$bred_array['1'].'/'.$bred_array['2']; ?>"><?php echo $bred_array['2']; ?> </a></li> -->

               </ol>

         </div>

        </div>

        <div class="container">

          <div class="row">

 



             <div class="col-sm-3">

               <?php

               if ($sub_cat == ""){ ?>

              <h4 align="center" style="color:red; color: red; font-size: 14px; text-decoration: underline;">No Category Found..! Change Categories </h4>

            <?php } else { ?>

                <h4 align="center">Product Categories</h4>

              <?php } ?>

                 <div class="col-lg-12">

                   <div class="small-selectbox sort-selectbox clearfix">

                      <select id="sort" name="sort" class="selectbox">

                      <?php    foreach ($get_category as $value) { ?>

                        <option value="<?php echo $value['page_url']; ?>" <?php if($product_url == $value['url_title']){ echo "selected"; } ?>  ><?php echo $value['name']; ?></option>

                      <?php } ?>

                      </select>

                   </div>

                 </div>

             </div>

 





 















              <div class="col-sm-9">

                <div class="product-details">

                   <h2 class="product-title"><?php $new_name = explode('/',str_replace('-',' ',$product_url));

                    echo $new_name['1']; ?></h2>



                     <!--  <span class="product-ratings-count">Description</span> -->



                   <?php if($sub_cat == ""){ ?>

                    <div class="alert alert-primary"> No Description found </div>

                  <?php } else {?>

                   <p><?php echo $page_des ?><p>

                   <?php } ?>

                </div>

             </div>

            </div>

         </div>

       <div class="container addcldis1">

          <h2 class="margsub" align="center">Range Of <?php echo str_replace('-',' ',$bred_array['1']); ?></h2>

                  <div class="row"  itemscope itemtype="http://schema.org/Product">

                      <?php

                   if($sub_cat == ""){ ?>

                    <div class="alert alert-danger"> Sorry ! No Sub-Category Found </div>

                    <h3> Suggest Sub Category </h3>

                    <?php foreach ($random_sub_category as $key => $value) { ?>

                      <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 disccl" >

                         <a itemprop="url" href="<?php echo base_url(); ?><?php echo $value['page_url']; ?>">

                             <div class="namediss">

                                 <span class="angadd"> <?php echo $value['page_title']; ?></span>

                             </div>

                         </a>

                      </div>

                    <?php } ?>

                <?php }  else {

                foreach($sub_cat as $value){

                  $this->db->select('c.id cat_id, c.name cat_name,c.page_url cpage_url, p.*');

                   $this->db->where('c.id', $value['id']);

                   $this->db->where('c.inactive', 0);

                   $this->db->from('categories as c');

                   $this->db->join('products as p', 'c.id = p.category_id', 'left');

                   $query = $this->db->get();

                   $res = $query->result_array();

                   foreach ($res as $new_value) {

                     $image_json = str_replace(array("\t","\n"), "", $new_value['image_urls']);

                            $image_text = json_decode($image_json);

                            foreach ($image_text as $key => $img_v) {

                            $product_img = $img_v;

                            break;

                          }

             ?>

             <div class="col-md-3 pad_img">

              <div class="img_add_cl">

               <a href="<?= base_url().$new_value['cpage_url']; ?>">

                <img src="<?php echo base_url().$product_img; ?>" alt="Avatar" class="">                 

              </a>

            </div>

              <a href="<?= base_url().$new_value['cpage_url']; ?>"><div class="text1"><?= $new_value['cat_name']; ?></div></a>

              

              </div>

                   <?php break; } ?>

				    <?php } }  ?>

               </div>

            </div>

  <?php } ?>

      <footer id="footer" class="footer-simple footer-dark">

    <?php

        include('footer.php');

        ?>

         <!-- End #footer-bottom -->

      <!-- End #wrapper -->

      <a href="#wrapper" id="scroll-top" title="Top"><i class="fa fa-angle-up"></i></a>

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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

