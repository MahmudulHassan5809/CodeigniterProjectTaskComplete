<?php  if(!$this->session->userdata('logged_in')):  ?>

<h2>Login Form</h2>

<?php $attributes = array('id'=>'login_form','class'=>'form_horizontal'); ?>
<?php  if($this->session->flashdata('errors')):   ?>
<?php   echo  $this->session->flashdata('errors');  ?>
<?php  endif;  ?>

<?php echo form_open('users/login',$attributes);?>
  
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
          'value'=>'Login'
          )
        ?>
   	  <?php echo form_submit($data); ?>
   </div>

<?php echo form_close(); ?>

<?php else: ?>

 <h2>Logout Form</h2>

<?php $attributes = array('id'=>'login_form','class'=>'form_horizontal'); ?> 
<?php echo form_open('users/logout',$attributes);?>

<?php  if($this->session->userdata('username')):  ?>

<?php  echo "<h5 class='bg-success'>Yor Are LoggedIn As " . $this->session->userdata('username')."</h5>"; ?>

<?php  endif;  ?>


 
 <div class="form-group">
   	 <?php
        $data = array(
          'class'=>'btn btn-danger',
          'name'=>'submit', 
          'value'=>'Logout'
          )
        ?>
   	  <?php echo form_submit($data); ?>
   </div>
  
 <?php echo form_close(); ?> 

<?php endif; ?>