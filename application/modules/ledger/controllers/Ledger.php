<?php
class Ledger extends MX_Controller 
{

    function __construct() 
    {
        parent::__construct();
         $this->load->module('templates');
        $this->load->model('Admin_model');
        $this->load->helper('url');
    }

     
   
     function ledger_listing()
    {
        $data['ledger'] = $this->Admin_model->get_ledger_info();
        $data['view_file'] = "ledger_listing";
        $this->templates->admin($data);
        
    }
    
    
}