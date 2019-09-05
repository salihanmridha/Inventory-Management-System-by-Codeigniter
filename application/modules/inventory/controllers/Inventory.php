<?php
class Inventory extends MX_Controller 
{

    function __construct() 
    {
        parent::__construct();
         $this->load->module('templates');
        $this->load->model('Admin_model');
        $this->load->helper('url');
    }

     
     function view_inventory()
    {
        
        $data['inventory'] = $this->Admin_model->get_inventory_info();
        $data['view_file'] = "view_inventory";
        $this->templates->admin($data);
        
    }
    
    
}