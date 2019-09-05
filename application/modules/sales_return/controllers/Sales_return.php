<?php

class Sales_return extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->module('templates');
        $this->load->model('Admin_model');
        $this->load->helper('url');
        $this->load->library('numbertowords');
    }

     function create_sales_return() {
        $customer_id = $this->input->post('customer_id');
        $product_id = $this->input->post('product_id');
        
        $data['customer'] = $this->Admin_model->get_customer_info();
        $data['customer_info'] = $this->Admin_model->get_customer_info_specific($customer_id);
        $data['product_info'] = $this->Admin_model->get_product_specific($product_id);
        
        $sales_count = $this->Admin_model->get_sales_quantity($customer_id,$product_id);
        $return_count = $this->Admin_model->get_return_quantity($customer_id,$product_id);
        $data['sales_count'] = $sales_count - $return_count;
        
        $data['view_file'] = "create_return";
        $this->templates->admin($data);
    }

    function select_business_type() {
        $customer_id = $this->input->post('customer_id');
        $product_name = $this->Admin_model->get_business_type_for_return($customer_id);
        
        foreach ($product_name as $row) {
            echo '<option value="' . $row['product_id'] . '">' . $row['product_name'] . '</option>';
        }
    }
    
    function insert_return()
    {
        $customer_id= $this->input->post('customer_id');
        $product_id= $this->input->post('product_id');
        $sold_quantity= $this->input->post('sold_quantity');
        $return_quantity= $this->input->post('return_quantity');
        $month = date('m');
        $year = date('Y');
        $date = date('Y-m-d');
        $product_price = $this->Admin_model->get_product_price($product_id);
        
        $data= array
            (
                'customer_id'=> $customer_id,
                'product_id'=> $product_id,
                'sold_qty'=> $sold_quantity,
                'return_qty'=> $return_quantity,
                'return_month'=> $month,
                'return_year'=> $year,
                'return_date'=> $date,
                'product_price'=>$product_price

            );
        $this->Admin_model->insert_return($data);

        $qty_without_return = $this->Admin_model->get_qty_without_return($product_id);
        $available_quantity = $qty_without_return + $return_quantity;
        
        $data2 = array
                (
                    'quantity'=>$available_quantity
                );
        
        $this->Admin_model->update_quantity($data2,$product_id);
        
        $this->session->set_flashdata('success', 'Return Successfully');
        redirect('sales_return/create_sales_return');
    }

    
    
}
