<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Adminpage extends CI_Controller {

    public function index() {
        $this->load->view('inc/header');
        $this->load->view('adminLoginPage');
        $this->load->view('inc/footer');
    }

    public function login() {
        $user = $this->input->post('usernameLogin');
        $pass = $this->input->post('passwordLogin');
        $this->load->model('admin');
        $result = $this->admin->getUser($user,$pass);

        if($result!=null){

            $data['userName']= $this->session->userdata('username');
            $this->load->view('inc/adminheader',$data);
            $this->load->view('inc/footer');
        }
        else{

            $this->load->view('inc/header');
            $this->load->view('adminLoginPage');
            $this->load->view('inc/footer');
        }

    }

}

?>
