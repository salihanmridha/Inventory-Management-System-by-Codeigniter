<?php

class Import extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->module('templates');
        $this->load->model('Admin_model');
        $this->load->helper('url');
        $this->load->library('numbertowords');
        date_default_timezone_set('Asia/Dhaka');
    }

    // Supplier start

    function view_supplier() {
        $data['view_file'] = "view_supplier";
        $this->templates->admin($data);
    }

    function supplier_list() {
        $data = $this->Admin_model->get_supplier_info();
        echo json_encode($data);
    }

    function supplier_list_limit() {
        $data = $this->Admin_model->get_supplier_info_limit();
        echo json_encode($data);
    }

    function insert_supplier() {
        $data = $this->Admin_model->insert_supplier();
        echo json_encode($data);
    }

    function update_supplier() {
        $data = $this->Admin_model->update_supplier();
        echo json_encode($data);
    }

    // Supplier End 
    // Brand start

    function view_brand() {
        
        $user_email = $this->session->userdata('email');
        $user_id = $this->Admin_model->get_user_id($user_email);
        $data['previledge'] = $this->Admin_model->get_previledge_info($user_id);
        
        $data['view_file'] = "view_brand";
        $this->templates->admin($data);
    }

    function brand_list() {
        $data = $this->Admin_model->get_brand_info();
        echo json_encode($data);
    }

    function insert_brand() {
        $data = $this->Admin_model->insert_brand();
        echo json_encode($data);
    }

    function update_brand() {
        $data = $this->Admin_model->update_brand();
        echo json_encode($data);
    }

    function delete_brand() {
        $data = $this->Admin_model->delete_brand();
        echo json_encode($data);
    }

    // Brand End 
    

// Unit start

    function view_unit() {
        $data['view_file'] = "view_unit";
        $this->templates->admin($data);
    }

    function unit_list() {
        $data = $this->Admin_model->get_unit_info();
        echo json_encode($data);
    }

    function insert_unit() {
        $data = $this->Admin_model->insert_unit();
        echo json_encode($data);
    }

    function update_unit() {
        $data = $this->Admin_model->update_unit();
        echo json_encode($data);
    }

    function delete_unit() {
        $data = $this->Admin_model->delete_unit();
        echo json_encode($data);
    }

    // Unit End 
   
    // Style & Size start

    function view_style() {
        $data['view_file'] = "view_style";
        $this->templates->admin($data);
    }

    function style_list() {
        $data = $this->Admin_model->get_style_info();
        echo json_encode($data);
    }

    function insert_style() {
        $data = $this->Admin_model->insert_style();
        echo json_encode($data);
    }

    function update_style() {
        $data = $this->Admin_model->update_style();
        echo json_encode($data);
    }

    function delete_style() {
        $data = $this->Admin_model->delete_style();
        echo json_encode($data);
    }

    // Style & Size End 
    
