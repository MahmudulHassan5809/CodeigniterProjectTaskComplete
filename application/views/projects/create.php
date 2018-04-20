

<h2>Create Project</h2>

<?php $attributes = array('id'=>'login_form','class'=>'form_horizontal'); ?>


<?php echo validation_errors(); ?>

<?php echo form_open('projects/create',$attributes);?>
  
  <div class="form-group">
      <?php echo form_label('Project Name:'); ?>
      <?php
        $data = array(
          'class'=>'form-control',
          'name'=>'project_name', 
          'placeholder'=>'Enter Project Name'
           )
        ?>
      <?php echo form_input($data); ?>
   </div>

   <div class="form-group">
      <?php echo form_label('Project Body:'); ?>
      <?php
        $data = array(
          'class'=>'form-control',
          'name'=>'project_body', 
          'placeholder'=>'Enter Description'
           )
        ?>
      <?php echo form_textarea($data); ?>
   </div>


    <div class="form-group">
     <?php
        $data = array(
          'class'=>'btn btn-primary',
          'name'=>'submit', 
          'value'=>'Create Project'
          )
        ?>
      <?php echo form_submit($data); ?>
   </div>

<?php echo form_close(); ?>

<script>tinymce.init({ selector:'textarea' });</script>