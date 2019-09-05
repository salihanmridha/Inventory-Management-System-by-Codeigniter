<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model
{
    
    
    function __construct() 
    {
        parent::__construct();
    }
    
	
	
	 function site_logo_info()
    {
        $this->db->select('*');
        $this->db->from('site_logo');
        $result = $this->db->get();	
        return $result->result_array();
       
    }
    
     function insert_site_logo($data)
    {
        $this->db->insert('site_logo',$data);
        return $this->db->insert_id();
    } 
    
    public function update_site_logo($data,$site_logo_insert_id)
    {
            
       $this->db->where('site_logo_id', $site_logo_insert_id);              
       $this->db->update('site_logo',$data);             
       return;
    }
	
	 function get_logo()
    {
        $this->db->select('*');
        $this->db->from('site_logo');
        $result = $this->db->get();	
        return $result->result_array();
       
    }
    
     function favicon_info()
    {
        $this->db->select('*');
        $this->db->from('favicon');
        $result = $this->db->get();	
        return $result->result_array();
       
    }
    
     function insert_favicon($data)
    {
        $this->db->insert('favicon',$data);
        return $this->db->insert_id();
    } 
    
    public function update_favicon($data,$favicon_insert_id)
    {
            
       $this->db->where('favicon_id', $favicon_insert_id);              
       $this->db->update('favicon',$data);             
       return;
    }
    
     function insert_copyright($data)
    {
        $this->db->insert('copyright',$data);
        return $this->db->insert_id();
    } 
    
     function copyright_info()
    {
        $this->db->select('*');
        $this->db->from('copyright');
        $result = $this->db->get();	
        return $result->result_array();
    }
    
     public function update_copyright($data,$copyright_id)
    {
            
       $this->db->where('copyright_id', $copyright_id);              
       $this->db->update('copyright',$data);             
       return;
    }
    
     function insert_title($data)
    {
        $this->db->insert('title',$data);
        return $this->db->insert_id();
    } 
    
     function title_info()
    {
        $this->db->select('*');
        $this->db->from('title');
        $result = $this->db->get();	
        return $result->result_array();
    }
    
     public function update_title($data,$title_id)
    {
            
       $this->db->where('title_id', $title_id);              
       $this->db->update('title',$data);             
       return;
    }
    
    
    
    function insert_email($data)
    {
        $this->db->insert('email',$data);
        return $this->db->insert_id();
    } 
    
     function email_info()
    {
        $this->db->select('*');
        $this->db->from('email');
        $result = $this->db->get();	
        return $result->result_array();
    }
    
     public function update_email($data,$email_id)
    {
            
       $this->db->where('email_id', $email_id);              
       $this->db->update('email',$data);             
       return;
    }
    
  
   
}