// product entry start 

    function new_product() {

        $data['supplier'] = $this->Admin_model->get_supplier_info();
        $data['brand'] = $this->Admin_model->get_brand_info();
        $data['unit'] = $this->Admin_model->get_unit_info();
        $data['style'] = $this->Admin_model->get_style_info();
        $data['view_file'] = "create_product";
        $this->templates->admin($data);
    }

    function insert_product() {

        $product_name = $this->input->post('product_name');
        $entry_date = $this->input->post('entry_date');
        $unit_id = $this->input->post('unit_id');
        $style_id = $this->input->post('style_id');
        $description = $this->input->post('product_des');
        $product_price = $this->input->post('product_price');
        $supplier_id = $this->input->post('supplier_id');
        $product_code_no = $this->input->post('product_code_no');
        $product = $this->input->post('product');
        $brand_id = $this->input->post('brand_id');
        $country = $this->input->post('country');
        $state = $this->input->post('state');
        $ingradient = $this->input->post('ingradient');

        
        $this->load->library('upload');
        $product_image = $_FILES['userfile']['name'];

        $this->upload->initialize($this->set_upload_options_product());

        if (!$this->upload->do_upload()) {

            $data = array
                (
                'product_name' => $product_name,
                'product_code_no' => $product_code_no,
                'entry_date' => $entry_date,
                'unit_id' => $unit_id,
                'style_id' => $style_id,
                'product_description' => $description,
                'product_price' => $product_price,
                'supplier_id' => $supplier_id,
                'product' => $product,
                'brand_id' => $brand_id,
                'country' => $country,
                'state' => $state,
                'ingradient' => $ingradient
            );
            $this->Admin_model->insert_product($data);
        } else {
            $data = array
                (
                'product_name' => $product_name,
                'product_code_no' => $product_code_no,
                'entry_date' => $entry_date,
                'unit_id' => $unit_id,
                'style_id' => $style_id,
                'product_description' => $description,
                'product_price' => $product_price,
                'supplier_id' => $supplier_id,
                'product' => $product,
                'brand_id' => $brand_id,
                'country' => $country,
                'state' => $state,
                'ingradient' => $ingradient,
                'image' => $product_image
            );

            $this->Admin_model->insert_product($data);
        }

        $this->session->set_flashdata('success', 'Product Created Successfully');
        redirect('import/view_product_making');
    }

    private function set_upload_options_product() {
        //upload an image options
        $url = base_url();
        $config = array();
        $config['upload_path'] = 'package_media/product';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '0';
        $config['overwrite'] = FALSE;
//        $config['max_size']             = 200;
        $config['max_width'] = '';
        $config['max_height'] = '';

        return $config;
    }

    function view_product_making() {

        $data['product'] = $this->Admin_model->get_product_info();
        $data['view_file'] = "view_product_making";
        $this->templates->admin($data);
    }

    function edit_product() {
        $product_id = $this->uri->segment(3);
        $data['supplier'] = $this->Admin_model->get_supplier_info();
        $data['brand'] = $this->Admin_model->get_brand_info();
        $data['unit'] = $this->Admin_model->get_unit_info();
        $data['style'] = $this->Admin_model->get_style_info();
        $data['product'] = $this->Admin_model->get_product_info_edit($product_id);
        $data['view_file'] = "edit_product";
        $this->templates->admin($data);
    }

    function update_product() {

        $product_id = $this->input->post('product_id');
        
        $product_name = $this->input->post('product_name');
        $entry_date = $this->input->post('entry_date');
        $unit_id = $this->input->post('unit_id');
        $style_id = $this->input->post('style_id');
        $description = $this->input->post('product_des');
        $product_price = $this->input->post('product_price');
        $supplier_id = $this->input->post('supplier_id');
        $product_code_no = $this->input->post('product_code_no');
        $product = $this->input->post('product');
        $brand_id = $this->input->post('brand_id');
        $country = $this->input->post('country');
        $state = $this->input->post('state');
        $ingradient = $this->input->post('ingradient');
        
        $product_name_old = $this->input->post('product_name_old');
        $entry_date_old = $this->input->post('entry_date_old');
        $unit_id_old = $this->input->post('unit_id_old');
        $style_id_old = $this->input->post('style_id_old');
        $description_old = $this->input->post('product_des_old');
        $product_price_old = $this->input->post('product_price_old');
        $supplier_id_old = $this->input->post('supplier_id_old');
        $product_code_no_old = $this->input->post('product_code_no_old');
        $product_old = $this->input->post('product_old');
        $brand_id_old = $this->input->post('brand_id_old');
        $country_old = $this->input->post('country_old');
        $state_old = $this->input->post('state_old');
        $ingradient_old = $this->input->post('ingradient_old');
        $date= date('d-m-Y');
        $time= date("h:i:sa");
        
        $this->load->library('upload');
        $product_image = $_FILES['userfile']['name'];

        $this->upload->initialize($this->set_upload_options_product());

        if (!$this->upload->do_upload()) {

            $data2 = array
                (
                'product_id' => $product_id,
                'product_name_old' => $product_name_old,
                'entry_date_old' => $entry_date_old,
                'unit_id_old' => $unit_id_old,
                'style_id_old' => $style_id_old,
                'product_description_old' => $description_old,
                'product_price_old' => $product_price_old,
                'supplier_id_old' => $supplier_id_old,
                'product_code_no_old' => $product_code_no_old,
                'product_old' => $product_old,
                'brand_id_old' => $brand_id_old,
                'country_old' => $country_old,
                'state_old' => $state_old,
                'ingradient_old' => $ingradient_old,
                'date'=>$date,
                'time'=>$time
            );
            $history_id = $this->Admin_model->insert_history($data2);
            
            $data = array
                (
                'product_name' => $product_name,
                'entry_date' => $entry_date,
                'unit_id' => $unit_id,
                'style_id' => $style_id,
                'product_description' => $description,
                'product_price' => $product_price,
                'supplier_id' => $supplier_id,
                'product_code_no' => $product_code_no,
                'product' => $product,
                'brand_id' => $brand_id,
                'country' => $country,
                'state' => $state,
                'ingradient' => $ingradient
            );
            $this->Admin_model->update_product($data, $product_id);
            
            $data3 = array
                (
                'product_name' => $product_name,
                'entry_date' => $entry_date,
                'unit_id' => $unit_id,
                'style_id' => $style_id,
                'product_description' => $description,
                'product_price' => $product_price,
                'supplier_id' => $supplier_id,
                'product_code_no' => $product_code_no,
                'product' => $product,
                'brand_id' => $brand_id,
                'country' => $country,
                'state' => $state,
                'ingradient' => $ingradient
            );
            
            $this->Admin_model->update_product_history($data3, $history_id);
            
          
            
        } else {
            $data = array
                (
                'product_name' => $product_name,
                'entry_date' => $entry_date,
                'unit_id' => $unit_id,
                'style_id' => $style_id,
                'product_description' => $description,
                'product_price' => $product_price,
                'supplier_id' => $supplier_id,
                'product_code_no' => $product_code_no,
                'product' => $product,
                'brand_id' => $brand_id,
                'country' => $country,
                'state' => $state,
                'ingradient' => $ingradient,
                'image' => $product_image
            );

            $this->Admin_model->update_product($data, $product_id);
        }
        
        

        $this->session->set_flashdata('success', 'Product Updated Successfully');
        redirect('import/view_product_making');
    }
    
    public function get_edit_history()
    {
        $product_id = $this->uri->segment(3);
        $data['get_history'] = $this->Admin_model->get_history_model($product_id);
        $data['view_file'] = "view_history";
        $this->templates->admin($data);
    }
    
    public function print_product_history()
    {
        $product_history_id = $this->uri->segment(3);
        $data['get_history'] = $this->Admin_model->get_history_print($product_history_id);
        $data['view_file'] = "view_history_print";
        $this->templates->admin($data);
    }

    public function delete_product() {

        $product_id = $this->uri->segment(3);
        $image_name = $this->Admin_model->get_image_name($product_id);
        $this->Admin_model->delete_product($product_id, $image_name);
        $this->session->set_flashdata('success', 'Product Deleted Successfully');
        redirect("import/view_product_making");
    }

