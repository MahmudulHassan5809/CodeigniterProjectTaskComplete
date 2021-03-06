

<h2>Edit Task</h2>

<?php $attributes = array('id'=>'create_task','class'=>'form_horizontal'); ?>


<?php echo validation_errors(); ?>

<?php echo form_open('tasks/edit/'.$this->uri->segment(3).'',$attributes);?>
  
  <div class="form-group">
      <?php echo form_label('Task Name:'); ?>
      <?php
        $data = array(
          'class'=>'form-control',
          'name'=>'task_name', 
          'value'=> $task_data->task_name
           )
        ?>
      <?php echo form_input($data); ?>
   </div>

   <div class="form-group">
      <?php echo form_label('Task Body:'); ?>
      <?php
        $data = array(
          'class'=>'form-control',
          'name'=>'task_body', 
          'value'=> $task_data->task_body
           )
        ?>
      <?php echo form_textarea($data); ?>
   </div>

    <div class="form-group">
      
      <?php
        $data = array(
          'class'=>'form-control',
          'name'=>'due_date',
          'type' => 'date', 
          'value'=> $task_data->due_date
           )
        ?>
      <?php echo form_input($data); ?>
   </div>


    <div class="form-group">
     <?php
        $data = array(
          'class'=>'btn btn-primary',
          'name'=>'submit', 
          'value'=>'Edit Task'
          )
        ?>
      <?php echo form_submit($data); ?>
   </div>

<?php echo form_close(); ?>

<script>tinymce.init({ selector:'textarea' });</script>