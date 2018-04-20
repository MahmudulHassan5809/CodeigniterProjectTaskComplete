<h1>Tasks Display View : <?php echo $project_name; ?></h1>

<table class="table table-hover">
    <thead>
      <tr>
       
        <th>Task Name</th>
        <th>Task Body</th>
        <th>Created At</th>
        <th>Edit</th>
        <th>Delete</th>
        <th>Mark</th>
      </tr>
    </thead>
    <tbody>
    	<?php if(isset($task)){
         
       ?>
      <tr>
        
        <td><?php echo $task->task_name; ?></td>
        <td><?php echo character_limiter($task->task_body, 80); ?></td>
        <td><?php echo $task->created_at; ?></td>
        <td><a href="<?php echo base_url() ;?>tasks/edit/<?php echo $task->id ?>" class="btn btn-success btn-xs">Edit</a></td>
        <td><a href="<?php echo base_url() ;?>tasks/delete/<?php echo $task->project_id ;?>/<?php echo $task->id ;?>" class="btn btn-danger btn-xs">Delete</a></td>
        <?php if($task->status == 0): ?>
        <td><a href="<?php echo base_url() ;?>tasks/mark_complete/<?php echo $task->project_id ;?>/<?php echo $task->id ;?>" class="btn btn-success btn-xs">Mark Complete</a></td>
      <?php else: ?>
        <td><a href="<?php echo base_url() ;?>tasks/mark_incomplete/<?php echo $task->project_id ;?>/<?php echo $task->id ;?>" class="btn btn-success btn-xs">Mark Incomplete</a></td>
       <?php endif; ?> 
      </tr>
      <?php }else { ?>
      <tr>
        <td colspan="3">No Data Available</td>
      </tr>
      <?php } ?>
    </tbody>
  </table>