//    public function delete_all_product() {
//        $product_id = $this->input->get_post('checkbox');
//
//        $this->Admin_model->delete_all_product($product_id);
//
//        $this->session->set_flashdata('success', 'All Product Deleted Successfully');
//        redirect("import/view_product_making");
//    }
// product entry end   

    
    
// Product Import Start

    function view_import() {

        $data['import_invoice'] = $this->Admin_model->get_import_invoice_info();

        $data['view_file'] = "view_import";
        $this->templates->admin($data);
    }

    function print_import_invoice() {
        
        $import_invoice_id = $this->uri->segment(3);
        $data['print_import_invoice'] = $this->Admin_model->get_print_import_invoice($import_invoice_id);
        $data['print_import_invoice_grand_total'] = $this->Admin_model->get_print_import_invoice_grand_total($import_invoice_id);
        $data['print_import_invoice_invoice_no'] = $this->Admin_model->get_print_import_invoice_invoice_no($import_invoice_id);
        $import_invoice_date = $this->Admin_model->get_print_import_invoice_date($import_invoice_id);
        $data['print_import_invoice_date'] = date("d-m-Y", strtotime($import_invoice_date));
        $data['view_file'] = "print_import_invoice";
        $this->templates->admin($data);
        
    }
   

//    function new_stock_import() {
//
//        $data['product'] = $this->Admin_model->get_product_info();
//        $data['view_file'] = "create_stock_import";
//        $this->templates->admin($data);
//    }

    function get_product_import() {
        $supplier_id = $this->input->post('supplier_id');
        $product_id = $this->input->post('product_id');

        $data['supplier'] = $this->Admin_model->get_supplier_info();
        $data['supplier_info'] = $this->Admin_model->get_supplier_info_import($supplier_id);
        $data['product_supplier_info'] = $this->Admin_model->get_product_supplier_info_import($supplier_id, $product_id);
        $data['product_supplier_packing_info'] = $this->Admin_model->get_product_supplier_packing_info( $product_id);
        $data['product_distribution_packing_info'] = $this->Admin_model->get_product_distribution_packing_info( $product_id);
        
        $data['unconfirmed_import'] = $this->Admin_model->get_unconfirmed_import_info_count();
 
        $data['unconfirmed_import_final_import'] = $this->Admin_model->unconfirmed_import_final_import();

        $data['view_file'] = "create_import_action";
        $this->templates->admin($data);
    }

    function select_business_type() {
        $supplier_id = $this->input->post('supplier_id');
        $product_name = $this->Admin_model->get_business_type_for_group($supplier_id);

        foreach ($product_name as $row) {
            echo '<option value="' . $row['product_id'] . '">' . $row['product_name'] . '</option>';
        }
    }

    function unconfirmed_import_list() {
        $data = $this->Admin_model->get_unconfirmed_import_list();
        echo json_encode($data);
    }

    function insert_unconfirmed_import() {
        
        $supplier_id = $this->input->post('supplier_id');
        $product_id = $this->input->post('product_id');
        $lost_damage = $this->input->post('lost_damage');
        $cost_price = $this->input->post('cost_price');
        $production_date = $this->input->post('production_date');
        $expiery_date = $this->input->post('expiery_date');
        //$product_price = $this->input->post('product_price');
        $distribution_quantity = $this->input->post('distribution_quantity');
        $quantity = $distribution_quantity - $lost_damage;
        $quantity_price = $cost_price * $quantity;
        
        $import_code_no = rand();
        
        $month = date('m');
        $year = date('Y');
        $date = date('Y-m-d');
        
        $data = array(
            'supplier_id' => $supplier_id,
            'product_id' => $product_id,
            'lost_damage' => $lost_damage,
            'production_date' => $production_date,
            'expiery_date' => $expiery_date,
            'quantity' => $quantity,
            'quantity_price' => $quantity_price,
            'import_code_no' =>$import_code_no,
            'import_monthly'=>$month,
            'import_yearly'=>$year,
            'import_date'=>$date,
            'cost_price'=> $cost_price
        );
        
        $data2 = $this->Admin_model->insert_unconfirmed_import($data);
        echo json_encode($data2);
    }

    function delete_unconfirmed_import() {
        $data = $this->Admin_model->delete_unconfirmed_import();
        echo json_encode($data);
    }

    function final_import() {
        
        
        $unconfirmed_import_id = $this->input->post('unconfirmed_import_id');
        $unconfirmed_import_id_2 = json_encode($unconfirmed_import_id);

        $import_batch_no = rand();

        $data = array
            (
            'unconfirmed_import_id' => $unconfirmed_import_id_2,
            'import_batch_no' => $import_batch_no
        );
       
        
        
        $import_id = $this->Admin_model->insert_final_import($data);

        $json_confirmed_import_id = $this->Admin_model->get_confirmed_import_id($import_id);

        $confirmed_import_id = json_decode($json_confirmed_import_id);
        
        
        $type = 1;

        $data2 = array(
            'unconfirmed_type' => $type,
            'import_id' => $import_id,
        );

        $this->Admin_model->update_unconfirmed_import($data2, $confirmed_import_id);
        
        $duty_tax = $this->input->post('duty_tax');
        $transport_cost = $this->input->post('transport_cost');
        $others_cost = $this->input->post('others_cost');
        
        $tax_count = $this->Admin_model->get_all_tax_count($confirmed_import_id);
        
        $update_price2 = $duty_tax + $transport_cost + $others_cost;
        $update_price = number_format($update_price2 / $tax_count,2);
        
        $product_id =$this->Admin_model->get_product_id($confirmed_import_id);
        $product_id2 = array_map('current', $product_id);
        $this->Admin_model->update_cost_price($confirmed_import_id,$update_price);
        
//        $new_product_price = $this->Admin_model->get_new_product_price($product_id2);
//        $new_product_price2 = array_map('current', $new_product_price);
//        
//
//
//        
//        $cpt = count($new_product_price2);
//          for ($i = 0; $i < $cpt; $i++) {
//            $new_product_price3 = $new_product_price2[$i];
//
//            $data4 = array
//                (
//                'import_id'=>$import_id,
//                'new_product_price '=>$new_product_price3
//            );
//      
//        $this->Admin_model->insert_new_product_price($data4);
//          }
//        
//        $new_quantity_price = $this->Admin_model->get_new_quantity_price($import_id);
//        $new_quantity_price2 = array_map('current', $new_quantity_price);
//       
//        $cpt2 = count($new_quantity_price2);
//          for ($i = 0; $i < $cpt2; $i++) {
//            $new_quantity_price3 = $new_quantity_price2[$i];
//            $data5 = array
//                (
//                'import_id'=>$import_id,
//                'new_quantity_price '=>$new_quantity_price3
//            );
//      
//        $this->Admin_model->insert_new_quantity_price($data5);
//          }
       
         $batch_no = $this->Admin_model->get_import_batch_no($import_id);
         $import_total_quantity = $this->Admin_model->get_import_total_quantity($import_id);
         $import_total_price = $this->Admin_model->get_import_total_price($import_id);
         $import_invoice_no= rand();
         $import_invoice_date= date('Y-m-d');
        $data3 = array
            (
            'import_id' => $import_id,
            'import_batch_no' => $batch_no,
            'import_total_quantity' => $import_total_quantity,
            'import_total_price' => $import_total_price,
            'import_invoice_no' => $import_invoice_no,
            'import_invoice_date' => $import_invoice_date
        );
        $this->Admin_model->insert_import_invoice($data3);
        
        
        
        $this->session->set_flashdata('success', 'Product Imported Successfully');
        redirect("import/view_import");
    }

