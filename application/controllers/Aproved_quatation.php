<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aproved_quatation extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
         $this->load->helper('url');
       $this->load->model('create_model');
    }
    
      public function aproved_status($quatation_rand){
             $this->load->model('create_model');
             
               $quatation_status= '1';
             
              $this->create_model->aproved_status_data($quatation_rand,$quatation_status);
              
             $this->load->view("form/thank_you");
        }
        
      
      
}