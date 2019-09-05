<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

   
    function get_customer_info() {
        $this->db->select('*');
        $this->db->from('customer');
        $result = $this->db->get();
        return $result->result_array();
    }

   function get_business_type_for_return($customer_id) {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('sales','sales.product_id = product.product_id');
         $this->db->where('sales.customer_id',$customer_id);
        $result = $this->db->get();
        return $result->result_array();
    }
    
    function get_customer_info_specific($customer_id) {
        $this->db->select('*');
        $this->db->from('customer');
         $this->db->where('customer_id',$customer_id);
        $result = $this->db->get();
        return $result->result_array();
    }
    function get_product_specific($product_id) {
        $this->db->select('*');
        $this->db->from('product');
         $this->db->where('product_id',$product_id);
        $result = $this->db->get();
        return $result->result_array();
    }
    
    function get_sales_quantity($customer_id,$product_id) {
        $this->db->select("SUM(sale_quantity) as total_quantity");
        $this->db->from('sales');
        $this->db->where('customer_id',$customer_id);
        $this->db->where('product_id',$product_id);
         $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_quantity;
    }
    
    function get_return_quantity($customer_id,$product_id) {
        $this->db->select("SUM(return_qty) as total_quantity");
        $this->db->from('sales_return');
        $this->db->where('customer_id',$customer_id);
        $this->db->where('product_id',$product_id);
         $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_quantity;
    }
  function insert_return($data) {
        $this->db->insert('sales_return', $data);
        return $this->db->insert_id();
    }
    
    function get_qty_without_return($product_id) {
        $this->db->select('quantity');
        $this->db->from('unconfirmed_import');
         $this->db->where('product_id',$product_id);
       $result = $this->db->get();
        $ret = $result->row();
        return $ret->quantity;
    }
    
    function update_quantity($data2,$product_id) {
       $this->db->where('product_id', $product_id);
       $this->db->update('unconfirmed_import',$data2);
       return;
    }
    
    function get_product_price($product_id) {
        $this->db->select('product_price');
        $this->db->from('product');
         $this->db->where('product_id',$product_id);
       $result = $this->db->get();
        $ret = $result->row();
        return $ret->product_price;
    }
}
