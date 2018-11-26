<!DOCTYPE html>
<html lang="en"> 
<head itemscope itemtype="http://schema.org/WebSite">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />            
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php if(!empty($title)){?>
    <title><?php $new = array_reverse($title); foreach($new as $value){echo str_replace('-',' ',$value).' '.'| ';}?></title>
    <meta name="title" content="<?php $new = array_reverse($title); foreach($new as $value){echo str_replace('-',' ',$value).' '.'| ';}?>" /> 
    <?php }else{?>
    <title> Labotronics | Lab Equipment | Scientific Instruments</title>
    <meta name="title" content="Labotronics | Lab Equipment | Scientific Instruments" />
    <?php }?>
    <?php if(!empty($keywords)){?>
    <meta name="keywords" content="<?php echo str_replace('|',',',$keywords);?>" />
    <?php }if(!empty($meta)){?>
    <meta name="description" content="<?php echo $meta;?>" />
    <?php }?>
    <meta name="author" content="<?= base_url();?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/image/favicon.png">
    <link rel="canonical" href="http://www.labotronics.com/" /> 




    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css> 
    <meta name="google-site-verification" content='uUFMYxQk04kliKD176XUNRvz3DwwLuGv5trpbHxkwcg' />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Lab Equipment | Scientific Instruments | Laboratory Equipment " />
    <meta itemprop="image" property="og:image" content="<?php echo base_url();?>assets/image/logo1.png" />
    <meta itemprop="description" property="og:description" content="Labotronics Equipment Ltd is a leading manufacturer of Laboratory Equipment to serve Research, Quality Control & Testing Laboratories." />
    <meta itemprop="url" property="og:url" content="<?php echo base_url();?>" />
    <meta itemprop="name" property="og:site_name" content="Labotronics Equipment Ltd - Laboratory Products | Lab Equipment" />
    <meta name="twitter:card" content="summary" />
    <meta itemprop="description" name="twitter:description" content="Labotronics Equipment Ltd is a leading manufacturer of Laboratory Equipment to serve Research, Quality Control & Testing Laboratories." />
    <meta itemprop="name" name="twitter:title" content="Lab Equipment | Scientific Instruments | Laboratory Equipment " />
    <meta itemprop="image" name="twitter:image" content="<?php echo base_url();?>assets/images/logo1.png" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116985783-1"></script>
    <style>
        .carousel-control.left{
            display:none;
        }
        .carousel-control.right{
            display:none;
        }
    </style>

<!-- google tag manager start -->
    <script>
        (function(b, m, h, a, g) {
            b[a] = b[a] || [];
            b[a].push({
                "gtm.start": new Date().getTime(),
                event: "gtm.js"
            });
            var k = m.getElementsByTagName(h)[0],
                e = m.createElement(h),
                c = a != "dataLayer" ? "&l=" + a : "";
            e.async = true;
            e.src = "https://www.googletagmanager.com/gtm.js?id=" + g + c;
            k.parentNode.insertBefore(e, k)
        })(window, document, "script", "dataLayer", "GTM-MXG7HML");
    </script>
<!-- google tag manager end -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109205458-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109205458-1');
</script>
</head>

<style type="text/css">
     
@import url('https://fonts.googleapis.com/css?family=Signika');

 { 
font-family: 'Signika', sans-serif !important;
}




.allpro_heder {
    position: absolute;
    z-index: 9999;
    background: #79ccda;
    /*background: #cfd2d4;*/
    left: 0;
    right: 0px;
    top: 110px;
    max-height: 450px;
    overflow: auto;
    border-bottom: 3px solid #5aa9b7;
}

.hed_all_pro1 {
    float: left;
    width: 100%;
    padding: 6px 100px;
}

#allproduct .hed_all_pro1 {
    padding: 6px 100px;
}

.drpp {
    float: left;
    width: 100%;
}

.name_txt_drp {
    width: 25%;
    float: left;
    padding: 7px 2px;
    font-size: 13px;
    line-height: 1.2;
    margin-bottom: 0px;
    text-align: left;
    transition: all 0.4s;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    border-right: 1px solid #4c909c;
}

.name_txt_drp:hover {
padding-left: 6px;
transition: all 0.4s;
}
.name_txt_drp a {
    color: #222;
    font-size: 13px;
    padding-left: 14px;
        font-family: 'Signika', sans-serif !important;
}

