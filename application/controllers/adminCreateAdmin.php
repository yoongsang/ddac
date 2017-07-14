<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class AdminCreateAdmin extends CI_Controller{




    public function index() {


        $data['userName']= $this->session->userdata('username');
        $this->load->view('adminCreateAdmin',$data);

    }

    public function createAdmin(){

       $admin_username = $this->input->post('admin_username');
       $admin_password = $this->input->post('admin_password');
       $admin_name = $this->input->post('admin_name');
       $this->load->model('admin');
       $this->admin->addAdmin($admin_username,$admin_password,$admin_name);
       $this->index();
    }

}
?>
