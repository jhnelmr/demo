<?php

class User extends CI_Controller {

    function __construct (){
parent::__construct();
$this->load->model('UsersModel');
    }
//adding the data lagay mo sa controller
function add(){
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ItemName = $this->input->post('ItemName');
            $ItemDetails = $this->input->post('ItemDetails');
            $data = array(
                'ItemName' => $ItemName,
                'ItemDetails' => $ItemDetails
            );

            $status = $this->UsersModel->InsertItem($data);
            if ($status == true) {
                $this->session->set_flashdata('success', 'Success');
                redirect(base_url('User/index')); // Redirect to the correct route
            } else {
                $this->session->set_flashdata('error', 'Error');
            }
        } else 
        {
            $this->load->view('user/add');
        }
}

//list of the data

function index() {

        $data['item']= $this->UsersModel->getItem();
$this->load->view('User/index',$data);
       
    }



//function in editing data
            function edit($id){

                $data['user'] = $this->UsersModel->getUser($id);
                $data['id']= $id;
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $ItemName = $this->input->post('ItemName');
                        $ItemDetails = $this->input->post('ItemDetails');
                        $data = array(
                            'ItemName' => $ItemName,
                            'ItemDetails' => $ItemDetails
                        );

                        $status = $this->UsersModel->updateUser($data, $id);
                        if ($status == true) {
                            $this->session->set_flashdata('success', 'Success');
                            // redirect(base_url('User/edit/' .$id)); // Redirect to the correct route
                            
                            redirect(base_url('User/index'));
                            
                        } else {
                            $this->session->set_flashdata('error', 'Error');
                            $this->load->view('user/edit_user');
                        }
            }


            $this->load->view('user/edit', $data);

            }
//delete function
            function delete($id){
                if (is_numeric($id)) {
                 $status =  $this->UsersModel->deleteUser($id);
                     if ($status == true) {
                            $this->session->set_flashdata('success', 'Success');
                            // redirect(base_url('User/edit/' .$id)); // Redirect to the correct route
                            
                            redirect(base_url('User/index'));
                            
                        } else {
                            $this->session->set_flashdata('error', 'Error');
                            $this->load->view('user/index');
                        }
                }
            }







}