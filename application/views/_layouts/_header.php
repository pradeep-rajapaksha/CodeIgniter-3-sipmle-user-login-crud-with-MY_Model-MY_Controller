<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Narrow Jumbotron Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/dist/jumbotron-narrow.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">About</a></li>
            <li role="presentation"><a href="#">Contact</a></li>
            <li role="separator" class="divider"></li>
            <?php if( !empty($this->session->userdata('id')) ): ?>
              <li role="presentation"><a href="<?php echo base_url();?>index.php/user">Dashboard</a></li>
            <?php else: ?>
              <li role="presentation"><a href="<?php echo base_url();?>index.php/user/login">Login</a></li>
            <?php endif; ?>
          </ul>
        </nav>
        <h3 class="text-muted">Project name</h3>
      </div>