// Product Import End

// Supplier Packing Start

    function new_supplier_packing() {

        $data['product'] = $this->Admin_model->get_product_info();
        $data['view_file'] = "create_supplier_packing";
        $this->templates->admin($data);
    }

    function view_supplier_packing() {

        $data['supplier_packing'] = $this->Admin_model->get_supplier_packing_info();
        
        $data['view_file'] = "view_supplier_packing";
        $this->templates->admin($data);
    }

    function get_product_import_supplier() {
        $product_id = $this->input->post('product_id');
        $product_id_code = $this->input->post('product_id_code');
        if ($product_id_code == '') {
            $data['product'] = $this->Admin_model->get_product_info();
            $data['product_info'] = $this->Admin_model->get_product_supplier($product_id);
        } else {
            $data['product'] = $this->Admin_model->get_product_info();
            $data['product_info'] = $this->Admin_model->get_product_supplier($product_id_code);
        }

        //echo json_encode($data);
        $data['view_file'] = "create_supplier_packing_action";
        $this->templates->admin($data);
    }

    function insert_supplier_packing() {

        $product_id = $this->input->post('product_id');
        $supplier_id = $this->input->post('supplier_id');
        $supplier_product_unit = $this->input->post('supplier_product_unit');
        $supplier_quantity = $this->input->post('supplier_product_quantity');
        
        $data = array
            (
            'product_id' => $product_id,
            'supplier_id' => $supplier_id,
            'supplier_product_unit' => $supplier_product_unit,
            'supplier_quantity' => $supplier_quantity
        );

        $this->Admin_model->insert_supplier_packing($data);

        $this->session->set_flashdata('success', 'Supplier Packing Successfully');
        redirect('import/view_supplier_packing');
    }

    function edit_supplier_packing() {
        $supplier_packing_id = $this->uri->segment(3);
        $data['supplier_packing'] = $this->Admin_model->get_supplier_packing_info_edit($supplier_packing_id);
        $data['view_file'] = "edit_supplier_packing";
        $this->templates->admin($data);
    }

    function update_supplier_packing() {

        $supplier_packing_id = $this->uri->segment(3);

        $supplier_product_unit = $this->input->post('supplier_product_unit');
        $supplier_quantity = $this->input->post('supplier_product_quantity');
        
        $data = array
            (
            'supplier_product_unit' => $supplier_product_unit,
            'supplier_quantity' => $supplier_quantity
        );

        $this->Admin_model->update_supplier_packing($data, $supplier_packing_id);

        $this->session->set_flashdata('success', 'Supplier Packing Updated Successfully');
        redirect("import/edit_supplier_packing/$supplier_packing_id");
    }

    public function delete_supplier_packing() {

        $supplier_packing_id = $this->uri->segment(3);
        $this->Admin_model->delete_supplier_packing($supplier_packing_id);
        $this->session->set_flashdata('success', 'Supplier Packing Deleted Successfully');
        redirect("import/view_supplier_packing");
    }

