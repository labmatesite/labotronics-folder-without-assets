<?php $sku = end($this->uri->segment_array()); ?> 
<style>
caption,th{text-align:left}table,table th{border:1px solid #ddd!important}table{background-color:transparent;color:#444;width:100%;max-width:100%;margin-bottom:20px}tr:nth-child(even){background-color:#f2f2f2}caption{padding-top:8px;padding-bottom:8px;color:#777}table hr{margin-top:10px;margin-bottom:10px;border:0;border-top:1px solid #ddd}table>tbody>tr>td{vertical-align:middle!important}table>tbody>tr>td,table>tbody>tr>th,table>tfoot>tr>td,table>tfoot>tr>th,table>thead>tr>td,table>thead>tr>th{padding:8px;line-height:1.42857143;vertical-align:top;border:1px solid #ddd}table>thead>tr>th{vertical-align:bottom;border-bottom:2px solid #ddd}table>caption+thead>tr:first-child>td,table>caption+thead>tr:first-child>th,table>colgroup+thead>tr:first-child>td,table>colgroup+thead>tr:first-child>th,table>thead:first-child>tr:first-child>td,table>thead:first-child>tr:first-child>th{border-top:0}table>tbody+tbody{border-top:2px solid #ddd}table table{background-color:#fff}table col[class*=col-]{position:static;float:none;display:table-column}table td[class*=col-],table th[class*=col-]{position:static;float:none;display:table-cell}table>tbody>tr.active>td,table>tbody>tr.active>th,table>tbody>tr>td.active,table>tbody>tr>th.active,table>tfoot>tr.active>td,table>tfoot>tr.active>th,table>tfoot>tr>td.active,table>tfoot>tr>th.active,table>thead>tr.active>td,table>thead>tr.active>th,table>thead>tr>td.active,table>thead>tr>th.active{background-color:#f5f5f5}table>tbody>tr.success>td,table>tbody>tr.success>th,table>tbody>tr>td.success,table>tbody>tr>th.success,table>tfoot>tr.success>td,table>tfoot>tr.success>th,table>tfoot>tr>td.success,table>tfoot>tr>th.success,table>thead>tr.success>td,table>thead>tr.success>th,table>thead>tr>td.success,table>thead>tr>th.success{background-color:#dff0d8}table>tbody>tr.info>td,table>tbody>tr.info>th,table>tbody>tr>td.info,table>tbody>tr>th.info,table>tfoot>tr.info>td,table>tfoot>tr.info>th,table>tfoot>tr>td.info,table>tfoot>tr>th.info,table>thead>tr.info>td,table>thead>tr.info>th,table>thead>tr>td.info,table>thead>tr>th.info{background-color:#d9edf7}table>tbody>tr.warning>td,table>tbody>tr.warning>th,table>tbody>tr>td.warning,table>tbody>tr>th.warning,table>tfoot>tr.warning>td,table>tfoot>tr.warning>th,table>tfoot>tr>td.warning,table>tfoot>tr>th.warning,table>thead>tr.warning>td,table>thead>tr.warning>th,table>thead>tr>td.warning,table>thead>tr>th.warning{background-color:#fcf8e3}table>tbody>tr.danger>td,table>tbody>tr.danger>th,table>tbody>tr>td.danger,table>tbody>tr>th.danger,table>tfoot>tr.danger>td,table>tfoot>tr.danger>th,table>tfoot>tr>td.danger,table>tfoot>tr>th.danger,table>thead>tr.danger>td,table>thead>tr.danger>th,table>thead>tr>td.danger,table>thead>tr>th.danger{background-color:#f2dede}
</style> 
<body class="home"> 
	<div id="wrapper"> 
		<?php
		$sep = '';
		$home = 'Home';
		$bc     =   '<ol itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumb">';
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
		<div class="container"> 
			<div class="row"> 
				<div class="col-sm-3"> 
					<div class="product-gallery-container"> 
						<div class="product-top"> 
							<?php  $image_json = str_replace(array("\t","\n"), "", $products_list['image_urls']); 
							$image_text = json_decode($image_json); 
							$i = 1; 
							foreach ($image_text as $key => $img_v) { 
								$img[$i] = $img_v;
								$i++;
							}
							?>
							<img itemprop="image" title="<?= $products_list['name']; ?>" id="product-zoom" src="<?php echo base_url().$img[2]; ?>" alt="image not found"/> 
						</div> 
					</div> 
				</div> 
				<div class="col-sm-9 desc_prod"> 
					<div class="product-details"> 
						<h2 title="<?= $products_list['name']; ?>" class="product-title"><?php echo $products_list['name']; ?></h2> 
                    <?php if($this->session->userdata('id')){ ?>
						<h5 class="cat_hed" style="text-align: right;"><strong><?= $value['name']; ?></strong>
                            <span style="color:teal; font-weight: 600;padding-right: 18px;">Price - </span>
                        <span style="color: firebrick;font-weight: 600;"> 
                            <?php     $sku = $products_list['sku']; 
//                                echo $sku; die;                                   
                            $res = $this->Mymodel->get_price($sku);
                           echo '$'.$res['final_inr']; 
                            ?></span>  
                        </h5>
                        <?php } ?>
						<p title="<?= $products_list['description']; ?>"><?php echo $products_list['description']; ?></p> 
						<div class="product-action" align="right"> 
							<a href="#" title="Get Quote of - <?= $products_list['name']; ?>" class="list-btn list-btn-add" data-toggle="modal" data-target="#getquote"  title="Add to cart">Get Quote</a> 
							<a href="<?php echo base_url('catalog/'.$sku); ?>" class="list-btn list-btn-add" title="Generate Catalog">Generate Catalog</a> 
						</div> 
					</div> 
				</div> 
			</div> 
		</div> 
		<div class="container">   
			<div class="row"> 
				<div class="container"> 
					<div class="row"> 
						<div class="col-md-12"> 
							<div class="container-spec pad0"> 
								<div role="tabpanel" class="product-details-tab"> 
									<ul class="nav nav-tabs" role="tablist"> 
										<li title="Specification" role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Specification</a></li> 
										<li role="presentation" title="Features"><a href="#shipping" aria-controls="shipping" role="tab" data-toggle="tab" >Features</a></li>
										<?php if($products_list['detector_specifications'] !== ""){ ?> 
											<li title="Detector Specifications" role="presentation"><a href="#detector_specifications" aria-controls="reviews" role="tab" data-toggle="tab" >Detector Specifications</a></li> 
										<?php } if($products_list['oven_specifications'] !== ""){ ?> 
											<li title="Oven Specifications" role="presentation"><a href="#oven_specifications" aria-controls="reviews" role="tab" data-toggle="tab" >Oven Specifications</a></li> 
										<?php } if($products_list['ion_chromatography_pump'] !== ""){ ?> 
											<li title="Ion Chromatography Pump" role="presentation"><a href="#ion_chromatography_pump" aria-controls="reviews" role="tab" data-toggle="tab" >Ion Chromatography Pump</a></li> 
										<?php } if($products_list['software_features'] !== ""){ ?> 
											<li title="Software Features " role="presentation"><a href="#software_features" aria-controls="reviews" role="tab" data-toggle="tab" >Software Features </a></li> 	
										<?php } if($products_list['conductivity_detector'] !== ""){ ?> 
											<li title="Conductivity Detector" role="presentation"><a href="#conductivity_detector" aria-controls="reviews" role="tab" data-toggle="tab" >Conductivity Detector</a></li> 
										<?php } if($products_list['analysis_ability'] !== ""){ ?> 
											<li title="Analysis Ability" role="presentation"><a href="#analysis_ability" aria-controls="reviews" role="tab" data-toggle="tab" >Analysis Ability</a></li> 
										<?php } if($products_list['eluent_generator'] !== ""){ ?> 
											<li title="Eluent Generator" role="presentation"><a href="#eluent_generator" aria-controls="reviews" role="tab" data-toggle="tab" >Eluent Generator</a></li> 
										<?php }  if($products_list['degassing_device'] !== ""){ ?> 
											<li title="Degassing Device" role="presentation"><a href="#degassing_device" aria-controls="reviews" role="tab" data-toggle="tab" >Degassing Device</a></li> 
										<?php } ?> 
										<li title="Application" role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab" >Application</a></li> 
										<?php if($products_list['standard_accessories'] !== ""){ ?> 
											<li title="Standard Accessories" role="presentation"><a href="#Standard" aria-controls="reviews" role="tab" data-toggle="tab" >Standard Accessories</a></li> 
										<?php } if($products_list['optional_accessories'] !== ""){  ?> 
											<li title="Optional Accessories" role="presentation"><a href="#Optional" aria-controls="reviews" role="tab" data-toggle="tab" >Optional Accessories</a></li> 
										<?php } if($products_list['standard_safety_devices'] !== ""){ ?> 
											<li role="presentation"><a href="#Safety" aria-controls="reviews" role="tab" data-toggle="tab" >Standard Safety Devices</a></li> 
										<?php } if($products_list['rotor_selections'] !== ""){?> 
											<li role="presentation"><a href="#rotor_selections" aria-controls="reviews" role="tab" data-toggle="tab" >Rotor Selections</a></li> 
										<?php } if($products_list['uv_transilluminator'] !== ""){?> 
											<li role="presentation"><a href="#uv_transilluminator" aria-controls="reviews" role="tab" data-toggle="tab" >UV Transilluminator</a></li> 
										<?php } if($products_list['safety_unit'] !== ""){?> 
											<li role="presentation"><a href="#safety_unit" aria-controls="reviews" role="tab" data-toggle="tab" >Safety Unit</a></li> 
										<?php } if($products_list['standard_blocks'] !== ""){ ?> 
											<li role="presentation"><a href="#standard_blocks" aria-controls="reviews" role="tab" data-toggle="tab" >Standard Blocks</a></li> 
										<?php } if($products_list['optional_blocks'] !== ""){ ?> 
											<li role="presentation"><a href="#optional_blocks" aria-controls="reviews" role="tab" data-toggle="tab" >Optional Blocks</a></li> 
										<?php } if($products_list['pump_head_and_tubing_selection'] !== ""){ ?> 
											<li role="presentation"><a href="#pump_head_and_tubing_selection" aria-controls="reviews" role="tab" data-toggle="tab" >Pump Head And Tubing Selection</a></li> 
										<?php } if($products_list['single_channel_tubing_selection_and_flow_rate'] !== ""){ ?> 
											<li role="presentation"><a href="#single_channel_tubing_selection_and_flow_rate" aria-controls="reviews" role="tab" data-toggle="tab" >Single Channel Tubing Selection and Flow Rate</a></li> 
										<?php } if($products_list['dual_channel_tubing_selection_and_flow_rate'] !== ""){ ?> 
											<li role="presentation"><a href="#dual_channel_tubing_selection_and_flow_rate" aria-controls="reviews" role="tab" data-toggle="tab" >Dual Channel Tubing Selection and Flow Rate</a></li> 
										<?php } if($products_list['temperature'] !== ""){ ?> 
											<li role="presentation"><a href="#temperature" aria-controls="reviews" role="tab" data-toggle="tab" >Temperature</a></li> 
										<?php } if($products_list['humidity'] !== ""){ ?> 
											<li role="presentation"><a href="#humidity" aria-controls="reviews" role="tab" data-toggle="tab" >Humidity</a></li> 
										<?php } if($products_list['illuminance'] !== ""){ ?> 
											<li role="presentation"><a href="#illuminance" aria-controls="reviews" role="tab" data-toggle="tab" >Illuminance</a></li> 
										<?php } ?>    
									</ul> 
									<div class="tab-content"> 
										<div role="tabpanel" class="tab-pane active" id="description"> 
											<table class="table table-striped table-bordered displayshow1"> 
												<?php
  												$json = str_replace(array("\t","\n"), "", $products_list['specifications']); 
												$data = json_decode($json); 
												$i = 1; 
												if($data == ""){ ?> 
													<div class="alert alert-danger"> Sorry Not Found </div> 
												<?php } else { $i= 0; 
													foreach ($data as $vkey => $vvalue) { 
														if($vvalue !== "") { ?> 
															<tr class="trset1"> 
																<td title="<?php echo $vkey; ?>" style="width:50%"><strong><?php echo $vkey; ?></strong></td> 
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
															<?php  $i++; 
														} 
													} 
												}  ?> 
											</tbody> 
										</table> 
									</div> 
									<div role="tabpanel" class="tab-pane" id="shipping"> 
										<p class="pro_text1"> 
											<?php 
											$features = explode("\n", $products_list['features']); 
											$i = 1; 
											$ul = '<ul style="margin-top:15px; itemprop="description" title="Features">'; 
											foreach ($features as $feature) { 
												if ($feature == "") break; 
												$ul .= '<li class="list_view" style="list-style: square; margin:none; font-size:14px;">' . $feature . '' . '</li>'; 
												$i++; 
											} 
											$ul .= '</ul>'; 
											echo $ul;  ?> 
										</p> 
									</div> 
									<div role="tabpanel" class="tab-pane" id="reviews"> 
										<p><?php echo $products_list['applications']; ?> </p> 
									</div> 
									<div role="tabpanel" class="tab-pane" id="pump_head_and_tubing_selection"> 
										<p><?php echo $products_list['pump_head_and_tubing_selection']; ?> </p> 
									</div> 
									<div role="tabpanel" class="tab-pane" id="dual_channel_tubing_selection_and_flow_rate"> 
										<p><?php echo $products_list['dual_channel_tubing_selection_and_flow_rate']; ?> </p> 
									</div>
									<div role="tabpanel" class="tab-pane" id="single_channel_tubing_selection_and_flow_rate"> 
										<p><?php echo $products_list['single_channel_tubing_selection_and_flow_rate']; ?> </p> 
									</div> 
									<div role="tabpanel" class="tab-pane" id="Standard"> 
										<?php echo $products_list['standard_accessories']; ?> 
									</div> 
									<div role="tabpanel" class="tab-pane" id="Optional"> 
										<?php echo $products_list['optional_accessories']; ?> 
									</div> 
									<div role="tabpanel" class="tab-pane" id="Safety"> 
										<?php echo $products_list['standard_safety_devices']; ?> 
									</div> 
									<div role="tabpanel" class="tab-pane" id="rotor_selections"> 
										<?php echo $products_list['rotor_selections']; ?> 
									</div> 
									<div role="tabpanel" class="tab-pane" id="safety_unit"> 
										<?php echo $products_list['safety_unit']; ?> 
									</div> 
									<div role="tabpanel" class="tab-pane" id="standard_blocks"> 
										<?php echo $products_list['standard_blocks']; ?> 
									</div>
									<div role="tabpanel" class="tab-pane" id="uv_transilluminator"> 
										<?php echo $products_list['uv_transilluminator']; ?> 
									</div> 
									<div role="tabpanel" class="tab-pane" id="optional_blocks"> 
										<?php echo $products_list['optional_blocks']; ?> 
									</div> 
									<div role="tabpanel" class="tab-pane" id="detector_specifications"> 
										<?php echo $products_list['detector_specifications']; ?> 
									</div>
									<div role="tabpanel" class="tab-pane" id="oven_specifications"> 
										<?php echo $products_list['oven_specifications']; ?> 
									</div>
									<div role="tabpanel" class="tab-pane" id="ion_chromatography_pump"> 
										<?php echo $products_list['ion_chromatography_pump']; ?> 
									</div>
									<div role="tabpanel" class="tab-pane" id="conductivity_detector"> 
										<?php echo $products_list['conductivity_detector']; ?> 
									</div>
									<div role="tabpanel" class="tab-pane" id="analysis_ability"> 
										<?php echo $products_list['analysis_ability']; ?> 
									</div>
									<div role="tabpanel" class="tab-pane" id="eluent_generator"> 
										<?php echo $products_list['eluent_generator']; ?> 
									</div>
									<div role="tabpanel" class="tab-pane" id="degassing_device"> 
										<?php echo $products_list['degassing_device']; ?> 
									</div>
									<div role="tabpanel" class="tab-pane" id="software_features"> 
										<?php echo $products_list['software_features']; ?> 
									</div>
									<div role="tabpanel" class="tab-pane" id="temperature"> 
										<?php echo $products_list['temperature']; ?> 
									</div> 
									<div role="tabpanel" class="tab-pane" id="humidity"> 
										<?php echo $products_list['humidity']; ?> 
									</div>
									<div role="tabpanel" class="tab-pane" id="illuminance"> 
										<?php echo $products_list['illuminance']; ?> 
									</div> 
								</div> 
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12"  itemscope itemtype="http://schema.org/Product">
					<div role="tabpanel" class="product-tab-carousel">
						<div class="header">
							<h4>Related Product</h4>
						</div>
						<div class="clearfix"></div>
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="featuredproducts">
								<div class="row">
									<style>
									.product_hover .txta {
										white-space: nowrap;
										width: 250px;
										overflow: hidden;
										text-overflow: ellipsis;
									}
								</style> 
								<?php foreach ($related_product as $value) {  ?>
									<div class="col-md-3 product text-left ">
										<div class="product-top">
											<figure class="product-slider">
												<a title="<?= $value['name']; ?>" itemprop="name" href="<?php echo base_url().$value['page_url']; ?>" title="<?php echo $value['name']; ?>">
													<?php  $image_json = str_replace(array("\t","\n"), "", $value['image_urls']);
													$image_text = json_decode($image_json);
													foreach ($image_text as $key => $img_v) {
														$product_img = $img_v;
														break;
													} ?>
													<img title="<?= $value['name']; ?>" src="<?php echo base_url().$product_img; ?>" alt="image not found" class="product-image padimgg">
												</a>
											</figure>
										</div>
										<div class="product_hover">
											<h2 class="product-title">
												<a title="<?= $value['name']; ?>" itemprop="url" href="<?php echo base_url().$value['page_url']; ?>">
													<?php echo $value['name']; ?></a></h2>
													<div class="product-action-container"> </div>
													<a title="<?= $value['name']; ?>" itemprop="url" href="<?php echo base_url().$value['page_url']; ?>" class="product-btn product-add-btn">
													View Details</a>
												</div>
											</div>

										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="xlg-margin hidden-xs hidden-sm"></div>
			</div>
			<div class="container">
				<div class="modal fade" id="getquote" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title loginset" title="Get Quote">Get Quote</h4>
							</div>
							<div class="modal-body" style="display: flow-root !important;">
								<form method="POST" action="<?= base_url().'send-quote'; ?>">
									<p><input type="text" class="form-control" id="name" name="name" placeholder="Your name" readonly value="<?php echo $products_list['name']; ?>" required></p>
									<p><input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required></p>
									<p><input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required></p>
									<p><textarea class="form-control" rows="6" id="message" name="message" placeholder="Message" required></textarea></p>
									<input type="hidden" class="form-control" name="location" id="location" value="" readonly/>
									<p align="right"><button type="submit" title="Get Quote" class="getquote">Get Quote</button></p>
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
								</form> 
							</div> 
						</div> 
					</div> 
				</div> 
			</div> 
		</div> 
		<footer id="footer" class="footer-simple footer-dark"> 
			<a href="#wrapper" id="scroll-top" title="Top"><i class="fa fa-angle-up"></i></a> 
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
	</body> 
</html>

