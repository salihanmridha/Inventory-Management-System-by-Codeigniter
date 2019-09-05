<?php
class Sales extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
         $this->load->module('templates');
        $this->load->model('Admin_model');
        $this->load->helper('url');
        date_default_timezone_set('Asia/Dhaka');
        $this->load->library('numbertowords');
    }

    // customer start

     function view_customer()
    {
        $data['view_customer'] = $this->Admin_model->get_customer_info();
        $data['view_file'] = "view_customer";
        $this->templates->admin($data);

    }
     function new_customer()
    {

        $data['view_file'] = "create_customer";
        $this->templates->admin($data);

    }

    function insert_customer()
    {
        $name= $this->input->post('name');
        $email= $this->input->post('email');
        $phone= $this->input->post('phone');
        $address= $this->input->post('address');

        $data= array
                (
                    'name'=>$name,
                    'email'=>$email,
                    'phone'=>$phone,
                    'address'=>$address
                );
        $this->Admin_model->insert_customer($data);

        $this->session->set_flashdata('success', 'Customer Created Successfully');
        redirect('sales/view_customer');
    }
     function edit_customer()

    {
        $customer_id = $this->uri->segment(3);
        $data['customer'] = $this->Admin_model->get_customer_info_edit($customer_id);
        $data['view_file'] = "edit_customer";
        $this->templates->admin($data);
    }
    function update_customer()
    {
       $customer_id = $this->uri->segment(3);

        $name= $this->input->post('name');
        $email= $this->input->post('email');
        $phone= $this->input->post('phone');
        $address= $this->input->post('address');

        $data= array
                (
                    'name'=>$name,
                    'email'=>$email,
                    'phone'=>$phone,
                    'address'=>$address
                );
        $this->Admin_model->update_customer($data,$customer_id);

        $this->session->set_flashdata('success', 'Customer Updated Successfully');
        redirect("sales/edit_customer/$customer_id");
    }
    public function delete_customer() {

        $customer_id = $this->uri->segment(3);
        $this->Admin_model->delete_customer($customer_id);
        $this->session->set_flashdata('success', 'Customer Deleted Successfully');
        redirect("sales/view_customer");

    }



    // Customer End

    //Customer Payment Start

     function view_customer_payment()
    {
        $data['view_customer_payment'] = $this->Admin_model->get_customer_payment_info();
        $data['view_file'] = "view_customer_payment";
        $this->templates->admin($data);

    }
     function new_customer_payment()
    {
        $data['customer'] = $this->Admin_model->get_customer_info();
        $data['view_file'] = "create_customer_payment";
        $this->templates->admin($data);

    }

    function insert_customer_payment()
    {
        $customer_id= $this->input->post('customer_id');
        $deposite_amount= $this->input->post('deposite_amount');
        $deposite_month = date('m');
        $deposite_year = date('Y');
        $deposite_date = date('Y-m-d');
        $deposite_receipt_no = rand();


//        $existing_deposite = $this->Admin_model->get_existing_deposite($customer_id);
//        $deposite_amount_2 = $existing_deposite + $deposite_amount;

        $data= array
            (
            'customer_id' => $customer_id,
            'deposite_amount'=>$deposite_amount,
            'deposite_month'=>$deposite_month,
            'deposite_year'=>$deposite_year,
            'deposite_date'=>$deposite_date,
            'deposite_receipt_no'=>$deposite_receipt_no
            );
        $this->Admin_model->insert_customer_deposite($data);



        $this->session->set_flashdata('success', 'Deposite Added Successfully');
        redirect('sales/view_customer_payment');
    }

     function edit_customer_payment()
    {
        $customer_id = $this->uri->segment(3);

        $data['edit_customer_payment'] = $this->Admin_model->edit_customer_payment_info($customer_id);
        $data['view_file'] = "edit_customer_payment";
        $this->templates->admin($data);

    }

    function update_customer_payment()
    {
        $customer_id = $this->uri->segment(3);
        $deposite_amount= $this->input->post('deposite_amount');
        $deposite_date = date('Y-m-d');

            $data= array
                (
                    'deposite_amount'=>$deposite_amount,
                    'deposite_date'=>$deposite_date
                );

                $this->Admin_model->update_customer_payment_full($data,$customer_id);

        $this->session->set_flashdata('success', 'Payment Updated Successfully');
        redirect("sales/edit_customer_payment/$customer_id");
    }




    //Customer Payment End


    //Sales start


