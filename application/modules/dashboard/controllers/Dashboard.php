<?php
class Dashboard extends MX_Controller 
{

    function __construct() 
    {
        parent::__construct();
        $this->load->module('administrator');
        $this->load->model('Dashboard_model');
        $this->load->helper('url');
    }

    function home()
    {
        
        $login_id =  $this->session->userdata('is_logged_in');
        
        $user_email = $this->session->userdata('email');
        $user_id = $this->Dashboard_model->get_user_id($user_email);
        $data['previledge'] = $this->Dashboard_model->get_previledge_info($user_id);
        
        
        if($login_id==1)
       {
          $data['view_file'] = "home";
           $this->load->module('templates');
           $this->templates->admin($data);
           
       }
       else
       {
           redirect('administrator');
           
          
       }
         
       
        
    }
	  
}