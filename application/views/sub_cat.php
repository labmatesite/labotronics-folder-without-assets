<?php
$sep = '';
$home = 'Home';
$bc     =   '<ol class="breadcrumb">';
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


 <div id="content">

  <div class="container margtb25">
<h2 class="pro_name_sub" title="<?= $product_name[0]['name']; ?>" > <?= $product_name[0]['name']; ?> </h2>
 <div class="col-lg-12">
       <?php 

     foreach($sub_cat_list as $value){        

          ?>

   <?php  
//    $img = 'assets/images/category-icons/'.str_replace(' ','-',$value['name']).'.png';
//     if(file_exists($img)){
//           $iim = $img;
//     }        
//     else{
//       $iim = 'https://www.labotronics.com/labotronics_new/assets/images/category-icons/Test-Chambers.png';
//     }
 ?>

 <div class="col-lg-3 col-sm-6 col-xs-12 full_pro">

 <div class="col-lg-12 col-sm-12 col-xs-12 pro_ca" align="center">

 <a title="<?= $value['name'];?>" href="<?php echo base_url().$value['page_url']; ?>"><img title="<?= $value['name'];?>" src="<?php echo base_url().'assets/images/category-icons/'.str_replace(' ','-',$value['name']).'.png'; ?>"  alt="Product image" class="product-image_cl"></a>

<a title="<?= $value['name'];?>" href="<?php echo base_url().$value['page_url']; ?>"><span class="product_txt"><?= $value['name']; ?></span></a>

</div>  

 </div>
 <?php } ?>
</div>
            </div> 
         </div> 
         <input type="hidden" id="base" value="<?= base_url(); ?>">
      <footer id="footer" class="footer-simple footer-dark">
      <a href="#wrapper" id="scroll-top" title="Top"><i class="fa fa-angle-up"></i></a>
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







</html>

