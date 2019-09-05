<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model
{
    
    
    function __construct() 
    {
        parent::__construct();
    }
    
    function get_customer_payment_info() {
        $this->db->select('*');
        $this->db->from('customer');
        $this->db->join('customer_total_amount','customer_total_amount.customer_id= customer.customer_id');
        $this->db->order_by("customer.customer_id", "desc");
        $result = $this->db->get();
        return $result->result_array();
    }
     function print_customer_payment_info($customer_payment_id) {
        $this->db->select('*');
        $this->db->from('customer');
        $this->db->join('customer_total_amount','customer_total_amount.customer_id= customer.customer_id');
        $this->db->where('customer.customer_id', $customer_payment_id);
        $result = $this->db->get();
        return $result->result_array();
    }
    
}