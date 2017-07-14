<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Main extends CI_Controller {

    public function index() {
        $this->load->view('inc/header');
        $this->load->view('adminLoginPage');
        $this->load->view('inc/footer');
    }

    public function getSelect() {
        //Get the value from the form.
        $a = "Administrator";
        $b = "Lecture";
        $c = "Student";
        $d = "Invigilator";
        $role = $this->input->post('roleSelect');


        if ($role == "Administrator") {
             $this->load->view('inc/header');
            $this->load->view('adminLoginPage');
             $this->load->view('inc/footer');

        } else if ($role == "Lecturer") {
            $this->load->view('inc/header');
            $this->load->view('lecturerLoginPage');
             $this->load->view('inc/footer');

        } else if ($role == "Student") {
            $this->load->view('inc/header');
            $this->load->view('studentLoginPage');
             $this->load->view('inc/footer');
        } else {
            $this->load->view('inc/header');
            $this->load->view('invigilatorLoginPage');
             $this->load->view('inc/footer');
        }
    }
}

?>
