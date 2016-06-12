<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url(); ?>/assets/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<link href="<?php echo base_url(); ?>/assets/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="<?php echo base_url(); ?>/assets/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--<script src="<?php echo base_url(); ?>/assets/assets/js/ie-emulation-modes-warning.js"></script>-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

        <div class="col-md-3 col-md-offset-5">
            <style>
                .alert>p{
                    padding: 3px 7px 0px 7px;
                    margin: 0;
                    font-size: 12px;
                }
                .alert>p:last-child{
                    padding-bottom: 3px;
                }
            </style>
            <div class="alert alert-error" style="padding: 0;border: 0;">
                <?php
                if(isset($_GET['login']) && $_GET['login']==true){
                    echo '<p>Invalid login details</P>';
                }
                ?>
                <?php echo validation_errors(); ?>
            </div>
            
            <?php echo form_open('user/u_login', 'class="form-signin"');?>
            <h2 class="form-signin-heading">Please sign in</h2>
            <label for="username" class="sr-only">Username</label>
            <?php echo form_input(array( 'name'=>'username', 'id'=>'username', 'class'=>'form-control', 'placeholder'=>'Username', 'required'=>true, 'autofocus'=>true)); ?>
            <label for="password" class="sr-only">Password</label>
            <?php echo form_password(array( 'name'=>'password', 'id'=>'password', 'class'=>'form-control', 'placeholder'=>'Password', 'required'=>true)); ?>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          <?php echo form_close();?>
        </div>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<script src="<?php echo base_url(); ?>/assets/assets/js/ie10-viewport-bug-workaround.js"></script>-->
  </body>
</html>