// Supplier Packing End

// Distribution Packing Start

    function new_distribution_packing() {

        $data['product'] = $this->Admin_model->get_product_info();
        $data['view_file'] = "create_distribution_packing";
        $this->templates->admin($data);
    }

    function view_distribution_packing() {

        $data['distribution_packing'] = $this->Admin_model->get_distribution_packing_info();
        $data['view_file'] = "view_distribution_packing";
        $this->templates->admin($data);
    }

    function get_product_import_distribution() {
        $product_id = $this->input->post('product_id');
       // $data['supplier_product_unit'] = $this->Admin_model->get_supplier_product_unit($product_id);
        
        $product_id_code = $this->input->post('product_id_code');
        if ($product_id_code == '') {
            $data['product'] = $this->Admin_model->get_product_info();
            $data['product_info'] = $this->Admin_model->get_product_distribution($product_id);
        } else {
            $data['product'] = $this->Admin_model->get_product_info();
            $data['product_info'] = $this->Admin_model->get_product_distribution($product_id_code);
        }

        //echo json_encode($data);
        $data['view_file'] = "create_distribution_packing_action";
        $this->templates->admin($data);
    }

    function insert_distribution_packing() {

        $product_id = $this->input->post('product_id');

        $distribution_product_unit = $this->input->post('distribution_product_unit');
        $distribution_quantity = $this->input->post('distribution_product_quantity');
        $supplier_quantity = $this->input->post('supplier_product_quantity');
        $supplier_distribution_quantity = $distribution_quantity * $supplier_quantity;
        $data = array
            (
            'product_id' => $product_id,
            'distribution_product_unit ' => $distribution_product_unit,
            'distribution_quantity' => $distribution_quantity,
            'supplier_distribution_quantity' => $supplier_distribution_quantity
            
        );

        $this->Admin_model->insert_distribution_packing($data);

        $this->session->set_flashdata('success', 'Distribution Packing Successfully');
        redirect('import/view_distribution_packing');
    }

    function edit_distribution_packing() {
        $distribution_packing_id = $this->uri->segment(3);
        $data['distribution_packing'] = $this->Admin_model->get_distribution_packing_info_edit($distribution_packing_id);
        $data['view_file'] = "edit_distribution_packing";
        $this->templates->admin($data);
    }

    function update_distribution_packing() {

        $distribution_packing_id = $this->uri->segment(3);

        $distribution_product_unit = $this->input->post('distribution_product_unit');
        $distribution_quantity = $this->input->post('distribution_product_quantity');
       $data = array
            (
            'distribution_product_unit ' => $distribution_product_unit,
            'distribution_quantity' => $distribution_quantity,
            
        );

        $this->Admin_model->update_distribution_packing($data, $distribution_packing_id);

        $this->session->set_flashdata('success', 'Distribution Packing Updated Successfully');
        redirect("import/edit_distribution_packing/$distribution_packing_id");
    }

    public function delete_distribution_packing() {

        $distribution_packing_id = $this->uri->segment(3);
        $this->Admin_model->delete_distribution_packing($distribution_packing_id);
        $this->session->set_flashdata('success', 'Distribution Packing Deleted Successfully');
        redirect("import/view_distribution_packing");
    }

    public function delete_all_distribution() {
        $distribution_packing_id = $this->input->get_post('checkbox');

        $this->Admin_model->delete_all_distribution_packing($distribution_packing_id);

        $this->session->set_flashdata('success', 'All Packing Deleted Successfully');
        redirect("import/view_distribution_packing");
    }

