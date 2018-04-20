<p class="bg-success">
<?php  if($this->session->flashdata('project_edit')):   ?>
<?php   echo  $this->session->flashdata('project_edit');  ?>
<?php  endif;  ?>

</p>
</p>

<p class="bg-success">
<?php  if($this->session->flashdata('project_delete')):   ?>
<?php   echo  $this->session->flashdata('project_delete');  ?>
<?php  endif;  ?>

</p>

<p class="bg-success">
<?php  if($this->session->flashdata('project_success')):   ?>
<?php   echo  $this->session->flashdata('project_success');  ?>
<?php  endif;  ?>

</p>
<p class="bg-success">
<?php  if($this->session->flashdata('task_success')):   ?>
<?php   echo  $this->session->flashdata('task_success');  ?>
<?php  endif;  ?>

</p>
<p class="bg-success">
<?php  if($this->session->flashdata('task_edit')):   ?>
<?php   echo  $this->session->flashdata('task_edit');  ?>
<?php  endif;  ?>

</p>
<p class="bg-success">
<?php  if($this->session->flashdata('task_delete')):   ?>
<?php   echo  $this->session->flashdata('task_delete');  ?>
<?php  endif;  ?>

</p>



<table class="table table-hover">
  <a class="btn btn-primary pull-right" href="<?php echo base_url() ;?>projects/create">Create Project</a>
    <thead>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Body</th>
      </tr>
    </thead>
    <tbody>
      <?php if(count($projects) > 0){
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