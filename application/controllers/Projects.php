<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

  public function __construct(){
  	parent::__construct();
  	 if(!$this->session->userdata('logged_in')){
  	 	$this->session->set_flashdata('no_access','Plz Login To View This Page');
  	 	redirect('home/index');
  	 }
  }




  public function index(){
          
          $data['projects'] = $this->project_model->get_projects();
       	  $data['main_view'] = "projects/index";
       	  $this->load->view('layouts/main',$data);
       }

 
  public function display($id){

       $data['not_completed_tasks'] = $this->project_model->get_project_task($id,false);
       $data['completed_tasks'] = $this->project_model->get_project_task($id,true);

  	     $data['project_data'] = $this->project_model->get_project($id);
       	  $data['main_view'] = "projects/display";
       	  $this->load->view('layouts/main',$data);
  }

  public function create(){
          
        $this->form_validation->set_rules('project_name','Project Name','trim|required|min_length[3]');
        $this->form_validation->set_rules('project_body','Project Body','trim|required|min_length[50]'); 
        
        if ($this->form_validation->run() == FALSE) {
           

          $data['main_view'] = "projects/create";
          $this->load->view('layouts/main',$data);
           
        }else{

            $data = array(
              'user_id' => $this->session->userdata('user_id'),
              'project_name' => $this->input->post('project_name'),
              'project_body' => $this->input->post('project_body')
            );
            if($this->project_model->create_project($data)){
                $this->session->set_flashdata('project_success','Project Created Successfully');
                redirect('projects/index');
            }
        }
      }

      public function edit($id){

        $this->form_validation->set_rules('project_name','Project Name','trim|required|min_length[3]');
        $this->form_validation->set_rules('project_body','Project Body','trim|required|min_length[50]');

         if ($this->form_validation->run() == FALSE) {
          $data['project_data'] = $this->project_model->get_project($id); 
          $data['main_view'] = "projects/edit";
          $this->load->view('layouts/main',$data);
           
        }else{

            $data = array(
              'user_id' => $this->session->userdata('user_id'),
              'project_name' => $this->input->post('project_name'),
              'project_body' => $this->input->post('project_body')
            );
            if($this->project_model->edit_project($data,$id)){
                $this->session->set_flashdata('project_edit','Project Created Successfully');
                redirect('projects/index');
            }
        }
      }


      public function delete($id){
          
          $this->project_model->delete_project_tasks($id);
          $this->project_model->delete_project($id);
          $this->session->set_flashdata('project_delete','Project Deleted Successfully');
                redirect('projects/index');

      }











}	