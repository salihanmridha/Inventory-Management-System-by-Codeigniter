<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function login($mail, $pass) {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $mail);
        $this->db->where('password', $pass);
        $this->db->where('type', 1);
        $result = $this->db->get();
        return $result->result_array();
    }
    
      function check_email_pass($mail,$pass)
    {
        $query = $this->db->get_where('user', array('email' => $mail, 'password' => $pass));
        return $query->result();
    }

}
