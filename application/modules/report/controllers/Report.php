<?php
class Report extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
         $this->load->module('templates');
        $this->load->model('Admin_model');
        $this->load->helper('url');
        $this->load->library('numbertowords');
    }

//  Import/Purchase Report Start

     function import_supplier_monthly_report()
    {
        $data['supplier'] = $this->Admin_model->get_supplier();
        $data['view_file'] = "import_supplier_monthly_report";
        $this->templates->admin($data);

    }


    function generate_import_supplier_monthly_report()
    {
        $supplier_id = $this->input->post('supplier_id');
        $month = $this->input->post('month');
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $data['month'] = $dateObj->format('F');
        $year = $this->input->post('year');
        $data['year'] = $year;
        $data['monthly_report'] = $this->Admin_model->get_import_supplier_monthly_report($month,$year,$supplier_id);
        $data['grand_total'] = $this->Admin_model->get_import_supplier_monthly_report_grand_total($month,$year,$supplier_id);
        $data['grand_total_qty'] = $this->Admin_model->get_import_supplier_monthly_report_grand_qty($month,$year,$supplier_id);
        $data['supplier'] = $this->Admin_model->get_supplier_monthly_report($month,$year,$supplier_id);
        $data['view_file'] = "view_import_supplier_monthly_report";
        $this->templates->admin($data);

    }


     function import_supplier_yearly_report()
    {
        $data['supplier'] = $this->Admin_model->get_supplier();
        $data['view_file'] = "import_supplier_yearly_report";
        $this->templates->admin($data);

    }

     function generate_import_supplier_yearly_report()
    {
        $supplier_id = $this->input->post('supplier_id');
        $year = $this->input->post('year');
        $data['monthly_report'] = $this->Admin_model->get_import_supplier_yearly_report($year,$supplier_id);
        $data['grand_total'] = $this->Admin_model->get_import_supplier_yearly_report_grand_total($year,$supplier_id);
        $data['grand_total_qty'] = $this->Admin_model->get_import_supplier_yearly_report_grand_qty($year,$supplier_id);
        $data['supplier'] = $this->Admin_model->get_supplier_yearly_report($year,$supplier_id);
        $data['view_file'] = "view_import_supplier_yearly_report";
        $this->templates->admin($data);
    }

     function import_supplier_custom_report()
    {
        $data['supplier'] = $this->Admin_model->get_supplier();
        $data['view_file'] = "import_supplier_custom_report";
        $this->templates->admin($data);

    }

     function generate_import_supplier_custom_report()
    {
        $supplier_id = $this->input->post('supplier_id');
        $from = $this->input->post('from');
        $to = $this->input->post('to');
        $data['from']= $from;
        $data['to']=$to;
        $data['monthly_report'] = $this->Admin_model->get_import_supplier_custom_report($from,$to,$supplier_id);
        $data['grand_total'] = $this->Admin_model->get_import_supplier_custom_report_grand_total($from,$to,$supplier_id);
        $data['grand_total_qty'] = $this->Admin_model->get_import_supplier_custom_report_grand_qty($from,$to,$supplier_id);
        $data['supplier'] = $this->Admin_model->get_supplier_custom_report($from,$to,$supplier_id);

        $data['view_file'] = "view_import_supplier_custom_report";
        $this->templates->admin($data);
    }

     function import_product_monthly_report()
    {
        $data['product'] = $this->Admin_model->get_product();
        $data['view_file'] = "import_product_monthly_report";
        $this->templates->admin($data);

    }

    function generate_import_product_monthly_report()
    {
        $product_id = $this->input->post('product_id');
        $month = $this->input->post('month');
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $data['month'] = $dateObj->format('F');
        $year = $this->input->post('year');
        $data['year'] = $year;
        $data['monthly_report'] = $this->Admin_model->get_import_product_monthly_report($month,$year,$product_id);
        $data['grand_total'] = $this->Admin_model->get_import_product_monthly_report_grand_total($month,$year,$product_id);
        $data['grand_total_qty'] = $this->Admin_model->get_import_product_monthly_report_grand_qty($month,$year,$product_id);
        $data['product'] = $this->Admin_model->get_product_monthly_report($month,$year,$product_id);
        $data['view_file'] = "view_import_product_monthly_report";
        $this->templates->admin($data);
    }

     function import_product_yearly_report()
    {
        $data['product'] = $this->Admin_model->get_product();
        $data['view_file'] = "import_product_yearly_report";
        $this->templates->admin($data);

    }

     function generate_import_product_yearly_report()
    {
        $product_id = $this->input->post('product_id');
        $year = $this->input->post('year');
        $data['year'] = $year;
        $data['monthly_report'] = $this->Admin_model->get_import_product_yearly_report($year,$product_id);
        $data['grand_total'] = $this->Admin_model->get_import_product_yearly_report_grand_total($year,$product_id);
        $data['grand_total_qty'] = $this->Admin_model->get_import_product_yearly_report_grand_qty($year,$product_id);
        $data['product'] = $this->Admin_model->get_product_yearly_report($year,$product_id);
        $data['view_file'] = "view_import_product_yearly_report";
        $this->templates->admin($data);
    }

     function import_product_custom_report()
    {
        $data['product'] = $this->Admin_model->get_product();
        $data['view_file'] = "import_product_custom_report";
        $this->templates->admin($data);

    }

    function generate_import_product_custom_report()
    {
        $product_id = $this->input->post('product_id');
        $from = $this->input->post('from');
        $to = $this->input->post('to');
        $data['from']= $from;
        $data['to']=$to;
        $data['monthly_report'] = $this->Admin_model->get_import_product_custom_report($from,$to,$product_id);
        $data['grand_total'] = $this->Admin_model->get_import_product_custom_report_grand_total($from,$to,$product_id);
        $data['grand_total_qty'] = $this->Admin_model->get_import_product_custom_report_grand_qty($from,$to,$product_id);
        $data['product'] = $this->Admin_model->get_product_custom_report($from,$to,$product_id);

        $data['view_file'] = "view_import_product_custom_report";
        $this->templates->admin($data);
    }


     function all_import_product_report()
    {
        $data['view_file'] = "all_import_product_report";
        $this->templates->admin($data);

    }

     function generate_all_purchase_report_yearly()
    {
        $year = $this->input->post('year');
        $data['year'] = $year;
        $data['monthly_report'] = $this->Admin_model->get_all_import_product_yearly_report($year);
        $data['grand_total'] = $this->Admin_model->get_all_import_product_yearly_report_grand_total($year);
        $data['grand_total_qty'] = $this->Admin_model->get_all_import_product_yearly_report_grand_qty($year);
        $data['view_file'] = "view_all_import_yearly_report";
        $this->templates->admin($data);
    }

    //add by tonmoy
    function generate_all_purchase_report_custom(){
        $from = $this->input->post('from');
        $to = $this->input->post('to');
        $data['from']= $from;
        $data['to']=$to;

        $data['custom_report'] = $this->Admin_model->get_all_import_product_custom_report($from, $to);
        $data['grand_total'] = $this->Admin_model->get_all_import_product_custom_report_grand_total($from, $to);
        $data['grand_total_qty'] = $this->Admin_model->get_all_import_product_custom_report_grand_qty($from, $to);
        $data['view_file'] = "view_all_import_custom_report";
        $this->templates->admin($data);
    }


    function generate_all_purchase_report_monthly(){
        $month = $this->input->post('month');
        $year = $this->input->post('year');
        $data['month']= $month;
        $data['year']=$year;

        $data['month_report'] = $this->Admin_model->get_all_import_product_month_report($month, $year);
        $data['grand_total'] = $this->Admin_model->get_all_import_product_month_report_grand_total($month, $year);
        $data['grand_total_qty'] = $this->Admin_model->get_all_import_product_month_report_grand_qty($month, $year);
        $data['view_file'] = "view_all_import_month_report";
        $this->templates->admin($data);
    }

 //  Import/Purchase Report End


 // Sales Report Start

     function sales_product_wise_report()
    {
        $data['product'] = $this->Admin_model->get_product();
        $data['view_file'] = "sales_product_wise_report";
        $this->templates->admin($data);

    }

    function generate_sales_product_wise_monthly_report()
    {
        $product_id = $this->input->post('product_id');
        $month = $this->input->post('month');
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $data['month'] = $dateObj->format('F');
        $year = $this->input->post('year');
        $data['year'] = $year;

        $data['monthly_report'] = $this->Admin_model->get_sales_product_wise_monthly_report($product_id,$month,$year);
        $data['grand_total'] = $this->Admin_model->get_sales_product_wise_monthly_report_grand_total($month,$year,$product_id);
//        $data['grand_total_qty'] = $this->Admin_model->get_sales_product_wise_monthly_report_grand_qty($month,$year,$product_id);
        $data['product'] = $this->Admin_model->get_sales_product_wise_product_monthly_report($month,$year,$product_id);
        $data['view_file'] = "view_sales_product_wise_monthly_report";
        $this->templates->admin($data);
    }
    function generate_sales_product_wise_yearly_report()
    {
        $product_id = $this->input->post('product_id');
        $year = $this->input->post('year');
        $data['year'] = $year;

        $data['monthly_report'] = $this->Admin_model->get_sales_product_wise_yearly_report($product_id,$year);
        $data['grand_total'] = $this->Admin_model->get_sales_product_wise_yearly_report_grand_total($year,$product_id);
//        $data['grand_total_qty'] = $this->Admin_model->get_sales_product_wise_monthly_report_grand_qty($month,$year,$product_id);
        $data['product'] = $this->Admin_model->get_sales_product_wise_product_yearly_report($year,$product_id);
        $data['view_file'] = "view_sales_product_wise_yearly_report";
        $this->templates->admin($data);
    }
    function generate_sales_product_wise_custom_report()
    {
        $product_id = $this->input->post('product_id');
        $from = $this->input->post('from');
        $FromDate = date("d-m-Y", strtotime($from));
        $data['from'] = $FromDate;
        $to = $this->input->post('to');
        $ToDate = date("d-m-Y", strtotime($to));
        $data['to'] = $ToDate;

        $data['monthly_report'] = $this->Admin_model->get_sales_product_wise_custom_report($product_id,$from,$to);
        $data['grand_total'] = $this->Admin_model->get_sales_product_wise_custom_report_grand_total($from,$to,$product_id);
//        $data['grand_total_qty'] = $this->Admin_model->get_sales_product_wise_monthly_report_grand_qty($month,$year,$product_id);
        $data['product'] = $this->Admin_model->get_sales_product_wise_product_custom_report($from,$to,$product_id);
        $data['view_file'] = "view_sales_product_wise_custom_report";
        $this->templates->admin($data);
    }

     function sales_invoice_wise_report()
    {
        $data['view_file'] = "sales_invoice_wise_report";
        $this->templates->admin($data);

    }

    function generate_sales_invoice_wise_monthly_report()
    {
        $month = $this->input->post('month');
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $data['month'] = $dateObj->format('F');
        $year = $this->input->post('year');
        $data['year'] = $year;

        $data['monthly_report'] = $this->Admin_model->get_sales_invoice_wise_monthly_report($month,$year);
        $data['grand_total'] = $this->Admin_model->get_sales_invoice_wise_monthly_report_grand_total($month,$year);
//        $data['grand_total_qty'] = $this->Admin_model->get_sales_product_wise_monthly_report_grand_qty($month,$year,$product_id);
        $data['view_file'] = "view_sales_invoice_wise_monthly_report";
        $this->templates->admin($data);

    }

    function generate_sales_invoice_wise_yearly_report()
    {
        $year = $this->input->post('year');
        $data['year'] = $year;

        $data['monthly_report'] = $this->Admin_model->get_sales_invoice_wise_yearly_report($year);
        $data['grand_total'] = $this->Admin_model->get_sales_invoice_wise_yearly_report_grand_total($year);
//        $data['grand_total_qty'] = $this->Admin_model->get_sales_product_wise_monthly_report_grand_qty($month,$year,$product_id);
        $data['view_file'] = "view_sales_invoice_wise_yearly_report";
        $this->templates->admin($data);

    }

    function generate_sales_invoice_wise_custom_report()
    {
        $from = $this->input->post('from');
        $FromDate = date("d-m-Y", strtotime($from));
        $data['from'] = $FromDate;
        $to = $this->input->post('to');
        $ToDate = date("d-m-Y", strtotime($to));
        $data['to'] = $ToDate;

        $data['monthly_report'] = $this->Admin_model->get_sales_invoice_wise_custom_report($from,$to);
        $data['grand_total'] = $this->Admin_model->get_sales_invoice_wise_custom_report_grand_total($from,$to);
//        $data['grand_total_qty'] = $this->Admin_model->get_sales_product_wise_monthly_report_grand_qty($month,$year,$product_id);
        $data['view_file'] = "view_sales_invoice_wise_custom_report";
        $this->templates->admin($data);

    }

    function generate_sales_invoice_wise_details_monthly_report()
    {
        $month = $this->input->post('month');
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $data['month'] = $dateObj->format('F');
        $year = $this->input->post('year');
        $data['year'] = $year;

        $data['monthly_report'] = $this->Admin_model->get_sales_invoice_wise_details_monthly_report($month,$year);
        print_r($data['monthly_report']);
        die();
        $data['grand_total'] = $this->Admin_model->get_sales_invoice_wise_details_monthly_report_grand_total($month,$year);
//        $data['grand_total_qty'] = $this->Admin_model->get_sales_product_wise_monthly_report_grand_qty($month,$year,$product_id);
        $data['view_file'] = "view_sales_invoice_wise_details_monthly_report";
        $this->templates->admin($data);

    }

     function sales_supplier_wise_report()
    {
        $data['supplier'] = $this->Admin_model->get_supplier();
         $data['view_file'] = "sales_supplier_wise_report";
        $this->templates->admin($data);

    }

    //add by tonmoy - generate_sales_supplier_wise_monthly_report
    function generate_sales_supplier_wise_monthly_report(){
        $supplier_id = $this->input->post('supplier_id');
        $month = $this->input->post('month');
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $data['month'] = $dateObj->format('F');
        $year = $this->input->post('year');
        $data['year'] = $year;

        $data['monthly_report'] = $this->Admin_model->get_sales_supplier_wise_monthly_report($supplier_id,$month,$year);
        $data['grand_total'] = $this->Admin_model->get_sales_supplier_wise_monthly_report_grand_total($month,$year,$supplier_id);
        //$data['grand_total_qty'] = $this->Admin_model->get_sales_product_wise_monthly_report_grand_qty($month,$year,$product_id);
        $data['product'] = $this->Admin_model->get_sales_supplier_wise_sales_monthly_report($month,$year,$supplier_id);
        $data['view_file'] = "view_sales_supplier_wise_monthly_report";
        $this->templates->admin($data);
    }

    function generate_sales_supplier_wise_yearly_report(){
        $supplier_id = $this->input->post('supplier_id');
        $year = $this->input->post('year');
        $data['year'] = $year;

        $data['monthly_report'] = $this->Admin_model->get_sales_supplier_wise_yearly_report($supplier_id,$year);
        $data['grand_total'] = $this->Admin_model->get_sales_supplier_wise_yearly_report_grand_total($year,$supplier_id);
        //$data['grand_total_qty'] = $this->Admin_model->get_sales_product_wise_monthly_report_grand_qty($month,$year,$product_id);
        $data['product'] = $this->Admin_model->get_sales_supplier_wise_sales_yearly_report($year,$supplier_id);
        $data['view_file'] = "view_sales_supplier_wise_yearly_report";
        $this->templates->admin($data);
    }

    function generate_sales_supplier_wise_custom_report(){
        $supplier_id = $this->input->post('supplier_id');
        $from = $this->input->post('from');
        $FromDate = date("d-m-Y", strtotime($from));
        $data['from'] = $FromDate;
        $to = $this->input->post('to');
        $ToDate = date("d-m-Y", strtotime($to));
        $data['to'] = $ToDate;

        $data['custom_report'] = $this->Admin_model->get_sales_supplier_wise_custom_report($supplier_id,$from, $to);
        $data['grand_total'] = $this->Admin_model->get_sales_supplier_wise_custom_report_grand_total($from, $to,$supplier_id);
        //$data['grand_total_qty'] = $this->Admin_model->get_sales_product_wise_monthly_report_grand_qty($month,$year,$product_id);
        $data['product'] = $this->Admin_model->get_sales_supplier_wise_sales_custom_report($from, $to,$supplier_id);
        $data['view_file'] = "view_sales_supplier_wise_custom_report";
        $this->templates->admin($data);
    }

    //add by tonmoy end

     function sales_cost_profit_wise_report()
    {
        $data['supplier'] = $this->Admin_model->get_supplier();
         $data['view_file'] = "sales_cost_profit_wise_report";
        $this->templates->admin($data);

    }


    // Sales Report End


    // Return Report Start

     function return_product_wise_report()
    {
        $data['product'] = $this->Admin_model->get_product();
        $data['view_file'] = "return_product_wise_report";
        $this->templates->admin($data);

    }

    function generate_return_product_wise_monthly_report()
    {
        $product_id = $this->input->post('product_id');
        $month = $this->input->post('month');
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $data['month'] = $dateObj->format('F');
        $year = $this->input->post('year');
        $data['year'] = $year;

        $data['monthly_report'] = $this->Admin_model->get_return_product_wise_monthly_report($product_id,$month,$year);

        $data['grand_total_return'] = $this->Admin_model->get_return_product_wise_monthly_report_grand_total_return($month,$year,$product_id);
        $data['grand_total'] = $this->Admin_model->get_return_product_wise_monthly_report_grand_total($month,$year,$product_id);
        $data['product'] = $this->Admin_model->get_return_product_wise_product_monthly_report($month,$year,$product_id);
        $data['view_file'] = "view_return_product_wise_monthly_report";
        $this->templates->admin($data);
    }



    function generate_return_product_wise_yearly_report()
    {
        $product_id = $this->input->post('product_id');
        $year = $this->input->post('year');
        $data['year'] = $year;

        $data['monthly_report'] = $this->Admin_model->get_return_product_wise_yearly_report($product_id,$year);

        $data['grand_total_return'] = $this->Admin_model->get_return_product_wise_yearly_report_grand_total_return($year,$product_id);
        $data['grand_total'] = $this->Admin_model->get_return_product_wise_yearly_report_grand_total($year,$product_id);
        $data['product'] = $this->Admin_model->get_return_product_wise_product_yearly_report($year,$product_id);
        $data['view_file'] = "view_return_product_wise_yearly_report";
        $this->templates->admin($data);
    }

    function generate_return_product_wise_custom_report()
    {
        $product_id = $this->input->post('product_id');
        $from = $this->input->post('from');
        $FromDate = date("d-m-Y", strtotime($from));
        $data['from'] = $FromDate;
        $to = $this->input->post('to');
        $ToDate = date("d-m-Y", strtotime($to));
        $data['to'] = $ToDate;

        $data['monthly_report'] = $this->Admin_model->get_return_product_wise_custom_report($product_id,$from,$to);

        $data['grand_total_return'] = $this->Admin_model->get_return_product_wise_custom_report_grand_total_return($from,$to,$product_id);
        $data['grand_total'] = $this->Admin_model->get_return_product_wise_custom_report_grand_total($from,$to,$product_id);
        $data['product'] = $this->Admin_model->get_return_product_wise_product_custom_report($from,$to,$product_id);
        $data['view_file'] = "view_return_product_wise_custom_report";
        $this->templates->admin($data);
    }


     function return_invoice_wise_report()
    {
        $data['view_file'] = "return_invoice_wise_report";
        $this->templates->admin($data);

    }

    function generate_return_invoice_wise_monthly_report()
    {
        $month = $this->input->post('month');
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $data['month'] = $dateObj->format('F');
        $year = $this->input->post('year');
        $data['year'] = $year;

        $data['monthly_report'] = $this->Admin_model->get_return_in_w_m_r($month,$year);
        $data['grand_total_return'] = $this->Admin_model->get_return_in_w_m_r_grand_total_return($month,$year);
        $data['grand_total'] = $this->Admin_model->get_return_in_w_m_r_grand_total($month,$year);
        $data['view_file'] = "view_return_invoice_wise_monthly_report";
        $this->templates->admin($data);
    }

    function generate_return_invoice_wise_yearly_report()
    {

        $year = $this->input->post('year');
        $data['year'] = $year;

        $data['yearly_report'] = $this->Admin_model->get_return_in_w_y_r($year);
        $data['grand_total_return'] = $this->Admin_model->get_return_in_w_y_r_grand_total_return($year);
        $data['grand_total'] = $this->Admin_model->get_return_in_w_y_r_grand_total($year);
        $data['view_file'] = "view_return_invoice_wise_yearly_report";
        $this->templates->admin($data);
    }

    function generate_return_invoice_wise_custom_report()
    {

        $from = $this->input->post('from');
        $FromDate = date("d-m-Y", strtotime($from));
        $data['from'] = $FromDate;
        $to = $this->input->post('to');
        $ToDate = date("d-m-Y", strtotime($to));
        $data['to'] = $ToDate;

        $data['custom_report'] = $this->Admin_model->get_return_in_w_c_r($from, $to);
        $data['grand_total_return'] = $this->Admin_model->get_return_in_w_c_r_grand_total_return($from, $to);
        $data['grand_total'] = $this->Admin_model->get_return_in_w_c_r_grand_total($from, $to);
        $data['view_file'] = "view_return_invoice_wise_custom_report";
        $this->templates->admin($data);
    }

    function return_supplier_wise_report()
   {
       $data['view_file'] = "return_supplier_wise_report";
       $data['supplier'] = $this->Admin_model->get_supplier();
       $this->templates->admin($data);

   }

   //add by tonmoy - return report by supplier
   function generate_return_supplier_wise_monthly_report()
   {
       $supplier_id = $this->input->post('supplier_id');
       $month = $this->input->post('month');
       $dateObj   = DateTime::createFromFormat('!m', $month);
       $data['month'] = $dateObj->format('F');
       $year = $this->input->post('year');
       $data['year'] = $year;

       $data['monthly_report'] = $this->Admin_model->get_return_supplier_wise_monthly_report($supplier_id,$month,$year);

       $data['grand_total_return'] = $this->Admin_model->get_return_supplier_wise_monthly_report_grand_total_return($month,$year,$supplier_id);
        $data['grand_total'] = $this->Admin_model->get_return_supplier_wise_monthly_report_grand_total($month,$year,$supplier_id);
       $data['supplier'] = $this->Admin_model->get_return_supplier_wise_product_monthly_report($supplier_id);
       $data['view_file'] = "view_return_supplier_wise_monthly_report";
       $this->templates->admin($data);
   }


   function generate_return_supplier_wise_yearly_report()
   {
       $supplier_id = $this->input->post('supplier_id');
       $year = $this->input->post('year');
       $data['year'] = $year;

       $data['yearly_report'] = $this->Admin_model->get_return_supplier_wise_yearly_report($supplier_id, $year);

       $data['grand_total_return'] = $this->Admin_model->get_return_supplier_wise_yearly_report_grand_total_return($year,$supplier_id);
        $data['grand_total'] = $this->Admin_model->get_return_supplier_wise_yearly_report_grand_total($year,$supplier_id);
       $data['supplier'] = $this->Admin_model->get_return_supplier_wise_product_yearly_report($supplier_id);
       $data['view_file'] = "view_return_supplier_wise_yearly_report";
       $this->templates->admin($data);
   }

   function generate_return_supplier_wise_custom_report()
   {
       $supplier_id = $this->input->post('supplier_id');
       $from = $this->input->post('from');
       $FromDate = date("d-m-Y", strtotime($from));
       $data['from'] = $FromDate;
       $to = $this->input->post('to');
       $ToDate = date("d-m-Y", strtotime($to));
       $data['to'] = $ToDate;

       $data['custom_report'] = $this->Admin_model->get_return_supplier_wise_custom_report($supplier_id, $from, $to);

       $data['grand_total_return'] = $this->Admin_model->get_return_supplier_wise_custom_report_grand_total_return($from, $to,$supplier_id);
        $data['grand_total'] = $this->Admin_model->get_return_supplier_wise_custom_report_grand_total($from, $to,$supplier_id);
       $data['supplier'] = $this->Admin_model->get_return_supplier_wise_product_custom_report($supplier_id);
       $data['view_file'] = "view_return_supplier_wise_custom_report";
       $this->templates->admin($data);
   }



    // Return Report End


    // Ledger Report Start

     function ledger_customer_wise()
    {
        $data['customer'] = $this->Admin_model->get_customer();
        $data['view_file'] = "ledger_customer_wise";
        $this->templates->admin($data);

    }

    function generate_ledger_customer_wise_monthly()
    {
        $customer_id = $this->input->post('customer_id');
        $month = $this->input->post('month');
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $data['month'] = $dateObj->format('F');
        $year = $this->input->post('year');
        $data['year'] = $year;

        $data['monthly_report'] = $this->Admin_model->get_ledger_customer_wise_monthly($customer_id,$month,$year);

        $data['debit_total'] = $this->Admin_model->get_ledger_customer_wise_debit_total_monthly($customer_id,$month,$year);
        $data['credit_total'] = $this->Admin_model->get_ledger_customer_wise_credit_total_monthly($customer_id,$month,$year);

        $data['customer'] = $this->Admin_model->get_ledger_customer_monthly($month,$year,$customer_id);

        $data['view_file'] = "view_ledger_customer_wise_monthly";
        $this->templates->admin($data);
    }

    function generate_ledger_customer_wise_yearly()
    {
        $customer_id = $this->input->post('customer_id');
        $year = $this->input->post('year');
        $data['year'] = $year;

        $data['monthly_report'] = $this->Admin_model->get_ledger_customer_wise_yearly($customer_id,$year);

        $data['debit_total'] = $this->Admin_model->get_ledger_customer_wise_debit_total_yearly($customer_id,$year);
        $data['credit_total'] = $this->Admin_model->get_ledger_customer_wise_credit_total_yearly($customer_id,$year);

        $data['customer'] = $this->Admin_model->get_ledger_customer_yearly($year,$customer_id);

        $data['view_file'] = "view_ledger_customer_wise_yearly";
        $this->templates->admin($data);
    }

    function generate_ledger_customer_wise_custom()
    {
        $customer_id = $this->input->post('customer_id');
        $from = $this->input->post('from');
        $FromDate = date("d-m-Y", strtotime($from));
        $data['from'] = $FromDate;
        $to = $this->input->post('to');
        $ToDate = date("d-m-Y", strtotime($to));
        $data['to'] = $ToDate;

        $data['monthly_report'] = $this->Admin_model->get_ledger_customer_wise_custom($customer_id,$from,$to);

        $data['debit_total'] = $this->Admin_model->get_ledger_customer_wise_debit_total_custom($customer_id,$from,$to);
        $data['credit_total'] = $this->Admin_model->get_ledger_customer_wise_credit_total_custom($customer_id,$from,$to);

        $data['customer'] = $this->Admin_model->get_ledger_customer_custom($from,$to,$customer_id);

        $data['view_file'] = "view_ledger_customer_wise_custom";
        $this->templates->admin($data);
    }


     function ledger_all_customer_wise()
    {
        $data['view_file'] = "ledger_all_customer_wise";
        $this->templates->admin($data);

    }

    function generate_ledger_all_customer_wise_monthly()
    {
        $month = $this->input->post('month');
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $data['month'] = $dateObj->format('F');
        $year = $this->input->post('year');
        $data['year'] = $year;

        $data['monthly_report'] = $this->Admin_model->get_ledger_all_customer_wise_monthly($month,$year);

        $data['balance_total'] = $this->Admin_model->get_ledger_all_customer_wise_monthly_balance_total($month);

        $data['view_file'] = "view_ledger_all_customer_wise_monthly";
        $this->templates->admin($data);
    }

    function generate_ledger_all_customer_wise_yearly()
    {
        $year = $this->input->post('year');
        $data['year'] = $year;

        $data['monthly_report'] = $this->Admin_model->get_ledger_all_customer_wise_yearly($year);

        $data['balance_total'] = $this->Admin_model->get_ledger_all_customer_wise_yearly_balance_total($year);
        $data['view_file'] = "view_ledger_all_customer_wise_yearly";
        $this->templates->admin($data);
    }

    function generate_ledger_all_customer_wise_custom()
    {
        $from = $this->input->post('from');
        $FromDate = date("d-m-Y", strtotime($from));
        $data['from'] = $FromDate;
        $to = $this->input->post('to');
        $ToDate = date("d-m-Y", strtotime($to));
        $data['to'] = $ToDate;

        $data['monthly_report'] = $this->Admin_model->get_ledger_all_customer_wise_custom($from,$to);

        $data['balance_total'] = $this->Admin_model->get_ledger_all_customer_wise_custom_balance_total($from,$to);

        $data['view_file'] = "view_ledger_all_customer_wise_custom";
        $this->templates->admin($data);
    }


    // Ledger Report End


    //Inventory Report Start

     function inventory_supplier_monthly_report()
    {
        $data['supplier'] = $this->Admin_model->get_supplier();
        $data['view_file'] = "inventory_supplier_monthly_report";
        $this->templates->admin($data);

    }


    function generate_inventory_supplier_monthly_report()
    {
        $supplier_id = $this->input->post('supplier_id');
        $month = $this->input->post('month');
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $data['month'] = $dateObj->format('F');
        $year = $this->input->post('year');
        $data['year'] = $year;
        $data['monthly_report'] = $this->Admin_model->get_import_supplier_monthly_report($month,$year,$supplier_id);
        $data['grand_total'] = $this->Admin_model->get_import_supplier_monthly_report_grand_total($month,$year,$supplier_id);
        $data['grand_total_qty'] = $this->Admin_model->get_import_supplier_monthly_report_grand_qty($month,$year,$supplier_id);
        $data['supplier'] = $this->Admin_model->get_supplier_monthly_report($month,$year,$supplier_id);
        $data['view_file'] = "view_inventory_supplier_monthly_report";
        $this->templates->admin($data);

    }


     function inventory_supplier_yearly_report()
    {
        $data['supplier'] = $this->Admin_model->get_supplier();
        $data['view_file'] = "inventory_supplier_yearly_report";
        $this->templates->admin($data);

    }

     function generate_inventory_supplier_yearly_report()
    {
        $supplier_id = $this->input->post('supplier_id');
        $year = $this->input->post('year');
        $data['monthly_report'] = $this->Admin_model->get_import_supplier_yearly_report($year,$supplier_id);
        $data['grand_total'] = $this->Admin_model->get_import_supplier_yearly_report_grand_total($year,$supplier_id);
        $data['grand_total_qty'] = $this->Admin_model->get_import_supplier_yearly_report_grand_qty($year,$supplier_id);
        $data['supplier'] = $this->Admin_model->get_supplier_yearly_report($year,$supplier_id);
        $data['view_file'] = "view_inventory_supplier_yearly_report";
        $this->templates->admin($data);
    }

     function inventory_supplier_custom_report()
    {
        $data['supplier'] = $this->Admin_model->get_supplier();
        $data['view_file'] = "inventory_supplier_custom_report";
        $this->templates->admin($data);

    }

     function generate_inventory_supplier_custom_report()
    {
        $supplier_id = $this->input->post('supplier_id');
        $from = $this->input->post('from');
        $to = $this->input->post('to');
        $data['from']= $from;
        $data['to']=$to;
        $data['monthly_report'] = $this->Admin_model->get_import_supplier_custom_report($from,$to,$supplier_id);
        $data['grand_total'] = $this->Admin_model->get_import_supplier_custom_report_grand_total($from,$to,$supplier_id);
        $data['grand_total_qty'] = $this->Admin_model->get_import_supplier_custom_report_grand_qty($from,$to,$supplier_id);
        $data['supplier'] = $this->Admin_model->get_supplier_custom_report($from,$to,$supplier_id);

        $data['view_file'] = "view_inventory_supplier_custom_report";
        $this->templates->admin($data);
    }

     function inventory_product_monthly_report()
    {
        $data['product'] = $this->Admin_model->get_product();
        $data['view_file'] = "inventory_product_monthly_report";
        $this->templates->admin($data);

    }

    function generate_inventory_product_monthly_report()
    {
        $product_id = $this->input->post('product_id');
        $month = $this->input->post('month');
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $data['month'] = $dateObj->format('F');
        $year = $this->input->post('year');
        $data['year'] = $year;
        $data['monthly_report'] = $this->Admin_model->get_import_product_monthly_report($month,$year,$product_id);
        $data['grand_total'] = $this->Admin_model->get_import_product_monthly_report_grand_total($month,$year,$product_id);
        $data['grand_total_qty'] = $this->Admin_model->get_import_product_monthly_report_grand_qty($month,$year,$product_id);
        $data['product'] = $this->Admin_model->get_product_monthly_report($month,$year,$product_id);
        $data['view_file'] = "view_inventory_product_monthly_report";
        $this->templates->admin($data);
    }

     function inventory_product_yearly_report()
    {
        $data['product'] = $this->Admin_model->get_product();
        $data['view_file'] = "inventory_product_yearly_report";
        $this->templates->admin($data);

    }

     function generate_inventory_product_yearly_report()
    {
        $product_id = $this->input->post('product_id');
        $year = $this->input->post('year');
        $data['year'] = $year;
        $data['monthly_report'] = $this->Admin_model->get_import_product_yearly_report($year,$product_id);
        $data['grand_total'] = $this->Admin_model->get_import_product_yearly_report_grand_total($year,$product_id);
        $data['grand_total_qty'] = $this->Admin_model->get_import_product_yearly_report_grand_qty($year,$product_id);
        $data['product'] = $this->Admin_model->get_product_yearly_report($year,$product_id);
        $data['view_file'] = "view_inventory_product_yearly_report";
        $this->templates->admin($data);
    }

     function inventory_product_custom_report()
    {
        $data['product'] = $this->Admin_model->get_product();
        $data['view_file'] = "inventory_product_custom_report";
        $this->templates->admin($data);

    }

    function generate_inventory_product_custom_report()
    {
        $product_id = $this->input->post('product_id');
        $from = $this->input->post('from');
        $to = $this->input->post('to');
        $data['from']= $from;
        $data['to']=$to;
        $data['monthly_report'] = $this->Admin_model->get_import_product_custom_report($from,$to,$product_id);
        $data['grand_total'] = $this->Admin_model->get_import_product_custom_report_grand_total($from,$to,$product_id);
        $data['grand_total_qty'] = $this->Admin_model->get_import_product_custom_report_grand_qty($from,$to,$product_id);
        $data['product'] = $this->Admin_model->get_product_custom_report($from,$to,$product_id);

        $data['view_file'] = "view_inventory_product_custom_report";
        $this->templates->admin($data);
    }


    //Inventory Report End
}
