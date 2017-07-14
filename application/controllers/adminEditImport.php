<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class AdminEditImport extends CI_Controller{

    public function index() {

        $data['schedules'] = $this->getAllShippingServices();
        $data['userName']= $this->session->userdata('username');
        $this->load->view('adminEditImport',$data);


    }
    public function getAllShippingServices(){
      $this->load->model('ship_import');
      $data['schedules'] = $this->ship_import->getAllShippingServices();
      return $data['schedules'];
}
    public function confirm(){
      $id = $this->input->post('id');
      $this->load->helper('date');
      $dateTime = date('Y-m-d H:i:s',now());
      $status = "Received";
      $this->load->model('ship_import');
      $this->ship_import->updateImport($id,$dateTime,$status);
      redirect('adminImport');


  }



}
?>
