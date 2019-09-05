<?php
class Receipt extends MX_Controller 
{

    function __construct() 
    {
        parent::__construct();
         $this->load->module('templates');
        $this->load->model('Admin_model');
        $this->load->helper('url');
         $this->load->library('numbertowords');
    }

     
     function view_receipt()
    {
        
        $data['view_file'] = "view_receipt";
        $this->templates->admin($data);
        
    }
     function receipt_listing()
    {
        
        $data['view_file'] = "receipt_listing";
        $this->templates->admin($data);
        
    }
    
    // Start Deposite Receipt
    
     function deposite_receipt()
    {
        $data['view_customer_payment'] = $this->Admin_model->get_customer_payment_info();
        $data['view_file'] = "deposite_receipt";
        $this->templates->admin($data);
        
    }
     function deposite_print()
    {
        $customer_payment_id = $this->uri->segment(3);
        $data['deposite_print'] = $this->Admin_model->print_customer_payment_info($customer_payment_id);
        $data['view_file'] = "view_deposite_print";
        $this->templates->admin($data);
        
    }
     function new_receipt()
    {
        
        $data['view_file'] = "new_receipt";
        $this->templates->admin($data);
        
    }
    
    // End Deposite Receipt
    
    
    
}