.name_txt_drp:hover a {
    color: #fff;    
}

.name_txt_drp a i {
    width: 5px;
    height: 5px;
    border: 1px solid #2e7fa7;
    background: #267094;
    display: block;
    float: left;
    margin-left: -13px;
    margin-top: 5px;
    position: relative;
    left: 16px;
    transform: rotate(45deg);
}
 

.display_none
{
    display: none;
}
/*########################################## SHOW DISPLAY ########################################################*/

.all_pro_hov_show #allproduct
{
    display: block;
}

.product_category_hov_show #productcat
{
    display: block;
}

.product_by_allpication_show #product_by_appl
{
    display: block;
}

/*################################# Product_cat #################################################*/
.full_bdr11 {
    width: 25%;
    float: left;
    height: 50px;
    border-right: 1px solid #4c909c;
}

.full_bdr11 span {
    width: 35px;
    height: 35px;
    float: left;
    margin-left: 5px;
    background: white;
    border-radius: 50%;
    overflow: hidden;
    padding: 2px 0px;
    box-shadow: rgba(0, 0, 0, 0.76) 2px 6px 7px -2px;
}
.txt_name_drp {
    position: absolute;
    margin-left: 45px;
    margin-top: 8px;
    width: 210px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.txt_name_drp a {
    font-size: 13px;
    color: #222;
}

.full_bdr11:hover .txt_name_drp a { 
    color: #fff;
}

.name_txt_drp:nth-child(4n+4) {
    border-right: 1px solid #79ccdb00;
}

.full_bdr11:nth-child(4n+4) {
    border-right: 1px solid #79ccdb00;
}

div#product_by_appl, div#productcat {
    padding-top: 12px;
    padding-bottom: 6px;
}

</style>

<script type="text/javascript">
    
 $(function () {
    $('.all_pro_hov').hover(function () {
    $('body').addClass('all_pro_hov_show');
    $('body').removeClass('product_category_hov_show');
    $('body').removeClass('product_by_allpication_show');
  });
});

  $(function () {
    $('.product_category_hov').hover(function () {
    $('body').addClass('product_category_hov_show');
    $('body').removeClass('all_pro_hov_show');
    $('body').removeClass('product_by_allpication_show');
  });
});



  $(function () {
    $('.product_by_allpication').hover(function () {
    $('body').addClass('product_by_allpication_show');
    $('body').removeClass('product_category_hov_show');
    $('body').removeClass('all_pro_hov_show');
  });
});


    $(function () {
    $('.allpro_heder').mouseleave(function () {
    $('body').removeClass('product_by_allpication_show');
    $('body').removeClass('product_category_hov_show');
    $('body').removeClass('all_pro_hov_show');
  });
});

   $(function () {
    $('.remove_drp').hover(function () {
    $('body').removeClass('product_by_allpication_show');
    $('body').removeClass('product_category_hov_show');
    $('body').removeClass('all_pro_hov_show');
  });
});







//   $(function () {
//     $('.popup_mnu').mouseleave(function () {
//     $('.home_add').removeClass('home_add');
//     $('.home_add1').removeClass('home_add1');
//     $('.act').removeClass('act');
//   });
// }); 


</script>


<div class="allpro_heder display_none" id="allproduct">
<div class="hed_all_pro1">

       <div class="drpp">                                    
        <?php $i=1;foreach($all_categories as $key=>$value){?>       
                <div  class="name_txt_drp">
                    <a itemprop=url href=<?php echo base_url($value[ 'page_url']);?> title="<?php echo $value['name'];?>"><i></i><?php echo $value['name'];?></a>
                </div>           
            <?php }?>     
        </div>
</div>
</div>

<div class="allpro_heder display_none" id="productcat">

<div class="hed_all_pro1">

            <div class=products_categ>
            <?php $i=1;foreach($product_category as $key=>$value){?>                
                    <div class=full_bdr11><span><a itemprop=url href=<?php echo base_url();?><?php echo $value['page_url'];?> title=<?php echo $value['name'];?>><img itemprop=image src=<?php echo base_url().'assets/resources/images/category-images/new/'.str_replace(' ','-',$value['name']).'.png';?> style=height:30px alt=<?php echo $value['name'];?> class=img-responsive></a></span>
                        <div class=txt_name_drp><a itemprop=url href=<?php echo base_url($value[ 'page_url']);?> title=<?php echo $value['name'];?>><?php echo $value['name'];?></a></div>
                    </div>                
                <?php }?>
            </div>
