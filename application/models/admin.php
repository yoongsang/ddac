<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Admin extends CI_Model {

    function getUser($username, $password) {

        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('admin_username', $username);
        $this->db->where('admin_password', MD5($password));
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row();
                $data['username1'] = $row->admin_username;
                $data['username'] = $row->admin_name;
                $data['id']= $row->ID;
            $this->session->set_userdata($data);
            echo "<script>
            alert('Login Successfully!');
            </script>";
            return $query->result();  //row

        }else{
             echo "<script>
            alert('Incorrect username or password!');
            </script>";
            return false;
        }
    }

    function getAll(){
      $this->db->select('*');
      $this->db->from('admin');
      $query = $this->db->get();

        return $query->result();


    }

    function addAdmin($admin_username,$admin_password,$admin_name) {
        $this->db->select('*');
        $this->db->where('admin_username',$admin_username);
        $this->db->from('admin');
        $query = $this->db->get();


        if ($query->num_rows() == 0) {

                $data = array('admin_username' => $admin_username, 'admin_password' => MD5($admin_password), 'admin_name' => $admin_name);
                $this->db->insert('admin', $data);
                echo "<script>
            alert('New admin added!');
            </script>";
            }
        else {

            echo "<script>
            alert('Username already exist!');
            </script>";
        }

    }

    function deleteAdmin($id) {
        $this->db->delete('admin', array('ID' => $id));

    }

}

?>
