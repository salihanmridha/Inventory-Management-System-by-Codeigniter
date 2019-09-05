<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model
{
    
    
    function __construct() 
    {
        parent::__construct();
    }
    
    function get_ledger_info() {
        $this->db->select('*');
        $this->db->from('sales');
        $this->db->join('unconfirmed_import','unconfirmed_import.import_code_no = sales.import_code_no');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->join('style','style.style_id = product.style_id');
        $this->db->order_by('sales.sales_id',"desc" );
        $result = $this->db->get();
        return $result->result_array();
    }
    
}