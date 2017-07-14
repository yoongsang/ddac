<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class AdminEditAdmin extends CI_Controller{

    public function index() {

        $data['userName']= $this->session->userdata('username');
        $data['admins'] =$this->getAll();
        $this->load->view('adminEditAdmin', $data);
    }

    public function getAll(){
        $this->load->model('admin');
        $data['admins'] = $this->admin->getAll();
        return $data['admins'];


    }
    public function updateAdmin(){



if(isset($_POST['delete'])){
    $id = $this->input->post('id');
    $this->load->model('admin');
    $this->admin->deleteAdmin($id);
    $this->load->helper('url');
    redirect('adminEditAdmin');
}

    }
}
?>
