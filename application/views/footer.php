<div id="footer-inner">
   <div class="container">
      <div class="row foot_add">
         <div class="col-md-4 col-sm-4 col-xs-12"  itemscope itemtype="http://schema.org/PostalAddress" itemprop="address">
            <div class="widget">
               <div class="describe-widget">
                  <div class="footer-logo"><img title="Labotronics | Lab Equipment | Scientific Instruments" alt="Labotronics" itemprop="image" src="<?php echo base_url(); ?>assets/image/logo1.png" alt="Logo" class="img-responsive"></div>
                  <ul class="contact-list">
                  <li><i class="fa fa-map"></i><!-- <span itemprop="streetAddress"> Labotronics Scientific Ltd</span> <br> <span itemprop="addressLocality">1816 CROWCHILD TRAIL NW</span><br> <span itemprop="addressRegion">CALGARY ALBERTA</span> <br> <span itemprop="postalCode">T2M 3Y7<br> CANADA</span> -->

                     <span title="Address" itemprop="addressLocality"><span class="fnt">Labotronics Scientific Ltd </span> <br> 1816 Crowchild Trail NW,</span> <br><span itemprop="addressRegion">Calgary Alberta, </span><br> <span itemprop="postalCode">T2M 3Y7 <br>
                                 Canada 
                                 </span>

                     <br>Contact Number : <a href="tel:+14035897725"><span itemprop="telephone">+1 403 589 7725</span></li>
                  <li><i class="fa fa-envelope"></i><span itemprop="email"><a href="javascript:location='mailto:\u0069\u006e\u0066\u006f\u0040\u006c\u0061\u0062\u006f\u0074\u0072\u006f\u006e\u0069\u0063\u0073\u002e\u0063\u006f\u006d';void 0"><script type="text/javascript">document.write('\u0069\u006e\u0066\u006f\u0040\u006c\u0061\u0062\u006f\u0074\u0072\u006f\u006e\u0069\u0063\u0073\u002e\u0063\u006f\u006d')</script></a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-md-2 col-sm-2 col-xs-12">
            <div class="widget foo">
               <h4 title="Contact With Us" class="widget-title">Connect with us</h4><hr>
               <ul><li><a title="Facebook" href="https://www.facebook.com/Labotronics-185645562089728/" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li></ul>
               <ul><li><a title="Quora" href="https://www.quora.com/profile/Labo-Tronics" target="_blank"><i class="fa fa-quora"></i> Quora</a></li></ul>
               <ul><li><a title="LinkedIn" href="https://www.linkedin.com/company/labotronic/" target="_blank"><i class="fa fa-linkedin"></i> LinkedIn</a></li></ul>
               <ul><li><a title="Google Plus" href="https://plus.google.com/u/0/106238967302192475901" target="_blank"><i class="fa fa-google-plus"></i> Google Plus</a></li></ul>
               <ul><li><a title="Pinterest" href="https://www.pinterest.com/Labotronics110/" target="_blank"><i class="fa fa-pinterest"></i> Pinterest</a></li></ul>
               <ul><li><a title="Twitter" href="https://twitter.com/Labotronics110" target="_blank"><i class="fa fa-twitter"></i> Twitter </a></li></ul>
            </div>
         </div>
         <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="widget">
               <h4 title="Our Products" class="widget-title">Our Products</h4><hr>
               <ul class="links">
                  <?php foreach($footer_prod as $value){ ?>
                  <li title="<?php echo $value['name']; ?>"><a title="<?= $value['name'] ;?>" itemprop="url" href="<?php echo base_url(); ?><?php echo $value['page_url']; ?>"><i class="fa fa-link"></i> <?php echo $value['name']; ?> </a></li>
                  <?php } ?>
               </ul>
            </div>
         </div>
         <div title="Google Map" class="col-md-3 col-sm-3 col-xs-12" itemscope itemtype="http://schema.org/Place">
            <div class="widget" itemprop="geo" itemscope itemtype="http://schema.org/GeoCoordinates">
               <h4 class="widget-title">Google Map</h4>               
			   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2507.145148819141!2d-114.11852798424607!3d51.06887057956538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53716fa3a1f9f75f%3A0x50d8617790a7f734!2s1816+Crowchild+Trail+NW%2C+Calgary%2C+AB+T2M+0M5%2C+Canada!5e0!3m2!1sen!2sin!4v1527836476286" width="100%" height="220px" frameborder="0" style="border:0" allowfullscreen></iframe>
               <meta itemprop="latitude" content="53.2734" />
               <meta itemprop="longitude" content="-7.778320310000026" />
            </div>
         </div>
      </div>
   </div>
</div>
<div id="footer-bottom">
   <div class="container">
      <div class="row">
         <div class="col-md-7 col-sm-6">
            <ul class="footer-menu">
             <li><a title="Home" href="<?php echo base_url(); ?>">Home</a></li>
             <li><a title="About" href="<?php echo base_url(); ?>about-us">About Us</a></li>
             <!-- <li><a href="javascript:;">Terms & Conditions</a></li> -->
             <li><a title="Contact Us" href="<?php echo base_url(); ?>contact-us">Contact Us</a></li>
            </ul>
         </div>
         <div class="col-md-3 col-sm-6">
            <div class="payment-container">
               <p title="Labotronics ltd" class="copyright">Designed by <a href="<?php echo base_url(); ?>">Labotronics ltd</a>. All Rights Reserved 2018</p>
            </div>
         </div>
      </div>
   </div>
</div>
