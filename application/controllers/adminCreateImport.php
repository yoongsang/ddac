<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AdminCreateImport extends CI_Controller {

    public function index() {
            $data['userName']= $this->session->userdata('username');
            $data['schedules']=$this->getAll();
            $this->load->view('inc/adminheader',$data);
            $this->load->view('adminCreateImport',$data);
            $this->load->view('inc/footer');
    }
    public function addImport(){

       $id = $this->input->post('id');
       $container_code = $this->input->post('container_code');
       $container_description = $this->input->post('container_description');
       $status = "Shipping";
       $this->load->model('ship_import');
       $this->ship_import->addImport($id,$container_code,$container_description,$status);


    }

    public function getAll(){
      $this->load->model('ship_schedules');
      $data['schedules']=$this->ship_schedules->getAll();
      return $data['schedules'];
    }

}

?>
