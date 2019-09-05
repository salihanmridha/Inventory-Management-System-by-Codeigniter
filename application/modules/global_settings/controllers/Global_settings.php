<?php
class Global_settings extends MX_Controller 
{

    function __construct() 
    {
        parent::__construct();
        $this->load->module('templates');
        $this->load->model('Admin_model');
        $this->load->helper('url');
    }

    function global_contact_address()
    {
         
        $data['global_contact']= $this->Admin_model->global_contact_info();
//        print_r($data['copyright']);
//        die();
         $data['logo']= $this->Admin_model->get_logo();
         
         $data['view_file'] = "global_contact_address";
         $this->templates->admin($data);   
       // $this->parser->parse('global_contact_address',$data);
       //$this->load->view('copyright');
    }
       
    
     function add_global_contact_address()
    {
        $global_contact_id= $this->input->post('global_contact_id'); 
       
        $address = $this->input->post('address');
       
 
             $data=array
            (
                'address'=> $address
                
              );
             
       
       
            $this->Admin_model->update_global_contact($data,$global_contact_id);
       
          
            
          $this->session->set_flashdata('success', 'Contact Added Successfully');
//redirect("To your view");    
        redirect('global_settings/global_contact_address');                    
//            $url= base_url().'global_settings/title'; 
//            redirect($url);
            
            
    }
    
    
    function global_bank_info()
    {
         
        $data['global_bank']= $this->Admin_model->global_bank_info();
//        print_r($data['copyright']);
//        die();
         $data['logo']= $this->Admin_model->get_logo();
            
         $data['view_file'] = "global_bank_info";
         $this->templates->admin($data);
        //$this->parser->parse('global_bank_info',$data);
       //$this->load->view('copyright');
    }
       
    
     function add_global_bank_info()
    {
        $global_bank_id= $this->input->post('global_bank_id'); 
       
        $bank_info = $this->input->post('bank_info');
       
 
             $data=array
            (
                'bank_info'=> $bank_info
                
              );
             
       
       
            $this->Admin_model->update_global_bank($data,$global_bank_id);
       
          
            
          $this->session->set_flashdata('success', 'Bank Info Added Successfully');
//redirect("To your view");    
        redirect('global_settings/global_bank_info');                    
//            $url= base_url().'global_settings/title'; 
//            redirect($url);
            
            
    }
	
	function site_logo()
    {
         
        $data['site_logo']= $this->Admin_model->site_logo_info();
         $data['site_logo_id']= $this->Admin_model->site_logo_info();
         
          $data['logo']= $this->Admin_model->get_logo();
         
        $data['view_file'] = "site_logo";
         $this->templates->admin($data);
       // $this->parser->parse('site_logo',$data);
      // $this->load->view('site_logo');
    }
            
    function add_site_logo()
    {
        
        $site_logo_insert_id = $this->input->post('site_logo_id'); 
       
        
            $thumb = $_FILES['userfile']['name'];
//             print_r($thumb);
//             die();
             $this->upload->initialize($this->set_upload_options_site_logo());
              if (!$this->upload->do_upload())
                     {
                        
                        $url= base_url().'global_settings/site_logo'; 
                        redirect($url);
                       
                     }

                   else
                       {
                            $data = array
                                (

                                   'image '=> $thumb
                                );

        //                    print_r($data2);
        //                    die();
                         
                         if($site_logo_insert_id== '')
                         {
                             $this->Admin_model->insert_site_logo($data);
                         }
                         else
                         {
                              $this->Admin_model->update_site_logo($data,$site_logo_insert_id);
                         }
                          
                        }
            
            $message = "Logo Added Successfully!!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            //redirect('global_settings/view_package','refresh');
            $url= base_url().'global_settings/site_logo'; 
            redirect($url);
        
        
    }
    
     private function set_upload_options_site_logo()
    {   
        //upload an image options
        $url=base_url();
        $config = array();
        $config['upload_path'] = 'package_media/site_logo';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']      = '0';
        $config['overwrite']     = FALSE;
//        $config['max_size']             = 200;
        $config['max_width']            = '';
        $config['max_height']           = '';

        return $config;
    }
    
    
    function favicon()
    {
         
        $data['favicon']= $this->Admin_model->favicon_info();
         $data['favicon_id']= $this->Admin_model->favicon_info();
        
          $data['logo']= $this->Admin_model->get_logo();
          
         $data['view_file'] = "favicon";
         $this->templates->admin($data);
       // $this->parser->parse('favicon',$data);
      // $this->load->view('site_logo');
    }
            
