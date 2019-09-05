<?php

class User extends MX_Controller {

    function __construct() {
        parent::__construct();


        $this->load->module('templates');
        $this->load->model('Admin_model');
        $this->load->helper('url');
    }

    function create_user()
    {
        $data['view_file'] = "create_user";
        $this->load->module('templates');
        $this->templates->admin($data);
    }

    function insert_user()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $type = $this->input->post('type');
        
        if($this->Admin_model->check_email($email))
        {
            $this->session->set_flashdata('success', 'User Email Already Exist!');
            redirect('user/create_user');
        }
        else
        {
        $data= array
                (
                    'email'=>$email,
                    'password'=>$password,
                    'type'=>$type
                );
        
        $this->Admin_model->insert_user($data);
        $this->session->set_flashdata('success', 'User Created Successfully!');
            redirect('user/view_user');
        }
    }
    
    function view_user()
    {
        $data['user'] = $this->Admin_model->get_user_info();
        $data['view_file'] = "view_user";
        $this->templates->admin($data);
    }
    
     function previledge()
    {
        $user_id = $this->uri->segment(3);
        $data['user'] = $this->Admin_model->get_specific_user_info($user_id);
        $data['view_file'] = "add_previledge";
        $this->templates->admin($data);
    }
    
    function insert_previledge()
    {
        $user_id = $this->uri->segment(3);
        
        $presets = $this->input->post('presets');
        $supplier = $this->input->post('supplier');
        $supplier_view = $this->input->post('supplier_view');
        $supplier_add = $this->input->post('supplier_add');
        $supplier_edit = $this->input->post('supplier_edit');
        $brand = $this->input->post('brand');
        $brand_view = $this->input->post('brand_view');
        $brand_add = $this->input->post('brand_add');
        $brand_edit = $this->input->post('brand_edit');
        $brand_delete = $this->input->post('brand_delete');
        $unit = $this->input->post('unit');
        $unit_view = $this->input->post('unit_view');
        $unit_add = $this->input->post('unit_add');
        $unit_edit = $this->input->post('unit_edit');
        $unit_delete = $this->input->post('unit_delete');
        $style = $this->input->post('style');
        $style_view = $this->input->post('style_view');
        $style_add = $this->input->post('style_add');
        $style_edit = $this->input->post('style_edit');
        $style_delete = $this->input->post('style_delete');
        $product = $this->input->post('product');
        $product_view = $this->input->post('product_view');
        $product_add = $this->input->post('product_add');
        $product_edit = $this->input->post('product_edit');
        $product_delete = $this->input->post('product_delete');
        $supplier_packing = $this->input->post('supplier_packing');
        $supplier_packing_view = $this->input->post('supplier_packing_view');
        $supplier_packing_add = $this->input->post('supplier_packing_add');
        $supplier_packing_edit = $this->input->post('supplier_packing_edit');
        $supplier_packing_delete = $this->input->post('supplier_packing_delete');
        $distribution_packing = $this->input->post('distribution_packing');
        $distribution_packing_view = $this->input->post('distribution_packing_view');
        $distribution_packing_add = $this->input->post('distribution_packing_add');
        $distribution_packing_edit = $this->input->post('distribution_packing_edit');
        $distribution_packing_delete = $this->input->post('distribution_packing_delete');
        $product_import = $this->input->post('product_import');
        $import_add = $this->input->post('import_add');
        $import_view = $this->input->post('import_view');
        $import_print = $this->input->post('import_print');
        $import_delete = $this->input->post('import_delete');
        $operation = $this->input->post('operation');
        $inventory = $this->input->post('inventory');
        $inventory_view = $this->input->post('inventory_view');
        $customer = $this->input->post('customer');
        $customer_view = $this->input->post('customer_view');
        $customer_add = $this->input->post('customer_add');
        $customer_edit = $this->input->post('customer_edit');
        $customer_delete = $this->input->post('customer_delete');
        $sales = $this->input->post('sales');
        $sales_create = $this->input->post('sales_create');
        $return = $this->input->post('return');
        $sales_return = $this->input->post('sales_return');
        $invoice = $this->input->post('invoice');
        $invoice_listing = $this->input->post('invoice_listing');
        $invoice_print = $this->input->post('invoice_print');
        $challan = $this->input->post('challan');
        $challan_listing = $this->input->post('challan_listing');
        $challan_print = $this->input->post('challan_print');
        $receipt = $this->input->post('receipt');
        $receipt_listing = $this->input->post('receipt_listing');
        $receipt_print = $this->input->post('receipt_print');
        $ledger = $this->input->post('ledger');
        $ledger_view = $this->input->post('ledger_view');
        $report = $this->input->post('report');
        $import_report = $this->input->post('import_report');
        $supplier_import_report = $this->input->post('supplier_import_report');
        $product_import_report = $this->input->post('product_import_report');
        $inventory_report = $this->input->post('inventory_report');
        $supplier_inventory_report = $this->input->post('supplier_inventory_report');
        $product_inventory_report = $this->input->post('product_inventory_report');
        $sales_report = $this->input->post('sales_report');
        $product_sales_report = $this->input->post('product_sales_report');
        $supplier_sales_report = $this->input->post('supplier_sales_report');
        $invoice_sales_report = $this->input->post('invoice_sales_report');
        $cost_sales_report = $this->input->post('cost_sales_report');
        $return_report = $this->input->post('return_report');
        $product_return_report = $this->input->post('product_return_report');
        $supplier_return_report = $this->input->post('supplier_return_report');
        $invoice_return_report = $this->input->post('invoice_return_report');
        $ledger_report = $this->input->post('ledger_report');
        $customer_ledger_report = $this->input->post('customer_ledger_report');
        $all_customer_ledger_report = $this->input->post('all_customer_ledger_report');
        
        $data= array
                (
                    'user_id'=>$user_id,
                    'presets'=>$presets,
                    'supplier'=>$supplier ,
                    'supplier_view'=>$supplier_view ,
                    'supplier_add'=>$supplier_add ,
                    'supplier_edit'=>$supplier_edit ,
                    'brand'=>$brand ,
                    'brand_view'=>$brand_view ,
                    'brand_add'=>$brand_add ,
                    'brand_edit'=>$brand_edit ,
                    'brand_delete'=>$brand_delete ,
                    'unit'=>$unit ,
                    'unit_view'=>$unit_view ,
                    'unit_add'=>$unit_add ,
                    'unit_edit'=>$unit_edit ,
                    'unit_delete'=>$unit_delete ,
                    'style'=>$style ,
                    'style_view'=>$style_view ,
                    'style_add'=>$style_add ,
                    'style_edit'=>$style_edit ,
                    'style_delete'=>$style_delete ,
                    'product'=>$product ,
                    'product_view'=>$product_view ,
                    'product_add'=>$product_add ,
                    'product_edit'=>$product_edit ,
                    'product_delete'=>$product_delete ,
                    'supplier_packing'=>$supplier_packing ,
                    'supplier_packing_view'=>$supplier_packing_view ,
                    'supplier_packing_add'=>$supplier_packing_add ,
                    'supplier_packing_edit'=>$supplier_packing_edit ,
                    'supplier_packing_delete'=>$supplier_packing_delete ,
                    'distribution_packing'=>$distribution_packing ,
                    'distribution_packing_view'=>$distribution_packing_view ,
                    'distribution_packing_add'=>$distribution_packing_add ,
                    'distribution_packing_edit'=>$distribution_packing_edit ,
                    'distribution_packing_delete'=>$distribution_packing_delete ,
                    'product_import'=>$product_import ,
                    'import_add'=>$import_add ,
                    'import_view'=>$import_view ,
                    'import_print'=>$import_print ,
                    'import_delete'=>$import_delete ,
                    'operation'=>$operation ,
                    'inventory'=>$inventory ,
                    'inventory_view'=>$inventory_view ,
                    'customer'=>$customer ,
                    'customer_view'=>$customer_view ,
                    'customer_add'=>$customer_add ,
                    'customer_edit'=>$customer_edit ,
                    'customer_delete'=>$customer_delete ,
                    'sales'=>$sales ,
                    'sales_create'=>$sales_create ,
                    'return_1'=>$return ,
                    'sales_return'=>$sales_return ,
                    'invoice'=>$invoice ,
                    'invoice_listing'=>$invoice_listing ,
                    'invoice_print'=>$invoice_print ,
                    'challan'=>$challan ,
                    'challan_listing'=>$challan_listing ,
                    'challan_print'=>$challan_print ,
                    'receipt'=>$receipt ,
                    'receipt_listing'=>$receipt_listing ,
                    'receipt_print'=>$receipt_print ,
                    'ledger'=>$ledger ,
                    'ledger_view'=>$ledger_view ,
                    'report'=>$report ,
                    'import_report'=>$import_report ,
                    'supplier_import_report'=>$supplier_import_report ,
                    'product_import_report'=>$product_import_report ,
                    'inventory_report'=>$inventory_report ,
                    'supplier_inventory_report'=>$supplier_inventory_report ,
                    'product_inventory_report'=>$product_inventory_report ,
                    'sales_report'=>$sales_report ,
                    'product_sales_report'=>$product_sales_report ,
                    'supplier_sales_report'=>$supplier_sales_report ,
                    'invoice_sales_report'=>$invoice_sales_report ,
                    'cost_sales_report'=>$cost_sales_report ,
                    'return_report'=>$return_report ,
                    'product_return_report'=>$product_return_report ,
                    'supplier_return_report'=>$supplier_return_report ,
                    'invoice_return_report'=>$invoice_return_report ,
                    'ledger_report'=>$ledger_report ,
                    'customer_ledger_report'=>$customer_ledger_report ,
                    'all_customer_ledger_report'=>$all_customer_ledger_report 
                   
            
            
             );
        
        $this->Admin_model->insert_previledge($data);
        
        $this->session->set_flashdata('success', 'User Previledge Successfully');
        redirect("user/previledge/$user_id");
        
      }

   

}
