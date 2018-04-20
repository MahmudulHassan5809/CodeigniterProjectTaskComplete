<p class="bg-success">
<?php  if($this->session->flashdata('mark_done')):   ?>
<?php   echo  $this->session->flashdata('mark_done');  ?>
<?php  endif;  ?>

</p>

<div class="col-xs-9">
 <h1>Project Name:<?php echo $project_data->project_name; ?></h1>
<p>Crested At :<?php echo nice_date($project_data->created_at, 'Y-m-d'); ?></p>
 <hr>
 <h5><b>Description :</b></h5>
 <p>
 	<?php echo $project_data->project_body; ?>
 </p>
 <hr>
 
 <h3>Completed Tasks</h3>
  <?php if($not_completed_tasks): ?>
<?php foreach($not_completed_tasks as $task): ?>
  
  <ul> 
  	<li>
  <a  href="<?php echo base_url()?>tasks/display/<?php echo $task->task_id ?>"><?php echo $task->task_name ; ?></a>  
   </li>
  </ul>     
 
 <?php endforeach; ?> 
<?php else: ?>
	<p>You Dont Have no Task Pending</p>
<?php endif; ?> 	



 <h3>Active Tasks</h3>
<?php if($completed_tasks): ?>
<?php foreach($completed_tasks as $task): ?>
  
  <ul> 
  	<li>
  <a  href="<?php echo base_url()?>tasks/display/<?php echo $task->task_id ?>"><?php echo $task->task_name ; ?></a>  
   </li>
  </ul>     
 
 <?php endforeach; ?> 
<?php else: ?>
	<p>You Dont Have no Task Pending</p>
<?php endif; ?> 	
</div>


<div class="col-xs-3 pull-right">
<ul class="list-group">
	<h4>Project Actions</h4>
	<li class="list-group-item"><a href="<?php echo base_url()?>tasks/create/<?php echo $project_data->id ?>">Create Task</a></li>
	<li class="list-group-item"><a href="<?php echo base_url()?>projects/edit/<?php echo $project_data->id ?>">Edit Task</a></li>
	<li class="list-group-item"><a href="<?php echo base_url()?>projects/delete/<?php echo $project_data->id ?>">Delete Task</a></li>
</ul>
</div>