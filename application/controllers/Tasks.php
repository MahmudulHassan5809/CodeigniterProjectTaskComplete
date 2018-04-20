<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Tasks extends CI_Controller {

   
  public function display($task_id){
     $data['project_id'] = $this->task_model->get_task_project_id($task_id);
     $data['project_name'] = $this->task_model->get_project_name($data['project_id']); 
  	 $data['task'] = $this->task_model->get_task($task_id);
  	 $data['main_view'] = "tasks/display";
  	 $this->load->view('layouts/main',$data);
  }

   public function create($project_id){
          
        $this->form_validation->set_rules('task_name','Task Name','trim|required|min_length[3]');
        $this->form_validation->set_rules('task_body','Task Body','trim|required|min_length[50]'); 
        
        if ($this->form_validation->run() == FALSE) {
           

          $data['main_view'] = "tasks/create";
          $this->load->view('layouts/main',$data);
           
        }else{

            $data = array(
              'project_id' => $project_id,
              'task_name' => $this->input->post('task_name'),
              'task_body' => $this->input->post('task_body'),
              'due_date'  => $this->input->post('due_date')
             );
            if($this->task_model->create_task($data)){
                $this->session->set_flashdata('task_success','Task Created Successfully');
                redirect('projects/index');
            }
        }
      }

       public function edit($task_id){

        $this->form_validation->set_rules('task_name','Task Name','trim|required|min_length[3]');
        $this->form_validation->set_rules('task_body','Task Body','trim|required|min_length[50]');

         if ($this->form_validation->run() == FALSE) {
          $data['project_id'] = $this->task_model->get_task_project_id($task_id);
          $data['project_name'] = $this->task_model->get_project_name($data['project_id']);
          $data['task_data'] = $this->task_model->get_task_project_data($task_id); 
          $data['main_view'] = "tasks/edit";
          $this->load->view('layouts/main',$data);
           
        }else{
            $project_id = $this->task_model->get_task_project_id($task_id);
            $data = array(
              'project_id' => $project_id,
              'task_name' => $this->input->post('task_name'),
              'task_body' => $this->input->post('task_body'),
              'due_date' => $this->input->post('due_date')
            );
            if($this->task_model->edit_task($data,$task_id)){

                $this->session->set_flashdata('task_edit','Task Updated Successfully');
                redirect('projects/index');
            }
        }
      }


      public function delete($project_id,$id){

          $this->task_model->delete_task($id);
          $this->session->set_flashdata('task_delete','Task Deleted Successfully');
                redirect('projects/display/'.$project_id.'');
                
      }


      public function mark_complete($project_id,$id){
        if ($this->task_model->mark_complete($id)) {
            $this->session->set_flashdata('mark_done','Task Has Been Completed');
                redirect('projects/display/'.$project_id.'');

        }
      }

      public function mark_incomplete($project_id,$id){
        if ($this->task_model->mark_incomplete($id)) {
            $this->session->set_flashdata('mark_done','Task Has Been InCompleted');
                redirect('projects/display/'.$project_id.'');

        }
      }

 









}	