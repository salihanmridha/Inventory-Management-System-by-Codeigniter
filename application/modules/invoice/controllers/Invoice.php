<?php
class Invoice extends MX_Controller 
{

    function __construct() 
    {
        parent::__construct();
         $this->load->module('templates');
        $this->load->model('Admin_model');
        $this->load->helper('url');
        $this->load->library('numbertowords');
    }

     
     function view_invoice()
    {
        $sales_invoice_id= $this->uri->segment(3);
        $data['invoice'] = $this->Admin_model->get_invoice_view_info($sales_invoice_id);
        
        $data['sales_invoice_no'] = $this->Admin_model->get_sales_invoice_no($sales_invoice_id);
        $data['sales_invoice_date'] = $this->Admin_model->get_sales_invoice_date($sales_invoice_id);
        $data['customer'] = $this->Admin_model->get_customer($sales_invoice_id);
        $data['grand_total_amount'] = $this->Admin_model->get_grand_total_amount($sales_invoice_id);
        $data['chalan_no'] = $this->Admin_model->get_chalan_no($sales_invoice_id);
        $data['chalan_date'] = $this->Admin_model->get_chalan_date($sales_invoice_id);
        
        $data['view_file'] = "view_invoice";
        $this->templates->admin($data);
        
    }
     function sales_invoice()
    {
        $data['invoice'] = $this->Admin_model->get_invoice_info();
        $data['view_file'] = "invoice_listing";
        $this->templates->admin($data);
        
    }
    
     function test()
    {
        $data['view_file'] = "view_invoice_1";
        $this->templates->admin($data);
        
    }
    
}