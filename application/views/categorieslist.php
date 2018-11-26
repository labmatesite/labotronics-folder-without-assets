<style>
.cat_hed:hover{
	color:#ff7401;
}
</style>
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
		<div class="compare" style="float: right; margin-right: 18px;">
			<a href="javascript:" class="btn btn-danger pull-right btn-compare"
			style="display:none; float: right!important; position: fixed; z-index: 999;"> COMPARE </a>
			<br>
		</div>
		<h2 class="pro_name_sub" title="<?= $product_name[0]['name']; ?>" > <?= $product_name[0]['name']; ?> </h2>
		<?php   foreach($products_list as $value){ ?> 
			<div class="col-lg-12 full_div">
				<div class="col-lg-3 ing_pro1" align="center">
					<?php 
                        $image_json = str_replace(array("\t","\n"), "",  $value['image_urls']);
                        $image_text = json_decode($image_json);
                        foreach ($image_text as $key => $img_v) {
                            $img = $img_v;
                            break;
                        }        
					?> 
					<a title="<?= $value['name'];?>" href="<?php echo base_url().$value['page_url']; ?>"><img title="<?= $value['name'];?>" src="<?= base_url().$img; ?>" alt="<?= $value['name'];?>" class="product-image_cl"></a><br>
				</div> 
				<div class="col-lg-8 txt_data"> 
					<a title="<?= $value['name'];?>" href="<?php echo base_url().$value['page_url']; ?>">
						
						<h5 class="cat_hed"><strong><?= $value['name']; ?></strong>
                            <?php if($this->session->userdata('id')){ ?>
                        <span style="float:right; color: firebrick;font-weight: 600;"> 
                            <?php     $sku = $value['sku']; 
                            $res = $this->Mymodel->get_price($sku);
                           echo '$'.$res['final_inr']; 
                            ?></span>  <span style="color:teal;float:right; font-weight: 600;padding-right: 18px;">Price - </span>
                        
                        <?php } ?>
                            </h5>
					</a>
					<br>
					<table class="table table-bordered table-condensed tabelbdr1"> 
						<tbody> 
							<?php 
							$json = str_replace(array("\t","\n"), "", $value['specifications']); 
							$data = json_decode($json); 
							$i = 1; 
							if($data == ""){ ?> 
								<div class="alert alert-danger"> Sorry Not Found </div> 
							<?php } else { $i= 0; 
								foreach ($data as $vkey => $vvalue) {
									if(!empty($vvalue)){ ?> 
										<tr class="trset1"> 
											<td title="<?php echo $vkey; ?>"><strong><?php echo $vkey; ?></strong></td> 
											<td title="<?php echo $vvalue; ?>">
                                                <?php 
                                                    if (is_object($vvalue)){
                                                        foreach($vvalue as $key1 => $value1){
                                                            echo "<tr><td>".$key1."</td><td>".$value1."</td></tr>";
                                                        }    
                                                    } else {
                                                        echo $vvalue; 
                                                    }
                                                ?>
                                            </td> 
										</tr> 
										<?php $i++; 
										if($i == 4){ break; } }

									} 
								}  ?> 
							</tbody> 
						</table> 
						<div class="btn-group btn-group-sm pull-right" role="group" aria-label=""> 
							<a title="<?= $value['name'];?>" target="_blank" href="<?php echo base_url('catalog/'.$value['sku']); ?>"><button class="btn btn-danger btn-sm"><i class="fa fa-file-pdf-o"></i> Generate Catalog</button></a>
							<a title="<?= $value['name'];?>"  href="<?php echo base_url().$value['page_url']; ?>"><button class="btn btn-primary btn-sm"><i class="fa fa-external-link-square"></i> View More Details</button></a>
						</div> 
					</div> 
					<div class="col-lg-1 add_compair">
						<label class="action action--compare-add" style="border:0px">
							<input class="check-hidden checkbox" type="checkbox" autocomplete="off"	value="<?= $value['id']?>">
							<i class="fa fa-plus"></i>
							<i class="fa fa-check"></i>
							<span class="action__text action__text--invisible">Add to compare</span>
						</label> 
					</div> 
				</div> 
			<?php } ?> 
		</div>  
	</div>  
	<input type="hidden" id="base" value="<?= base_url(); ?>">
	<footer id="footer" class="footer-simple footer-dark">
		<a href="#wrapper" id="scroll-top" title="Top"><i class="fa fa-angle-up"></i></a>
		<input type="hidden" id="base" value="<?php echo base_url(); ?>">
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.hoverIntent.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/waypoints.min.js"></script> 
		<script src="<?php echo base_url(); ?>assets/js/waypoints-sticky.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.debouncedresize.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.nouislider.all.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.selectbox.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.selectbox.min.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
        <script> 
            var base = $('#base').val(); 
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
        </script>
	</body> 
</html>

