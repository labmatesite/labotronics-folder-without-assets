<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
.form-gap {
    padding-top: 70px;
}

</style>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <?php if(!empty($this->session->flashdata('err_forgot'))){?>
              <script>
                  // swal("Sorry, There is no Match for that Email Address", "Try Again", "error");
                  alert('Sorry, There is no Match for that Email Address');
              </script>
  <?php }?>



 <div class="form-gap"></div>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-keyboard-o" style="font-size:70px" aria-hidden="true"></i></h3>
                  <h2 class="alert alert-success" class="text-center">Verified..</h2>
                  <h4>Enter New Password.</h4>
                  <div class="panel-body">
    
                    <form id="register-form" role="form" autocomplete="off" action="<?= base_url().'update-new-password';?>" class="form" method="post">
    
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-code" aria-hidden="true"></i></span>
                          <input id="otp" name="new_password" required placeholder="Enter New Password" class="form-control"  type="text">
                        </div>
                      </div>
                      <input type="hidden" name="id" value="<?= $id; ?>">
                      
                      <div class="form-group">
                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Submit" type="submit">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>