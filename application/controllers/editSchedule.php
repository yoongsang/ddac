<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class EditSchedule extends CI_Controller{

    public function index() {

        $data['userName']= $this->session->userdata('username');
        $data['schedules'] =$this->getAll();
        $this->load->view('editSchedule', $data);
    }

    public function getAll(){
        $this->load->model('ship_schedules');
        $data['schedules'] = $this->ship_schedules->getAll();
        return $data['schedules'];


    }
    public function updateSchedule(){

        if(isset($_POST['update'])){
          $id = $this->input->post('id');
          $ship_name = $this->input->post('ship_name');
          $date_from = $this->input->post('date_from');
          $date_receive = $this->input->post('date_receive');
          $from = $this->input->post('from');
          $destination = $this->input->post('destination');
          $service_type = $this->input->post('service_type');
        $this->load->model('ship_schedules');
        $this->ship_schedules->updateSchedule($id,$ship_name,$date_from,$date_receive,$from,$destination,$service_type);
        $this->load->helper('url');
        redirect('adminSchedule');

}

if(isset($_POST['delete'])){
    $id = $this->input->post('id');
    $this->load->model('ship_schedules');
    $this->ship_schedules->deleteSchedule($id);

}

    }
}
?>
