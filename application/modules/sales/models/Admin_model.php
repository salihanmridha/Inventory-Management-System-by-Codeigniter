<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model
{


    function __construct()
    {
        parent::__construct();
    }
    // Customer start

    function insert_customer($data) {
        $this->db->insert('customer', $data);
        return $this->db->insert_id();
    }

    function get_customer_info() {
        $this->db->select('*');
        $this->db->from('customer');
        $this->db->order_by("customer_id", "desc");
        $result = $this->db->get();
        return $result->result_array();
    }
    function get_customer_info_edit($customer_id) {
        $this->db->select('*');
        $this->db->from('customer');
        $this->db->where("customer_id", $customer_id);
        $result = $this->db->get();
        return $result->result_array();
    }
    function update_customer($data,$customer_id) {
       $this->db->where('customer_id', $customer_id);
       $this->db->update('customer',$data);
       return;
    }
     function delete_customer($customer_id)
    {
        $this->db->delete('customer', array('customer_id'=>$customer_id));
    }



     // Customer End

    //Customer Payment Start


//    function get_existing_deposite($customer_id) {
//        $this->db->select('deposite_amount');
//        $this->db->from('customer');
//        $this->db->where('customer_id', $customer_id);
//        $result = $this->db->get();
//        $ret = $result->row();
//        return $ret->deposite_amount;
//    }


//    function update_customer_payment($data,$customer_id) {
//       $this->db->where('customer_id', $customer_id);
//       $this->db->update('customer',$data);
//       return;
//    }

     function insert_customer_deposite($data) {
        $this->db->insert('customer_deposite', $data);
        return $this->db->insert_id();
    }
    function get_customer_payment_info() {
        $this->db->select('*');
        $this->db->from('customer');
        $this->db->order_by("customer_id", "desc");
        $result = $this->db->get();
        return $result->result_array();
    }
     function edit_customer_payment_info($customer_id) {
        $this->db->select('*');
        $this->db->from('customer');
        $this->db->where('customer_id', $customer_id);
        $result = $this->db->get();
        return $result->result_array();
    }
    function update_customer_payment_full($data,$customer_id) {
       $this->db->where('customer_id', $customer_id);
       $this->db->update('customer',$data);
       return;
    }


     //Customer Payment End


    //Sales Start

     function get_sales_info() {
        $this->db->select('*');
        $this->db->from('sales_invoice');
        $this->db->order_by("sales_invoice_id", "desc");
        $result = $this->db->get();
        return $result->result_array();
    }

     function get_sales_info_print($sales_invoice_id) {
        $this->db->select('*');
        $this->db->from('sales_invoice');
        $this->db->join('sales','sales.sales_confirm_id= sales_invoice.sales_confirm_id');
        $this->db->join('product','product.product_id= sales.product_id');
        $this->db->join('unit','unit.unit_id= product.unit_id');
        $this->db->where("sales_invoice_id", $sales_invoice_id);
        $result = $this->db->get();
        return $result->result_array();
    }
     function get_sales_info_grand_total($sales_invoice_id) {
        $this->db->select("SUM(sale_quantity_price) as total_price");
        $this->db->from('sales');
        $this->db->join('sales_invoice','sales_invoice.sales_confirm_id = sales.sales_confirm_id');
        $this->db->where('sales_invoice.sales_invoice_id',$sales_invoice_id);
       $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }

    function get_sales_info_customer($sales_invoice_id) {
        $this->db->select('*');
        $this->db->from('sales_invoice');
        $this->db->join('sales','sales.sales_confirm_id= sales_invoice.sales_confirm_id');
        $this->db->join('customer','customer.customer_id= sales.customer_id');
        $this->db->where("sales_invoice_id", $sales_invoice_id);
        $this->db->limit(1);
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_sales_info_customer_id($sales_invoice_id) {
        $this->db->select('customer.customer_id');
        $this->db->from('customer');
        $this->db->join('sales','sales.customer_id= customer.customer_id');
        $this->db->join('sales_invoice','sales_invoice.sales_confirm_id= sales.sales_confirm_id');
        $this->db->where("sales_invoice_id", $sales_invoice_id);
        $this->db->limit(1);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->customer_id;
    }

    function get_sales_customer_pay($sales_invoice_id) {
        $this->db->select('customer_pay');
        $this->db->from('customer_deposite');
        $this->db->join('sales_invoice','sales_invoice.sales_invoice_no = customer_deposite.sales_invoice_no');
        $this->db->where("sales_invoice_id", $sales_invoice_id);
        $result = $this->db->get();
        $ret = $result->row();
        if (!empty($ret->customer_pay)) {
          return $ret->customer_pay;
        }

    }

    function get_ledger_customer_wise_debit_total($customer_id) {
        $this->db->select("SUM(sale_quantity_price) as total_price");
        $this->db->from('sales');
        $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
        $this->db->where('sales.customer_id',$customer_id);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }
     function get_ledger_customer_wise_credit_total($customer_id) {
        $this->db->select("SUM(customer_sales_payment) as total_price");
        $this->db->from('sales');
        $this->db->join('sales_report','sales_report.sales_id = sales.sales_id');
        $this->db->where('customer_id',$customer_id);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
    }

    function get_distribution_packing_info() {
        $this->db->select('*');
        $this->db->from('distribution_packing');
        $this->db->join('product','product.product_id = distribution_packing.product_id');
        $this->db->join('unconfirmed_import','unconfirmed_import.product_id = product.product_id');
        $this->db->order_by("distribution_packing_id", "desc");
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_unconfirmed_sale_info_count() {
        $this->db->where('sales_confirm_type ',0);
        $this->db->from('sales');
        return $this->db->count_all_results();
    }



    function get_unconfirmed_sale_list() {
        $this->db->select('*');
        $this->db->from('sales');
        $this->db->join('unconfirmed_import','unconfirmed_import.import_code_no = sales.import_code_no');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->join('customer','customer.customer_id = sales.customer_id');
        $this->db->where('sales_confirm_type ',0);
        $this->db->where('sales_return ',0);
        $result = $this->db->get();
        return $result->result_array();
    }

   function get_product_price($import_code_no) {
        $this->db->select('product_price');
        $this->db->from('product');
        $this->db->join('unconfirmed_import','unconfirmed_import.product_id = product.product_id');
        $this->db->where('unconfirmed_import.import_code_no', $import_code_no);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->product_price;
    }

    function get_product_id($import_code_no) {
        $this->db->select('product.product_id');
        $this->db->from('product');
        $this->db->join('unconfirmed_import','unconfirmed_import.product_id = product.product_id');
        $this->db->where('unconfirmed_import.import_code_no', $import_code_no);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->product_id;
    }

    function insert_sales($data) {
        $this->db->insert('sales', $data);
         return $this->db->insert_id();
    }
    function insert_sales_report($data4) {
        $this->db->insert('sales_report', $data4);
         return $this->db->insert_id();
    }
    function get_customer_sale() {
        $this->db->select('*');
        $this->db->from('sales');
        $this->db->join('unconfirmed_import','unconfirmed_import.import_code_no = sales.import_code_no');
        $this->db->join('product','product.product_id = unconfirmed_import.product_id');
        $this->db->join('customer','customer.customer_id = sales.customer_id');
        $this->db->where('sales_confirm_type ',0);
        $this->db->where('sales_return ',0);
        $this->db->limit(1);
       $result = $this->db->get();
        return $result->result_array();
    }

    function get_total_quantity() {
        $this->db->select_sum('sale_quantity');
        $this->db->from('sales');
        $this->db->where('sales_confirm_type ',0);
        $this->db->where('sales_return ',0);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->sale_quantity;

    }
    function get_total_price() {
        $this->db->select_sum('sale_quantity_price');
        $this->db->from('sales');
        $this->db->where('sales_confirm_type ',0);
        $this->db->where('sales_return ',0);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->sale_quantity_price;

    }
     function get_invoice_no() {
        $this->db->select('sales_invoice_no_1');
        $this->db->from('sales');
        $this->db->where('sales_confirm_type ',0);
        $this->db->where('sales_return ',0);
        $this->db->limit(1);
        $result = $this->db->get();
        return $result->result_array();

    }
    function get_payable_price($customer_id_single) {
        $this->db->select_sum('sale_quantity_price');
        $this->db->from('sales');
        $this->db->where('sales_confirm_type ',1);
        $this->db->where('sales_return ',0);
        $this->db->where('customer_id ',$customer_id_single);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->sale_quantity_price;

    }
    function get_previous_payable_price($customer_id_single) {
        $this->db->select('payable_amount');
        $this->db->from('customer');
        $this->db->where('customer_id ',$customer_id_single);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->payable_amount;

    }

     function update_customer_payment_payable($data4, $customer_id_single) {
        $this->db->where('customer_id', $customer_id_single);
        $this->db->update('customer', $data4);
    }

    function get_get_customer_payment($customer_id) {
        $this->db->select('*');
        $this->db->from('customer');
        $this->db->where('customer_id ',$customer_id);
        $result = $this->db->get();
        return $result->result_array();
    }
    function insert_product_allocation($data2) {
       $result = $this->db->insert('product_allocation', $data2);
         return $result;
    }

    function get_previous_quantity($import_code_no) {
        $this->db->select('quantity');
        $this->db->from('unconfirmed_import');
        $this->db->where('import_code_no', $import_code_no);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->quantity;
    }

    function update_unconfirm_import($data3,$import_code_no) {
        $this->db->where('import_code_no', $import_code_no);
        $this->db->update('unconfirmed_import', $data3);
    }

    function unconfirmed_final_sale() {
        $this->db->select('*');
        $this->db->from('sales');
        $this->db->where('sales_confirm_type',0);
        $result = $this->db->get();
        return $result->result_array();

    }

    function insert_final_sale($data) {
        $this->db->insert('sales_confirm', $data);
        return $this->db->insert_id();
    }

    function get_confirmed_sales_id($sales_confirm_id) {
        $this->db->select('sales_id');
        $this->db->from('sales_confirm');
        $this->db->where('sales_confirm_id',$sales_confirm_id);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->sales_id;

    }

    function update_unconfirmed_sales($data2, $confirmed_sales_id) {
        $this->db->where_in('sales_id', $confirmed_sales_id);
        $this->db->update('sales', $data2);
    }
    function get_sales_batch_no($sales_confirm_id) {
        $this->db->select('sales_batch_no');
        $this->db->from('sales_confirm');
        $this->db->where('sales_confirm.sales_confirm_id',$sales_confirm_id);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->sales_batch_no;

    }
    function get_sales_invoice_no($sales_confirm_id) {
        $this->db->select('sales_invoice_no_1');
        $this->db->from('sales');
        $this->db->where('sales_confirm_id',$sales_confirm_id);
        $this->db->limit(1);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->sales_invoice_no_1;

    }
    function get_sales_customer_id($sales_confirm_id) {
        $this->db->select('customer_id');
        $this->db->from('sales');
        $this->db->where('sales_confirm_id',$sales_confirm_id);
        $this->db->limit(1);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->customer_id;

    }
    function get_sales_total_quantity($sales_confirm_id) {
        $this->db->select_sum('sale_quantity');
        $this->db->from('sales');
        $this->db->where('sales.sales_confirm_id',$sales_confirm_id);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->sale_quantity;

    }
    function get_sales_total_price($sales_confirm_id) {
        $this->db->select_sum('sale_quantity_price');
        $this->db->from('sales');
        $this->db->where('sales.sales_confirm_id',$sales_confirm_id);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->sale_quantity_price;

    }
    function insert_sales_invoice($data3) {
        $this->db->insert('sales_invoice', $data3);
        return $this->db->insert_id();
    }

    function get_customer_id($sales_confirm_id) {
        $this->db->select('customer_id');
        $this->db->from('sales');
        $this->db->where('sales_confirm_id',$sales_confirm_id);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->customer_id;

    }
    function get_customer_id_single($sales_confirm_id) {
        $this->db->select('customer_id');
        $this->db->from('sales');
        $this->db->where('sales_confirm_id',$sales_confirm_id);
        $this->db->limit(1);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->customer_id;

    }
     function delete_product_allocation($customer_id)
    {
        $this->db->delete('product_allocation', array('customer_id'=>$customer_id));
    }

//    function get_product_info() {
//        $this->db->select('*');
//        $this->db->from('product');
//        $this->db->order_by("product_id", "desc");
//        $result = $this->db->get();
//        return $result->result_array();
//    }
//

//
//   function get_total_distribution_quantity($distribution_packing_id) {
//        $this->db->select('distribution_quantity');
//        $this->db->from('distribution_packing');
//        $this->db->where('distribution_packing_id', $distribution_packing_id);
//        $result = $this->db->get();
//        $ret = $result->row();
//        return $ret->distribution_quantity;
//    }
//
//    function update_distribution_quantity($data2,$distribution_packing_id) {
//        $this->db->where('distribution_packing_id', $distribution_packing_id);
//        $this->db->update('distribution_packing', $data2);
//    }
//     function update_sales($data,$sales_id) {
//        $this->db->where('sales_id', $sales_id);
//        $this->db->update('sales', $data);
//    }
//    function get_sale_distribution_quantity($sales_id) {
//        $this->db->select('sale_distrubution_product_quantity');
//        $this->db->from('sales');
//        $this->db->where('sales_id', $sales_id);
//        $result = $this->db->get();
//        $ret = $result->row();
//        return $ret->sale_distrubution_product_quantity;
//    }
//    function get_available_distribution_quantity($sales_id) {
//        $this->db->select('available_distribution_quantity');
//        $this->db->from('distribution_packing');
//        $this->db->join('sales','sales.product_id = distribution_packing.product_id');
//        $this->db->where('sales_id', $sales_id);
//        $result = $this->db->get();
//        $ret = $result->row();
//        return $ret->available_distribution_quantity;
//    }
//    function get_distribution_packing_id($sales_id) {
//        $this->db->select('distribution_packing_id');
//        $this->db->from('distribution_packing');
//        $this->db->join('sales','sales.product_id = distribution_packing.product_id');
//        $this->db->where('sales_id', $sales_id);
//        $result = $this->db->get();
//        $ret = $result->row();
//        return $ret->distribution_packing_id;
//    }
//    function update_available_distribution_quantity($data2,$distribution_packing_id) {
//        $this->db->where('distribution_packing_id', $distribution_packing_id);
//        $this->db->update('distribution_packing', $data2);
//    }



    //Sales End
}
