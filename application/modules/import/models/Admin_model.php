<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    // Supplier start

    function insert_supplier() {
        $data = array(
            'supplier_name' => $this->input->post('supplier_name'),
            'supplier_email' => $this->input->post('supplier_email'),
            'supplier_phone' => $this->input->post('supplier_phone'),
            'supplier_address' => $this->input->post('supplier_address'),
        );
        $result = $this->db->insert('supplier', $data);
        return $result;
    }

    function get_supplier_info() {
        $this->db->select('*');
        $this->db->from('supplier');
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_supplier_info_limit() {
        $this->db->select('*');
        $this->db->from('supplier');
        $this->db->order_by("supplier_id", "desc");
        $this->db->limit(5);
        $result = $this->db->get();
        return $result->result_array();

//        $hasil=$this->db->get('product');
//	return $hasil->result();
    }

    function update_supplier() {

        $supplier_id = $this->input->post('supplier_id');
        $name_edit = $this->input->post('supplier_name');
        $email_edit = $this->input->post('supplier_email');
        $phone_edit = $this->input->post('supplier_phone');
        $address_edit = $this->input->post('supplier_address');

        $this->db->set('supplier_name', $name_edit);
        $this->db->set('supplier_email', $email_edit);
        $this->db->set('supplier_phone', $phone_edit);
        $this->db->set('supplier_address', $address_edit);
        $this->db->where('supplier_id', $supplier_id);
        $result = $this->db->update('supplier');
        return $result;
    }

    // Supplier End 
    // Brand start

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
    
    function insert_brand() {
        $data = array(
            'brand_name' => $this->input->post('brand_name'),
        );
        $result = $this->db->insert('brand', $data);
        return $result;
    }

    function get_brand_info() {
        $this->db->select('*');
        $this->db->from('brand');
        $this->db->order_by("brand_id", "desc");
        $result = $this->db->get();
        return $result->result_array();
    }

    function update_brand() {

        $brand_id = $this->input->post('brand_id');
        $name_edit = $this->input->post('brand_name');

        $this->db->set('brand_name', $name_edit);
        $this->db->where('brand_id', $brand_id);
        $result = $this->db->update('brand');
        return $result;
    }

    function delete_brand() {
        $brand_id = $this->input->post('brand_id');
        $this->db->where('brand_id', $brand_id);
        $result = $this->db->delete('brand');
        return $result;
    }

    // Brand End 
     
    
    // Unit start

    function insert_unit() {
        $data = array(
            'unit_name' => $this->input->post('unit_name'),
        );
        $result = $this->db->insert('unit', $data);
        return $result;
    }

    function get_unit_info() {
        $this->db->select('*');
        $this->db->from('unit');
        $this->db->order_by("unit_id", "desc");
        $result = $this->db->get();
        return $result->result_array();
    }

    function update_unit() {

        $unit_id = $this->input->post('unit_id');
        $name_edit = $this->input->post('unit_name');

        $this->db->set('unit_name', $name_edit);
        $this->db->where('unit_id', $unit_id);
        $result = $this->db->update('unit');
        return $result;
    }
    
     function delete_unit() {
        $unit_id = $this->input->post('unit_id');
        $this->db->where('unit_id', $unit_id);
        $result = $this->db->delete('unit');
        return $result;
    }

    // Unit End 
   
    // Style & Size start

    function insert_style() {
        $data = array(
            'style_name' => $this->input->post('style_name'),
        );
        $result = $this->db->insert('style', $data);
        return $result;
    }

    function get_style_info() {
        $this->db->select('*');
        $this->db->from('style');
        $this->db->order_by("style_id", "desc");
        $result = $this->db->get();
        return $result->result_array();
    }

    function update_style() {

        $style_id = $this->input->post('style_id');
        $style_edit = $this->input->post('style_name');

        $this->db->set('style_name', $style_edit);
        $this->db->where('style_id', $style_id);
        $result = $this->db->update('style');
        return $result;
    }
    
     function delete_style() {
        $style_id = $this->input->post('style_id');
        $this->db->where('style_id', $style_id);
        $result = $this->db->delete('style');
        return $result;
    }

    // Style & Size End
    
    // Product create start

    function insert_product($data) {
        $this->db->insert('product', $data);
        return $this->db->insert_id();
    }

    function get_product_info() {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('supplier', 'supplier.supplier_id=product.supplier_id');
        $this->db->join('brand', 'brand.brand_id=product.brand_id');
        $this->db->join('unit', 'unit.unit_id=product.unit_id');
        $this->db->join('style', 'style.style_id=product.style_id');
        $this->db->order_by("product.product_id", "desc");
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_product_info_edit($product_id) {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('supplier', 'supplier.supplier_id=product.supplier_id');
        $this->db->join('brand', 'brand.brand_id=product.brand_id');
        $this->db->join('unit', 'unit.unit_id=product.unit_id');
        $this->db->join('style', 'style.style_id=product.style_id');
        $this->db->where('product_id', $product_id);
        $result = $this->db->get();
        return $result->result_array();
    }

    function insert_history($data2) {
        $this->db->insert('product_history', $data2);
        return $this->db->insert_id();
    }
    function update_product($data, $product_id) {
        $this->db->where('product_id', $product_id);
        $this->db->update('product', $data);
        return;
    }
    
    function update_product_history($data3, $history_id) {
        $this->db->where('product_history_id', $history_id);
        $this->db->update('product_history', $data3);
        return;
    }
    function get_history_model($product_id) {
        $this->db->select('*');
        $this->db->from('product_history');
        $this->db->where('product_id', $product_id);
        $result = $this->db->get();
        return $result->result_array();
    }
    
    function get_history_print($product_history_id) {
        $this->db->select('*');
        $this->db->from('product_history');
        $this->db->where('product_history_id', $product_history_id);
        $result = $this->db->get();
        return $result->result_array();
    }
    function get_image_name($product_id) {
        $this->db->select('image');
        $this->db->from('product');
        $this->db->where('product_id', $product_id);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->image;
    }
    function delete_product($product_id,$image_name) {
        unlink("package_media/product/".$image_name);
        $this->db->delete('product', array('product_id' => $product_id));
    }

//    function delete_all_product($product_id) {
//
//        $product_id = $product_id;
//
//        foreach ($product_id as $id) {
//            $did = intval($id) . '<br>';
//            $this->db->where('product_id', $did);
//            $this->db->delete('product');
//        }
//    }

    //product create end
    

//Product Import Start
   
    function get_import_invoice_info() {
        $this->db->select('*');
        $this->db->from('import_invoice');
        $this->db->order_by("import_invoice_id", "desc");
        $result = $this->db->get();
        return $result->result_array();
    }
    function get_print_import_invoice($import_invoice_id) {
        $this->db->select('*');
        $this->db->from('import_invoice');
        $this->db->join('unconfirmed_import', 'unconfirmed_import.import_id=import_invoice.import_id');
        $this->db->join('supplier_packing', 'supplier_packing.product_id=unconfirmed_import.product_id');
        $this->db->join('product', 'product.product_id=unconfirmed_import.product_id');
        $this->db->join('unit', 'unit.unit_id=product.unit_id');
        $this->db->where('import_invoice.import_invoice_id', $import_invoice_id);
        $result = $this->db->get();
        return $result->result_array();
    }
    
    
    function get_print_import_invoice_grand_total($import_invoice_id) {
        $this->db->select('import_total_price');
        $this->db->from('import_invoice');
        $this->db->where('import_invoice_id', $import_invoice_id);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->import_total_price;
    }
    function get_print_import_invoice_invoice_no($import_invoice_id) {
        $this->db->select('import_invoice_no');
        $this->db->from('import_invoice');
        $this->db->where('import_invoice_id', $import_invoice_id);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->import_invoice_no;
    }
    function get_print_import_invoice_date($import_invoice_id) {
        $this->db->select('import_invoice_date');
        $this->db->from('import_invoice');
        $this->db->where('import_invoice_id', $import_invoice_id);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->import_invoice_date;
    }
    
    function get_product_supplier_info_import($supplier_id,$product_id) {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('supplier', 'supplier.supplier_id=product.supplier_id');
        $this->db->join('brand', 'brand.brand_id=product.brand_id');
        $this->db->join('unit', 'unit.unit_id=product.unit_id');
        $this->db->join('style', 'style.style_id=product.style_id');
        $this->db->where('product.product_id', $product_id);
        $this->db->where('product.supplier_id', $supplier_id);
        $result = $this->db->get();
        return $result->result_array();
    }
    function get_product_supplier_packing_info($product_id) {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('supplier_packing', 'supplier_packing.product_id=product.product_id');
        $this->db->where('product.product_id', $product_id);
        $result = $this->db->get();
        return $result->result_array();
    }
    function get_product_distribution_packing_info($product_id) {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('distribution_packing', 'distribution_packing.product_id=product.product_id');
        $this->db->where('product.product_id', $product_id);
        $result = $this->db->get();
        return $result->result_array();
    }
    
    function get_supplier_info_import($supplier_id) {
        $this->db->select('*');
        $this->db->from('supplier');
        $this->db->where('supplier.supplier_id', $supplier_id);
        $result = $this->db->get();
        return $result->result_array();
    }
    
    function get_business_type_for_group($supplier_id)
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('supplier_id',$supplier_id);
        $result = $this->db->get();	
        return $result->result_array();
       
    }
    
    function get_unconfirmed_import_list() {
        $this->db->select('*');
        $this->db->from('unconfirmed_import');
        $this->db->join('supplier', 'supplier.supplier_id=unconfirmed_import.supplier_id');
        $this->db->join('product', 'product.product_id=unconfirmed_import.product_id');
        $this->db->join('brand', 'brand.brand_id=product.brand_id');
        $this->db->join('unit', 'unit.unit_id=product.unit_id');
        $this->db->where('unconfirmed_type',0);
        $this->db->order_by("unconfirmed_import.unconfirmed_import_id", "desc");
        $result = $this->db->get();
        return $result->result_array();
    }
    
    function insert_unconfirmed_import($data) {
        
        $result = $this->db->insert('unconfirmed_import', $data);
        return $result;
    }
     function delete_unconfirmed_import() {
        $unconfirmed_import_id = $this->input->post('unconfirmed_import_id');
        $this->db->where('unconfirmed_import_id', $unconfirmed_import_id);
        $result = $this->db->delete('unconfirmed_import');
        return $result;
    }
    function get_unconfirmed_import_info_count() {
        $this->db->where('unconfirmed_type ',0);
        $this->db->from('unconfirmed_import');
        return $this->db->count_all_results();
    }
   function unconfirmed_import_final_import() {
        $this->db->select('*');
        $this->db->from('unconfirmed_import');
        $this->db->where('unconfirmed_type',0);
        $result = $this->db->get();
        return $result->result_array();
       
    }
     function insert_final_import($data) {
        $this->db->insert('import', $data);
        return $this->db->insert_id();
    }
    function get_confirmed_import_id($import_id) {
        $this->db->select('unconfirmed_import_id');
        $this->db->from('import');
        $this->db->where('import_id',$import_id);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->unconfirmed_import_id;
       
    }
    
    function get_product_id($confirmed_import_id) {
        $this->db->select('product_id');
        $this->db->from('unconfirmed_import');
        $this->db->where_in('unconfirmed_import_id',$confirmed_import_id);
        $result = $this->db->get();
        return $result->result_array();
       
    }
    function get_all_tax_count($confirmed_import_id) {
        $this->db->where_in('unconfirmed_import_id',$confirmed_import_id);
        $this->db->from('unconfirmed_import');
        return $this->db->count_all_results();
    }
    function update_cost_price($confirmed_import_id,$update_price) {
        $this->db->where_in('unconfirmed_import_id', $confirmed_import_id);
        $this->db->set('cost_price', 'cost_price + ' . (int) $update_price, FALSE);
        $this->db->update('unconfirmed_import');
    }
    
    
   function get_new_product_price($product_id) {
        $this->db->select('product_price');
        $this->db->from('product');
        $this->db->where_in('product_id',$product_id);
        $result = $this->db->get();
        return $result->result_array();
       
    }

    function insert_new_product_price($data4) {
        $this->db->insert('import_new', $data4);
        return $this->db->insert_id();
    }
    
 public function get_new_quantity_price($import_id)
    {
       $this->db->select('quantity*product_price', FALSE);
       $this->db->from('unconfirmed_import');
       $this->db->join('product', 'product.product_id=unconfirmed_import.product_id');
       $this->db->where('unconfirmed_import.import_id', $import_id);
       $result = $this->db->get();
       return $result->result_array();
    }
    
    function update_unconfirmed_import($data2,$confirmed_import_id) {
        $this->db->where_in('unconfirmed_import_id', $confirmed_import_id);
        $this->db->update('unconfirmed_import', $data2);
    }
   function get_import_batch_no($import_id) {
        $this->db->select('import_batch_no');
        $this->db->from('import');
        $this->db->where('import.import_id',$import_id);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->import_batch_no;
       
    }
    function get_import_total_quantity($import_id) {
        $this->db->select_sum('quantity');
        $this->db->from('unconfirmed_import');
        $this->db->where('unconfirmed_import.import_id',$import_id);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->quantity;
       
    }
    function get_import_total_price ($import_id) {
        $this->db->select("SUM(quantity*cost_price)as total_price");
        $this->db->from('unconfirmed_import');
        $this->db->where('import_id',$import_id);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->total_price;
       
    }
    function insert_import_invoice($data3) {
        $this->db->insert('import_invoice', $data3);
        return $this->db->insert_id();
    }

//Product Import End  
    
// Supplier Packing Start

    function get_product_supplier($product_id) {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('supplier', 'supplier.supplier_id=product.supplier_id');
        $this->db->where('product.product_id', $product_id);
        $result = $this->db->get();
        return $result->result_array();
    }

    function insert_supplier_packing($data) {
        $this->db->insert('supplier_packing', $data);
        return $this->db->insert_id();
    }

    function get_supplier_packing_info() {
        $this->db->select('*');
        $this->db->from('supplier_packing');
        $this->db->join('supplier', 'supplier.supplier_id=supplier_packing.supplier_id');
        $this->db->join('product', 'product.product_id=supplier_packing.product_id');
        $this->db->order_by("supplier_packing_id", "desc");
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_supplier_packing_info_edit($supplier_packing_id) {
        $this->db->select('*');
        $this->db->from('supplier_packing');
        $this->db->join('supplier', 'supplier.supplier_id=supplier_packing.supplier_id');
        $this->db->join('product', 'product.product_id=supplier_packing.product_id');
        $this->db->where('supplier_packing_id', $supplier_packing_id);
        $result = $this->db->get();
        return $result->result_array();
    }

    function update_supplier_packing($data, $supplier_packing_id) {
        $this->db->where('supplier_packing_id', $supplier_packing_id);
        $this->db->update('supplier_packing', $data);
        return;
    }

    function delete_supplier_packing($supplier_packing_id) {
        $this->db->delete('supplier_packing', array('supplier_packing_id' => $supplier_packing_id));
    }

  

// SUpplier Packing End
    

// Distribution Packing Start


    function insert_distribution_packing($data) {
        $this->db->insert('distribution_packing', $data);
        return $this->db->insert_id();
    }
 function get_product_distribution($product_id) {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('supplier_packing','supplier_packing.product_id = product.product_id');
        $this->db->where('product.product_id', $product_id);
        $result = $this->db->get();
        return $result->result_array();
    }
//    function get_supplier_product_unit($product_id) {
//        $this->db->select('*');
//        $this->db->from('supplier_packing');
//        $this->db->where('product_id', $product_id);
//        $result = $this->db->get();
//        return $result->result_array();
//    }
    
    function get_distribution_packing_info() {
        $this->db->select('*');
        $this->db->from('distribution_packing');
        $this->db->join('product', 'product.product_id=distribution_packing.product_id');
        $this->db->order_by("distribution_packing_id", "desc");
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_distribution_packing_info_edit($distribution_packing_id) {
        $this->db->select('*');
        $this->db->from('distribution_packing');
        $this->db->join('product', 'product.product_id=distribution_packing.product_id');
        $this->db->where('distribution_packing_id', $distribution_packing_id);
        $result = $this->db->get();
        return $result->result_array();
    }

    function update_distribution_packing($data, $distribution_packing_id) {
        $this->db->where('distribution_packing_id', $distribution_packing_id);
        $this->db->update('distribution_packing', $data);
        return;
    }

    function delete_distribution_packing($distribution_packing_id) {
        $this->db->delete('distribution_packing', array('distribution_packing_id' => $distribution_packing_id));
    }

    function delete_all_distribution_packing($distribution_packing_id) {

        $distribution_packing_id = $distribution_packing_id;

        foreach ($distribution_packing_id as $id) {
            $did = intval($id) . '<br>';
            $this->db->where('distribution_packing_id', $did);
            $this->db->delete('distribution_packing');
        }
    }

    // Distribution Packing End
    // package start 
//    function insert_package($data) {
//        $this->db->insert('package', $data);
//        return $this->db->insert_id();
//    }
//    
//     function insert_package_imported_product($data2) {
//        $this->db->insert('package_imported_product', $data2);
//        return $this->db->insert_id();
//    }
//    
//     function insert_package_stock_product($data3) {
//        $this->db->insert('package_stock_product', $data3);
//        return $this->db->insert_id();
//    }
//    
//    function get_package_info() {
//        $this->db->select('*');
//        $this->db->from('package');
//        $this->db->order_by("package_id", "desc");
//        $result = $this->db->get();
//        return $result->result_array();
//    }
//    
//    function get_package_info_edit($package_id) {
//        $this->db->select('*');
//        $this->db->from('package');
//        $this->db->where('package.package_id', $package_id);
//       $result = $this->db->get();
//        return $result->result_array();
//    }
//    
//    function get_imported_package_info_edit($package_id) {
//        $this->db->select('*');
//        $this->db->from('package');
//        $this->db->where('package.package_id', $package_id);
//        $this->db->join('package_imported_product','package_imported_product.package_id=package.package_id');
//        $this->db->join('import_invoice','import_invoice.import_invoice_id=package_imported_product.invoice_imported_product_id');
//        $result = $this->db->get();
//        return $result->result_array();
//    }
//    function get_stock_imported_package_info_edit($package_id) {
//        $this->db->select('*');
//        $this->db->from('package');
//        $this->db->where('package.package_id', $package_id);
//        $this->db->join('package_stock_product','package_stock_product.package_id=package.package_id');
//        $this->db->join('import_stock','import_stock.import_stock_id=package_stock_product.stock_imported_product_id');
//        $result = $this->db->get();
//        return $result->result_array();
//    }
//    function delete_package($package_id)
//    {
//        $this->db->delete('package', array('package_id'=>$package_id));
//    }
//    function delete_package_imported_product($package_id)
//    {
//        $this->db->delete('package_imported_product', array('package_id'=>$package_id));
//    }
//    function delete_package_stock_product($package_id)
//    {
//        $this->db->delete('package_stock_product', array('package_id'=>$package_id));
//    }
//    
    //package end 
    
    
//     // comon code for use start 
//
//    function get_product_initial($product_id) {
//        $this->db->select('*');
//        $this->db->from('product');
//        $this->db->where('product_id', $product_id);
//        $result = $this->db->get();
//        return $result->result_array();
//    }
//
//    // comon code for use end
//    //    Import from invoice start
//
//    function insert_import_invoice($data) {
//        $this->db->insert('import', $data);
//        return $this->db->insert_id();
//    }
//
//    function get_import_invoice_info() {
//        $this->db->select('*');
//        $this->db->from('import');
//        $this->db->join('product', 'product.product_id=import.product_id');
//        $this->db->order_by("import.import_id", "desc");
//        $result = $this->db->get();
//        return $result->result_array();
//    }
//
//    function get_import_invoice_info_edit($import_invoice_id) {
//        $this->db->select('*');
//        $this->db->from('import');
//        $this->db->join('product', 'product.product_id=import.product_id');
//        $this->db->where('import.import_id', $import_invoice_id);
//        $result = $this->db->get();
//        return $result->result_array();
//    }
//
////    function update_import_invoice($data,$import_invoice_id) {
////       $this->db->where('import_invoice_id', $import_invoice_id);
////       $this->db->update('import_invoice',$data);
////       return;
////    }
//
//    function delete_import_invoice($import_invoice_id) {
//        $this->db->delete('import', array('import_id' => $import_invoice_id));
//    }
//
//    function delete_all_import($import_invoice_id) {
//
//        $import_invoice_id = $import_invoice_id;
//
//        foreach ($import_invoice_id as $id) {
//            $did = intval($id) . '<br>';
//            $this->db->where('import_id', $did);
//            $this->db->delete('import');
//        }
//    }
//
//    //    Import from invoice end
//    //    Import from Stock start
//
//    function insert_import_stock($data) {
//        $this->db->insert('import', $data);
//        return $this->db->insert_id();
//    }
//
//    function get_import_stock_info() {
//        $this->db->select('*');
//        $this->db->from('import');
//        $this->db->join('product', 'product.product_id=import.product_id');
//        $this->db->order_by("import.import_id", "desc");
//        $result = $this->db->get();
//        return $result->result_array();
//    }
//
//    function get_stock_import_invoice_info_edit($import_stock_id) {
//        $this->db->select('*');
//        $this->db->from('import');
//        $this->db->join('product', 'product.product_id=import.product_id');
//        $this->db->where('import_id', $import_stock_id);
//        $result = $this->db->get();
//        return $result->result_array();
//    }
//
////    function update_stock_import_invoice($data,$import_stock_id) {
////       $this->db->where('import_stock_id', $import_stock_id);
////       $this->db->update('import_stock',$data);
////       return;
////    }
//
//    function delete_stock_import_invoice($import_stock_id) {
//        $this->db->delete('import', array('import_id' => $import_stock_id));
//    }
//
//    function delete_all_stock_import($import_stock_id) {
//
//        $import_stock_id = $import_stock_id;
//
//        foreach ($import_stock_id as $id) {
//            $did = intval($id) . '<br>';
//            $this->db->where('import_id', $did);
//            $this->db->delete('import');
//        }
//    }
//
//    //    Import from Stock end
}
