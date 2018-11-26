<?php if($this->session->flashdata('suc_1')==1){?>
    <div class="alert alert-success"> Successfully Register ..! </div>
    <?php }?>
        <?php if($this->session->flashdata('suc_login')==2){?>
            <div class="alert alert-success"> Successfully Login ..! </div>
            <?php }?>
                <?php if($this->session->flashdata('error_msg')==3){?>
                    <div class="alert alert-danger"> Error.! You entered Invalid Email and password </div>
                    <?php }?>
                        <?php if($this->session->flashdata('sub_q')==1){?>
                            <div class="alert alert-success"> Your Query Has Been Send Successfully..! </div>
                            <?php }?>
                                <?php if($this->session->flashdata('suc_send')==1){?>
                                    <script>
                                        swal({
                                            title: "Success!",
                                            text: "The Quote has been sent successfully ",
                                            icon: "success",
                                            button: "Exit",
                                        });
                                    </script>
                                    <?php }?>
                                        <?php if($this->session->flashdata('logout')==1){?>
                                            <div class="alert"><span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span><strong>Error!</strong> You are Not logged In... </div>
                                            <?php }?>
                                                <?php if($this->session->flashdata('suc_logout')==1){?>
                                                    <div class="alert alert-success"><strong>Success!</strong> you have successfully logged out... </div>
                                                    <?php }?>
                                                        <?php if($this->session->flashdata('suc_sub')==1){?>
                                                            <div class="alert-usr" style="background-color:blue!important"><span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span><strong>Subscribed!</strong></div>
                                                            <?php }?>

                                                                <body class="home" itemscope itemtype="http://schema.org/Organization">
                                                                    <!-- Google Tag Manager (noscript) -->
                                                                        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MXG7HML"
                                                                        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
                                                                        <!-- End Google Tag Manager (noscript) -->
                                                                    <div id="wrapper">
                                                                        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/engine1/style.css" />
                                                                        <div class="container-fluid" style="padding-left:0px;padding-right:0px">
                                                                            <div id="myCarousel" class="carousel slide" data-ride="carousel">






<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <!-- <li style="background: #666;" data-target="#myCarousel" data-slide-to="0" class="active"></li> -->
 <!--    <li style="background: #666;" data-target="#myCarousel" data-slide-to="1"></li> -->
    <!-- <li style="background: #666;" data-target="#myCarousel" data-slide-to="2"></li>
    <li style="background: #666;" data-target="#myCarousel" data-slide-to="3"></li> -->
  </ol>
  <script src="jquery.js" type="text/javascript"></script> <script src="jquery.lazyload.js" type="text/javascript"></script>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img class="lazy" src="<?= base_url(); ?>assets/banner1.jpg" alt="labotornics">
    </div> 
    <script>
    $("img.lazy").lazyload();
    </script>
   <!--  <div class="item">
      <img src="<?= base_url(); ?>assets/banner2.jpg" alt="labotornics">
    </div>  -->
    <!-- <div class="item">
      <img src="<?= base_url(); ?>assets/banner3.jpg" alt="labotornics">
    </div>
    <div class="item">
      <img src="<?= base_url(); ?>assets/banner4.jpg" alt="labotornics">
    </div> -->
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

















                                                                                <!-- <div title="Labotronics | Lab Equipment | Scientific Instruments" class="carousel-inner dis_none fx_bg"></div> -->
                                                                            </div>
                                                                        </div>
                                                                    




