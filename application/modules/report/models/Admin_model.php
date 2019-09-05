<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model
{


    function __construct()
    {
        parent::__construct();
    }

    //  Import/Purchase Report Start

    function get_supplier()
    {
        $this->db->select('*');
        $this->db->from('supplier');
        $this->db->order_by('supplier_id',"desc");
        $result = $this->db->get();
        return $result->result_array();
    }

     function get_product()
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->order_by('product_id',"desc");
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_import_supplier_monthly_report($month,$year,$supplier_id) {
        $this->db->select('*');
        $this->db->from('unconfirmed_import');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->join('brand','brand.brand_id = product.brand_id');
        $this->db->join('style','style.style_id = product.style_id');
        $this->db->join('supplier_packing','supplier_packing.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.import_monthly',$month);
        $this->db->where('unconfirmed_import.import_yearly',$year);
        $this->db->where('unconfirmed_import.supplier_id',$supplier_id);
        $result = $this->db->get();
        return $result->result_array();
    }
    function get_import_supplier_monthly_report_grand_total($month,$year,$supplier_id) {
        $this->db->select("SUM(quantity* cost_price) as total_price");
        $this->db->from('unconfirmed_import');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.import_monthly',$month);
        $this->db->where('unconfirmed_import.import_yearly',$year);
        $this->db->where('unconfirmed_import.supplier_id',$supplier_id);
         $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }
    function get_import_supplier_monthly_report_grand_qty($month,$year,$supplier_id) {
        $this->db->select("SUM(quantity) as total_qty");
        $this->db->from('unconfirmed_import');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.import_monthly',$month);
        $this->db->where('unconfirmed_import.import_yearly',$year);
        $this->db->where('unconfirmed_import.supplier_id',$supplier_id);
         $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_qty;
    }

    function get_supplier_monthly_report($month,$year,$supplier_id) {
        $this->db->select('*');
        $this->db->from('unconfirmed_import');
        $this->db->join('supplier','supplier.supplier_id = unconfirmed_import.supplier_id');
        $this->db->where('unconfirmed_import.import_monthly',$month);
        $this->db->where('unconfirmed_import.import_yearly',$year);
        $this->db->where('unconfirmed_import.supplier_id',$supplier_id);
        $this->db->limit(1);
        $result = $this->db->get();
        return $result->result_array();
    }


    function get_import_supplier_yearly_report($year,$supplier_id) {
        $this->db->select('*');
        $this->db->from('unconfirmed_import');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->join('brand','brand.brand_id = product.brand_id');
        $this->db->join('style','style.style_id = product.style_id');
        $this->db->join('supplier_packing','supplier_packing.product_id = unconfirmed_import.product_id');
         $this->db->where('unconfirmed_import.import_yearly',$year);
        $this->db->where('unconfirmed_import.supplier_id',$supplier_id);
        $result = $this->db->get();
        return $result->result_array();
    }
    function get_import_supplier_yearly_report_grand_total($year,$supplier_id) {
        $this->db->select("SUM(quantity* cost_price) as total_price");
        $this->db->from('unconfirmed_import');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.import_yearly',$year);
        $this->db->where('unconfirmed_import.supplier_id',$supplier_id);
         $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }
    function get_import_supplier_yearly_report_grand_qty($year,$supplier_id) {
        $this->db->select("SUM(quantity) as total_qty");
        $this->db->from('unconfirmed_import');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.import_yearly',$year);
        $this->db->where('unconfirmed_import.supplier_id',$supplier_id);
         $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_qty;
    }

    function get_supplier_yearly_report($year,$supplier_id) {
        $this->db->select('*');
        $this->db->from('unconfirmed_import');
        $this->db->join('supplier','supplier.supplier_id = unconfirmed_import.supplier_id');
        $this->db->where('unconfirmed_import.import_yearly',$year);
        $this->db->where('unconfirmed_import.supplier_id',$supplier_id);
        $this->db->limit(1);
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_import_supplier_custom_report($from,$to,$supplier_id) {
        $this->db->select('*');
        $this->db->from('unconfirmed_import');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->join('brand','brand.brand_id = product.brand_id');
        $this->db->join('style','style.style_id = product.style_id');
        $this->db->join('supplier_packing','supplier_packing.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.supplier_id',$supplier_id);
        $this->db->where('unconfirmed_import.import_date <=',$to);
        $this->db->where('unconfirmed_import.import_date >=',$from);
        $result = $this->db->get();
        return $result->result_array();
    }
    function get_import_supplier_custom_report_grand_total($from,$to,$supplier_id) {
        $this->db->select("SUM(quantity* cost_price) as total_price");
        $this->db->from('unconfirmed_import');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.supplier_id',$supplier_id);
        $this->db->where('unconfirmed_import.import_date <=',$to);
        $this->db->where('unconfirmed_import.import_date >=',$from);
         $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }
    function get_import_supplier_custom_report_grand_qty($from,$to,$supplier_id) {
        $this->db->select("SUM(quantity) as total_qty");
        $this->db->from('unconfirmed_import');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.supplier_id',$supplier_id);
        $this->db->where('unconfirmed_import.import_date <=',$to);
        $this->db->where('unconfirmed_import.import_date >=',$from);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_qty;
    }

    function get_supplier_custom_report($from,$to,$supplier_id) {
        $this->db->select('*');
        $this->db->from('unconfirmed_import');
        $this->db->join('supplier','supplier.supplier_id = unconfirmed_import.supplier_id');
        $this->db->where('unconfirmed_import.supplier_id',$supplier_id);
        $this->db->where('unconfirmed_import.import_date <=',$to);
        $this->db->where('unconfirmed_import.import_date >=',$from);
        $this->db->limit(1);
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_import_product_monthly_report($month,$year,$product_id) {
        $this->db->select('*');
        $this->db->from('unconfirmed_import');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->join('brand','brand.brand_id = product.brand_id');
        $this->db->join('style','style.style_id = product.style_id');
        $this->db->join('supplier_packing','supplier_packing.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.import_monthly',$month);
        $this->db->where('unconfirmed_import.import_yearly',$year);
        $this->db->where('unconfirmed_import.product_id',$product_id);
        $result = $this->db->get();
        return $result->result_array();
    }
    function get_import_product_monthly_report_grand_total($month,$year,$product_id) {
        $this->db->select("SUM(quantity* cost_price) as total_price");
        $this->db->from('unconfirmed_import');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.import_monthly',$month);
        $this->db->where('unconfirmed_import.import_yearly',$year);
        $this->db->where('unconfirmed_import.product_id',$product_id);
         $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }

    function get_import_product_monthly_report_grand_qty($month,$year,$product_id) {
        $this->db->select("SUM(quantity) as total_qty");
        $this->db->from('unconfirmed_import');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.import_monthly',$month);
        $this->db->where('unconfirmed_import.import_yearly',$year);
        $this->db->where('unconfirmed_import.product_id',$product_id);
         $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_qty;
    }

    function get_product_monthly_report($month,$year,$product_id) {
        $this->db->select('*');
        $this->db->from('unconfirmed_import');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.import_monthly',$month);
        $this->db->where('unconfirmed_import.import_yearly',$year);
        $this->db->where('unconfirmed_import.product_id',$product_id);
        $this->db->limit(1);
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_import_product_yearly_report($year,$product_id) {
        $this->db->select('*');
        $this->db->from('unconfirmed_import');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->join('brand','brand.brand_id = product.brand_id');
        $this->db->join('style','style.style_id = product.style_id');
        $this->db->join('supplier_packing','supplier_packing.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.import_yearly',$year);
        $this->db->where('unconfirmed_import.product_id',$product_id);
        $result = $this->db->get();
        return $result->result_array();
    }
    function get_import_product_yearly_report_grand_total($year,$product_id) {
        $this->db->select("SUM(quantity* cost_price) as total_price");
        $this->db->from('unconfirmed_import');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.import_yearly',$year);
        $this->db->where('unconfirmed_import.product_id',$product_id);
         $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }

    function get_import_product_yearly_report_grand_qty($year,$product_id) {
        $this->db->select("SUM(quantity) as total_qty");
        $this->db->from('unconfirmed_import');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.import_yearly',$year);
        $this->db->where('unconfirmed_import.product_id',$product_id);
         $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_qty;
    }

    function get_product_yearly_report($year,$product_id) {
        $this->db->select('*');
        $this->db->from('unconfirmed_import');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.import_yearly',$year);
        $this->db->where('unconfirmed_import.product_id',$product_id);
        $this->db->limit(1);
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_import_product_custom_report($from,$to,$product_id) {
        $this->db->select('*');
        $this->db->from('unconfirmed_import');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->join('brand','brand.brand_id = product.brand_id');
        $this->db->join('style','style.style_id = product.style_id');
        $this->db->join('supplier_packing','supplier_packing.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.product_id',$product_id);
        $this->db->where('unconfirmed_import.import_date <=',$to);
        $this->db->where('unconfirmed_import.import_date >=',$from);
        $result = $this->db->get();
        return $result->result_array();
    }
    function get_import_product_custom_report_grand_total($from,$to,$product_id) {
        $this->db->select("SUM(quantity* cost_price) as total_price");
        $this->db->from('unconfirmed_import');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.product_id',$product_id);
        $this->db->where('unconfirmed_import.import_date <=',$to);
        $this->db->where('unconfirmed_import.import_date >=',$from);
         $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }
    function get_import_product_custom_report_grand_qty($from,$to,$product_id) {
        $this->db->select("SUM(quantity) as total_qty");
        $this->db->from('unconfirmed_import');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.product_id',$product_id);
        $this->db->where('unconfirmed_import.import_date <=',$to);
        $this->db->where('unconfirmed_import.import_date >=',$from);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_qty;
    }

    function get_product_custom_report($from,$to,$product_id) {
        $this->db->select('*');
        $this->db->from('unconfirmed_import');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.product_id',$product_id);
        $this->db->where('unconfirmed_import.import_date <=',$to);
        $this->db->where('unconfirmed_import.import_date >=',$from);
        $this->db->limit(1);
        $result = $this->db->get();
        return $result->result_array();
    }


    function get_all_import_product_yearly_report($year) {
        $this->db->select('*');
        $this->db->from('unconfirmed_import');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->join('brand','brand.brand_id = product.brand_id');
        $this->db->join('style','style.style_id = product.style_id');
        $this->db->join('supplier_packing','supplier_packing.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.import_yearly',$year);
        $result = $this->db->get();
        return $result->result_array();
    }
    function get_all_import_product_yearly_report_grand_total($year) {
        $this->db->select("SUM(quantity* cost_price) as total_price");
        $this->db->from('unconfirmed_import');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.import_yearly',$year);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }

    function get_all_import_product_yearly_report_grand_qty($year) {
        $this->db->select("SUM(quantity) as total_qty");
        $this->db->from('unconfirmed_import');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.import_yearly',$year);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_qty;
    }

    //add by tonmoy
    //custom report
    function get_all_import_product_custom_report($from, $to){
        $this->db->select('*');
        $this->db->from('unconfirmed_import');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->join('brand','brand.brand_id = product.brand_id');
        $this->db->join('style','style.style_id = product.style_id');
        $this->db->join('supplier_packing','supplier_packing.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.import_date <=', $to);
        $this->db->where('unconfirmed_import.import_date >=', $from);
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_all_import_product_custom_report_grand_total($from, $to){
        $this->db->select("SUM(quantity * cost_price) as total_price");
        $this->db->from('unconfirmed_import');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.import_date >=', $from);
        $this->db->where('unconfirmed_import.import_date <=', $to);
        $result = $this->db->get();
        $ret = $result->row();
        $totalPrice = $ret->total_price;
        if ($totalPrice < 0) {
          return abs($totalPrice);
        }else {
          return $totalPrice;
        }
    }

    function get_all_import_product_custom_report_grand_qty($from, $to){
        $this->db->select("SUM(quantity) as total_qty");
        $this->db->from('unconfirmed_import');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.import_date <=', $to);
        $this->db->where('unconfirmed_import.import_date >=', $from);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_qty;
    }

    //monthly report
    function get_all_import_product_month_report($month, $year){
        $this->db->select('*');
        $this->db->from('unconfirmed_import');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->join('brand','brand.brand_id = product.brand_id');
        $this->db->join('style','style.style_id = product.style_id');
        $this->db->join('supplier_packing','supplier_packing.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.import_monthly', $month);
        $this->db->where('unconfirmed_import.import_yearly', $year);
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_all_import_product_month_report_grand_total($month, $year){
        $this->db->select("SUM(quantity * cost_price) as total_price");
        $this->db->from('unconfirmed_import');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.import_monthly', $month);
        $this->db->where('unconfirmed_import.import_yearly', $year);
        $result = $this->db->get();
        $ret = $result->row();
        $totalPrice = $ret->total_price;
        if ($totalPrice < 0) {
          return abs($totalPrice);
        }else {
          return $totalPrice;
        }
    }

    function get_all_import_product_month_report_grand_qty($month, $year){
        $this->db->select("SUM(quantity) as total_qty");
        $this->db->from('unconfirmed_import');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.import_monthly', $month);
        $this->db->where('unconfirmed_import.import_yearly', $year);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_qty;
    }

//  Import/Purchase Report End

// Sales Report Start

    function get_sales_product_wise_monthly_report($product_id,$month,$year) {
        $this->db->select('*');
        $this->db->from('sales');
        $this->db->join('unconfirmed_import','unconfirmed_import.import_code_no = sales.import_code_no');
        $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.product_id',$product_id);
        $this->db->where('sales_report.sales_report_month',$month);
        $this->db->where('sales_report.sales_report_year',$year);
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_sales_product_wise_monthly_report_grand_total($month,$year,$product_id) {
        $this->db->select("SUM(sale_quantity_price) as total_price");
        $this->db->from('sales');
        $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
        $this->db->join('unconfirmed_import','unconfirmed_import.import_code_no = sales.import_code_no');
        $this->db->where('unconfirmed_import.product_id',$product_id);
        $this->db->where('sales_report.sales_report_month',$month);
        $this->db->where('sales_report.sales_report_year',$year);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }

//    function get_sales_product_wise_monthly_report_grand_qty($month,$year,$product_id) {
//        $this->db->select("SUM(sale_quantity) as total_qty");
//        $this->db->from('sales');
//        $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
//        $this->db->join('unconfirmed_import','unconfirmed_import.import_code_no = sales.import_code_no');
//        $this->db->where('unconfirmed_import.product_id',$product_id);
//        $this->db->where('sales_report.sales_report_month',$month);
//        $this->db->where('sales_report.sales_report_year',$year);
//        $result = $this->db->get();
//        $ret = $result->row();
//        return $ret->total_qty;
//    }

    function get_sales_product_wise_product_monthly_report($month,$year,$product_id) {
        $this->db->select('*');
        $this->db->from('sales');
        $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
        $this->db->join('unconfirmed_import','unconfirmed_import.import_code_no = sales.import_code_no');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->join('brand','brand.brand_id = product.brand_id');
        $this->db->join('unit','unit.unit_id = product.unit_id');
        $this->db->where('unconfirmed_import.product_id',$product_id);
        $this->db->where('sales_report.sales_report_month',$month);
        $this->db->where('sales_report.sales_report_year',$year);
        $this->db->limit(1);
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_sales_product_wise_yearly_report($product_id,$year) {
        $this->db->select('*');
        $this->db->from('sales');
        $this->db->join('unconfirmed_import','unconfirmed_import.import_code_no = sales.import_code_no');
        $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.product_id',$product_id);
        $this->db->where('sales_report.sales_report_year',$year);
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_sales_product_wise_yearly_report_grand_total($year,$product_id) {
        $this->db->select("SUM(sale_quantity_price) as total_price");
        $this->db->from('sales');
        $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
        $this->db->join('unconfirmed_import','unconfirmed_import.import_code_no = sales.import_code_no');
        $this->db->where('unconfirmed_import.product_id',$product_id);
        $this->db->where('sales_report.sales_report_year',$year);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }

    function get_sales_product_wise_product_yearly_report($year,$product_id) {
        $this->db->select('*');
        $this->db->from('sales');
        $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
        $this->db->join('unconfirmed_import','unconfirmed_import.import_code_no = sales.import_code_no');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->join('brand','brand.brand_id = product.brand_id');
        $this->db->join('unit','unit.unit_id = product.unit_id');
        $this->db->where('unconfirmed_import.product_id',$product_id);
        $this->db->where('sales_report.sales_report_year',$year);
        $this->db->limit(1);
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_sales_product_wise_custom_report($product_id,$from,$to) {
        $this->db->select('*');
        $this->db->from('sales');
        $this->db->join('unconfirmed_import','unconfirmed_import.import_code_no = sales.import_code_no');
        $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->where('unconfirmed_import.product_id',$product_id);
        $this->db->where('sales_report.sales_report_date <=',$to);
        $this->db->where('sales_report.sales_report_date >=',$from);
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_sales_product_wise_custom_report_grand_total($from,$to,$product_id) {
        $this->db->select("SUM(sale_quantity_price) as total_price");
        $this->db->from('sales');
        $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
        $this->db->join('unconfirmed_import','unconfirmed_import.import_code_no = sales.import_code_no');
        $this->db->where('unconfirmed_import.product_id',$product_id);
        $this->db->where('sales_report.sales_report_date <=',$to);
        $this->db->where('sales_report.sales_report_date >=',$from);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }

    function get_sales_product_wise_product_custom_report($from,$to,$product_id) {
        $this->db->select('*');
        $this->db->from('sales');
        $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
        $this->db->join('unconfirmed_import','unconfirmed_import.import_code_no = sales.import_code_no');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->join('brand','brand.brand_id = product.brand_id');
        $this->db->join('unit','unit.unit_id = product.unit_id');
        $this->db->where('unconfirmed_import.product_id',$product_id);
        $this->db->where('sales_report.sales_report_date <=',$to);
        $this->db->where('sales_report.sales_report_date >=',$from);
        $this->db->limit(1);
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_sales_invoice_wise_monthly_report($month,$year) {
        $this->db->select('*');
        $this->db->from('sales_invoice');
        $this->db->join('customer','customer.customer_id = sales_invoice.customer_id');
        $this->db->where('sales_invoice.sales_invoice_month',$month);
        $this->db->where('sales_invoice.sales_invoice_year',$year);
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_sales_invoice_wise_monthly_report_grand_total($month,$year) {
        $this->db->select("SUM(sales_total_price) as total_price");
        $this->db->from('sales_invoice');
        $this->db->where('sales_invoice.sales_invoice_month',$month);
        $this->db->where('sales_invoice.sales_invoice_year',$year);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }

    function get_sales_invoice_wise_yearly_report($year) {
        $this->db->select('*');
        $this->db->from('sales_invoice');
        $this->db->join('customer','customer.customer_id = sales_invoice.customer_id');
        $this->db->where('sales_invoice.sales_invoice_year',$year);
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_sales_invoice_wise_yearly_report_grand_total($year) {
        $this->db->select("SUM(sales_total_price) as total_price");
        $this->db->from('sales_invoice');
        $this->db->where('sales_invoice.sales_invoice_year',$year);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }

     function get_sales_invoice_wise_custom_report($from,$to) {
        $this->db->select('*');
        $this->db->from('sales_invoice');
        $this->db->join('customer','customer.customer_id = sales_invoice.customer_id');
        $this->db->where('sales_invoice.sales_invoice_date <=',$to);
        $this->db->where('sales_invoice.sales_invoice_date >=',$from);
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_sales_invoice_wise_custom_report_grand_total($from,$to) {
        $this->db->select("SUM(sales_total_price) as total_price");
        $this->db->from('sales_invoice');
        $this->db->where('sales_invoice.sales_invoice_date <=',$to);
        $this->db->where('sales_invoice.sales_invoice_date >=',$from);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }

    function get_sales_invoice_wise_details_monthly_report($month,$year) {
        $this->db->select('*');
        $this->db->from('sales_invoice');
        $this->db->join('customer','customer.customer_id = sales_invoice.customer_id');
        $this->db->where('sales_invoice.sales_invoice_month',$month);
        $this->db->where('sales_invoice.sales_invoice_year',$year);
        $result = $this->db->get();
        return $result->result_array();
    }

    //add by tonmoy
    function get_sales_supplier_wise_monthly_report($supplier_id,$month,$year) {
        $this->db->select('*');
        $this->db->from('sales');
        $this->db->join('unconfirmed_import','unconfirmed_import.import_code_no = sales.import_code_no');
        $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->join('supplier','supplier.supplier_id = unconfirmed_import.supplier_id');
        $this->db->where('unconfirmed_import.supplier_id',$supplier_id);
        $this->db->where('sales_report.sales_report_month',$month);
        $this->db->where('sales_report.sales_report_year',$year);
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_sales_supplier_wise_monthly_report_grand_total($month,$year,$supplier_id) {
       $this->db->select("SUM(sale_quantity_price) as total_price");
       $this->db->from('sales');
       $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
       $this->db->join('unconfirmed_import','unconfirmed_import.import_code_no = sales.import_code_no');
       $this->db->where('unconfirmed_import.supplier_id',$supplier_id);
       $this->db->where('sales_report.sales_report_month',$month);
       $this->db->where('sales_report.sales_report_year',$year);
       $result = $this->db->get();
       $ret = $result->row();
       return $ret->total_price;
   }

   function get_sales_supplier_wise_sales_monthly_report($month,$year,$supplier_id) {
        $this->db->select('*');
        $this->db->from('sales');
        $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
        $this->db->join('unconfirmed_import','unconfirmed_import.import_code_no = sales.import_code_no');
        $this->db->join('supplier','supplier.supplier_id = unconfirmed_import.supplier_id');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->join('brand','brand.brand_id = product.brand_id');
        $this->db->join('unit','unit.unit_id = product.unit_id');
        $this->db->where('unconfirmed_import.supplier_id',$supplier_id);
        $this->db->where('sales_report.sales_report_month',$month);
        $this->db->where('sales_report.sales_report_year',$year);
        $this->db->limit(1);
        $result = $this->db->get();
        return $result->result_array();
    }


    function get_sales_supplier_wise_yearly_report($supplier_id,$year) {
        $this->db->select('*');
        $this->db->from('sales');
        $this->db->join('unconfirmed_import','unconfirmed_import.import_code_no = sales.import_code_no');
        $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->join('supplier','supplier.supplier_id = unconfirmed_import.supplier_id');
        $this->db->where('unconfirmed_import.supplier_id',$supplier_id);
        $this->db->where('sales_report.sales_report_year',$year);
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_sales_supplier_wise_yearly_report_grand_total($year,$supplier_id) {
       $this->db->select("SUM(sale_quantity_price) as total_price");
       $this->db->from('sales');
       $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
       $this->db->join('unconfirmed_import','unconfirmed_import.import_code_no = sales.import_code_no');
       $this->db->where('unconfirmed_import.supplier_id',$supplier_id);
       $this->db->where('sales_report.sales_report_year',$year);
       $result = $this->db->get();
       $ret = $result->row();
       return $ret->total_price;
   }

   function get_sales_supplier_wise_sales_yearly_report($year,$supplier_id) {
        $this->db->select('*');
        $this->db->from('sales');
        $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
        $this->db->join('unconfirmed_import','unconfirmed_import.import_code_no = sales.import_code_no');
        $this->db->join('supplier','supplier.supplier_id = unconfirmed_import.supplier_id');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->join('brand','brand.brand_id = product.brand_id');
        $this->db->join('unit','unit.unit_id = product.unit_id');
        $this->db->where('unconfirmed_import.supplier_id',$supplier_id);
        $this->db->where('sales_report.sales_report_year',$year);
        $this->db->limit(1);
        $result = $this->db->get();
        return $result->result_array();
    }


    function get_sales_supplier_wise_custom_report($supplier_id,$from, $to) {
        $this->db->select('*');
        $this->db->from('sales');
        $this->db->join('unconfirmed_import','unconfirmed_import.import_code_no = sales.import_code_no');
        $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        //$this->db->join('sales_return','product.product_id = sales_return.product_id');
        $this->db->join('supplier','supplier.supplier_id = unconfirmed_import.supplier_id');
        $this->db->where('unconfirmed_import.supplier_id',$supplier_id);
        $this->db->where('sales_report.sales_report_date >=',$from);
        $this->db->where('sales_report.sales_report_date <=',$to);
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_sales_supplier_wise_custom_report_grand_total($from, $to,$supplier_id) {
       $this->db->select("SUM(sale_quantity_price) as total_price");
       $this->db->from('sales');
       $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
       $this->db->join('unconfirmed_import','unconfirmed_import.import_code_no = sales.import_code_no');
       $this->db->where('unconfirmed_import.supplier_id',$supplier_id);
       $this->db->where('sales_report.sales_report_date >=',$from);
       $this->db->where('sales_report.sales_report_date <=',$to);
       $result = $this->db->get();
       $ret = $result->row();
       return $ret->total_price;
   }

   function get_sales_supplier_wise_sales_custom_report($from, $to,$supplier_id) {
        $this->db->select('*');
        $this->db->from('sales');
        $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
        $this->db->join('unconfirmed_import','unconfirmed_import.import_code_no = sales.import_code_no');
        $this->db->join('supplier','supplier.supplier_id = unconfirmed_import.supplier_id');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->join('brand','brand.brand_id = product.brand_id');
        $this->db->join('unit','unit.unit_id = product.unit_id');
        $this->db->where('unconfirmed_import.supplier_id',$supplier_id);
        $this->db->where('sales_report.sales_report_date >=',$from);
        $this->db->where('sales_report.sales_report_date <=',$to);
        $this->db->limit(1);
        $result = $this->db->get();
        return $result->result_array();
    }

//add by tonmoy end


 // Sales Report End


 // Return Report Start

    function get_return_product_wise_monthly_report($product_id,$month,$year) {
        $this->db->select('*');
        $this->db->from('sales_return');
        $this->db->join('customer','customer.customer_id = sales_return.customer_id');
        $this->db->join('product','product.product_id = sales_return.product_id');
        $this->db->where('sales_return.product_id',$product_id);
        $this->db->where('sales_return.return_month',$month);
        $this->db->where('sales_return.return_year',$year);
        $result = $this->db->get();
        return $result->result_array();
    }

     function get_return_product_wise_monthly_report_grand_total_return($month,$year,$product_id) {
        $this->db->select("SUM(return_qty) as total_price");
        $this->db->from('sales_return');
        $this->db->where('sales_return.product_id',$product_id);
        $this->db->where('sales_return.return_month',$month);
        $this->db->where('sales_return.return_year',$year);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }

    function get_return_product_wise_monthly_report_grand_total($month,$year,$product_id) {
        $this->db->select("SUM(return_qty*product_price) as total_price");
        $this->db->from('sales_return');
         $this->db->where('sales_return.product_id',$product_id);
        $this->db->where('sales_return.return_month',$month);
        $this->db->where('sales_return.return_year',$year);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }
    function get_return_product_wise_product_monthly_report($month,$year,$product_id) {
        $this->db->select('*');
        $this->db->from('sales_return');
        $this->db->join('product','product.product_id = sales_return.product_id');
        $this->db->join('brand','brand.brand_id = product.brand_id');
        $this->db->join('unit','unit.unit_id = product.unit_id');
        $this->db->where('sales_return.product_id',$product_id);
        $this->db->where('sales_return.return_month',$month);
        $this->db->where('sales_return.return_year',$year);
        $this->db->limit(1);
        $result = $this->db->get();
        return $result->result_array();
    }


    function get_return_product_wise_yearly_report($product_id,$year) {
        $this->db->select('*');
        $this->db->from('sales_return');
        $this->db->join('customer','customer.customer_id = sales_return.customer_id');
        $this->db->join('product','product.product_id = sales_return.product_id');
        $this->db->where('sales_return.product_id',$product_id);
        $this->db->where('sales_return.return_year',$year);
        $result = $this->db->get();
        return $result->result_array();
    }

     function get_return_product_wise_yearly_report_grand_total_return($year,$product_id) {
        $this->db->select("SUM(return_qty) as total_price");
        $this->db->from('sales_return');
        $this->db->where('sales_return.product_id',$product_id);
        $this->db->where('sales_return.return_year',$year);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }

    function get_return_product_wise_yearly_report_grand_total($year,$product_id) {
        $this->db->select("SUM(return_qty*product_price) as total_price");
        $this->db->from('sales_return');
         $this->db->where('sales_return.product_id',$product_id);
        $this->db->where('sales_return.return_year',$year);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }
    function get_return_product_wise_product_yearly_report($year,$product_id) {
        $this->db->select('*');
        $this->db->from('sales_return');
        $this->db->join('product','product.product_id = sales_return.product_id');
        $this->db->join('brand','brand.brand_id = product.brand_id');
        $this->db->join('unit','unit.unit_id = product.unit_id');
        $this->db->where('sales_return.product_id',$product_id);
        $this->db->where('sales_return.return_year',$year);
        $this->db->limit(1);
        $result = $this->db->get();
        return $result->result_array();
    }


    function get_return_product_wise_custom_report($product_id,$from,$to) {
        $this->db->select('*');
        $this->db->from('sales_return');
        $this->db->join('customer','customer.customer_id = sales_return.customer_id');
        $this->db->join('product','product.product_id = sales_return.product_id');
        $this->db->where('sales_return.product_id',$product_id);
        $this->db->where('sales_return.return_date <=',$to);
        $this->db->where('sales_return.return_date >=',$from);
        $result = $this->db->get();
        return $result->result_array();
    }

     function get_return_product_wise_custom_report_grand_total_return($from,$to,$product_id) {
        $this->db->select("SUM(return_qty) as total_price");
        $this->db->from('sales_return');
         $this->db->where('sales_return.product_id',$product_id);
        $this->db->where('sales_return.return_date <=',$to);
        $this->db->where('sales_return.return_date >=',$from);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }

    function get_return_product_wise_custom_report_grand_total($from,$to,$product_id) {
        $this->db->select("SUM(return_qty*product_price) as total_price");
        $this->db->from('sales_return');
          $this->db->where('sales_return.product_id',$product_id);
        $this->db->where('sales_return.return_date <=',$to);
        $this->db->where('sales_return.return_date >=',$from);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }
    function get_return_product_wise_product_custom_report($from,$to,$product_id) {
        $this->db->select('*');
        $this->db->from('sales_return');
        $this->db->join('product','product.product_id = sales_return.product_id');
        $this->db->join('brand','brand.brand_id = product.brand_id');
        $this->db->join('unit','unit.unit_id = product.unit_id');
         $this->db->where('sales_return.product_id',$product_id);
        $this->db->where('sales_return.return_date <=',$to);
        $this->db->where('sales_return.return_date >=',$from);
        $this->db->limit(1);
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_return_in_w_m_r($month,$year) {
        $this->db->select('*');
        $this->db->from('sales_return');
        $this->db->join('customer','customer.customer_id = sales_return.customer_id');
        //$this->db->join('sales','sales.sales_confirm_id = sales_invoice.sales_confirm_id');
        //$this->db->join('pro','sales_return.product_id = sales.product_id');
        $this->db->where('sales_return.return_month',$month);
        $this->db->where('sales_return.return_year',$year);
        $result = $this->db->get();
        return $result->result_array();
    }

     function get_return_in_w_m_r_grand_total_return($month,$year) {
        $this->db->select("SUM(return_qty) as total_price");
        $this->db->from('sales_return');
        $this->db->where('sales_return.return_month',$month);
        $this->db->where('sales_return.return_year',$year);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }

    function get_return_in_w_m_r_grand_total($month,$year) {
        $this->db->select("SUM(return_qty*product_price) as total_price");
        $this->db->from('sales_return');
        $this->db->where('sales_return.return_month',$month);
        $this->db->where('sales_return.return_year',$year);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }


    //add by tonmoy

    function get_return_in_w_y_r($year) {
      $this->db->select('*');
      $this->db->from('sales_return');
      $this->db->join('customer','customer.customer_id = sales_return.customer_id');
      //$this->db->join('sales_invoice','sales_invoice.customer_id = customer.customer_id');
      //$this->db->join('pro','sales_return.product_id = sales.product_id');
      $this->db->where('sales_return.return_year',$year);
      //$this->db->group_by(array('sales_invoice_no'));
      $result = $this->db->get();
      return $result->result_array();
  }

   function get_return_in_w_y_r_grand_total_return($year) {
      $this->db->select("SUM(return_qty) as total_price");
      $this->db->from('sales_return');
      $this->db->where('sales_return.return_year',$year);
      $result = $this->db->get();
      $ret = $result->row();
      return $ret->total_price;
  }

  function get_return_in_w_y_r_grand_total($year) {
      $this->db->select("SUM(return_qty*product_price) as total_price");
      $this->db->from('sales_return');
      $this->db->where('sales_return.return_year',$year);
      $result = $this->db->get();
      $ret = $result->row();
      return $ret->total_price;
  }


  function get_return_in_w_c_r($from, $to) {
      $this->db->select('*');
      $this->db->from('sales_return');
      $this->db->join('customer','customer.customer_id = sales_return.customer_id');
      //$this->db->join('sales','sales.sales_confirm_id = sales_invoice.sales_confirm_id');
      //$this->db->join('pro','sales_return.product_id = sales.product_id');
      $this->db->where('sales_return.return_date >=' ,$from);
      $this->db->where('sales_return.return_date <=',$to);
      $result = $this->db->get();
      return $result->result_array();
  }

   function get_return_in_w_c_r_grand_total_return($from, $to) {
      $this->db->select("SUM(return_qty) as total_price");
      $this->db->from('sales_return');
      $this->db->where('sales_return.return_date >=',$from);
      $this->db->where('sales_return.return_date <=',$to);
      $result = $this->db->get();
      $ret = $result->row();
      return $ret->total_price;
  }

  function get_return_in_w_c_r_grand_total($from, $to) {
      $this->db->select("SUM(return_qty*product_price) as total_price");
      $this->db->from('sales_return');
      $this->db->where('sales_return.return_date >=',$from);
      $this->db->where('sales_return.return_date <=',$to);
      $result = $this->db->get();
      $ret = $result->row();
      return $ret->total_price;
  }

//add by tonmoy return supplier wise report
function get_return_supplier_wise_monthly_report($supplier_id,$month,$year) {
      $this->db->select('*');
      $this->db->from('sales_return');
      $this->db->join('customer','customer.customer_id = sales_return.customer_id');
      $this->db->join('product','product.product_id = sales_return.product_id');
      $this->db->join('supplier','product.supplier_id = supplier.supplier_id');
      $this->db->where('supplier.supplier_id',$supplier_id);
      $this->db->where('sales_return.return_month',$month);
      $this->db->where('sales_return.return_year',$year);
      $result = $this->db->get();
      return $result->result_array();
  }

   function get_return_supplier_wise_monthly_report_grand_total_return($month,$year,$supplier_id) {
      $this->db->select("SUM(return_qty) as total_price");
      $this->db->from('sales_return');
      $this->db->where('sales_return.product_id',$supplier_id);
      $this->db->where('sales_return.return_month',$month);
      $this->db->where('sales_return.return_year',$year);
      $result = $this->db->get();
      $ret = $result->row();
      return $ret->total_price;
  }

  function get_return_supplier_wise_monthly_report_grand_total($month,$year,$supplier_id) {
      $this->db->select("SUM(return_qty*sales_return.product_price) as total_price");
      $this->db->from('sales_return');
      $this->db->join('product','product.product_id = sales_return.product_id');
      $this->db->join('supplier','product.supplier_id = supplier.supplier_id');
      $this->db->where('supplier.supplier_id',$supplier_id);
      $this->db->where('sales_return.return_month',$month);
      $this->db->where('sales_return.return_year',$year);
      $result = $this->db->get();
      $ret = $result->row();
      return $ret->total_price;
  }
  function get_return_supplier_wise_product_monthly_report($supplier_id) {
      $this->db->select('*');
      $this->db->from('supplier');
      $this->db->where('supplier.supplier_id',$supplier_id);
      $this->db->limit(1);
      $result = $this->db->get();
      return $result->result_array();
  }


  //yearly
  function get_return_supplier_wise_yearly_report($supplier_id,$year) {
        $this->db->select('*');
        $this->db->from('sales_return');
        $this->db->join('customer','customer.customer_id = sales_return.customer_id');
        $this->db->join('product','product.product_id = sales_return.product_id');
        $this->db->join('supplier','product.supplier_id = supplier.supplier_id');
        $this->db->where('supplier.supplier_id',$supplier_id);
        $this->db->where('sales_return.return_year',$year);
        $result = $this->db->get();
        return $result->result_array();
    }

     function get_return_supplier_wise_yearly_report_grand_total_return($year,$supplier_id) {
        $this->db->select("SUM(return_qty) as total_price");
        $this->db->from('sales_return');
        $this->db->where('sales_return.product_id',$supplier_id);
        $this->db->where('sales_return.return_year',$year);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }

    function get_return_supplier_wise_yearly_report_grand_total($year,$supplier_id) {
        $this->db->select("SUM(return_qty*sales_return.product_price) as total_price");
        $this->db->from('sales_return');
        $this->db->join('product','product.product_id = sales_return.product_id');
        $this->db->join('supplier','product.supplier_id = supplier.supplier_id');
        $this->db->where('supplier.supplier_id',$supplier_id);
        $this->db->where('sales_return.return_year',$year);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }
    function get_return_supplier_wise_product_yearly_report($supplier_id) {
        $this->db->select('*');
        $this->db->from('supplier');
        $this->db->where('supplier.supplier_id',$supplier_id);
        $this->db->limit(1);
        $result = $this->db->get();
        return $result->result_array();
    }

    //custom
    function get_return_supplier_wise_custom_report($supplier_id,$from, $to) {
          $this->db->select('*');
          $this->db->from('sales_return');
          $this->db->join('customer','customer.customer_id = sales_return.customer_id');
          $this->db->join('product','product.product_id = sales_return.product_id');
          $this->db->join('supplier','product.supplier_id = supplier.supplier_id');
          $this->db->where('supplier.supplier_id',$supplier_id);
          $this->db->where('sales_return.return_date >=', $from);
          $this->db->where('sales_return.return_date <=', $to);
          $result = $this->db->get();
          return $result->result_array();
      }

       function get_return_supplier_wise_custom_report_grand_total_return($from, $to,$supplier_id) {
          $this->db->select("SUM(return_qty) as total_price");
          $this->db->from('sales_return');
          $this->db->where('sales_return.product_id',$supplier_id);
          $this->db->where('sales_return.return_date >=',$from);
          $this->db->where('sales_return.return_date <=',$to);
          $result = $this->db->get();
          $ret = $result->row();
          return $ret->total_price;
      }

      function get_return_supplier_wise_custom_report_grand_total($from, $to,$supplier_id) {
          $this->db->select("SUM(return_qty*sales_return.product_price) as total_price");
          $this->db->from('sales_return');
          $this->db->join('product','product.product_id = sales_return.product_id');
          $this->db->join('supplier','product.supplier_id = supplier.supplier_id');
          $this->db->where('supplier.supplier_id',$supplier_id);
          $this->db->where('sales_return.return_date >=',$from);
          $this->db->where('sales_return.return_date <=',$to);
          $result = $this->db->get();
          $ret = $result->row();
          return $ret->total_price;
      }
      function get_return_supplier_wise_product_custom_report($supplier_id) {
          $this->db->select('*');
          $this->db->from('supplier');
          $this->db->where('supplier.supplier_id',$supplier_id);
          $this->db->limit(1);
          $result = $this->db->get();
          return $result->result_array();
      }



 // Return Report End



 // Ledger Report Start

     function get_customer()
    {
        $this->db->select('*');
        $this->db->from('customer');
        $this->db->order_by('customer_id',"desc");
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_ledger_customer_wise_monthly($customer_id,$month,$year) {
        $this->db->select('*');
        $this->db->from('sales');
        $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
        $this->db->where('sales.customer_id',$customer_id);
        $this->db->where('sales_report.sales_report_month',$month);
        $this->db->where('sales_report.sales_report_year',$year);
        $this->db->order_by('sales_report.sales_report_date',"asc");
        $result = $this->db->get();
        return $result->result_array();
    }

     function get_ledger_customer_wise_debit_total_monthly($customer_id,$month,$year) {
        $this->db->select("SUM(sale_quantity_price) as total_price");
        $this->db->from('sales');
        $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
        $this->db->where('sales.customer_id',$customer_id);
        $this->db->where('sales_report.sales_report_month',$month);
        $this->db->where('sales_report.sales_report_year',$year);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }

     function get_ledger_customer_wise_credit_total_monthly($customer_id,$month,$year) {
        $this->db->select("SUM(customer_sales_payment) as total_price");
        $this->db->from('sales');
        $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
        $this->db->where('customer_id',$customer_id);
        $this->db->where('sales_report.sales_report_month',$month);
        $this->db->where('sales_report.sales_report_year',$year);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }

    function get_ledger_customer_monthly($month,$year,$customer_id) {
        $this->db->select('*');
        $this->db->from('sales');
        $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
        $this->db->join('customer','customer.customer_id = sales.customer_id');
        $this->db->where('sales.customer_id',$customer_id);
        $this->db->where('sales_report.sales_report_month',$month);
        $this->db->where('sales_report.sales_report_year',$year);
        $this->db->limit(1);
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_ledger_customer_wise_yearly($customer_id,$year) {
        $this->db->select('*');
        $this->db->from('sales');
        $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
        $this->db->where('sales.customer_id',$customer_id);
        $this->db->where('sales_report.sales_report_year',$year);
        $this->db->order_by('sales_report.sales_report_date',"asc");
        $result = $this->db->get();
        return $result->result_array();
    }

     function get_ledger_customer_wise_debit_total_yearly($customer_id,$year) {
        $this->db->select("SUM(sale_quantity_price) as total_price");
        $this->db->from('sales');
        $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
        $this->db->where('sales.customer_id',$customer_id);
        $this->db->where('sales_report.sales_report_year',$year);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }

     function get_ledger_customer_wise_credit_total_yearly($customer_id,$year) {
        $this->db->select("SUM(customer_sales_payment) as total_price");
        $this->db->from('sales');
        $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
        $this->db->where('customer_id',$customer_id);
        $this->db->where('sales_report.sales_report_year',$year);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }

    function get_ledger_customer_yearly($year,$customer_id) {
        $this->db->select('*');
        $this->db->from('sales');
        $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
        $this->db->join('customer','customer.customer_id = sales.customer_id');
        $this->db->where('sales.customer_id',$customer_id);
        $this->db->where('sales_report.sales_report_year',$year);
        $this->db->limit(1);
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_ledger_customer_wise_custom($customer_id,$from,$to) {
        $this->db->select('*');
        $this->db->from('sales');
        $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
        $this->db->where('sales.customer_id',$customer_id);
        $this->db->where('sales_report.sales_report_date <=',$to);
        $this->db->where('sales_report.sales_report_date >=',$from);
        $this->db->order_by('sales_report.sales_report_date',"asc");
        $result = $this->db->get();
        return $result->result_array();
    }

     function get_ledger_customer_wise_debit_total_custom($customer_id,$from,$to) {
        $this->db->select("SUM(sale_quantity_price) as total_price");
        $this->db->from('sales');
        $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
        $this->db->where('sales.customer_id',$customer_id);
        $this->db->where('sales_report.sales_report_date <=',$to);
        $this->db->where('sales_report.sales_report_date >=',$from);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }

     function get_ledger_customer_wise_credit_total_custom($customer_id,$from,$to) {
        $this->db->select("SUM(customer_sales_payment) as total_price");
        $this->db->from('sales');
        $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
        $this->db->where('customer_id',$customer_id);
         $this->db->where('sales_report.sales_report_date <=',$to);
        $this->db->where('sales_report.sales_report_date >=',$from);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }

    function get_ledger_customer_custom($from,$to,$customer_id) {
        $this->db->select('*');
        $this->db->from('sales');
        $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
        $this->db->join('customer','customer.customer_id = sales.customer_id');
        $this->db->where('sales.customer_id',$customer_id);
        $this->db->where('sales_report.sales_report_date <=',$to);
        $this->db->where('sales_report.sales_report_date >=',$from);
        $this->db->limit(1);
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_ledger_all_customer_wise_monthly($month) {
        $this->db->select('*');
         $this->db->from('customer_total_amount');
        $this->db->join('customer','customer.customer_id = customer_total_amount.customer_id');
        $this->db->where('customer_total_amount.payment_monthly',$month);
        $result = $this->db->get();
        return $result->result_array();
    }

     function get_ledger_all_customer_wise_monthly_balance_total($month) {
        $this->db->select("SUM(dues) as total_price");
        $this->db->from('customer_total_amount');
        $this->db->where('customer_total_amount.payment_monthly',$month);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }

    function get_ledger_all_customer_wise_yearly($year) {
        $this->db->select('*');
        $this->db->from('customer_total_amount');
        $this->db->join('customer','customer.customer_id = customer_total_amount.customer_id');
        $this->db->where('customer_total_amount.payment_yearly',$year);
        $result = $this->db->get();
        return $result->result_array();
    }
     function get_ledger_all_customer_wise_yearly_balance_total($year) {
        $this->db->select("SUM(dues) as total_price");
        $this->db->from('customer_total_amount');
        $this->db->where('customer_total_amount.payment_yearly',$year);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }

    function get_ledger_all_customer_wise_custom($from,$to) {
        $this->db->select('*');
        $this->db->from('customer_total_amount');
        $this->db->join('customer','customer.customer_id = customer_total_amount.customer_id');
        $this->db->where('customer_total_amount.payment_date <=',$to);
        $this->db->where('customer_total_amount.payment_date >=',$from);
        $result = $this->db->get();
        return $result->result_array();
    }



     function get_ledger_all_customer_wise_custom_balance_total($from,$to) {
        $this->db->select("SUM(dues) as total_price");
        $this->db->from('customer_total_amount');
        $this->db->where('customer_total_amount.payment_date <=',$to);
        $this->db->where('customer_total_amount.payment_date >=',$from);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }

  // Ledger Report End

}
