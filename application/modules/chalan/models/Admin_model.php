<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model
{
    
    
    function __construct() 
    {
        parent::__construct();
    }
    
    function get_invoice_info() {
        $this->db->select('*');
        $this->db->from('sales_invoice');
        $this->db->order_by("sales_invoice_id", "desc");
        $result = $this->db->get();
        return $result->result_array();
    }
    function get_invoice_view_info($sales_invoice_id) {
        $this->db->select('*');
        $this->db->from('sales_invoice');
        $this->db->join('sales','sales.sales_confirm_id = sales_invoice.sales_confirm_id');
        $this->db->join('unconfirmed_import','unconfirmed_import.import_code_no = sales.import_code_no');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->join('distribution_packing','distribution_packing.product_id = product.product_id');
        $this->db->join('supplier_packing','supplier_packing.product_id = product.product_id');
        $this->db->join('unit','unit.unit_id = product.unit_id');
        $this->db->where("sales_invoice.sales_invoice_id",$sales_invoice_id );
        $result = $this->db->get();
        return $result->result_array();
    }
    function get_sales_invoice_no($sales_invoice_id) {
        $this->db->select('sales_invoice_no');
        $this->db->from('sales_invoice');
        $this->db->where('sales_invoice_id', $sales_invoice_id);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->sales_invoice_no;
    }
    function get_sales_invoice_date($sales_invoice_id) {
        $this->db->select('sales_invoice_date');
        $this->db->from('sales_invoice');
        $this->db->where('sales_invoice_id', $sales_invoice_id);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->sales_invoice_date;
    }
    function get_customer($sales_invoice_id) {
        $this->db->select('*');
        $this->db->from('sales_invoice');
        $this->db->join('sales','sales.sales_confirm_id = sales_invoice.sales_confirm_id');
        $this->db->join('customer','customer.customer_id = sales.customer_id');
        $this->db->limit(1);
        $this->db->where("sales_invoice.sales_invoice_id",$sales_invoice_id );
        $result = $this->db->get();
        return $result->result_array();
    }
    function get_grand_total_quantity($sales_invoice_id) {
        $this->db->select_sum('sale_quantity');
        $this->db->from('sales');
        $this->db->join('sales_invoice','sales_invoice.sales_confirm_id = sales.sales_confirm_id');
        $this->db->where('sales_invoice.sales_invoice_id',$sales_invoice_id);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->sale_quantity;
       
    }
    
    function get_chalan_no($sales_invoice_id) {
        $this->db->select('import_batch_no');
        $this->db->from('import_invoice');
        $this->db->join('unconfirmed_import','unconfirmed_import.import_id = import_invoice.import_id');
        $this->db->join('sales','sales.import_code_no = unconfirmed_import.import_code_no');
        $this->db->join('sales_invoice','sales_invoice.sales_confirm_id = sales.sales_confirm_id');
        $this->db->where('sales_invoice_id', $sales_invoice_id);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->import_batch_no;
    }
    function get_chalan_date($sales_invoice_id) {
        $this->db->select(' 	import_invoice_date');
        $this->db->from('import_invoice');
        $this->db->join('unconfirmed_import','unconfirmed_import.import_id = import_invoice.import_id');
        $this->db->join('sales','sales.import_code_no = unconfirmed_import.import_code_no');
        $this->db->join('sales_invoice','sales_invoice.sales_confirm_id = sales.sales_confirm_id');
        $this->db->where('sales_invoice_id', $sales_invoice_id);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret-> 	import_invoice_date;
    }
    
}