<div id="content" class="home-about-content dis_none">
 <br>
 <br>
 <div class="container">
     <div class="row">
         <div title="Labotronics Scientific Ltd" class="col-lg-12 abtt">

                                                                                        <p class="fonthome"><b>Labotronics Scientific Ltd.</b> is a renowned Laboratory Equipment company offering Products for Life Science, Healthcare, Molecular Biology, Biotechnology, Educational Institutions and Research Laboratories.</p>
                                                                                         <p class="fonthome"><b>Our product range includes :</b>
                                                                                            <br><b><a title="Cooling Equipment" href="<?= base_url('Cooling-Equipment') ?>">Cooling Equipment</a></b> -  Blood Bank Refrigerators, Chillers, Cold storage, Freezers, Ice maker, Refrigerated Circulator
                                                                                            <br><b><a title="Heating Equipment" href="<?= base_url('Heating-Equipment') ?>">Heating Equipment</a></b> - Incubators
                                                                                            <br><b><a title="Molecular Spectroscopy" href="<?= base_url('Molecular-Spectroscopy') ?>">Molecular Spectroscopy</a></b> - Spectrometer, Spectrophotometer
                                                                                            <br><b><a title="Microbiology" href="<?= base_url('Microbiology') ?>">Microbiology</a></b> - Centrifuge, Laboratory, Shakers, Rotary evaporator, Glass reactor, Sample concentrator 
                                                                                            <br><b><a title="Analytical Equipment" href="<?= base_url('Analytical-Equipment') ?>">Analytical Equipment</a></b> - Gas Chromatography, HPLC  
                                                                                            <br><b><a title="Water Distillation and Purification System" href="<?= base_url('Water-Distillation-And-Purification-System') ?>">Water Distillation and Purification System</a></b> - Water Distiller, Short Path Distillation Kits 
                                                                                        </p>
                                                                                        <p class="fonthome">We are an <b>ISO 9001: 2008</b> accredited company and also has certification like <b>CE</b>, <b>GMP</b>.</p>
                                                                                        <p class="fonthome">Our products also comply with international standards such as <b>ISO 13845</b> and has a well approved Quality Management System.</p>
                                                                                    </div>
     </div>
 </div>
