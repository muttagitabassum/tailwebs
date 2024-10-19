<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tailwebs | Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin_assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin_assets/dist/css/adminlte.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo" style="color:red">
    <b>Tailwebs</b>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
     

      <form action="<?php echo base_url('auth-login')?>" method="post" id="login-form">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
         <div class="row">
          <div class="col-4">
          
          </div>
          <!-- /.col -->
          <div class="col-8">
           <p class="mb-1">
        <!-- <a href="">I forgot my password</a> -->
      </p>
          </div>
          <!-- /.col -->
        </div>
        <div class="row">
          <div class="col-8">
          <div class="icheck-primary">
          </div>
          </div>
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Login In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    
  
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<!-- <script>
    $('#login-form').ready(function(){
        $('#login-form').bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                username: {
                  
                    validators: {
                        notEmpty: {
                            message: 'The old password is required and cannot be empty'
                        },
                        stringLength: {
            min: 6,
            max: 12,
            message: 'The old password must be more than 6 and less than 12 characters long'
          }
                    }
                },
                
                password: {
                    
                    validators: {
                        notEmpty: {
                            message: 'The confirm password is required cannot empty'
                        },
                          stringLength: {
            min: 6,
            max: 12,
            message: 'The confirm password must be more than 6 and less than 12 characters long'
          }
                    }
                }
              
              
            }
        })
});

</script> -->
<style>
    .has-error .help-block {
  padding-left: 15px;
  padding-top: 5px;
  color: crimson;
}
</style>
<script src="<?php echo base_url()?>admin_assets/plugins/jquery/jquery.min.js"></script>

<script src="<?php echo base_url()?>admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo base_url()?>admin_assets/dist/js/adminlte.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"></script>
</body>
</html>
