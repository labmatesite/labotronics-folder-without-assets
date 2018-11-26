<?php include('header.php'); ?>
<style>
.divider{
	padding:25px 0px;
}
</style>
<div class="container-fluid" >
    <h4 style="margin-left: 100px;

margin-top: 29px;

margin-bottom: 0px;

font-size: 20px;

color: teal"> Catalogs </h4>
</div>
<section style="min-height:300px; margin-top: 50px; margin-bottom: 50px;">
    <div class="container">  
        <div class="row mb30"> 
            <?php if ($product_category) : $i = 1; 
                foreach ($product_category as $session_category):
                    if ($i % 3 == 1) echo '<div class="row">'; 
                    $icon = $session_category['name'] . '.jpg';

                        $link = $session_category['name'];
               
                    ?>
                    <div class="col-md-4 col-xs-12 mb30 mt30" itemscope itemtype="http://schema.org/Product">
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <img alt="<?= $session_category['name']; ?>" itemprop="image" src="<?= base_url('assets/images/category-icons/'.str_replace(' ','-',$session_category['name'].'.png')); ?>" alt="<?= $session_category['name']; ?>" title="<?= $session_category['name']; ?>" class="img-responsive">
                        </div>
                        <?php $cat_id = $session_category['id']; ?>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <div class="col-md-12 classmargin" style="padding-bottom: 10px;">
                                <strong itemprop="name" title="<?= $session_category['name'] ?>" style="color:#333;font-size:18px"><?= $link ?></strong>
                            </div>
                            <?php if (isset($cat_id)):
                                $rec_sub =  $this->Mymodel->get_catalog_cat($cat_id);
                                foreach ($rec_sub as $child) : ?>
                                <?php if (!empty($child['catalog_url'])) { ?>
                                    <div style="padding-left:30px; margin-bottom: 7px;" itemprop="description" class="col-md-12 col-sm-12 col-xs-12 style_prevu_kit1"> 
                                        <a style="color:teal;" itemprop="url" target="_blank" href="<?= base_url().$child['catalog_url'] ?>" title="<?= $child['name'] ?>">
										<?= $child['name'] ?>
										</a>
                                    </div>
                                <?php }
                                                              
                                else {
                                    $cat_id =   $child['id'];
                                    $cat_name=   $child['name'];
                                    $data  = $this->Mymodel->get_secound_cat($cat_id , $cat_name);
                                    foreach($data as $value){
                                        if(!empty($value['catalog_url'])){ ?>
                                        <div style="padding-left:30px; margin-bottom: 7px;" itemprop="description" class="col-md-12 col-sm-12 col-xs-12 style_prevu_kit1"> 
                                            <a style="color: teal;" title="<?= $value['name'] ?>" itemprop="url" href="<?= base_url().$value['catalog_url']; ?>">
                                            <?= $value['name'] ?>
                                            </a>
                                        </div>	
                                        <?php }
                                        else{ ?>
                                         <div style="padding-left:30px; margin-bottom: 7px;" itemprop="description" class="col-md-12 col-sm-12 col-xs-12 style_prevu_kit1"> 
                                            <a style="color: #555;" itemprop="url" title=" <?= $value['name'] ?>" onClick="alert('Catalog Not Found !!!');" href="javascript:;">
                                          <?= $value['name'] ?>
                                            </a>
                                        </div>	
                                        <?php } 
                                     }
                             } ?>								
                            <?php endforeach; endif; ?>
                            <?php if (!isset($session_category['children'])){ 
                              $cat_name=  $session_category['name'];
                              $data  = $this->Mymodel->get_first_cat($cat_name);
                              foreach($data as $value){
                                if(!empty($value['catalog_url'])){ ?>
                                    <div style="padding-left:30px; margin-bottom: 7px;" itemprop="description" class="col-md-12 col-sm-12 col-xs-12 style_prevu_kit1"> 
                                        <a style="color: teal;"  <?= $value['name'] ?> itemprop="url" href="<?= base_url().$value['catalog_url']; ?>">
                                        <?= $value['name'] ?>
                                        </a>
                                    </div>	
                                    <?php }
                                    else{ ?>
                                     <div style="padding-left:30px; margin-bottom: 7px;" itemprop="description" class="col-md-12 col-sm-12 col-xs-12 style_prevu_kit1"> 
                                        <a style="color:#555;"  <?= $value['name'] ?>  itemprop="url" onClick="alert('Catalog Not Found !!!');" href="javascript:;">
                                             <?= $value['name'] ?>
                                        </a>
                                    </div>	
                                    <?php } 
                                 }
                    
                    } ?>
                            
                        </div>
                    </div>
                    <?php if ($i % 3 == 0) echo '</div><div class="divider"></div>';
                    $i++;
                endforeach;
            endif; ?>
        </div>
    </div> 
</section>
<div class="clearfix"></div>
<footer id="footer" class="footer-simple footer-dark">

   
<?php include('footer.php'); ?>
 
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.hoverIntent.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/waypoints.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/waypoints-sticky.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.debouncedresize.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.nouislider.all.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.selectbox.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
