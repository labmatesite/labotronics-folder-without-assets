<style>
.alert-search {
  padding: 0px 12px 3px 11px;
  margin-top: 3px;
  margin-bottom: 3px;
    background-color:#3771A6 !important;
    color: white;
}
.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}


.closebtn:hover {
    color: black;
}
.alert-box{
  white-space: nowrap;
  color:#fff;
  width: 250px;
  overflow: hidden;
  text-overflow: ellipsis;
}
.user_search_result{
  margin-bottom: 12px;
margin-top: 7px;
margin-left: 17px;
font-size: 19px;
}
.alert-danger-data {
    padding: 20px;
    background-color: tomato;
    color: white;
    margin-bottom: 20px;
}
.result-box{
box-shadow: 0px 0px 12px gray;
margin-top: 8px;
padding-bottom: 20px;
padding-top: 5px;
margin-bottom: 8px;
}
@media only screen and (max-width: 600px) {
#search_view{
  padding-left: 8px !important;
    padding-right: 8px !important;
}

}
</style>
<div class="container-fluid result-box">
  <h2 class="user_search_result"> Search Results... </h2>
  <?php if($search_data == ""){ ?>
    <div class="alert-danger-data">
      <!-- <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> -->
       Your Search - <span style=" font-style: italic; font-weight:600; font-size:20px; padding-left:4px; padding-right:4px"><?php echo $search_error; ?></span> Did Not Match Any Products.
    </div>
  <?php } else{ ?>
  <?php foreach ($search_data as $value) { ?>
  <div class="col-md-3">
    <div class="alert-search">
      <!-- <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> -->
      <?php $count_cat = substr_count($value['page_url'], "/");
      if($count_cat == 2){ ?>
    <h3 class="alert-box"><a itemprop="name" href="<?php echo base_url(); ?>index.php/<?php echo $value['page_url']; ?>" style="color:#fff; font-size:14px"><strong><?php echo $value['name']; ?></strong></a></h3>
    <?php } else { ?>
      <h3 class="alert-box"><a itemprop="name" href="<?php echo base_url(); ?>index.php/description/<?php echo $value['page_url']; ?>" style="color:#fff; font-size:14px"><strong><?php echo $value['name']; ?></strong></a></h3>
      <?php } ?>
    </div>
  </div>
<?php } } ?>
</div>
