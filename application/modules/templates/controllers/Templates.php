<?php
class Templates extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->module('templates');
         $this->load->model('Templates_model');
        $this->load->helper('url');
    }

    function login()
    {
        $this->load->view('login');
    }

    function admin($data)
    {

        $user_email = $this->session->userdata('email');
        $user_id = $this->Templates_model->get_user_id($user_email);
        $data['previledge'] = $this->Templates_model->get_previledge_info($user_id);

        if(!isset($data['view_module']))
        {
            $data['view_module'] = $this->uri->segment(1);

        }

        $login_id =  $this->session->userdata('is_logged_in');
        if($login_id==1)

        {
             $this->load->view('admin', $data);
        }

        else
        {
            redirect('administrator');
        }

    }



}
