<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class AdminImport extends CI_Controller{

    public function index() {

        $data['userName']= $this->session->userdata('username');
        $data['services'] = $this->getAllServices();
        $this->load->view('adminImport', $data);

    }

    public function getAllServices(){
        $this->load->model('ship_import');
        $data['services'] = $this->ship_import->getAllServices();
        return $data['services'];


    }
}
?>
