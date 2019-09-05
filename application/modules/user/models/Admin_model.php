<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

     function check_email($email)
    {
        $query = $this->db->get_where('user', array('email' => $email));
        return $query->result();
    }
    
    function insert_user($data) {
        $this->db->insert('user', $data);
        return $this->db->insert_id();
    }
    function get_user_info() {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('type !=',1);
        $result = $this->db->get();
        return $result->result_array();
    }
    
    function get_specific_user_info($user_id) {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('user_previledge','user_previledge.user_id=user.user_id');
        $this->db->where('user.user_id',$user_id);
        $result = $this->db->get();
        return $result->result_array();
    }
    
     function insert_previledge($data) {
        $this->db->insert('user_previledge', $data);
        return $this->db->insert_id();
    }

}
