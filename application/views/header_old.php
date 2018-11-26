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
</head>
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
            <div class=menu_mob><a title="CataLogs" itemprop=url href=<?php echo base_url();?>catalogs>Catalogs</a></div>
            <div class=menu_mob><a title="About Us" itemprop=url href=<?php echo base_url();?>about-us>About Us</a></div>
            <div class=menu_mob><a title="Contact Us" itemprop=url href=<?php echo base_url();?>contact-us>Contact Us</a></div>
            <div class="">
            <?php if($this->session->flashdata('suc_login')==1){?><a href=<?php echo base_url(). 'logout';?>><span class="login popup_login " onclick=Show_popup_login_panel()>Logout</span></a>
                <?php }else{?><span class="login popup_login" onclick=Show_popup_login_panel()>Sign In</span>
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
            <div class=cont_add><img itemprop=image class=phone_hed src=<?php echo base_url();?>assets/image/phone.png alt="Contact Us | Labotronics"><span class="pho"><a title="Telephone"  itemprop=telephone href=tel:+14035897725 title="labotronics Contact Number"> +1 403 589 7725 </a></span><span class="email_add"><a itemprop="email" href="mailto:info@labotronics.com" title="labotronics Contact Email"><i class="fa fa-envelope-o" title="email"  aria-hidden=true></i> info@labotronics.com </a></span></div>
            <?php if($this->session->flashdata('suc_login')==1){?><a title="Logout" href=<?php echo base_url(). 'logout';?>><span class="login popup_login hidden-xs" onclick=Show_popup_login_panel()>Logout</span></a>
                <?php }else{?><span class="login popup_login hidden-xs" title="Sign"  onclick=Show_popup_login_panel()>Sign In</span>
                    <?php }?><span class=grid_add><i class="fa fa-bars fontasm" aria-hidden=true></i></span>
                        <div class=popup_login1>
                            <div class=rig_pop>
                                <div class=head_er><span>Login</span><i class="fa fa-close btn_cluse" onclick=Hide_popup_login_panel()></i></div>
                                <div class=login_add>
                                    <div class=col-md-12>
                                        <form method=post action=<?php echo base_url(). 'check-login';?>><span class=label_txt>Email Id</span>
                                            <input title="email" type=email class=form_login name=email placeholder="Email Id"><span class=label_txt>Password</span>
                                            <input title="password" type=password class=form_login name=password placeholder=Password><span class=check_bx><input type=checkbox name><span class=remb_me>Remember Me</span></span>
                                            <button title="login" type=submit class=btn_login>Login</button>
                                        </form>
                                    </div>
                                    <div class=col-md-12><span class=account_add>Don't have an account yet?</span><span class=account_new>Create an account</span></div>
                                </div>
                                <div class=register_add>
                                    <div class=col-md-12>
                                        <form method=post action=<?php echo base_url(). 'insert-user-data';?>><span class=label_txt>Name</span>
                                            <input type=text class=form_login name=username placeholder=Name><span class=label_txt>Email Id</span>
                                            <input type=email class=form_login name=email placeholder="Email Id"><span class=label_txt>Password</span>
                                            <input type=password class=form_login name=password placeholder=Password><span class=check_bx><input type=checkbox name><span class=remb_me>I agree to the terms & conditions</span></span>
                                            <button type=submit title="Register"  class=btn_login>Register</button>
                                        </form>
                                    </div>
                                    <div class=col-md-12><span class=account_add>Don't have an account yet?</span><span class=account_new>Login account</span></div>
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
                    <li><a title="Home" itemprop=url href=<?php echo base_url();?>>Home</a></li>
                    <li><a title="All products"  href=<?php echo base_url();?>all-products>All Products <i class="fa fa-caret-down"></i></a>
                        <div class="megamenu megamenu-half">
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
                        </div>
                    </li>
                    <li><a title="Product Categories"  href=javascript:>Product Categories <i class="fa fa-caret-down"></i></a>
                        <div class="megamenu megamenu-half">
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
                        </div>
                    </li>
                    <li><a title="Products By Application" href=javascript:>Products By Application <i class="fa fa-caret-down"></i></a>
                        <div class="megamenu megamenu-half">
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
                        </div>
                    </li>
                    <li><a title="Catalogs" itemprop=url href=<?php echo base_url();?>catalogs>Catalogs</a></li>
                    <li><a title="About Us" itemprop=url href=<?php echo base_url();?>about-us>About Us</a></li>
                    <li><a title="Contact Us" itemprop=url href=<?php echo base_url();?>contact-us>Contact Us</a></li>
                   
                </ul>
            </nav>
            <div itemscope itemtype=http://schema.org/WebSite class=search_rig>
                <meta itemprop=url content="<?= base_url() ?>" /><span class="search12 dropdown"><i class="fa fa-search icosrcc" aria-hidden=true></i><div class="aaaa search_data_ajax"><form method=get action=<?=base_url().'search';?> itemprop=potentialAction><input title="Search Your Product" class="srccc search_class" name=search type=text placeholder="Search Products..."></form></div></span></div>
        </div>
    </div>
    <!-- <p class=mail_info >info@labotronics.com</p> -->
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
        <?php if($this->session->flashdata('err_login')==2){?>
            <script>
                swal("Email and Password Invalid!", "Try Again", "error");
            </script>
            <?php }?>
                <?php if($this->session->flashdata('suc_reg')==1){?>
                    <script>
                        swal({
                            title: "Registration successfully!",
                            text: "Now You can Login!",
                            icon: "success",
                            button: "Ok",
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