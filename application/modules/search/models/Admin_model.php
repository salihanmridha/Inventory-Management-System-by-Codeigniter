<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function get_autocomplete_product($search_data) {
//        $this->db->select('*');
//        $this->db->like('product_name', $search_data);
//
//        return $this->db->get('product', 10)->result();
        
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('unit','unit.unit_id = product.unit_id');
        $this->db->join('brand','brand.brand_id = product.brand_id');
        $this->db->join('style','style.style_id = product.style_id');
        $this->db->join('supplier','supplier.supplier_id = product.supplier_id');
        $this->db->like('product_name', $search_data);
        $this->db->or_like('product_code_no', $search_data);
        $this->db->or_like('style_name', $search_data);
        $this->db->or_like('unit_name', $search_data);
        $this->db->or_like('brand_name', $search_data);
        $result = $this->db->get();
        return $result->result_array();
    }
    public function get_autocomplete_supplier($search_data) {
//        $this->db->select('*');
//        $this->db->like('product_name', $search_data);
//
//        return $this->db->get('product', 10)->result();
        
        $this->db->select('*');
        $this->db->from('supplier');
        $this->db->like('supplier_name', $search_data);
        $result = $this->db->get();
        return $result->result_array();
    }
    
     public function get_all_product_supplier($search_data) {
//        $this->db->select('*');
//        $this->db->like('product_name', $search_data);
//
//        return $this->db->get('product', 10)->result();
        
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('unit','unit.unit_id = product.unit_id');
        $this->db->join('brand','brand.brand_id = product.brand_id');
        $this->db->join('style','style.style_id = product.style_id');
        $this->db->join('supplier','supplier.supplier_id = product.supplier_id');
        $this->db->like('product_name', $search_data);
        $this->db->or_like('style_name', $search_data);
        $this->db->or_like('unit_name', $search_data);
        $this->db->or_like('brand_name', $search_data);
        $result = $this->db->get();
        return $result->result_array();
    }
    
     function get_supplier_id($search_data) {
        $this->db->select('supplier_id');
        $this->db->from('supplier');
        $this->db->like('supplier_name', $search_data);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->supplier_id;
    }
    
   
    
     public function get_all_product_against_supplier($supplier_id) {
//        $this->db->select('*');
//        $this->db->like('product_name', $search_data);
//
//        return $this->db->get('product', 10)->result();
        
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('unit','unit.unit_id = product.unit_id');
        $this->db->join('brand','brand.brand_id = product.brand_id');
        $this->db->join('style','style.style_id = product.style_id');
        $this->db->join('supplier','supplier.supplier_id = product.supplier_id');
        $this->db->where('supplier.supplier_id',$supplier_id);
        $result = $this->db->get();
        return $result->result_array();
    }

}
