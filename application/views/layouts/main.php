<!DOCTYPE html>
<html>
<head>
	<title></title>
</html>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
   <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       
        <li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li><a href="<?php echo base_url();?>users/register">Register</a></li>
        <li><a href="<?php echo base_url();?>projects/index">Projects</a></li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <?php  if($this->session->userdata('logged_in')):  ?>
        <li><a href="<?php echo base_url();?>users/logout">Logout</a></li>
         <?php endif ; ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<div class="container">
		<div class="col-md-3">
			<?php $this->load->view('users/login_view') ;  ?>
		</div>
		<div class="col-md-9">
			<?php if(isset($main_view)):   ?>
			<?php $this->load->view($main_view) ; ?>
		<?php endif; ?>
		</div>
   </div>

</body>