</div>






                                                                        <div class="col-lg-12 dis_src">
                                                                            <div class="header bdrb2">
                                                                                <h1 title="products By Categories"><span style="color:#033d61; font-size: 20px;"><b><span>A</span>ll </b><b><span> P</span>roducts</b></span></h1></div>
                                                                            <div class="col-md-12 mega_menu_wrapper">
                                                                                <div class="widget">
                                                                                    <ul class="products-list">
                                                                                        <?php $i=1;foreach($all_categories as $key=>$value){?>
                                                                                            <div class="col-md-4 add_hig_drop">
                                                                                                <div class="full_bdr">
                                                                                                       <p class="txt_mnu1">
                                                                                                        <a itemprop="url" href="<?php echo base_url($value['page_url']);?>" title="<?php echo $value['name'];?>">
                                                                                                            <?php echo $value['name'];?>
                                                                                                        </a>
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                        <?php }?>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-12 dis_src">
                                                                            <div class="header bdrb2">
                                                                                <h1 title="products By Categories"><span style="color:#033d61; font-size: 20px;"><b><span>P</span>roduct </b><b><span>B</span>y</b><b><span> C</span>ategories</b></span></h1></div>
                                                                            <div class="col-md-12 mega_menu_wrapper">
                                                                                <div class="widget">
                                                                                    <ul class="products-list">
                                                                                        <?php $i=1;foreach($product_category as $key=>$value){?>
                                                                                            <div class="col-md-4 add_hig_drop">
                                                                                                <div class="full_bdr"><span><a itemprop="url" href="<?php echo base_url();?><?php echo $value['page_url'];?>" title="<?php echo $value['url_title'];?>"><img itemprop="image" src="<?php echo base_url().'assets/resources/images/category-images/new/'.str_replace(' ','-',$value['name']).'.png';?>" style="height:30px" alt="<?php echo $value['name'];?>" class="img-responsive"></a></span>
                                                                                                    <p class="txt_mnu1">
                                                                                                        <a itemprop="url" href="<?php echo base_url($value['page_url']);?>" title="<?php echo $value['name'];?>">
                                                                                                            <?php echo $value['name'];?>
                                                                                                        </a>
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                        <?php }?>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-12 dis_src">
                                                                            <div class="header bdrb2">
                                                                                <h1 title="products By Applications" style=" font-size: 20px;"><span><b><span>P</span>roducts</b><b><span> B</span>y </b><b><span> A</span>pplication</b></span></h1></div>
                                                                            <div class="col-md-12 mega_menu_wrapper">
                                                                                <div class="widget">
                                                                                    <ul class="products-list">
                                                                                        <?php $i=1;foreach($categories as $key=>$value){?>
                                                                                            <div class="col-md-4 add_hig_drop">
                                                                                                <div class="full_bdr"><span><a itemprop="url" href="<?php echo base_url();?><?php echo $value['page_url'];?>" title="<?php echo $value['url_title'];?>"><?php $image_name=base_url('assets/resources/images/category-images/new/'.str_replace(' ','-',$value['name']).'.jpg');if(file_exists($image_name)){$image=$image_name;}else{$image=base_url('assets/images/image_not_found.jpg');}?><img itemprop="image" src="<?php echo $image_name;?>" style="height:30px" alt="<?php echo $value['name'];?>" class="img-responsive"></a></span>
                                                                                                    <p class="txt_mnu1">
                                                                                                        <a itemprop="url" href="<?php echo base_url($value['page_url']);?>" title="<?php echo $value['name'];?>">
                                                                                                            <?php echo $value['name'];?>
                                                                                                        </a>
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <?php }?>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div id="content" class="dis_none">
                                                                            <div class="container">
                                                                                <div class="row" itemscope itemtype="http://schema.org/Product">
                                                                                    <div class="col-lg-12">
                                                                                        <div role="tabpanel" class="product-tab-carousel">
                                                                                            <div class="header">
                                                                                                <h1 title="products By Categories" style=" font-size: 20px;"><span><b><span >P</span>roduct </b><b><span> B</span>y </b><b><span> C</span>ategories</b></span></h1></div>
                                                                                            <div class="clearfix"></div>
                                                                                            <div class="col-lg-12">
                                                                                            <ul style="list-style: disc; font-size: 24px;" >
                                                                                                <?php foreach($product_category as $key=>$value){?>
                                                                                                     <li class="col-sm-6 col-md-3 col-xs-12 bg_ico_pro3">
                                                                                                        <a itemprop="name" title="<?= $value['name']; ?>" href="<?=base_url().$value['page_url'];?>">
                                                                                                           
                                                                                                            <p style="padding-top: 8px;" class="pro_name_txt">
                                                                                                                <?php echo $value['name'];?>
                                                                                                            </p>
                                                                                                        </a>
                                                                                                     </li>   
                                                                                                    <?php }?>
                                                                                                 </ul>   
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div id="content" class="dis_none">
                                                                            <div class="container">
                                                                                <div class="row" itemscope itemtype="http://schema.org/Product">
                                                                                    <div class="col-lg-12">
                                                                                        <div role="tabpanel" class="product-tab-carousel">
                                                                                            <div class="header">
                                                                                                <h4 title="products By Applications"><span><b><span>P</span>roducts </b> <b> <span> B</span>y </b><b> <span> A</span>pplication</b></span></h4></div>
                                                                                            <div class="clearfix"></div>
                                                                                            <div class="col-lg-12">
                                                                                            <ul style="list-style: square; font-size: 24px;" >
                                                                                                <?php foreach($categories as $key=>$value){?>
                                                                                                    <!-- <div class="col-sm-6 col-md-3 col-xs-12 bg_ico_pro3"> -->
                                                                                                    <li class="col-sm-6 col-md-3 col-xs-12 bg_ico_pro3">
                                                                                                        <a itemprop="name" title="<?= $value['name']; ?>" href="<?=base_url().$value['page_url'];?>">
                                                                                                            <p style="margin-right: 20px;padding-top: 8px;" class="pro_name_txt">
                                                                                                                <?php echo $value['name'];?>
                                                                                                            </p>
                                                                                                        </a>
                                                                                                   </li>
                                                                                                    <!-- </div> -->
                                                                                               <?php }?>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div id="content" class="dis_none">
                                                                            <div class="container">
                                                                                <div class="row" itemscope itemtype="http://schema.org/Product">
                                                                                    <div class="col-lg-12">
                                                                                        <div role="tabpanel" class="product-tab-carousel">
                                                                                            <div class="header">
                                                                                                <h4 title="products A to Z"><span><b><span>P</span>roducts </b><b><span style="color:#dc5724;">A</span> to <span style="color:#dc5724">Z</span></b></span></h4></div>
                                                                                            <div class="clearfix"></div>
                                                                                            <div class="col-lg-12 pad_a_z" align="center">
                                                                                                <?php foreach($product_alphabet as $char=>$products){?>
                                                                                                    <ul class="act">
                                                                                                        <li class="dropdown">
                                                                                                            <?=$char;?>
                                                                                                                <ul class="alfa"><i class="fa fa-angle-double-down inde_ct" aria-hidden="true"></i>
                                                                                                                    <?php foreach($products as $value){?>
                                                                                                                        <a itemprop="name"title="<?= $value['name']; ?>" href="<?=base_url().$value['page_url'];?>">
                                                                                                                            <li>
                                                                                                                                <?=$value['name'];?>
                                                                                                                            </li>
                                                                                                                        </a>
                                                                                                                        <?php }?>
                                                                                                                </ul>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                    <?php }?>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="container">
                                                                            <div class="row">
                                                                                <div class="col-sm-4">
                                                                                    <div class="widget">
                                                                                        <h4 title="Featured products" class="widget-title">Featured Products</h4>
                                                                                        <ul class="products-list">
                                                                                            <?php foreach($random_product_list as $value){?>
                                                                                                <div itemscope itemtype="http://schema.org/Product">
                                                                                                    <?php $image_json=str_replace(array("\t","\n"),"",$value['image_urls']);$image_text=json_decode($image_json);foreach($image_text as $key=>$img_v){$product_img=$img_v;break;}?>
                                                                                                        <li>
                                                                                                            <figure><img alt="<?= $value['name']; ?>" title="<?= $value['name'];?>" itemprop="image" src=" <?php echo base_url();?><?php if($product_img==" "){echo "assets/images/products/image_not_found.jpg ";}else{echo $product_img;}?>" alt="image not found" class="product-image"></figure>
                                                                                                            <h5 class="product-title"><a title="<?= $value['name']; ?>" itemprop="name" href="
                      <?php echo $value['page_url'];?>"><?php echo $value['name'];?></a></h5></li>
                                                                                                </div>
                                                                                                <?php }?>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <div class="widget">
                                                                                        <h4 title="Top Products" class="widget-title">Top Products</h4>
                                                                                        <ul class="products-list">
                                                                                            <?php foreach($random_product_list_1 as $value){?>
                                                                                                <?php $image_json=str_replace(array("\t","\n"),"",$value['image_urls']);$image_text=json_decode($image_json);foreach($image_text as $key=>$img_v){$product_img=$img_v;break;}?>
                                                                                                    <li>
                                                                                                        <figure><img alt="<?= $value['name']; ?>" title="<?= $value['name'];?>" itemprop="image" src="<?php echo base_url();?><?php if($product_img==" "){echo "assets/images/products/image_not_found.jpg ";}else{echo $product_img;}?>" alt="image not found" class="product-image"></figure>
                                                                                                        <h5 class="product-title"><a title="<?= $value['name']; ?>" href="
                      <?php echo $value['page_url'];?>"><?php echo $value['name'];?></a></h5></li>
                                                                                                    <?php }?>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <div class="widget">
                                                                                        <h4 title="Popular Products" class="widget-title">Popular Products</h4>
                                                                                        <ul class="products-list">
                                                                                            <?php foreach($random_product_list_2 as $value){$image_json=str_replace(array("\t","\n"),"",$value['image_urls']);$image_text=json_decode($image_json);foreach($image_text as $key=>$img_v){$product_img=$img_v;break;}?>
                                                                                                <li>
                                                                                                    <figure><img alt="<?= $value['name']; ?>" title="<?= $value['name'];?>" itemprop="image" src="<?php echo base_url();?><?php if($product_img==" "){echo "assets/images/products/image_not_found.jpg ";}else{echo $product_img;}?>" alt="image not found" class="product-image"></figure>
                                                                                                    <h5 class="product-title"><a title="<?= $value['name']; ?>" href="
                        <?php echo $value['page_url'];?>"><?php echo $value['name'];?></a></h5></li>
                                                                                                <?php }?>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <footer id="footer" class="footer-simple footer-dark"><a href="#wrapper" id="scroll-top" title="Top"><i class="fa fa-angle-up"></i></a>
                                                                        <script>
                                                                            (function(d, e, j, h, f, c, b) {
                                                                                d.GoogleAnalyticsObject = f;
                                                                                d[f] = d[f] || function() {
                                                                                    (d[f].q = d[f].q || []).push(arguments)
                                                                                }, d[f].l = 1 * new Date();
                                                                                c = e.createElement(j), b = e.getElementsByTagName(j)[0];
                                                                                c.async = 1;
                                                                                c.src = h;
                                                                                b.parentNode.insertBefore(c, b)
                                                                            })(window, document, "script", "../../../../www.google-analytics.com/analytics.js", "ga");
                                                                            ga("create", "UA-83655511-1", "auto");
                                                                            ga("send", "pageview");
                                                                        </script>
                                                                        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
                                                                        <script src="<?php echo base_url();?>assets/js/jquery.hoverIntent.min.js"></script>
                                                                        <script src="<?php echo base_url();?>assets/js/jquery.slimscroll.min.js"></script>
                                                                       
                                                                       
                                                                        <script src="<?php echo base_url();?>assets/js/jquery.debouncedresize.js"></script>
                                                                        <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
                                                                       
                                                                     
                                                                        
                                                                        <script src="<?php echo base_url();?>assets/js/main.js"></script>
                                                   
                                                                </body>

                                                                </html>