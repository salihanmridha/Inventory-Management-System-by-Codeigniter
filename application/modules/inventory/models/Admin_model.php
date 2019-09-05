<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model
{
    
    
    function __construct() 
    {
        parent::__construct();
    }
    
    function get_inventory_info() {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('unconfirmed_import','unconfirmed_import.product_id = product.product_id');
        //$this->db->join('supplier_packing','supplier_packing.product_id = product.product_id');
       // $this->db->join('sales','sales.distribution_product_id = distribution_packing.distribution_packing_id');
        $this->db->order_by("unconfirmed_import.unconfirmed_import_id", "desc");
        $result = $this->db->get();
        return $result->result_array();
    }
    
}