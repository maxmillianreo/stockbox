<?php
	 class Test extends CI_Controller {
  
      public function hello() { 
         echo "This is hello function."; 
      }

      function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      } 
  
      public function index() { 
         $query = $this->db->get("msuserhd"); 
         $data['records'] = $query->result(); 
			
         $this->load->helper('url'); 
         $this->load->view('test',$data); 
      } 
   }
?>