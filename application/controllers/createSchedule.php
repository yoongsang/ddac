<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CreateSchedule extends CI_Controller {

    public function index() {
            $data['userName']= $this->session->userdata('username');
            $this->load->view('inc/adminheader',$data);
            $this->load->view('createSchedule');
            $this->load->view('inc/footer');
    }
    public function addSchedule(){

       $ship_name = $this->input->post('ship_name');
       $date_from = $this->input->post('date_from');
       $date_receive = $this->input->post('date_receive');
       $from = $this->input->post('from');
       $destination = $this->input->post('destination');
       $service_type = $this->input->post('service_type');
       $this->load->model('schedules');
       $a = $this->schedules->addSchedule($ship_name,$date_from,$date_receive,$from,$destination,$service_type);
       if($a == true){
           $this->load->view('inc/adminheader');
           $this->load->view('passengerLoginPage');
           $this->load->view('inc/footer');
       }else{
           $this->index();
       }

    }

}

?>