    function add_favicon()
    {
        
        $favicon_insert_id = $this->input->post('favicon_id'); 
       
        
            $thumb = $_FILES['userfile']['name'];
//             print_r($thumb);
//             die();
             $this->upload->initialize($this->set_upload_options_favicon());
              if (!$this->upload->do_upload())
                     {
                        
                        $url= base_url().'global_settings/favicon'; 
                        redirect($url);
                       
                     }

                   else
                       {
                            $data = array
                                (

                                   'image '=> $thumb
                                );

        //                    print_r($data2);
        //                    die();
                         
                         if($favicon_insert_id== '')
                         {
                             $this->Admin_model->insert_favicon($data);
                         }
                         else
                         {
                              $this->Admin_model->update_favicon($data,$favicon_insert_id);
                         }
                          
                        }
            
            $message = "favicon Added Successfully!!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            //redirect('global_settings/view_package','refresh');
            $url= base_url().'global_settings/favicon'; 
            redirect($url);
        
        
    }
    
     private function set_upload_options_favicon()
    {   
        //upload an image options
        $url=base_url();
        $config = array();
        $config['upload_path'] = 'package_media/favicon';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']      = '0';
        $config['overwrite']     = FALSE;
//        $config['max_size']             = 200;
        $config['max_width']            = '';
        $config['max_height']           = '';

        return $config;
    }
    
     function copyright()
    {
         
        $data['copyright']= $this->Admin_model->copyright_info();
//        print_r($data['copyright']);
//        die();
         $data['logo']= $this->Admin_model->get_logo();
         
         $data['view_file'] = "copyright";
         $this->templates->admin($data);
       // $this->parser->parse('copyright',$data);
       //$this->load->view('copyright');
    }
       
    
     function add_copyright()
    {
        $copyright_id= $this->input->post('copyright_id'); 
       
        $copyright = $this->input->post('copyright');
       
 
             $data=array
            (
                'copyright_name'=> $copyright
                
              );
             
        if($copyright_id == '')
        {
            $this->Admin_model->insert_copyright($data);
        }
       else
       {
            $this->Admin_model->update_copyright($data,$copyright_id);
       }
          
            
            $url= base_url().'global_settings/copyright'; 
            redirect($url);
    }
    
    
    function title()
    {
         
        $data['title']= $this->Admin_model->title_info();
//        print_r($data['copyright']);
//        die();
         $data['logo']= $this->Admin_model->get_logo();
            
        $data['view_file'] = "site_title";
         $this->templates->admin($data);
        // $this->parser->parse('site_title',$data);
       //$this->load->view('copyright');
    }
       
    
     function add_title()
    {
        $title_id= $this->input->post('title_id'); 
       
        $title = $this->input->post('title');
       
 
             $data=array
            (
                'title_name'=> $title
                
              );
             
        if($title_id == '')
        {
            $this->Admin_model->insert_title($data);
        }
       else
       {
            $this->Admin_model->update_title($data,$title_id);
       }
          
            
          $this->session->set_flashdata('success', 'Site Title Added Successfully');
          redirect('global_settings/title');                    

            
            
    }
    
    
    function meta_keyword()
    {
         
        $data['meta_keyword']= $this->Admin_model->meta_keyword_info();
//        print_r($data['copyright']);
//        die();
         $data['logo']= $this->Admin_model->get_logo();
           
        $data['view_file'] = "meta_keyword";
         $this->templates->admin($data);
         //$this->parser->parse('meta_keyword',$data);
       //$this->load->view('copyright');
    }
       
    
     function add_meta_keyword()
    {
        $meta_keyword_id= $this->input->post('meta_keyword_id'); 
       
        $meta_keyword = $this->input->post('name');
       
 
             $data=array
            (
                'name'=> $meta_keyword
                
              );
             
        if($meta_keyword_id == '')
        {
            $this->Admin_model->insert_meta_keyword($data);
        }
       else
       {
            $this->Admin_model->update_meta_keyword($data,$meta_keyword_id);
       }
          
            
            $url= base_url().'global_settings/meta_keyword'; 
            redirect($url);
    }
    
