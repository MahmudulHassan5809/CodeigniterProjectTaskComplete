

<h2>Registration Form</h2>

<?php $attributes = array('id'=>'login_form','class'=>'form_horizontal'); ?>


<?php echo validation_errors(); ?>

<?php echo form_open('users/register',$attributes);?>
  
  <div class="form-group">
      <?php echo form_label('First Name:'); ?>
      <?php
        $data = array(
          'class'=>'form-control',
          'name'=>'first_name', 
          'placeholder'=>'Enter First Name'
           )
        ?>
      <?php echo form_input($data); ?>
   </div>

   <div class="form-group">
      <?php echo form_label('Last Name:'); ?>
      <?php
        $data = array(
          'class'=>'form-control',
          'name'=>'last_name', 
          'placeholder'=>'Enter Last Name'
           )
        ?>
      <?php echo form_input($data); ?>
   </div>

   <div class="form-group">
      <?php echo form_label('Email:'); ?>
      <?php
        $data = array(
          'class'=>'form-control',
          'name'=>'email', 
          'placeholder'=>'Enter Email'
           )
        ?>
      <?php echo form_input($data); ?>
   </div>


   <div class="form-group">
   	  <?php echo form_label('UserName:'); ?>
   	  <?php
        $data = array(
          'class'=>'form-control',
          'name'=>'username', 
          'placeholder'=>'Enter UserName'
           )
        ?>
   	  <?php echo form_input($data); ?>
   </div>


     <div class="form-group">
   	  <?php echo form_label('Passwprd:'); ?>
   	  <?php
        $data = array(
          'class'=>'form-control',
          'name'=>'password', 
          'placeholder'=>'Enter Password'
           )
        ?>
   	  <?php echo form_password($data); ?>
   </div>

    <div class="form-group">
   	  <?php echo form_label('Confirm Passwprd:'); ?>
   	  <?php
        $data = array(
          'class'=>'form-control',
          'name'=>'confirm_password', 
          'placeholder'=>'Confirm Password'
           )
        ?>
   	  <?php echo form_password($data); ?>
   </div>

    <div class="form-group">
   	 <?php
        $data = array(
          'class'=>'btn btn-primary',
          'name'=>'submit', 
          'value'=>'Register'
          )
        ?>
   	  <?php echo form_submit($data); ?>
   </div>

<?php echo form_close(); ?>

