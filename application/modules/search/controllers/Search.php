<?php

class Search extends MX_Controller {

    function __construct() {
        parent::__construct();


        $this->load->module('templates');
        $this->load->model('Admin_model');
        $this->load->helper('url');
    }

    function search_start() {
        
        $data['view_file'] = "create_search";
        $this->load->module('templates');
        $this->templates->admin($data);
            
        
    }

    public function autocomplete() {
        
        $search_data = $this->input->post('search_data');
        $this->session->set_userdata('search_data', $search_data);
        
        $product = $this->Admin_model->get_autocomplete_product($search_data);
        $supplier = $this->Admin_model->get_autocomplete_supplier($search_data);
        
//        print_r($result);
//        die();
        if (!empty($product)) {
            foreach ($product as $row):
                echo "<li><a href='get_search'>" . $row['product_name'] . - $row['product_code_no'] ."</a></li>";
            endforeach;
        }
        elseif(!empty($supplier))
        {
            foreach ($supplier as $row):
                echo "<li><a href='get_search'>" . $row['supplier_name'] ."</a></li>";
            endforeach;
        }
        else {
            echo "<li> <em> Search Not found ... </em> </li>";
        }
    }
    
    public function get_search()
    {
        $search_data = $this->session->userdata('search_data');
        
        $supplier_id = $this->Admin_model->get_supplier_id($search_data); 
        
        
        if($supplier_id == '')
        {
         $data['product'] = $this->Admin_model->get_all_product_supplier($search_data);
        
        }
        
        else 
        {
            $data['product'] = $this->Admin_model->get_all_product_against_supplier($supplier_id);
        }
        
        
        
        $data['view_file'] = "create_search_action";
        $this->load->module('templates');
        $this->templates->admin($data);
    }

}
