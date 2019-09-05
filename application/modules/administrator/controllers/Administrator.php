<?php

class Administrator extends MX_Controller {

    function __construct() {
        parent::__construct();


        $this->load->module('templates');
        $this->load->model('Admin_model');
        $this->load->helper('url');
    }

    function index() {

//        $string=exec('getmac');
//$mac=substr($string, 0, 17); 
//echo $mac;
//die();
        $this->templates->login();
       
    }

   

    public function login_credential() {

        $mail = htmlentities($this->input->post('email'));
        $pass = $this->input->post('pass');
        
        $query = $this->Admin_model->login($mail, $pass);
        


        if (count($query) != 0) {
            $role = $query[0]['type'];
        } else {
            $role = '';
        }

        if ($role == 1 && $role != '') {
            $data = array(
                'email' => $this->input->post('email'),
                'is_logged_in' => true
            );

            $this->session->set_userdata($data);
            redirect('dashboard/home');
        }
        
        elseif ($this->Admin_model->check_email_pass($mail,$pass)) {
            $data = array(
                'email' => $this->input->post('email'),
                'is_logged_in' => true
            );

            $this->session->set_userdata($data);
            redirect('dashboard/home');
        }
        else {

            $this->session->set_userdata('error', 'Opps! Incorrect E-Mail Or Password!!!');
            redirect('administrator');
        }
    }

    function logout() {

         
        $this->session->unset_userdata('is_logged_in');
        $this->session->unset_userdata('email');
        
        redirect('administrator');
    }

}
