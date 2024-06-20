<?php
    class Create_model extends CI_Model
    {
        protected $table = 'diagonis_form';
        
        
        
        public function create_ticket($ticket_no)
        {

          // this function is changed by dharmender as according to door step services
          // $this->db->select('Tracking_id');
          // $this->db->order_by('id','desc');
          // $query = $this->db->get('home_door_services')->row();
          // if($query > 0){
          //   return $query->Tracking_id +1;
          // }else{
              $this->db->select_max('ticket_no');
         $res = $this->db->get('diagonis_form')->row()->ticket_no;
         
         return  $ticket_no = $res+1;
          // }
          // exit;
        //   $formArray['ticket_no'] =  $ticket_no;
        }

        public function create($formArray)
        {   
          
          $a = $this->db->insert('diagonis_form',$formArray);   
          return $a;
            
        }
        
            public function submit_form_detail()
        {
               $query = $this->db->query('SELECT * FROM diagonis_form where ticket_no =(select max(ticket_no) from diagonis_form) ;');
             return  $row = $query->row_array();
        }
        public function form_detail_edit($ticket_no)
        {
             $this->db->select('*');
            $this->db->where("ticket_no", "$ticket_no");
          return  $row = $this->db->get('diagonis_form')->row_array();
        }
        function update_form($ticket_no,$name,$date,$address,$contact,$email,$serial_no,$model_no,$estimate_given,$physical_condition,$lappy_pass,$reported_problems,$to_part_picked_detail , $reported_problems_cust ){
             $query=$this->db->query("UPDATE diagonis_form SET `name` = '$name' , `update_date` = '$date' , `address` = '$address' , `contact` = '$contact' , `email` = '$email' , `serial_no` = '$serial_no' , `model_no` = '$model_no' , `estimate_given` = '$estimate_given' , `physical_condition` = '$physical_condition' , `lappy_pass` = '$lappy_pass' , `reported_problems`= '$reported_problems' , `part_picked_detail` = '$to_part_picked_detail' , `reported_problems_cust` = '$reported_problems_cust' WHERE ticket_no='$ticket_no'");
         
       }
       
       
           public function status_upload_list($formArray)
        {   
       
          $this->db->insert('diagonis_status',$formArray);   
            
        }
          public function getUser($ticket_no)
        {
            $this->db->where("ticket_no", "$ticket_no");
          return $user1 = $this->db->get('diagonis_status')->result_array();
        }
         
           public function getUser_in_dig($ticket_no)
        {
            $this->db->where("ticket_no", "$ticket_no");
          return $user1 = $this->db->get('in_diagnose_form')->result_array();
        }
         
         
         
         // pagniation
        public function get_count() {
           $query = $this->db->query('SELECT ticket_no FROM diagonis_form GROUP BY ticket_no;');
        return  $query->num_rows();
       }
    
         public function all($limit, $start)
        {
            // select * from diagonis_form group by ticket_no 
              //   $this->db->distinct();
        //   $this->db->select('ticket_no');
            $this->db->group_by('ticket_no');
            $this->db->order_by("ticket_no", "DESC");
              $this->db->limit($limit, $start);
          return $users = $this->db->get('diagonis_form')->result_array();
        }
        
           
           //for status
            public function updateUser($ticket_no)
        {
             $this->db->select('*');
            $this->db->where("ticket_no", "$ticket_no");
          return  $row = $this->db->get('diagonis_form')->row_array();
        }
      
      function update_status($ticket_no,$status,$with_email){
             $query=$this->db->query("UPDATE diagonis_form SET `status`='$status', `with_email`='$with_email' where ticket_no='$ticket_no'");
         
      }
      
      
      
      
      
    //   in diagnosis form
           public function diagnos_form_data($ticket_no)
        {
             $this->db->select('*');
            $this->db->where("ticket_no", "$ticket_no");
          return  $row = $this->db->get('diagonis_status')->row_array();
        }
        
        
        
    
      public function diagnos_form_upload($formArray)
        {   
          $this->db->insert('in_diagnose_form',$formArray);   
            
        }
        
    
     public function dig_form_update_status($ticket_no, $submit_in_off){
      
             $query=$this->db->query("UPDATE `diagonis_form` SET `submit_in_off`='$submit_in_off' where ticket_no='$ticket_no'");
         
      }
      
     
     
     
     
     
     
     
     // quatation_form
          public function quatation($formArray)
        {   
          $this->db->insert('quatation_form',$formArray);   
            
        }
        
         function quatation_update_status($ticket_no,$submit_in_off){
             $query=$this->db->query("UPDATE diagonis_form SET `submit_in_off`='$submit_in_off' where ticket_no='$ticket_no'");
      }
        
         function aproved_status_data($quatation_rand,$quatation_status){
             $query=$this->db->query("UPDATE quatation_form SET `quatation_status`='$quatation_status' where quatation_rand='$quatation_rand'"); 
      }
      
        public function get_aproved_form_detail($ticket_no)
        {
            $this->db->where("ticket_no", "$ticket_no");
          return $user1 = $this->db->get('quatation_form')->result_array();
        }
        
        
        
        //for paid unpaid status
        
            public function paid_unpa($ticket_no)
        {
             $this->db->select('*');
            $this->db->where("ticket_no", "$ticket_no");
          return  $row = $this->db->get('diagonis_form')->row_array();
        }
      
      function paid_unpa_update($ticket_no,$status,$with_email){
             $query=$this->db->query("UPDATE diagonis_form SET `paid_unpaid`='$status', `with_email_pay`='$with_email' where ticket_no='$ticket_no'");
         
      }

      //  home door services from here creaded by dharmender kumar ---------->
      public function door_step_servicesdoor_step_services(){
        $this->db->select('*');
        $this->db->order_by('id', 'desc');
        $a = $this->db->get('home_door_services')->result();
        return $a;
      }
      public function get_last_ticket(){
        $this->db->select('Tracking_id');
        $this->db->order_by('id', 'desc');
        $ca = $this->db->get('home_door_services')->row();
        return $ca;
      }
      public function insert_home($data){
      
        $this->db->insert('home_door_services',$data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
      }
      public function get_single_door_serv($id){
        $this->db->select('*');
        $this->db->where('id',$id);
        $dharmender = $this->db->get('home_door_services')->row();
        return $dharmender;
      }
      public function get_otp_data($id){
       $this->db->select('email,name');
       $this->db->where('id',$id);
       $a = $this->db->get('home_door_services')->row();
       return $a;
      }
      public function get_verified($newotp,$email,$name){
        $this->db->where('OTP',$newotp);
        $this->db->where('email',$email);
        $this->db->update('home_door_services',array('status'=> 1));
        $a = $this->db->affected_rows();
        if($a >= 1){
          return $a;
        }else{
          return 0;
        }
      }
     
    }
?>