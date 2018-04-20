<p class="bg-success">
	<?php   if($this->session->flashdata('login_success')):  ?>
   
    <?php  echo  $this->session->flashdata('login_success');   ?>

   <?php   endif;  ?>

</p>

<p class="bg-danger">
	<?php   if($this->session->flashdata('login_failed')):  ?>
   
    <?php  echo $this->session->flashdata('login_failed');   ?>

   <?php   endif;  ?>	

</p>

<p class="bg-success">
<?php  if($this->session->flashdata('register_success')):   ?>
<?php   echo  $this->session->flashdata('register_success');  ?>
<?php  endif;  ?>

</p>

<p class="bg-danger">
<?php  if($this->session->flashdata('no_access')):   ?>
<?php   echo  $this->session->flashdata('no_access');  ?>
<?php  endif;  ?>

</p>


<p class="bg-success">
<?php  if($this->session->flashdata('project_edit')):   ?>
<?php   echo  $this->session->flashdata('project_edit');  ?>
<?php  endif;  ?>
</p>

<div class="jumbotron">
	<h4 class="text-center">Welcome To CI APP</h4>
</div>

<table class="table table-hover">
   <h3>Tasks</h3>
	<?php if(isset($projects) > 0){ ?> 
  <a class="btn btn-primary pull-right" href="<?php echo base_url() ;?>projects/create">Create Project</a>
    <thead>
     	
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Body</th>
      </tr>
    </thead>
    <tbody>
      <?php 
         $i=0;
        foreach ($projects as $value) {
         $i++;
       ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><a href="<?php echo base_url()?>projects/display/<?php echo $value->id ;?>"><?php echo $value->project_name; ?></a></td>
        <td><?php echo character_limiter($value->project_body, 80); ?></td>
      </tr>
      <?php } }else { ?>
      <tr>
        <td colspan="3">No Data Available</td>
      </tr>
      <?php } ?>
    </tbody>
  </table>


<table class="table table-hover">
  <?php if(isset($tasks) > 0){ ?> 
   <h3>Tasks</h3>
  
    <thead>
      
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Body</th>
      </tr>
    </thead>
    <tbody>
      <?php 
         $i=0;
        foreach ($tasks as $task) {
         $i++;
       ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><a href="<?php echo base_url()?>tasks/display/<?php echo $task->task_id ;?>"><?php echo $task->task_name; ?></a></td>
        <td><?php echo character_limiter($task->task_body, 80); ?></td>
      </tr>
      <?php } }else { ?>
      <tr>
        <td colspan="3">No Data Available</td>
      </tr>
      <?php } ?>
    </tbody>
  </table>