//     function sales_print()
//    {
//        //$sales_id = $this->uri->segment(3);
//        $data['view_sales'] = $this->Admin_model->get_sales_info();
//        $data['view_file'] = "view_sales";
//        $this->templates->admin($data);
//
//    }
//
//    function sales_return()
//    {
//        $sales_id = $this->uri->segment(3);
//
//        $sales_return= 1;
//
//        $data=array
//                (
//                    'sales_return'=>$sales_return
//                );
//        $this->Admin_model->update_sales($data,$sales_id);
//
//        $sale_distribution_quantity = $this->Admin_model->get_sale_distribution_quantity($sales_id);
//        $available_distribution_quantity= $this->Admin_model->get_available_distribution_quantity($sales_id);
//        $total_available_distribution_quantity = $sale_distribution_quantity + $available_distribution_quantity;
//        $distribution_packing_id =  $this->Admin_model->get_distribution_packing_id($sales_id);
//        $data2 = array
//                    (
//                      'available_distribution_quantity' =>  $total_available_distribution_quantity
//                    );
//        $this->Admin_model->update_available_distribution_quantity($data2,$distribution_packing_id);
//
//        $this->session->set_flashdata('success', 'Return Successfully');
//        redirect('sales/view_sales');
//
//    }

     function view_sales()
    {
        $data['view_sales'] = $this->Admin_model->get_sales_info();
        $data['view_file'] = "view_sales";
        $this->templates->admin($data);

    }

     function sales_invoice_print()
    {
        $sales_invoice_id = $this->uri->segment(3);

        $data['ledger'] = $this->input->post('ledger');

        $customer_id = $this->Admin_model->get_sales_info_customer_id($sales_invoice_id);
        $data['debit_total'] = $this->Admin_model->get_ledger_customer_wise_debit_total($customer_id);
        $data['credit_total'] = $this->Admin_model->get_ledger_customer_wise_credit_total($customer_id);
        $data['ledger_balance'] = $data['credit_total'] - $data['debit_total'];

         $data['view_sales'] = $this->Admin_model->get_sales_info_print($sales_invoice_id);
         $data['customer_name'] = $this->Admin_model->get_sales_info_customer($sales_invoice_id);
         $data['grand_total'] = $this->Admin_model->get_sales_info_grand_total($sales_invoice_id);

         $data['customer_payment'] = $this->Admin_model->get_sales_customer_pay($sales_invoice_id);
         $data['balance'] = $data['grand_total'] - $data['customer_payment'];

        $data['view_file'] = "view_sales_invoice_print";
        $this->templates->admin($data);



    }

     function view_customer_payment_final()
    {
        $customer_id = $this->session->userdata('customer_id');
        $data['get_customer'] = $this->Admin_model->get_get_customer_payment($customer_id);
        $data['view_file'] = "customer_payment";
        $this->templates->admin($data);

    }

     function view_customer_payment_single()
    {
        $customer_id = $this->uri->segment(3);
        $data['get_customer'] = $this->Admin_model->get_get_customer_payment($customer_id);
        $data['view_file'] = "customer_payment_single";
        $this->templates->admin($data);

    }

    function new_sales()
    {
        $data['view_customer'] = $this->Admin_model->get_customer_info();
        $data['distribution_packing'] = $this->Admin_model->get_distribution_packing_info();
        $data['unconfirmed_sale_count'] = $this->Admin_model->get_unconfirmed_sale_info_count();

        $data['unconfirmed_sale'] = $this->Admin_model->get_unconfirmed_sale_list();
        $data['customer'] = $this->Admin_model->get_customer_sale();

        $data['total_quantity'] = $this->Admin_model->get_total_quantity();
        $data['total_price'] = $this->Admin_model->get_total_price();
        $data['invoice_no'] = $this->Admin_model->get_invoice_no();

        $data['unconfirmed_final_sale'] = $this->Admin_model->unconfirmed_final_sale();

        $data['view_file'] = "create_sales";
        $this->templates->admin($data);

    }

