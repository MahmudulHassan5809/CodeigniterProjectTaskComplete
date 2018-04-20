<?php

class Task_model extends CI_Model {


  public function get_task($task_id){
  	   $this->db->where('id',$task_id);
   	   $query = $this->db->get('tasks');
   	   return $query->row();
  }

  public function create_task($data)
  {
  	 $insert = $this->db->insert('tasks',$data);
  	 return $insert;
  }

  public function get_task_project_id($task_id){
  	   $this->db->where('id',$task_id);
  	   $query =  $this->db->get('tasks');
       return $query->row()->project_id;
  }

  public function get_project_name($project_id){
      $this->db->where('id',$project_id);
      $query =  $this->db->get('projects');
      return $query->row()->project_name;

  }

  public function get_task_project_data($task_id){
       
       $this->db->where('id',$task_id);
  	  $query =  $this->db->get('tasks');
      
      return $query->row();

  }

  public function edit_task($data,$task_id){
  	  $this->db->where('id',$task_id);
  	  $this->db->update('tasks',$data);
  	  return true;
  }

  public function delete_task($id){
      $this->db->where('id',$id);
       $query = $this->db->delete('tasks');
       return true;
  }


  public function mark_complete($id){

     $this->db->set('status',1);
     $this->db->where('id',$id);
     $this->db->update('tasks');

     return true;
  }

   public function mark_incomplete($id){

     $this->db->set('status',0);
     $this->db->where('id',$id);
     $this->db->update('tasks');

     return true;
  }

  public function get_all_tasks($user_id){
     $this->db->select('
        
           tasks.task_name,
           tasks.task_body,
           tasks.id as task_id,

      ');
     $this->db->from('tasks');
     $this->db->join('projects','tasks.project_id = projects.id');
     $this->db->where('projects.user_id',$user_id);
     $result = $this->db->get();
     return $result->result();
  }



}