// Distribution Packing End  
// //    Import from invoice start
//
//    function new_import() {
//        $data['product'] = $this->Admin_model->get_product_info();
//        $data['view_file'] = "create_import";
//        $this->templates->admin($data);
//    }
//
//    function get_product_import() {
//        $product_id = $this->input->post('product_id');
//        $product_id_code = $this->input->post('product_id_code');
//        if ($product_id_code == '') {
//            $data['product'] = $this->Admin_model->get_product_info();
//            $data['product_info'] = $this->Admin_model->get_product_initial($product_id);
//        } else {
//            $data['product'] = $this->Admin_model->get_product_info();
//            $data['product_info'] = $this->Admin_model->get_product_initial($product_id_code);
//        }
//
//        //echo json_encode($data);
//        $data['view_file'] = "create_import_action";
//        $this->templates->admin($data);
//    }
//
//    function insert_import() {
//
//
//        $product_id = $this->input->post('product_id');
//        $batch_no = rand();
//        $type = "Invoice Import";
//
//        $documents_no = $this->input->post('documents_no');
//        $supplier_name = $this->input->post('supplier_name');
//        $product = $this->input->post('product');
//        $brand = $this->input->post('brand');
//        $origin = $this->input->post('origin');
//        $product_name = $this->input->post('product_name');
//        $product_code = $this->input->post('product_code');
//        $ingradient = $this->input->post('ingradient');
//        $entry_date = $this->input->post('entry_date');
//        $product_unit = $this->input->post('product_unit');
//        $product_price = $this->input->post('product_price');
//        $production_date = $this->input->post('production_date');
//        $expiery_date = $this->input->post('expiery_date');
//        $lost_damage = $this->input->post('lost_damage');
//        $product_description = $this->input->post('product_description');
//        $author = $this->input->post('author');
//
//
//
//        $data = array
//            (
//            'product_id' => $product_id,
//            'batch_no' => $batch_no,
//            'documents_no' => $documents_no,
//            'supplier_name' => $supplier_name,
//            'product' => $product,
//            'brand' => $brand,
//            'origin' => $origin,
//            'product_name' => $product_name,
//            'product_code' => $product_code,
//            'ingradient' => $ingradient,
//            'entry_date' => $entry_date,
//            'product_unit' => $product_unit,
//            'product_price' => $product_price,
//            'production_date' => $production_date,
//            'expiery_date' => $expiery_date,
//            'lost_damage' => $lost_damage,
//            'product_description' => $product_description,
//            'author' => $author,
//            'type' => $type
//        );
//        $this->Admin_model->insert_import_invoice($data);
//
//
//
//        $this->session->set_flashdata('success', 'Product Imported Successfully');
//        redirect('import/view_import');
//    }
//
//    function view_import() {
//
//        $data['import_invoice'] = $this->Admin_model->get_import_invoice_info();
//        $data['view_file'] = "view_import";
//        $this->templates->admin($data);
//    }
//
//    function edit_import() {
//        $import_invoice_id = $this->uri->segment(3);
//        $data['import_invoice'] = $this->Admin_model->get_import_invoice_info_edit($import_invoice_id);
//        $data['view_file'] = "edit_import";
//        $this->templates->admin($data);
//    }
//
////    function update_import() {
////        $import_invoice_id = $this->uri->segment(3);
////       
////        $supplier_name = $this->input->post('supplier_name');
////        $documents_no = $this->input->post('documents_no');
////        $input_date = $this->input->post('input_date');
////        $product = $this->input->post('product');
////        $brand = $this->input->post('brand');
////        $origin = $this->input->post('origin');
////        $ingradient = $this->input->post('ingradient');
////        $production_date = $this->input->post('production_date');
////        $expiery_date = $this->input->post('expiery_date');
////        $lost_damage = $this->input->post('lost_damage');
////        $comments = $this->input->post('comments');
////        $author = $this->input->post('author');
////        
////        $batch_no = $this->input->post('batch_no');
////       
////        $data = array
////                    (
////                        'supplier_name' => $supplier_name,
////                        'documents_no' => $documents_no,
////                        'batch_no'=>$batch_no,
////                        'input_date' => $input_date,
////                        'product' => $product,
////                        'brand' => $brand,
////                        'origin' => $origin,
////                        'ingradient' => $ingradient,
////                        'production_date' => $production_date,
////                        'expiery_date' => $expiery_date,
////                        'lost_damage' => $lost_damage,
////                        'comments' => $comments,
////                        'author' => $author
////                       
////                        
////                    );
////                $this->Admin_model->update_import_invoice($data,$import_invoice_id);
////            
////        
////
////        $this->session->set_flashdata('success', 'Product Updated Successfully');
////        redirect("import/edit_import/$import_invoice_id");
////    }
//    public function delete_import() {
//
//        $import_invoice_id = $this->uri->segment(3);
//        $this->Admin_model->delete_import_invoice($import_invoice_id);
//        $this->session->set_flashdata('success', 'Product Deleted Successfully');
//        redirect("import/view_import/$import_invoice_id");
//    }
//
//    public function delete_all_import() {
//        $import_invoice_id = $this->input->get_post('checkbox');
//
//        $this->Admin_model->delete_all_import($import_invoice_id);
//
//        $this->session->set_flashdata('success', 'Product Deleted Successfully');
//        redirect("import/view_import");
//    }
//
//    //    Import from invoice end
//    //    
//// Stock Import Start
//
//    function new_stock_import() {
//
//        $data['product'] = $this->Admin_model->get_product_info();
//        $data['view_file'] = "create_stock_import";
//        $this->templates->admin($data);
//    }
//
//    function get_product_initial() {
//        $product_id = $this->input->post('product_id');
//        $product_id_code = $this->input->post('product_id_code');
//        if ($product_id_code == '') {
//            $data['product'] = $this->Admin_model->get_product_info();
//            $data['product_info'] = $this->Admin_model->get_product_initial($product_id);
//        } else {
//            $data['product'] = $this->Admin_model->get_product_info();
//            $data['product_info'] = $this->Admin_model->get_product_initial($product_id_code);
//        }
//
//        //echo json_encode($data);
//        $data['view_file'] = "create_stock_import_action";
//        $this->templates->admin($data);
//    }
//
//    function insert_stock_import() {
//
//        $product_id = $this->input->post('product_id');
//        $batch_no = rand();
//        $type = "Initial Import";
//
//        $documents_no = $this->input->post('documents_no');
//        $product = $this->input->post('product');
//        $brand = $this->input->post('brand');
//        $origin = $this->input->post('origin');
//        $product_name = $this->input->post('product_name');
//        $product_code = $this->input->post('product_code');
//        $ingradient = $this->input->post('ingradient');
//        $entry_date = $this->input->post('entry_date');
//        $product_unit = $this->input->post('product_unit');
//        $product_price = $this->input->post('product_price');
//        $production_date = $this->input->post('production_date');
//        $expiery_date = $this->input->post('expiery_date');
//        $lost_damage = $this->input->post('lost_damage');
//        $product_description = $this->input->post('product_description');
//        $author = $this->input->post('author');
//
//
//
//        $data = array
//            (
//            'product_id' => $product_id,
//            'batch_no' => $batch_no,
//            'documents_no' => $documents_no,
//            'product' => $product,
//            'brand' => $brand,
//            'origin' => $origin,
//            'product_name' => $product_name,
//            'product_code' => $product_code,
//            'ingradient' => $ingradient,
//            'entry_date' => $entry_date,
//            'product_unit' => $product_unit,
//            'product_price' => $product_price,
//            'production_date' => $production_date,
//            'expiery_date' => $expiery_date,
//            'lost_damage' => $lost_damage,
//            'product_description' => $product_description,
//            'author' => $author,
//            'type' => $type
//        );
//
//        $this->Admin_model->insert_import_stock($data);
//
//        $this->session->set_flashdata('success', 'Initial Product Imported Successfully');
//        redirect('import/view_stock_import');
//    }
//
//    function view_stock_import() {
//
//        $data['import_stock'] = $this->Admin_model->get_import_stock_info();
//        $data['view_file'] = "view_stock_import";
//        $this->templates->admin($data);
//    }
//
//    function edit_stock_import() {
//        $import_stock_id = $this->uri->segment(3);
//        $data['import_stock'] = $this->Admin_model->get_stock_import_invoice_info_edit($import_stock_id);
//        $data['view_file'] = "edit_stock_import";
//        $this->templates->admin($data);
//    }
//
////    function update_stock_import() {
////        
////        $import_stock_id = $this->uri->segment(3);
////       
////        $documents_no = $this->input->post('documents_no');
////        $input_date = $this->input->post('input_date');
////        $product = $this->input->post('product');
////        $brand = $this->input->post('brand');
////        $origin = $this->input->post('origin');
////        $ingradient = $this->input->post('ingradient');
////        $production_date = $this->input->post('production_date');
////        $expiery_date = $this->input->post('expiery_date');
////        $lost_damage = $this->input->post('lost_damage');
////        $comments = $this->input->post('comments');
////        $author = $this->input->post('author');
////        
////        $batch_no = $this->input->post('batch_no');
////       
////        
////            
////                $data = array
////                    (
////                        'documents_no' => $documents_no,
////                        'batch_no'=>$batch_no,
////                        'input_date' => $input_date,
////                        'product' => $product,
////                        'brand' => $brand,
////                        'origin' => $origin,
////                        'ingradient' => $ingradient,
////                        'production_date' => $production_date,
////                        'expiery_date' => $expiery_date,
////                        'lost_damage' => $lost_damage,
////                        'comments' => $comments,
////                        'author' => $author
////                       
////                        
////                    );
////                $this->Admin_model->update_stock_import_invoice($data,$import_stock_id);
////            
////        
////        $this->session->set_flashdata('success', 'Product Updated Successfully');
////        redirect("import/edit_stock_import/$import_stock_id");
////    }
//    public function delete_stock_import() {
//
//        $import_stock_id = $this->uri->segment(3);
//        $this->Admin_model->delete_stock_import_invoice($import_stock_id);
//        $this->session->set_flashdata('success', 'Product Deleted Successfully');
//        redirect("import/view_stock_import/$import_stock_id");
//    }
//
//    public function delete_all_stock_import() {
//        $import_stock_id = $this->input->get_post('checkbox');
//
//        $this->Admin_model->delete_all_stock_import($import_stock_id);
//
//        $this->session->set_flashdata('success', 'Product Deleted Successfully');
//        redirect("import/view_stock_import");
//    }
//
//// Stcok Import End  
// package start
//    function new_package() {
//        $data['import_invoice'] = $this->Admin_model->get_import_invoice_info();
//        $data['import_stock'] = $this->Admin_model->get_import_stock_info();
//        $data['view_file'] = "create_package";
//        $this->templates->admin($data);
//    }
//    
//    function insert_package()
//    {
//        $package_name= $this->input->post('package_name');
//        $product_name= $this->input->post('product_name');
//        $author= $this->input->post('author');
//        $imported_product_id = $this->input->post('imported_product_id');
//        $stock_product_id = $this->input->post('stock_product_id');
//        
//        $data = array
//                (
//                   'package_name'=>$package_name,
//                    'package_product_name'=>$product_name,
//                    'author'=>$author
//                );
//        $package_id = $this->Admin_model->insert_package($data);
//        
//         $cpt = count($imported_product_id);
//          for ($i = 0; $i < $cpt; $i++) {
//            $imported_product_id_2 = $imported_product_id[$i];
//
//            $data2 = array
//                (
//                'package_id'=>$package_id,
//                'invoice_imported_product_id '=>$imported_product_id_2
//            );
//      
//        $this->Admin_model->insert_package_imported_product($data2);
//          }
//        
//        $cpt2 = count($stock_product_id);
//          for ($i = 0; $i < $cpt2; $i++) {
//            $stock_product_id_2 = $stock_product_id[$i];
//
//            $data3 = array
//                (
//                'package_id'=>$package_id,
//                   'stock_imported_product_id'=>$stock_product_id_2
//            );
//        
//        $this->Admin_model->insert_package_stock_product($data3);
//          }
//        $this->session->set_flashdata('success', 'Package created Successfully');
//        redirect('import/view_package');
//    }
//    
//    function view_package() {
//        $data['package'] = $this->Admin_model->get_package_info();
//        $data['view_file'] = "view_package";
//        $this->templates->admin($data);
//    }
//
//    function edit_package()
//
//    {
//       $package_id = $this->uri->segment(3);
//        $data['import_invoice'] = $this->Admin_model->get_import_invoice_info();
//        $data['import_stock'] = $this->Admin_model->get_import_stock_info();
//        
//        $data['package_imported'] = $this->Admin_model->get_imported_package_info_edit($package_id);
//        $data['package_stock_imported'] = $this->Admin_model->get_stock_imported_package_info_edit($package_id);
//        $data['package'] = $this->Admin_model->get_package_info_edit($package_id);
//        $data['view_file'] = "edit_package";
//        $this->templates->admin($data);
//    }
//    
//    function update_package()
//    {
//        $package_id = $this->input->post('package_id');
//        
//        $package_name= $this->input->post('package_name');
//        $product_name= $this->input->post('product_name');
//        $author= $this->input->post('author');
//        $imported_product_id = $this->input->post('imported_product_id');
//        $stock_product_id = $this->input->post('stock_product_id');
//        
//        $this->Admin_model->delete_package($package_id);
//        $this->Admin_model->delete_package_imported_product($package_id);
//        $this->Admin_model->delete_package_stock_product($package_id);
//        
//        $data = array
//                (
//                   'package_name'=>$package_name,
//                    'package_product_name'=>$product_name,
//                    'author'=>$author
//                );
//         $package_id_new= $this->Admin_model->insert_package($data);
//        
//         
//         
//         $cpt = count($imported_product_id);
//          for ($i = 0; $i < $cpt; $i++) {
//            $imported_product_id_2 = $imported_product_id[$i];
//
//            $data2 = array
//                (
//                'package_id'=>$package_id_new,
//                'invoice_imported_product_id '=>$imported_product_id_2
//            );
//      
//        $this->Admin_model->insert_package_imported_product($data2);
//          }
//        
//        $cpt2 = count($stock_product_id);
//          for ($i = 0; $i < $cpt2; $i++) {
//            $stock_product_id_2 = $stock_product_id[$i];
//
//            $data3 = array
//                (
//                'package_id'=>$package_id_new,
//                   'stock_imported_product_id'=>$stock_product_id_2
//            );
//        
//        $this->Admin_model->insert_package_stock_product($data3);
//          }
//          
//        $this->session->set_flashdata('success', 'Package Updated Successfully');
//        redirect("import/edit_package/$package_id_new");
//    }
//    
//    public function delete_package() {
//        
//        $package_id = $this->uri->segment(3);
//        $this->Admin_model->delete_package($package_id);
//        $this->session->set_flashdata('success', 'Package Deleted Successfully');
//        redirect("import/view_package");
//        
//    }
// package end
}
