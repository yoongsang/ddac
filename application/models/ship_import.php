<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Ship_import extends CI_Model {



    function addImport($id,$container_code,$container_description,$status) {


                $data = array('container_number' => $container_code, 'container_description' => $container_description,'ship_status' =>$status,'schedule_id'=>$id);
                $this->db->insert('ship_import', $data);
                echo "<script>
            alert('New schedule added!');
            </script>";



    }

    function getAll() {

        $this->db->select('*');
        $this->db->from('ship_schedules');

        $query = $this->db->get();

        if (isset($query)) {
            return $query->result();  //row
        }
    }

    function updateImport($id,$dateTime,$status) {

        $data = array('actual_date' => $dateTime,'ship_status' =>$status);
        $this->db->where('ID', $id);
        $this->db->update('ship_import', $data);


    }

    function getAllServices() {

        $this->db->select('ship_import.*,ship_schedules.*');
        $this->db->from('ship_import');
        $this->db->join('ship_schedules','ship_schedules.ID = ship_import.schedule_id');

        $query = $this->db->get();

        if (isset($query)) {
            return $query->result();  //row
        }

    }
    function getAllShippingServices() {
        $status = "Shipping";
        $this->db->select('ship_import.*,ship_schedules.*');
        $this->db->from('ship_import');
        $this->db->where('ship_status',$status);
        $this->db->join('ship_schedules','ship_schedules.ID = ship_import.schedule_id');

        $query = $this->db->get();

        if (isset($query)) {
            return $query->result();  //row
        }

    }





}


?>
