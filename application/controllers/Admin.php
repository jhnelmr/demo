<?php

class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel');
    }


    function add(){
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $UserEmail = $this->input->post('UserEmail');
        $password = $this->input->post('password');
        $data = array (
            "UserEmail" => $UserEmail,
            "password" => $password,
        );

        $status = $this->AdminModel->InsertUser($data);
        if($status ==true){
            $this->session->set_flashdata('success','success');
            
            redirect(base_url('admin/add'));
            
        }
        else
        {
            $this->session->set_flashdata('error', 'error');
            
        }

    }
    else
    {

        $this->load->view('admin/add_user');
    }
    
    
    
        //load view
    }
}