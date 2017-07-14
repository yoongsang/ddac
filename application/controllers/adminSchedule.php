<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class AdminSchedule extends CI_Controller{

    public function index() {

        $data['userName']= $this->session->userdata('username');
        $data['schedules'] = $this->getAll();
        $this->load->view('adminSchedule', $data);

    }

    public function getAll(){
        $this->load->model('ship_schedules');
        $data['schedules'] = $this->ship_schedules->getAll();
        return $data['schedules'];


    }
}
?>
