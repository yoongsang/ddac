<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class AdminLogout extends CI_Controller{
    
    public function index() {
        
       $this->session->sess_destroy();
       $this->load->helper('url');
       redirect('main');
 
        
    }
    
    
}
?>
