<?php
$sep = '';
$home = 'Home';
$bc     =   '<ol itemscope itemtype="http://schema.org/BreadcrumbList"  class="breadcrumb">';
$site   =   'https://'.$_SERVER['HTTP_HOST'];
$crumbs =   array_filter( explode("/",$_SERVER["REQUEST_URI"]) );
$bc    .=   '<li title="'.$home.'" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="'.$site.'">'.$home.'</a>'.$sep.'<meta itemprop="position" content="1" /></li>';
$nm     =   count($crumbs);
$i      =   1;
foreach($crumbs as $crumb){
$last_piece = end($crumbs);
    $link    =  ucfirst( str_replace( array(".php","-","_"), array(""," "," ") ,$crumb) );
    $sep     =  $i==$nm?'':$sep;
    $site   .=  '/'.$crumb;
    if ($last_piece!==$crumb){
    $bc     .= '<li title="'.$link.'" ><a href="'.$site.'">'.$link.'</a>'.$sep.'</li>';
    } else {
    $bc     .= '<li class="active">'.ucfirst( str_replace( array(".php","-","_"), array(""," "," ") ,$last_piece)).'</li>';
    }
    $i++;
}
$bc .=  '</ol>';
echo $bc;
?>
<div class="container margt30">
  <h3 class="pro_name_sub pad0" style="text-align:center; margin-bottom:60px"> All Products </h3>
    <div class="row margt30">
    <?php foreach($product_category as $value){ ?>
        <div class="col-md-4 head_proo">
            <h4 class="txt_hd">
                <img itemprop="image" src="<?php echo base_url().'assets/images/category-icons/'.str_replace(' ','-',$value['name']).'.png';?>" style="height:30px;" alt="<?php echo $value['name']; ?>" class="img-responsive">
             <a href="<?= base_url().$value['page_url']; ?>"> <?php echo $value['name']; ?> </a> </h4>
                <ul class="sub_name_pro1">
                <?php $id = $value['id'];
                $rec_data = $this->Mymodel->all_products_cat($id);
                foreach($rec_data as $mmvalue){ ?>
                    <li style="margin-left: 12px;"> <a style="color:teal" href="<?= base_url().$mmvalue['page_url']; ?>"> <?php echo $mmvalue['name']; ?> </a></li>
                <?php } ?>   
                </ul>
        </div>
    <?php } ?>    
    </div>
</div>
<footer id="footer" class="footer-simple footer-dark">

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