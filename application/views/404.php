<body class="home" >    
  
<style>
.box hr {
  diplay: block;
  border: none;
  border-bottom: 1px dashed #ccc;
}
.box {
  background-color: #fbfbfb;
  border: 1px solid #AAA;
  border-bottom: 1px solid #888;
  border-radius: 3px;
  color: black;
  box-shadow: 0px 2px 2px #AAA;
  padding: 20px;
}
.box h1, .box h2 {
  display: block;
  text-align: center;
}
.box h1 {
  color: #666;
  font-weight: normal;
  font-size: 90px;
  padding: 0;
  margin: 0;
  margin-top: 10px;
  line-height:60px
}
.box h2 {
  color: #666;
  font-weight: normal;
  font-size: 1.5em;
}
.box p {
  display: block;
  margin-bottom: 10px;
  text-align: center;
  font-size: 18px;
}
.box ul li {
  margin-bottom: 7px;
} 
.box ul li p{
  font-size: 16px;
} 
</style> 
  <div class="container" style="margin-bottom:2%;">   
    <br>
    <div class="box">
      <h1>4<span class="text-danger">0</span>4</h1>
      <h2>The page could not be found</h2>
      <div class="text-center">
        <a href="<?= base_url() ?>">
          <i class="fa fa-home"></i> Back To Home Page
        </a>
      </div>
      <hr>
      <p>The page you are looking for might have been removed had its name changed or is temporarily unavailable</p> 
      <div class="row" itemscope itemtype="http://schema.org/Product">
        <div class="col-lg-12">
          <div role="tabpanel" class="product-tab-carousel">
            <div class="header text-center">
              <h4><span><b><span >O</span>ur </b><b><span> P</span>roducts</b><b><span> R</span>ange</b></span></h4>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-12">
              <ul style="font-size: 16px;" >
                <?php foreach($product_category as $key=>$value){?> 
                  <li class="col-sm-6 col-md-3 col-xs-12 bg_ico_pro3">
                    <a href="<?=base_url().$value['page_url'];?>">
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
<footer id="footer" class="footer-simple footer-dark">  

<?php include('footer.php'); ?>  

<a href="#wrapper" id="scroll-top" title="Top"><i class="fa fa-angle-up"></i></a> 


<style type="text/css">

   .breadcrumb { 
     margin-bottom: 0px !important;
     background-color: #eeeeef;
   }


</style>

<script>

      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

      })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-83655511-1', 'auto');

      ga('send', 'pageview');

</script> 

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