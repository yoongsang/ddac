<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class AdminAll extends CI_Controller{

    public function index() {

        $data['userName']= $this->session->userdata('username');
        $data['admins'] = $this->getAll();
        $this->load->view('adminAll', $data);

    }

    public function getAll(){
        $this->load->model('admin');
        $data['admins'] = $this->admin->getAll();
        return $data['admins'];


    }
}
?>
