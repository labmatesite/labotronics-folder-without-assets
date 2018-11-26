<ul>
  <?php
  if($sub_list == ""){ ?>
      <div class="alert alert-danger" style="padding-left:20px"> No Sub Category..! </div>
<?php } else {
  foreach ($sub_list as $value) { ?>
  <li><a href="<?php echo base_url(); ?><?php echo $value['page_url']; ?>"> <?php echo $value['name']; ?> </a></li>
<?php } }   ?>
</ul>
