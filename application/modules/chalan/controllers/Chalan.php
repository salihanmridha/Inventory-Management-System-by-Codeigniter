<?php
class Chalan extends MX_Controller 
{

    function __construct() 
    {
        parent::__construct();
         $this->load->module('templates');
        $this->load->model('Admin_model');
        $this->load->helper('url');
    }

     
     function view_chalan()
    {
        
        $sales_invoice_id= $this->uri->segment(3);
        $data['invoice'] = $this->Admin_model->get_invoice_view_info($sales_invoice_id);
        
        $data['sales_invoice_no'] = $this->Admin_model->get_sales_invoice_no($sales_invoice_id);
        $invoice_date = $this->Admin_model->get_sales_invoice_date($sales_invoice_id);
        $data['sales_invoice_date'] = date("d-m-Y", strtotime($invoice_date));
        $data['customer'] = $this->Admin_model->get_customer($sales_invoice_id);
        $data['grand_total_quantity'] = $this->Admin_model->get_grand_total_quantity($sales_invoice_id);
        $data['chalan_no'] = $this->Admin_model->get_chalan_no($sales_invoice_id);
        $chalan_date = $this->Admin_model->get_chalan_date($sales_invoice_id);
        $data['chalan_date'] = date("d-m-Y", strtotime($chalan_date));
        
        $data['view_file'] = "view_chalan";
        $this->templates->admin($data);
        
    }
     function chalan_listing()
    {
        $data['invoice'] = $this->Admin_model->get_invoice_info();
        $data['view_file'] = "chalan_listing";
        $this->templates->admin($data);
        
    }
    
    
}