//    function unconfirmed_sale_list() {
//        $data = $this->Admin_model->get_unconfirmed_sale_list();
//        echo json_encode($data);
//    }

    function insert_sales()
    {

        $customer_id= $this->input->post('customer_id');


        $sale_quantity = $this->input->post('sale_quantity');
        $import_code_no = $this->input->post('import_code_no');

        $product_price = $this->Admin_model->get_product_price($import_code_no);
        $product_id = $this->Admin_model->get_product_id($import_code_no);
        $sale_quantity_price = $product_price * $sale_quantity;

        $month = date('m');
        $year = date('Y');
        $date = date('Y-m-d');

        $sales_invoice_no= rand();

        $data = array
                (
                    'customer_id'=>$customer_id,
                    'sale_quantity'=>$sale_quantity,
                    'sale_quantity_price'=>$sale_quantity_price,
                    'import_code_no'=> $import_code_no,
                    'sales_invoice_no_1'=>$sales_invoice_no,
                    'product_id'=>$product_id
                  );

         $asles_id =  $this->Admin_model->insert_sales($data);

         $data4= array
                 (
                    'sales_id'=>$asles_id,
                    'sales_report_month'=>$month,
                    'sales_report_year'=>$year,
                    'sales_report_date'=>$date,
                 );
        $this->Admin_model->insert_sales_report($data4);

//         $data2= array
//                (
//                    'customer_id'=>$customer_id,
//                    'al_quantity'=>$sale_quantity,
//                    'import_code_no'=> $import_code_no
//                  );
//          $this->Admin_model->insert_product_allocation($data2);
//
         $get_previous_quantity = $this->Admin_model->get_previous_quantity($import_code_no);

         $new_quantity = $get_previous_quantity - $sale_quantity;
         $new_quantity_price = $product_price * $new_quantity;

         $data3= array
                 (
                    'quantity'=>$new_quantity,
                    'quantity_price'=>$new_quantity_price
                 );

        $this->Admin_model->update_unconfirm_import($data3,$import_code_no);
//
        redirect("sales/new_sales");
     // echo json_encode($insert,$insert2,$update);
        //echo json_encode($insert);

    }


    function final_sale() {
        $unconfirmed_sales_id = $this->input->post('sales_id');
        $unconfirmed_sales_id_2 = json_encode($unconfirmed_sales_id);

        $sales_batch_no = rand();

        $data = array
            (
            'sales_id' => $unconfirmed_sales_id_2,
            'sales_batch_no' => $sales_batch_no
        );

       $sales_confirm_id = $this->Admin_model->insert_final_sale($data);

        $json_confirmed_sales_id = $this->Admin_model->get_confirmed_sales_id($sales_confirm_id);

        $confirmed_sales_id = json_decode($json_confirmed_sales_id);

        $type = 1;

        $data2 = array(
            'sales_confirm_type' => $type,
            'sales_confirm_id' => $sales_confirm_id
        );

        $this->Admin_model->update_unconfirmed_sales($data2, $confirmed_sales_id);

        $batch_no = $this->Admin_model->get_sales_batch_no($sales_confirm_id);
        $sales_total_quantity = $this->Admin_model->get_sales_total_quantity($sales_confirm_id);
        $sales_total_price = $this->Admin_model->get_sales_total_price($sales_confirm_id);

        $sales_invoice_no= $this->Admin_model->get_sales_invoice_no($sales_confirm_id);
        $sales_customer_id= $this->Admin_model->get_sales_customer_id($sales_confirm_id);
        $sales_invoice_date= date('Y-m-d');
        $sales_invoice_month = date('m');
        $sales_invoice_year = date('Y');
        $data3 = array
            (
            'sales_confirm_id' => $sales_confirm_id,
            'sales_batch_no' => $batch_no,
            'sales_total_quantity' => $sales_total_quantity,
            'sales_total_price' => $sales_total_price,
            'sales_invoice_no' => $sales_invoice_no,
            'sales_invoice_date' => $sales_invoice_date,
            'sales_invoice_month' => $sales_invoice_month,
            'sales_invoice_year' => $sales_invoice_year,
            'customer_id'=>$sales_customer_id
        );
        $this->Admin_model->insert_sales_invoice($data3);

        $customer_id = $this->Admin_model->get_customer_id($sales_confirm_id);
        $customer_id_single = $this->Admin_model->get_customer_id_single($sales_confirm_id);
        $this->session->set_userdata('customer_id', $customer_id_single);

        $previous_payable_amount = $this->Admin_model->get_previous_payable_price($customer_id_single);
        $new_payable = $this->Admin_model->get_payable_price($customer_id_single);
        $final_payable = $previous_payable_amount  + $new_payable;
        $data4 = array
                (
                    'payable_amount'=>$final_payable
                );

        $this->Admin_model->update_customer_payment_payable($data4, $customer_id_single);

        $this->Admin_model->delete_product_allocation($customer_id);

        $this->session->set_flashdata('success', 'Product Sold Successfully');
        redirect("sales/view_customer_payment_final");
    }

    function final_payment()
    {
        $customer_id = $this->uri->segment(3);

        $deposite_amount= $this->input->post('deposite_amount');
        $payable_amount= $this->input->post('payable_amount');

        if($deposite_amount>=$payable_amount)
        {

        }

        $rest_deposite = $deposite_amount-$payable_amount;



    }

//    function split()
//    {
//
//        $data['view_file'] = "view_split";
//        $this->templates->admin($data);
//
//    }
//    function new_split()
//    {
//
//        $data['view_file'] = "create_split";
//        $this->templates->admin($data);
//
//    }
//
    //Sales end

}
