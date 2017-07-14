<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Ship_schedules extends CI_Model {



    function addSchedule($ship_name,$date_from,$date_receive,$from,$destination,$service_type) {
        $this->db->select('*');
        $this->db->where('date_out',$date_from);
        $this->db->where('date_receive',$date_receive);
        $this->db->where('location_from',$from);
        $this->db->where('destination',$destination);
        $this->db->where('service_type',$service_type);
        $this->db->from('ship_schedules');
        $query = $this->db->get();
        if ($query->num_rows() == 0) {

                $data = array('ship_name' => $ship_name, 'date_out' => $date_from, 'date_receive' => $date_receive,'location_from' =>$from,'destination' =>$destination,'service_type' =>$service_type);
                $this->db->insert('ship_schedules', $data);
                echo "<script>
            alert('New schedule added!');
            </script>";

        } else {

            echo "<script>
            alert('Schedule already exist!');
            </script>";
        }

    }

    function getAll() {

        $this->db->select('*');
        $this->db->from('ship_schedules');

        $query = $this->db->get();

        if (isset($query)) {
            return $query->result();  //row
        }
    }

    function updateSchedule($id,$ship_name,$date_from,$date_receive,$from,$destination,$service_type) {

                       $data = array('ship_name' => $ship_name, 'date_out' => $date_from, 'date_receive' => $date_receive,'location_from' =>$from,'destination' =>$destination,'service_type' =>$service_type);

        $this->db->where('ID', $id);
        $this->db->update('ship_schedules', $data);


    }

    function deleteSchedule($id) {
        $this->db->delete('ship_schedules', array('ID' => $id));

    }

}

?>