     function meta_description()
    {
         
        $data['meta_description']= $this->Admin_model->meta_description_info();
//        print_r($data['copyright']);
//        die();
         $data['logo']= $this->Admin_model->get_logo();
         
        $data['view_file'] = "meta_description";
         $this->templates->admin($data);
         //$this->parser->parse('meta_description',$data);
       //$this->load->view('copyright');
    }
       
    
     function add_meta_description()
    {
        $meta_description_id= $this->input->post('meta_description_id'); 
       
        $meta_description = $this->input->post('name');
       
 
             $data=array
            (
                'description_name'=> $meta_description
                
              );
             
        if($meta_description_id == '')
        {
            $this->Admin_model->insert_meta_description($data);
        }
       else
       {
            $this->Admin_model->update_meta_description($data,$meta_description_id);
       }
          
            
            $url= base_url().'global_settings/meta_description'; 
            redirect($url);
    }
    
    
     function google_analytics()
    {
         
        $data['google_analytics']= $this->Admin_model->google_analytics_info();
//        print_r($data['copyright']);
//        die();
         $data['logo']= $this->Admin_model->get_logo();
            
         $data['view_file'] = "google_analytics";
         $this->templates->admin($data);
         //$this->parser->parse('google_analytics',$data);
       //$this->load->view('copyright');
    }
       
    
     function add_google_analytics()
    {
        $google_analytics_id= $this->input->post('google_analytics_id'); 
       
        $google_analytics = $this->input->post('google_analytics');
        //$google_analytics= htmlentities($con, ENT_COMPAT, 'UTF-8');
 
             $data=array
            (
                'analytics'=> $google_analytics
                
              );
             
        if($google_analytics_id == '')
        {
            $this->Admin_model->insert_google_analytics($data);
        }
       else
       {
            $this->Admin_model->update_google_analytics($data,$google_analytics_id);
       }
          
            
            $url= base_url().'global_settings/google_analytics'; 
            redirect($url);
    }
    
    
     function email()
    {
         
        $data['email']= $this->Admin_model->email_info();
//        print_r($data['copyright']);
//        die();
         $data['logo']= $this->Admin_model->get_logo();
        
       $data['view_file'] = "email";
         $this->templates->admin($data);
         //$this->parser->parse('email',$data);
       //$this->load->view('copyright');
    }
       
    
     function add_email()
    {
        $email_id= $this->input->post('email_id'); 
       
        $email = $this->input->post('email');
       
 
             $data=array
            (
                'email_name'=> $email
                
              );
             
        if($email_id == '')
        {
            $this->Admin_model->insert_email($data);
        }
       else
       {
            $this->Admin_model->update_email($data,$email_id);
       }
          
            
            $url= base_url().'global_settings/email'; 
            redirect($url);
    }
    
     function contact_form()
    {
         
        $data['contact']= $this->Admin_model->contact_info();
//        print_r($data['copyright']);
//        die();
         $data['logo']= $this->Admin_model->get_logo();
       
        $data['view_file'] = "contact_form";
         $this->templates->admin($data);
        // $this->parser->parse('contact_form',$data);
       //$this->load->view('copyright');
    }
       
    
     function add_contact()
    {
        $contact_id= $this->input->post('contact_id'); 
       
        $title = $this->input->post('title');
         $description = $this->input->post('description');
          $iframe = $this->input->post('iframe');
       
 
             $data=array
            (
                'title'=> $title,
                 'description'=> $description,
                 'iframe'=> $iframe
                
              );
             
       $this->Admin_model->update_contact($data,$contact_id);
     
           $url= base_url().'global_settings/contact_form'; 
            redirect($url);
    }
    
     function action_bar()
    {
         
       $data['action_bar']= $this->Admin_model->action_bar_info();
//        print_r($data['copyright']);
//        die();
        $data['logo']= $this->Admin_model->get_logo();
            
        $data['view_file'] = "action_bar";
         $this->templates->admin($data);
        //$this->parser->parse('action_bar',$data);
       //$this->load->view('action_bar');
    }
    
     function add_action_bar()
    {
        $action_bar_id= $this->uri->segment(3); 
       
        $publish = $this->input->post('header_publish');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $facebook = $this->input->post('facebook');
        $twitter = $this->input->post('twitter');
        $google = $this->input->post('google');
        $youtube = $this->input->post('youtube');
        $welcome = $this->input->post('welcome');
       
 
             $data=array
            (
                'publish'=> $publish,
                 'email'=> $email,
                 'phone'=> $phone,
                  'facebook'=> $facebook,
                 'twitter'=> $twitter,
                 'google'=> $google,
                 'youtube'=> $youtube,
                 'welcome'=>$welcome
                
              );
             
       $this->Admin_model->update_action_bar($data,$action_bar_id);
     
           $url= base_url().'global_settings/action_bar'; 
            redirect($url);
    }
	  
}