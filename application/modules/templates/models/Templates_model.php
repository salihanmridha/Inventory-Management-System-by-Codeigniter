<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Templates_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

   function get_user_id($user_email) {
        $this->db->select('user_id');
        $this->db->from('user');
        $this->db->where('email', $user_email);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->user_id;
    }
    
    function get_previledge_info($user_id) {
        $this->db->select('*');
        $this->db->from('user_previledge');
        $this->db->where('user_id', $user_id);
        $result = $this->db->get();
        return $result->result_array();
    }

}