</div>
</div>


<div class="allpro_heder display_none" id="product_by_appl">
<div class="hed_all_pro1">        

            <div class=products_categ>
            <?php $i=1;foreach($categories as $key=>$value){?>
                <div class=full_bdr11><span><a itemprop=url href=<?php echo base_url();?><?php echo $value['page_url'];?> title="<?php echo $value['name'];?>"><?php $image_name=base_url('assets/resources/images/category-images/new/'.str_replace(' ','-',$value['name']).'.jpg');if(file_exists($image_name)){$image=$image_name;}else{$image=base_url('assets/images/image_not_found.jpg');}?><img itemprop=image src=<?php echo $image_name;?> style=height:30px alt=<?php echo $value['name'];?> class=img-responsive></a></span>
                        <div class=txt_name_drp><a itemprop=url href=<?php echo base_url($value[ 'page_url']);?> title="<?php echo $value['name'];?>"><?php echo $value['name'];?></a></div>
                    </div>                
                <?php }?>
            </div>
</div>
</div>



<div class="popup_mnu">
    <div class="pop_heed_slide">
        <div class="container row">
            <div class="menu_mob"><a title="Home" itemprop="url" href=<?php echo base_url();?>>Home</a></div>
            <div class="product_link"><span>All Products <i class="pull-right fa fa-caret-down"></i><span>
                 <div class="col-md-12 mob_drop">
                    <?php $i=1;foreach($all_categories as $key=>$value){?>
                        <div class="col-md-4 add_hig_pad ">
                            <p class="txtname_mob"><a itemprop="url" href="<?php echo base_url($value[ 'page_url']);?>" title="<?php echo $value['name'];?>"><?php echo $value['name'];?></a></p>
                        </div>
                        <?php }?>
                </div> 
            </div>
            <div class="product_link"><span>Product Categories <i class="pull-right fa fa-caret-down"></i></span>
                <div class="col-md-12 mob_drop">
                    <div class="widget">
                        <ul class="products-list">
                            <?php $i=1;foreach($product_category as $key=>$value){?>
                                <div class="col-md-4 add_hig_drop">
                                    <div class="full_bdr"><span><a itemprop="url" href="<?php echo base_url($value['page_url']);?>" title="<?php echo $value['name'];?>"><img itemprop="image" src="<?php echo base_url().'assets/resources/images/category-images/new/'.str_replace(' ','-',$value['name']).'.png';?>" style="height:30px" alt="<?php echo $value['name'];?>" class="img-responsive"></a></span>
                                        <p class="txt_mnu1"><a itemprop="url" href="<?php echo base_url($value[ 'page_url']);?>" title="<?php echo $value['name'];?>"><?php echo $value['name'];?></a></p>
                                    </div>
                                </div>
                                <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product_link"><span>Products By Application <i class="pull-right fa fa-caret-down"></i></span>
                <div class="col-md-12 mega_menu_wrapper mob_drop">
                    <div class=widget>
                        <ul class=products-list>
                            <?php $i=1;foreach($categories as $key=>$value){?>
                                <div class="col-md-4 add_hig_drop">
                                    <div class=full_bdr><span><a itemprop=url href=<?php echo base_url();?><?php echo $value['page_url'];?> title=<?php echo $value['name'];?>><?php $image_name=base_url('assets/resources/images/category-images/new/'.str_replace(' ','-',$value['name']).'.jpg');if(file_exists($image_name)){$image=$image_name;}else{$image=base_url('assets/images/image_not_found.jpg');}?><img itemprop=image src=<?php echo $image_name;?> style=height:30px alt=<?php echo $value['name'];?> class=img-responsive></a></span>
                                        <p class=txt_mnu1><a itemprop=url href=<?php echo base_url($value[ 'page_url']);?> title=<?php echo $value['name'];?>><?php echo $value['name'];?></a></p>
                                    </div>
                                </div>
                                <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- <div class=menu_mob><a title="CataLogs" itemprop=url href=<?php echo base_url();?>catalogs>Catalogs</a></div> -->
            <div class=menu_mob><a title="About Us" itemprop=url href=<?php echo base_url();?>about-us>About Us</a></div>
            <div class=menu_mob><a title="Contact Us" itemprop=url href=<?php echo base_url();?>contact-us>Contact Us</a></div>
            <div class="">
            <?php if(!empty($this->session->userdata('id'))){?>

            <a href=<?php echo base_url(). 'logout';?>><span class="login popup_login">Logout</span></a>
                <?php }
                else{?>
                <span class="login popup_login" onclick=Show_popup_login_panel()><a style="color:#fff" href="<?= base_url().'Distributor'; ?>">Distributor Login </a></span>
                    <?php }?>
            </div>        
        </div>
    </div>
</div>
</div>
<script type=text/javascript>
    $(function() {
        $(".fontasm").click(function() {
            $("body").toggleClass("home_add")
        })
    });
    $(function() {
        $(".product_link").click(function() {
            $(this).toggleClass("product_show")
        })
    });
</script>
<header id=header class=header7>
    <div id=header-top class="dark clearfix">
        <div class=container>
                    <div class="nav-left widhedr padd_logo">
                <div class=header-row><a itemprop=url href=<?php echo base_url();?>><img title="Labotronics | Lab Equipment | Scientific Instruments"  itemprop=image alt="Labotronics" class=img-logo src=<?php echo base_url();?>assets/image/logo1.png alt="Labotronics | Lab Equipments"></a></div>
            </div>
            <div class=cont_add><img itemprop=image class=phone_hed src=<?php echo base_url();?>assets/image/phone.png alt="Contact Us | Labotronics"><span class="pho"><a title="Telephone"  itemprop=telephone href=tel:+14035897725 title="labotronics Contact Number"> +1 403 589 7725 </a></span><span class="email_add"><a href="javascript:location='mailto:\u0069\u006e\u0066\u006f\u0040\u006c\u0061\u0062\u006f\u0074\u0072\u006f\u006e\u0069\u0063\u0073\u002e\u0063\u006f\u006d';void 0"><script type="text/javascript">document.write('\u0069\u006e\u0066\u006f\u0040\u006c\u0061\u0062\u006f\u0074\u0072\u006f\u006e\u0069\u0063\u0073\u002e\u0063\u006f\u006d')</script></a></span></div>
            <?php if(!empty($this->session->userdata('id'))){?>
            <a title="Logout" href=<?php echo base_url().'logout';?>>
            <span class="login popup_login hidden-xs">Logout</span></a>
                <?php }else{?>
                <span class="login popup_login hidden-xs" title="Sign"><a style="color:#fff" href="<?= base_url().'Distributor'; ?>"> Distributor Login</a></span>
                    <?php }?><span class=grid_add><i class="fa fa-bars fontasm" aria-hidden=true></i></span>
                        <div class=popup_login1>
                            <div class=rig_pop>
                                <div class=head_er><span>Login</span><i class="fa fa-close btn_cluse" onclick=Hide_popup_login_panel()></i></div>
                                <div class=login_add>
                                    <div class=col-md-12>
                                        <form method=post action=<?php echo base_url(). 'check-login';?>><span class=label_txt>Email Id</span>
                                            <input title="email" type=email class=form_login name=email placeholder="Email Id" required><span class=label_txt>Password</span>
                                            <input title="password" type=password class=form_login name=password placeholder=Password required><span class=check_bx><input type=checkbox name><span class=remb_me>Remember Me</span></span>
                                            <button title="login" type=submit class=btn_login>Login</button>
                                        </form>
                                    </div>
                                    <div class=col-md-12><span class=account_add>Don't have an account yet?</span><span class=account_new>Create an account</span></div>
                                </div>
                                <div class=register_add>
                                    <div class=col-md-12>
                                        <form method=post action=<?php echo base_url(). 'insert-user-data';?>>
                                        <span class=label_txt>Name</span>
                                                 <input type=text class=form_login name=username placeholder=Name required>
                                            <span class=label_txt>Email Id</span>
                                                <input type=email class=form_login name=email placeholder="Email Id" required>
                                            <span class=label_txt>Password</span>
                                                 <input type=password class=form_login name=password placeholder="password" required>
                                            <span class=label_txt>Address</span>
                                                 <textarea type=text class=form_login name=address placeholder="address" required></textarea>
                                            <span class=label_txt>Phone</span>
                                            <input type=text class=form_login name=phone     placeholder=phone required><span class=check_bx><input required type=checkbox name><span class=remb_me>I agree to the terms & conditions</span></span>
                                                <input type="hidden" class="form-control" name="location" id="location" value="" readonly/>
                                            <script href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
									<script> 
										$.get("https://ipinfo.io", function (response) { 
											var country = JSON.stringify(response.country, null, 4); 
											var state = JSON.stringify(response.region, null, 4); 
											var city = JSON.stringify(response.city, null, 4); 
											var location = city+', '+state+', '+country; 
											var loc = location.replace(/\"/g, ''); 
											document.getElementById('location').value = loc; 
										}, "jsonp"); 
									</script> 
                                           
                                            <button type=submit title="Register"  class=btn_login>Register</button>
                                        </form>
                                    </div>
                                    <div class=col-md-12><span class=account_add>Already have an account?</span><span class=account_new>Login</span></div>
                                </div>
                            </div>
                        </div>
                        <script type=text/javascript>
                            $(function() {
                                $(".account_new").click(function() {
                                    $(".rig_pop").toggleClass("show_hed")
                                })
                            });

                            function Show_popup_login_panel() {
                                $(".popup_login1").show()
                            }

                            function Hide_popup_login_panel() {
                                $(".popup_login1").hide()
                            }
                        </script>
                        <script type=text/javascript>
                            $(function() {
                                $(".add_compair").click(function() {
                                    $(this).toggleClass("show_ico")
                                })
                            });
                            $(function() {
                                $(".act").click(function() {
                                    $(".active_li").removeClass("active_li");
                                    $(this).toggleClass("active_li")
                                })
                            });
                        </script>
        </div>
    </div>
    <div id=menu-container class="sticky-menu container-fluid header_bottom">
        <div class="container row">
            <nav class=pull-left>
                <ul class="menu rtl-dropdown">
                    <li class="remove_drp"><a title="Home" itemprop=url href=<?php echo base_url();?>>Home</a></li>
                    <li class="all_pro_hov"><a title="All products"  href=<?php echo base_url();?>all-products>All Products <i class="fa fa-caret-down"></i></a>
                        <!-- <div class="megamenu megamenu-half">
                            <div class=row>
                                <div class="col-md-12 mega_menu_wrapper">
                                    <div class=widget>
                                        <ul class=products-list>
                                            <?php $i=1;foreach($all_categories as $key=>$value){?>
                                                <div class="col-md-4 add_hig_pad">
                                                    <li class=add_name_txt>
                                                        <p class=txtname><a itemprop=url href=<?php echo base_url($value[ 'page_url']);?> title="<?php echo $value['name'];?>"><?php echo $value['name'];?></a></p>
                                                    </li>
                                                </div>
                                                <?php }?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </li>
                    <li class="product_category_hov"><a title="Product Categories"  href=javascript:>Products By Category <i class="fa fa-caret-down"></i></a>
                        <!-- <div class="megamenu megamenu-half">
                            <div class=row>
                                <div class="col-md-12 mega_menu_wrapper">
                                    <div class=widget>
                                        <ul class=products-list>
                                            <?php $i=1;foreach($product_category as $key=>$value){?>
                                                <div class="col-md-4 add_hig_drop">
                                                    <div class=full_bdr><span><a itemprop=url href=<?php echo base_url();?><?php echo $value['page_url'];?> title=<?php echo $value['name'];?>><img itemprop=image src=<?php echo base_url().'assets/resources/images/category-images/new/'.str_replace(' ','-',$value['name']).'.png';?> style=height:30px alt=<?php echo $value['name'];?> class=img-responsive></a></span>
                                                        <p class=txt_mnu1><a itemprop=url href=<?php echo base_url($value[ 'page_url']);?> title=<?php echo $value['name'];?>><?php echo $value['name'];?></a></p>
                                                    </div>
                                                </div>
                                                <?php }?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </li>
                    <li class="product_by_allpication"><a title="Products By Application" href=javascript:>Products By Application <i class="fa fa-caret-down"></i></a>
                       <!--  <div class="megamenu megamenu-half">
                            <div class=row>
                                <div class="col-md-12 mega_menu_wrapper">
                                    <div class=widget>
                                        <ul class=products-list>
                                            <?php $i=1;foreach($categories as $key=>$value){?>
                                                <div class="col-md-4 add_hig_drop">
                                                    <div class=full_bdr><span><a itemprop=url href=<?php echo base_url();?><?php echo $value['page_url'];?> title="<?php echo $value['name'];?>"><?php $image_name=base_url('assets/resources/images/category-images/new/'.str_replace(' ','-',$value['name']).'.jpg');if(file_exists($image_name)){$image=$image_name;}else{$image=base_url('assets/images/image_not_found.jpg');}?><img itemprop=image src=<?php echo $image_name;?> style=height:30px alt=<?php echo $value['name'];?> class=img-responsive></a></span>
                                                        <p class=txt_mnu1><a itemprop=url href=<?php echo base_url($value[ 'page_url']);?> title="<?php echo $value['name'];?>"><?php echo $value['name'];?></a></p>
                                                    </div>
                                                </div>
                                                <?php }?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </li>
                    <!-- <li class="remove_drp"><a title="Catalogs" itemprop=url href=<?php echo base_url();?>catalogs>Catalogs</a></li> -->
                    <li class="remove_drp"><a title="About Us" itemprop=url href=<?php echo base_url();?>about-us>About Us</a></li>
                    <li class="remove_drp"><a title="Contact Us" itemprop=url href=<?php echo base_url();?>contact-us>Contact Us</a></li>
                   
                </ul>
            </nav>
            <div itemscope itemtype=http://schema.org/WebSite class=search_rig>
                <meta itemprop=url content="<?= base_url() ?>" /><span class="search12 dropdown"><i class="fa fa-search icosrcc" aria-hidden=true></i><div class="aaaa search_data_ajax"><form method=get action=<?=base_url().'search';?> itemprop=potentialAction><input title="Search Your Product" class="srccc search_class" name=search type=text placeholder="Search Products..."></form></div></span></div>
        </div>
    </div>
    <div class="header-search-container header-simple-search">
        <form action=<?=base_url(). 'search';?> method=get>
            <div title="type Products here" class="form-group search_data_ajax">
                <input  type=search name=search id=search_mobile class=form-control placeholder="Search Products...">
                <button class=btn type=submit title=Search>Search</button>
            </div>
        </form>
    </div>
</header>
<div id=search_view></div>
<script src=https://unpkg.com/sweetalert/dist/sweetalert.min.js></script>
<?php if($this->session->flashdata('suc_login')==1){?>
    <script>
        swal("You are Logged In", "", "success");
    </script>
    <?php }?>

<?php if($this->session->flashdata('update_pass')==1){?>
    <script>
        swal("Your Password has Been Successfully Updated", "", "success");
    </script>
    <?php }?>


    <?php if($this->session->flashdata('suc_inlogin')==1){?>
    <script>
        swal("Please Keep patience your Account is currently under review..!", "", "info");
    </script>
    <?php }?>

        <?php if($this->session->flashdata('err_login')==2){?>
            <script>
                swal("Email and Password Invalid!", "Try Again", "error");
            </script>
            <?php }?>
                <?php if($this->session->flashdata('suc_reg')==1){?>
                    <script>
                        swal({
                            title: "We Have Received Your Sign Up Request..",
                            text: "Please Keep patience your applications is currently under review..!",
                            icon: "info"                            
                        });
                    </script>
                    <?php }?>
                        <script>
                            window.dataLayer = window.dataLayer || [];

                            function gtag() {
                                dataLayer.push(arguments)
                            }
                            gtag("js", new Date());
                            gtag("config", "UA-116985783-1")
                        </script>
                        <script>
                            $(document).ready(function() {
                                $("#search_mobile").keyup("on", function() {
                                    var a = $("#search_mobile").val();
                                    if (a.length > 0) {
                                        $.ajax({
                                            url: "<?php echo base_url();?>get-search-data",
                                            data: {
                                                user_search: a
                                            },
                                            type: "POST",
                                            datatype: "HTML",
                                            success: (function(b) {
                                                $("#search_view").html(b)
                                            })
                                        })
                                    } else {
                                        $("#search_view").html("")
                                    }
                                });
                                $("#search_pc").keyup("on", function() {
                                    var a = $("#search_pc").val();
                                    if (a.length > 0) {
                                        $.ajax({
                                            url: "<?php echo base_url();?>get-search-data",
                                            data: {
                                                user_search: a
                                            },
                                            type: "POST",
                                            datatype: "HTML",
                                            success: (function(b) {
                                                $("#search_view").html(b)
                                            })
                                        })
                                    } else {
                                        $("#search_view").html("")
                                    }
                                })
                            });
                        </script>
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