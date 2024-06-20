<?php
class delivery extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('create_model');
        $config['sess_expiration'] = 7200;
    }
    
    public function search_ticket_no(){
          $this->load->view("form/search_ticket_no");
    }
    

    public function delivey_form(){
           $this->db->where("ticket_no", $_POST['Search']);
         $data =  $this->db->get('diagonis_form')->row();
         
         if($data->id != ""){
          $this->load->view("form/delivery_confirmation" , $data);   
         }else{
         $this->session->set_flashdata('error', 'Ticket Not Found');
         redirect(base_url() . 'delivery/search_ticket_no');
         }
         
          
    }
    
     public function admin_delivey_form($ticket_no){
         
           $this->db->where("ticket_no", $ticket_no);
         $data =  $this->db->get('diagonis_form')->row();
         
         if($data->id != ""){
          $this->load->view("form/delivery_confirmation" , $data);   
         }else{
         $this->session->set_flashdata('error', 'Ticket Not Found');
         redirect(base_url() . 'delivery/search_ticket_no');
         } 
    }

    public function delivey_form_data()
    {
        $this->load->model('create_model');
        // diagonis_submit_office Form Insert Method
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            // print_r($this->input->post());die;

            $this->form_validation->set_error_delimiters('<p class="d-block invalid-feedback">', '</p>');

          
            $this->form_validation->set_rules('executive_name', 'Executive Signature', 'required');

            if ($this->form_validation->run()   == TRUE) {
                $data = [];
           


                if (!empty($_FILES['proof_of_delivery_images']['name'])) {
                    $_FILES['proof_of_delivery_images']['name'] = $_FILES['proof_of_delivery_images']['name'];
                    $_FILES['proof_of_delivery_images']['type'] = $_FILES['proof_of_delivery_images']['type'];
                    $_FILES['proof_of_delivery_images']['tmp_name'] = $_FILES['proof_of_delivery_images']['tmp_name'];
                    $_FILES['proof_of_delivery_images']['error'] = $_FILES['proof_of_delivery_images']['error'];
                    $_FILES['proof_of_delivery_images']['size'] = $_FILES['proof_of_delivery_images']['size'];

                    $config['upload_path']   = 'assets/uploads_img/laptop_img/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['encrypt_name']  = true;
                    $config['file_name'] = $_FILES['proof_of_delivery_images']['name'];

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('proof_of_delivery_images')) {
                        // File Uploaded successfully
                        $data = $this->upload->data();
                        $this->load->library('image_lib');
                        $configer =  array(
                            'image_library' => 'gd2',
                            'source_image'  =>  $data['full_path'],
                            'maintain_ratio' =>  TRUE,
                            'width'         =>  400,
                            'height'        =>  500,
                            'master_dim'    => 'width',
                           'quality'       =>  "90%",
                        );
                        $this->image_lib->clear();
                        $this->image_lib->initialize($configer);
                        $this->image_lib->resize();

                        $proof_of_delivery_images1 =  $data['file_name'];
                    } else {
                        // We got some error
                        $error = $this->upload->display_errors("<p class='invalid-feedback d-block'>", "</p>");
                        $data['errorImgUpload'] = $error;
                        $this->load->view("form/diagonis_submit_office", $data);
                    }
                } else {
                    $proof_of_delivery_images1 =  "";
                }

                // images upload back screen view
                if (!empty($_FILES['warranty_stickers_images']['name'])) {
                    $_FILES['warranty_stickers_images']['name'] = $_FILES['warranty_stickers_images']['name'];
                    $_FILES['warranty_stickers_images']['type'] = $_FILES['warranty_stickers_images']['type'];
                    $_FILES['warranty_stickers_images']['tmp_name'] = $_FILES['warranty_stickers_images']['tmp_name'];
                    $_FILES['warranty_stickers_images']['error'] = $_FILES['warranty_stickers_images']['error'];
                    $_FILES['warranty_stickers_images']['size'] = $_FILES['warranty_stickers_images']['size'];


                    $config['upload_path']   = 'assets/uploads_img/laptop_img/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['encrypt_name']  = true;
                    $config['file_name'] = $_FILES['warranty_stickers_images']['name'];

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('warranty_stickers_images')) {
                        // File Uploaded successfully
                        $data = $this->upload->data();
                        $this->load->library('image_lib');
                        $configer =  array(
                            'image_library' => 'gd2',
                            'source_image'  =>  $data['full_path'],
                            'maintain_ratio' =>  TRUE,
                            'width'         =>  400,
                            'height'        =>  500,
                            'master_dim'    => 'width',
                           'quality'       =>  "90%",
                        );
                        $this->image_lib->clear();
                        $this->image_lib->initialize($configer);
                        $this->image_lib->resize();
                        $warranty_stickers_images2 =  $data['file_name'];
                    } else {
                        // We got some error
                        $error = $this->upload->display_errors("<p class='invalid-feedback d-block'>", "</p>");
                        $data['errorImgUpload'] = $error;
                        $this->load->view("form/diagonis_submit_office", $data);
                    }
                } else {
                    $warranty_stickers_images2 =  "";
                }

                // images upload keyboard view
                if (!empty($_FILES['others_images']['name'])) {
                    $_FILES['others_images']['name'] = $_FILES['others_images']['name'];
                    $_FILES['others_images']['type'] = $_FILES['others_images']['type'];
                    $_FILES['others_images']['tmp_name'] = $_FILES['others_images']['tmp_name'];
                    $_FILES['others_images']['error'] = $_FILES['others_images']['error'];
                    $_FILES['others_images']['size'] = $_FILES['others_images']['size'];

                    $config['upload_path']   = 'assets/uploads_img/laptop_img/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['encrypt_name']  = true;
                    $config['file_name'] = $_FILES['others_images']['name'];

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('others_images')) {
                        // File Uploaded successfully
                        $data = $this->upload->data();
                        $this->load->library('image_lib');
                        $configer =  array(
                            'image_library' => 'gd2',
                            'source_image'  =>  $data['full_path'],
                            'maintain_ratio' =>  TRUE,
                            'width'         =>  400,
                            'height'        =>  500,
                            'master_dim'    => 'width',
                           'quality'       =>  "90%",
                        );
                        $this->image_lib->clear();
                        $this->image_lib->initialize($configer);
                        $this->image_lib->resize();
                        $others_images3 =  $data['file_name'];
                    } else {
                        // We got some error
                        $error = $this->upload->display_errors("<p class='invalid-feedback d-block'>", "</p>");
                        $data['errorImgUpload'] = $error;
                        $this->load->view("form/diagonis_submit_office", $data);
                    }
                } else {
                    $others_images3 =  "";
                }



                //User Digital Signature upload
                if ($_POST['signed1'] != '') {
                    $folderPath = "assets/uploads_img/customer_sign/";

                    $image_parts = explode(";base64,", $_POST['signed1']);

                    $image_type_aux = explode("image/", $image_parts[0]);

                    $image_type = $image_type_aux[1];

                    $image_base64 = base64_decode($image_parts[1]);

                    $file = $folderPath . uniqid() . '.' . $image_type;

                    file_put_contents($file, $image_base64);

                    $uri_segments = explode('/', $file);
                    $uri_segments = end($uri_segments);

                    // Signed1 name upload
                    $formArray['customer_signature_image'] = $uri_segments;

                    if ($_POST['signed2'] != '') {
                        //Executive Digital Signature upload
                        $folderPath = "assets/uploads_img/executive_sign/";

                        $image_parts = explode(";base64,", $_POST['signed2']);

                        $image_type_aux = explode("image/", $image_parts[0]);

                        $image_type = $image_type_aux[1];

                        $image_base64 = base64_decode($image_parts[1]);

                        $file = $folderPath . uniqid() . '.' . $image_type;

                        file_put_contents($file, $image_base64);

                        $uri_segments1 = explode('/', $file);
                        $uri_segments1 = end($uri_segments1);

                        // Signed2 name upload
                        $formArray['signature_excutive_image'] = $uri_segments1;
                    }

                    // image name upload
                 
                    $formArray['proof_of_delivery_image'] = $proof_of_delivery_images1;
                    $formArray['warrant_sticker_image'] = $warranty_stickers_images2;
                    $formArray['other_image'] = $others_images3;
                   
         
                    // Laptop Ddetail section 
                    $formArray['drop_excutive_name'] = $this->input->post('executive_name');


                    $formArray['ticket_no'] = $this->input->post('ticket_no');
                    $formArray['otp'] = rand(1000,9999);

                     
                     $this->db->insert('delivery_record', $formArray);
                     
                 
                 

                    // email
                    
                    $to_email = $this->input->post('email');
                    //  $to_email = 'chetanraghuvanshi99@gmail.com';
                    $to_name = $this->input->post('name');
                    
                    
                    $to_otp = $formArray['otp'];
                    $ticket_no = $this->input->post('ticket_no');
                    
                    date_default_timezone_set("Asia/kolkata");
                    $to_date = date("F d Y h:i:s A.", time());
                    
                    $customer_signature_image = $formArray['customer_signature_image'];
                    $signature_excutive_image = $formArray['signature_excutive_image'];
                   
                   
                  
                    //   data for mail



                    //Load email library 
                    $this->load->library('email');

                    $message_email = '<!DOCTYPE><html><head></head><body>
                            <table >
                             <tr >
                                <div><img  src="https://www.lappymaker.com/images/lappy-maker-logo.png" alt="Lappy Maker Logo"   width="250px"/></div>
                                 </tr>
                                    <tr >
                                      <h1>Laptop Delivery Confirmation</h1>
                                      <p>Dear ' . $to_name . '</p>
                                      <p>We hereby confirm that you have successfully collected your device following the repair process. For your absolute assurance, accompanying this message, you will find a visual documentation of the device repair :</p>
                                      <p>We <B>do not guarantee data preservation, advise owner or customer to backup your device data independently, offer no data backup services<B>, and any older repair or replacement parts remain our property unless specified for retention on the same day of service</p>
                                   </tr>
                                  
                                   <tr >
                                       <td ><b> Ticket No : LM </b>' . $ticket_no . '</td>
                                   </tr>
                                    <tr >
                                <td ><b> Date : </b>' . $to_date . '</td>
                                </tr>
                                <tr >
                                 <td ><b>Proof Of Delivery : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $proof_of_delivery_images1 . '" alt="Proof Of Delivery" /></td>
                                </tr>
                                     <tr >
                                 <td ><b>Warranty Stickers : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $warranty_stickers_images2 . '" alt="Warranty Stickers" /></td>
                                </tr>
                                  <tr >
                                 <td ><b>Other Images : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $others_images3 . '" alt="Other Images" /></td>
                                </tr>
                                 <tr >
                                       <td ><b> <b> OTP :  ' . $to_otp . ' </b></b></td>
                                   </tr>
                                <tr >
                                      <p>By sharing the <b>  OTP </b> with our dedicated delivery executive, you are formally confirming the successful receipt of your device in the exact condition in which we initially collected it.</p>
                                      <p>If you have any questions, please feel free to reach out to us.</p>
                                       <p>Thanks & Regards,</p>
                                        <p>Lappy Maker | <a href="tel:+919319848444">9319848444</a></p>
                                         <p><a href="https://www.lappymaker.com/">Lappymaker.com</a></p>
                                   </tr>
                                
                            </table></body></html>';
                    $from_email = "services@lappymaker.com";


                    // bool whether to validate email or not 

                   
                    $config['charset']    = 'utf-8';
                    $config['newline']    = "\r\n";
                    $config['mailtype'] = 'html'; // or html
                    $config['validation'] = TRUE; // bool whether to validate email or not 
                    $config['smtp_host']    = 'ssl://smtp.googlemail.com';
                    $config['smtp_port']    = 465;
                    $config['smtp_timeout'] = '300';
                    $config['smtp_user']    = 'services@lappymaker.com';
                    $config['smtp_pass']    = "Dilpreet@1989";


                    $this->email->initialize($config);
                    $this->email->set_mailtype("html");
                    $this->email->set_newline("\r\n");
                    $this->email->set_crlf("\r\n");
                    $this->email->from($from_email, 'Lappy Maker');
                    $this->email->to($to_email);
                    $this->email->subject('Delivery Confirmation');




                    $this->email->message($message_email);
                    //Send mail 
                    if ($this->email->send()){
                        $this->session->set_flashdata("email_sent", "Email sent successfully.");
                        $this->session->set_flashdata('success', 'Email sent successfully.');
                          $otp_data['ticket_no'] = $ticket_no;
                      $otp_data['otp'] = $to_otp;
                      $otp_data['email'] = $to_email;
                     $this->load->view("form/otp_form" , $otp_data);
                    }else{
                        $this->session->set_flashdata("error", "Error in sending Email.");
                    }
                        
                    // email end
                } else {
                    $this->session->set_flashdata('error', 'Customer signature must !');

                    redirect(base_url() . 'delivery/search_ticket_no');
                }
            } else {
                redirect(base_url() . 'delivery/search_ticket_no');
            }
        } else {
            redirect(base_url() . 'delivery/search_ticket_no');
        }
    }
    
    public function otp_form_verfiy(){
        
        $email = $this->input->post('email');
        $ticket_no = $this->input->post('ticket_no');
        $otp = $this->input->post('otp');
        
        
           $this->db->where("ticket_no", $ticket_no);
           $this->db->order_by('id', 'DESC');
           $this->db->limit(1);
         $data =  $this->db->get('delivery_record')->row();
         
        //  print_r($data->otp);print_r($otp);die;
         
         if(intval($data->otp) == intval($otp)){
            //  print_r('match');die;
            
            $data_status = array(
                            'status' => 1,
                    );
                    
                    $this->db->where('id', $data->id);
                    $this->db->update('delivery_record', $data_status);
                    
             $this->session->set_flashdata('success', 'OTP Match Successfully');
            
             if (!$this->session->userdata('authenticated')) {
             redirect(base_url() . 'delivery/search_ticket_no');
        }else{
             redirect(base_url() . 'Dashboard/index');
        }
            
             
         }else{
             
            //  print_r('not match');die;   
           $this->session->set_flashdata('error', 'Otp not match !');
             
              redirect(base_url() . 'delivery/search_ticket_no');
         }
          
    }


    
    

    public function create()
    {
        $this->load->model('create_model');
        // diagonis_submit_office Form Insert Method
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $this->form_validation->set_error_delimiters('<p class="d-block invalid-feedback">', '</p>');

            $this->form_validation->set_rules('pick-radio', 'Submited By', 'required');
            $this->form_validation->set_rules('city-radio', 'City Name', 'required');
            $this->form_validation->set_rules('date', 'Date', 'required');
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('address', 'Address', 'required');
            $this->form_validation->set_rules('contact', 'Contact', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('serial_no', 'Serial No', 'required');
            $this->form_validation->set_rules('model_no', 'Model No', 'required');
            $this->form_validation->set_rules('model_no', 'Model No.', 'required');
            $this->form_validation->set_rules('estimate_given', 'Estimate Given', 'required');
            $this->form_validation->set_rules('physical_condition', 'Physical Condition', 'required');
            $this->form_validation->set_rules('laptop_password', 'Laptop Password', 'required');
            $this->form_validation->set_rules('executive_name', 'Executive Signature', 'required');

            if ($this->form_validation->run()   == TRUE) {
                $data = [];
                



                if (!empty($_FILES['front_view']['name'])) {
                    $_FILES['front_view']['name'] = $_FILES['front_view']['name'];
                    $_FILES['front_view']['type'] = $_FILES['front_view']['type'];
                    $_FILES['front_view']['tmp_name'] = $_FILES['front_view']['tmp_name'];
                    $_FILES['front_view']['error'] = $_FILES['front_view']['error'];
                    $_FILES['front_view']['size'] = $_FILES['front_view']['size'];

                    $config['upload_path']   = 'assets/uploads_img/laptop_img/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['encrypt_name']  = true;
                    $config['file_name'] = $_FILES['front_view']['name'];

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('front_view')) {
                        // File Uploaded successfully
                        $data = $this->upload->data();
                        $this->load->library('image_lib');
                        $configer =  array(
                            'image_library' => 'gd2',
                            'source_image'  =>  $data['full_path'],
                            'maintain_ratio' =>  TRUE,
                            'width'         =>  400,
                            'height'        =>  500,
                            'master_dim'    => 'width',
                           'quality'       =>  "90%",
                        );
                        $this->image_lib->clear();
                        $this->image_lib->initialize($configer);
                        $this->image_lib->resize();

                        $front_view1 =  $data['file_name'];
                    } else {
                        // We got some error
                        $error = $this->upload->display_errors("<p class='invalid-feedback d-block'>", "</p>");
                        $data['errorImgUpload'] = $error;
                        $this->load->view("form/diagonis_submit_office", $data);
                    }
                } else {
                    $front_view1 =  "";
                }

                // images upload back screen view
                if (!empty($_FILES['back_screen_view']['name'])) {
                    $_FILES['back_screen_view']['name'] = $_FILES['back_screen_view']['name'];
                    $_FILES['back_screen_view']['type'] = $_FILES['back_screen_view']['type'];
                    $_FILES['back_screen_view']['tmp_name'] = $_FILES['back_screen_view']['tmp_name'];
                    $_FILES['back_screen_view']['error'] = $_FILES['back_screen_view']['error'];
                    $_FILES['back_screen_view']['size'] = $_FILES['back_screen_view']['size'];


                    $config['upload_path']   = 'assets/uploads_img/laptop_img/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['encrypt_name']  = true;
                    $config['file_name'] = $_FILES['back_screen_view']['name'];

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('back_screen_view')) {
                        // File Uploaded successfully
                        $data = $this->upload->data();
                        $this->load->library('image_lib');
                        $configer =  array(
                            'image_library' => 'gd2',
                            'source_image'  =>  $data['full_path'],
                            'maintain_ratio' =>  TRUE,
                            'width'         =>  400,
                            'height'        =>  500,
                            'master_dim'    => 'width',
                           'quality'       =>  "90%",
                        );
                        $this->image_lib->clear();
                        $this->image_lib->initialize($configer);
                        $this->image_lib->resize();
                        $back_screen_view2 =  $data['file_name'];
                    } else {
                        // We got some error
                        $error = $this->upload->display_errors("<p class='invalid-feedback d-block'>", "</p>");
                        $data['errorImgUpload'] = $error;
                        $this->load->view("form/diagonis_submit_office", $data);
                    }
                } else {
                    $back_screen_view2 =  "";
                }

                // images upload keyboard view
                if (!empty($_FILES['keyboard_view']['name'])) {
                    $_FILES['keyboard_view']['name'] = $_FILES['keyboard_view']['name'];
                    $_FILES['keyboard_view']['type'] = $_FILES['keyboard_view']['type'];
                    $_FILES['keyboard_view']['tmp_name'] = $_FILES['keyboard_view']['tmp_name'];
                    $_FILES['keyboard_view']['error'] = $_FILES['keyboard_view']['error'];
                    $_FILES['keyboard_view']['size'] = $_FILES['keyboard_view']['size'];

                    $config['upload_path']   = 'assets/uploads_img/laptop_img/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['encrypt_name']  = true;
                    $config['file_name'] = $_FILES['keyboard_view']['name'];

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('keyboard_view')) {
                        // File Uploaded successfully
                        $data = $this->upload->data();
                        $this->load->library('image_lib');
                        $configer =  array(
                            'image_library' => 'gd2',
                            'source_image'  =>  $data['full_path'],
                            'maintain_ratio' =>  TRUE,
                            'width'         =>  400,
                            'height'        =>  500,
                            'master_dim'    => 'width',
                           'quality'       =>  "90%",
                        );
                        $this->image_lib->clear();
                        $this->image_lib->initialize($configer);
                        $this->image_lib->resize();
                        $keyboard_view3 =  $data['file_name'];
                    } else {
                        // We got some error
                        $error = $this->upload->display_errors("<p class='invalid-feedback d-block'>", "</p>");
                        $data['errorImgUpload'] = $error;
                        $this->load->view("form/diagonis_submit_office", $data);
                    }
                } else {
                    $keyboard_view3 =  "";
                }


                // images upload base view
                if (!empty($_FILES['base_view']['name'])) {
                    $_FILES['base_view']['name'] = $_FILES['base_view']['name'];
                    $_FILES['base_view']['type'] = $_FILES['base_view']['type'];
                    $_FILES['base_view']['tmp_name'] = $_FILES['base_view']['tmp_name'];
                    $_FILES['base_view']['error'] = $_FILES['base_view']['error'];
                    $_FILES['base_view']['size'] = $_FILES['base_view']['size'];

                    $config['upload_path']   = 'assets/uploads_img/laptop_img/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['encrypt_name']  = true;
                    $config['file_name'] = $_FILES['base_view']['name'];

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('base_view')) {
                        // File Uploaded successfully
                        $data = $this->upload->data();
                        $this->load->library('image_lib');
                        $configer =  array(
                            'image_library' => 'gd2',
                            'source_image'  =>  $data['full_path'],
                            'maintain_ratio' =>  TRUE,
                            'width'         =>  400,
                            'height'        =>  500,
                            'master_dim'    => 'width',
                           'quality'       =>  "90%",
                        );
                        $this->image_lib->clear();
                        $this->image_lib->initialize($configer);
                        $this->image_lib->resize();
                        $base_view4 =  $data['file_name'];
                    } else {
                        // We got some error
                        $error = $this->upload->display_errors("<p class='invalid-feedback d-block'>", "</p>");
                        $data['errorImgUpload'] = $error;
                        $this->load->view("form/diagonis_submit_office", $data);
                    }
                } else {
                    $base_view4 =  "";
                }

                // images upload track pad view
                if (!empty($_FILES['track_pad_view']['name'])) {
                    $_FILES['track_pad_view']['name'] = $_FILES['track_pad_view']['name'];
                    $_FILES['track_pad_view']['type'] = $_FILES['track_pad_view']['type'];
                    $_FILES['track_pad_view']['tmp_name'] = $_FILES['track_pad_view']['tmp_name'];
                    $_FILES['track_pad_view']['error'] = $_FILES['track_pad_view']['error'];
                    $_FILES['track_pad_view']['size'] = $_FILES['track_pad_view']['size'];

                    $config['upload_path']   = 'assets/uploads_img/laptop_img/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['encrypt_name']  = true;
                    $config['file_name'] = $_FILES['track_pad_view']['name'];

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('track_pad_view')) {
                        // File Uploaded successfully
                        $data = $this->upload->data();
                        $this->load->library('image_lib');
                        $configer =  array(
                            'image_library' => 'gd2',
                            'source_image'  =>  $data['full_path'],
                            'maintain_ratio' =>  TRUE,
                            'width'         =>  400,
                            'height'        =>  500,
                            'master_dim'    => 'width',
                           'quality'       =>  "90%",
                        );
                        $this->image_lib->clear();
                        $this->image_lib->initialize($configer);
                        $this->image_lib->resize();
                        $track_pad_view5 =  $data['file_name'];
                    } else {
                        // We got some error
                        $error = $this->upload->display_errors("<p class='invalid-feedback d-block'>", "</p>");
                        $data['errorImgUpload'] = $error;
                        $this->load->view("form/diagonis_submit_office", $data);
                    }
                } else {
                    $track_pad_view5 =  "";
                }

                // images upload track pad view
                if (!empty($_FILES['internal_part_img']['name'])) {
                    $_FILES['internal_part_img']['name'] = $_FILES['internal_part_img']['name'];
                    $_FILES['internal_part_img']['type'] = $_FILES['internal_part_img']['type'];
                    $_FILES['internal_part_img']['tmp_name'] = $_FILES['internal_part_img']['tmp_name'];
                    $_FILES['internal_part_img']['error'] = $_FILES['internal_part_img']['error'];
                    $_FILES['internal_part_img']['size'] = $_FILES['internal_part_img']['size'];

                    $config['upload_path']   = 'assets/uploads_img/laptop_img/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['encrypt_name']  = true;
                    $config['file_name'] = $_FILES['internal_part_img']['name'];

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('internal_part_img')) {
                        // File Uploaded successfully
                        $data = $this->upload->data();
                        $this->load->library('image_lib');
                        $configer =  array(
                            'image_library' => 'gd2',
                            'source_image'  =>  $data['full_path'],
                            'maintain_ratio' =>  TRUE,
                            'width'         =>  400,
                            'height'        =>  500,
                            'master_dim'    => 'width',
                           'quality'       =>  "90%",
                        );
                        $this->image_lib->clear();
                        $this->image_lib->initialize($configer);
                        $this->image_lib->resize();
                        $internal_part_img =  $data['file_name'];
                    } else {
                        // We got some error
                        $error = $this->upload->display_errors("<p class='invalid-feedback d-block'>", "</p>");
                        $data['errorImgUpload'] = $error;
                        $this->load->view("form/diagonis_submit_office", $data);
                    }
                } else {
                    $internal_part_img =  "";
                }


                // images upload other view
                if (!empty($_FILES['file_input']['name'])) {
                    $_FILES['file_input']['name'] = $_FILES['file_input']['name'];
                    $_FILES['file_input']['type'] = $_FILES['file_input']['type'];
                    $_FILES['file_input']['tmp_name'] = $_FILES['file_input']['tmp_name'];
                    $_FILES['file_input']['error'] = $_FILES['file_input']['error'];
                    $_FILES['file_input']['size'] = $_FILES['file_input']['size'];

                    $config['upload_path']   = 'assets/uploads_img/laptop_img/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['encrypt_name']  = true;
                    $config['file_name'] = $_FILES['file_input']['name'];

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('file_input')) {
                        // File Uploaded successfully
                        $data = $this->upload->data();
                        $this->load->library('image_lib');
                        $configer =  array(
                            'image_library' => 'gd2',
                            'source_image'  =>  $data['full_path'],
                            'maintain_ratio' =>  TRUE,
                            'width'         =>  400,
                            'height'        =>  500,
                            'master_dim'    => 'width',
                           'quality'       =>  "90%",
                        );
                        $this->image_lib->clear();
                        $this->image_lib->initialize($configer);
                        $this->image_lib->resize();
                        $img_arr_to_str =  $data['file_name'];
                    } else {
                        // We got some error
                        $error = $this->upload->display_errors("<p class='invalid-feedback d-block'>", "</p>");
                        $data['errorImgUpload'] = $error;
                        $this->load->view("form/diagonis_submit_office", $data);
                    }
                } else {
                    $img_arr_to_str =  "";
                }



                // images upload Parts Pickup along with laptop
                if (!empty($_FILES['part_along_with']['name'])) {
                    $_FILES['part_along_with']['name'] = $_FILES['part_along_with']['name'];
                    $_FILES['part_along_with']['type'] = $_FILES['part_along_with']['type'];
                    $_FILES['part_along_with']['tmp_name'] = $_FILES['part_along_with']['tmp_name'];
                    $_FILES['part_along_with']['error'] = $_FILES['part_along_with']['error'];
                    $_FILES['part_along_with']['size'] = $_FILES['part_along_with']['size'];

                    $config['upload_path']   = 'assets/uploads_img/laptop_img/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['encrypt_name']  = true;
                    $config['file_name'] = $_FILES['part_along_with']['name'];

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('part_along_with')) {
                        // File Uploaded successfully
                        $data = $this->upload->data();
                        $this->load->library('image_lib');
                        $configer =  array(
                            'image_library' => 'gd2',
                            'source_image'  =>  $data['full_path'],
                            'maintain_ratio' =>  TRUE,
                            'width'         =>  400,
                            'height'        =>  500,
                            'master_dim'    => 'width',
                           'quality'       =>  "90%",
                        );
                        $this->image_lib->clear();
                        $this->image_lib->initialize($configer);
                        $this->image_lib->resize();
                        $part_along_with =  $data['file_name'];
                    } else {
                        // We got some error
                        $error = $this->upload->display_errors("<p class='invalid-feedback d-block'>", "</p>");
                        $data['errorImgUpload'] = $error;
                        $this->load->view("form/diagonis_submit_office", $data);
                    }
                } else {
                    $part_along_with =  "";
                }




                //User Digital Signature upload
                if ($_POST['signed1'] != '') {
                    $folderPath = "assets/uploads_img/customer_sign/";

                    $image_parts = explode(";base64,", $_POST['signed1']);

                    $image_type_aux = explode("image/", $image_parts[0]);

                    $image_type = $image_type_aux[1];

                    $image_base64 = base64_decode($image_parts[1]);

                    $file = $folderPath . uniqid() . '.' . $image_type;

                    file_put_contents($file, $image_base64);

                    $uri_segments = explode('/', $file);
                    $uri_segments = end($uri_segments);

                    // Signed1 name upload
                    $formArray['customer_sign'] = $uri_segments;

                    if ($_POST['signed2'] != '') {
                        //Executive Digital Signature upload
                        $folderPath = "assets/uploads_img/executive_sign/";

                        $image_parts = explode(";base64,", $_POST['signed2']);

                        $image_type_aux = explode("image/", $image_parts[0]);

                        $image_type = $image_type_aux[1];

                        $image_base64 = base64_decode($image_parts[1]);

                        $file = $folderPath . uniqid() . '.' . $image_type;

                        file_put_contents($file, $image_base64);

                        $uri_segments1 = explode('/', $file);
                        $uri_segments1 = end($uri_segments1);

                        // Signed2 name upload
                        $formArray['exicutive_sign'] = $uri_segments1;
                    }

                    // image name upload
                    //   $img_arr_to_str = implode(", ", $img_arr);
                    //   $formArray['lappy_img'] = $img_arr_to_str;   
                    $formArray['part_along'] = $part_along_with;
                    $formArray['lappy_img'] = $img_arr_to_str;
                    $formArray['int_part_img'] = $internal_part_img;
                    $formArray['front_img'] = $front_view1;
                    $formArray['back_img'] = $back_screen_view2;
                    $formArray['keyboard_img'] = $keyboard_view3;
                    $formArray['base_img'] = $base_view4;
                    $formArray['trackpad_img'] = $track_pad_view5;

                    $part_along_with_data =     $formArray['part_along'];
                    $img_arr_to_str_data =   $formArray['lappy_img'];


                    // select city input

                    $formArray['select_city'] = $this->input->post('city-radio');

                    // User Details 
                    $formArray['name'] = $this->input->post('name');
                    $formArray['date'] = $this->input->post('date');
                    $formArray['address'] = $this->input->post('address');
                    $formArray['contact'] = $this->input->post('contact');
                    $formArray['email'] = $this->input->post('email');

                    // Parts Picker 
                    $part_picked['laptop_carry_case'] = $this->input->post('laptop_carry_case');
                    $part_picked['power_cord'] = $this->input->post('power_cord');
                    $part_picked['adapter'] = $this->input->post('adapter');

                    $arr_to_str1 = implode(",", $part_picked);
                      
                    // Parts picker 
                    $formArray['part_picked'] = $arr_to_str1;
                    
                     // check list
                    
                          $part_status['keyboard'] = $this->input->post('keyboard');
                          $part_status['touoch_pad'] = $this->input->post('touoch_pad');
                          $part_status['camera'] = $this->input->post('camera');
                          $part_status['wi_fi'] = $this->input->post('wi_fi');
                          $part_status['display'] = $this->input->post('display');
                          $part_status['ms_office'] = $this->input->post('ms_office');
                          $part_status['touchpad_clicks'] = $this->input->post('touchpad_clicks');
                          $part_status['sound'] = $this->input->post('sound');
          
                          $part_status['safari_chrome'] = $this->input->post('safari_chrome');
                          $part_status['touch_screen'] = $this->input->post('touch_screen');
                          $part_status['touch_id'] = $this->input->post('touch_id');
                          $part_status['touch_bar'] = $this->input->post('touch_bar');
                          $part_status['battery_h'] = $this->input->post('battery_h');
                          $part_status['battery_backup'] = $this->input->post('battery_backup');
                          $part_status['charging_port'] = $this->input->post('charging_port');
                          $part_status['bluetooth'] = $this->input->post('bluetooth');
                          $part_status['back_light'] = $this->input->post('back_light');
          
                          $part_status['internal_sno'] = $this->input->post('internal_sno');
                          $part_status['usb_port'] = $this->input->post('usb_port');
                          $part_status['audio_port'] = $this->input->post('audio_port');
                          $part_status['sleep_mode'] = $this->input->post('sleep_mode');
                          $part_status['mic'] = $this->input->post('mic');
                          $part_status['shut_down'] = $this->input->post('shut_down');
                          $part_status['downloads'] = $this->input->post('downloads');
                          $part_status['restart'] = $this->input->post('restart');
          
                          $arr_to_check_list = implode(",", $part_status);
               
                          $formArray['check_list_detail'] = $arr_to_check_list;

                    // Parts Picker 
                    $internal_part['ram_exter'] = $this->input->post('ram_exter');
                    $internal_part['ram_intern'] = $this->input->post('ram_intern');
                    $internal_part['cd_rom'] = $this->input->post('cd_rom');
                    $internal_part['bluetooth_wifi_device_intern'] = $this->input->post('bluetooth_wifi_device_intern');
                    $internal_part['bluetooth_device_exter'] = $this->input->post('bluetooth_device_exter');
                    $internal_part['battery_exter'] = $this->input->post('battery_exter');
                    $internal_part['battery_intern'] = $this->input->post('battery_intern');
                    $internal_part['ssd_exter'] = $this->input->post('ssd_exter');
                    $internal_part['ssd_intern'] = $this->input->post('ssd_intern');
                    $internal_part['hard_disk'] = $this->input->post('hard_disk');
                    $internal_part['hard_disk_intern'] = $this->input->post('hard_disk_intern');

                    $arr_to_str2 = implode(",", $internal_part);

                    // Parts picker 
                    $formArray['internal_part'] = $arr_to_str2;

                    $formArray['part_picked_detail'] = $this->input->post('part_picked_detail');
                    // Parts Picker Section
                    $formArray['serial_no'] = $this->input->post('serial_no');
                    $formArray['model_no'] = $this->input->post('model_no');
                    $formArray['estimate_given'] = $this->input->post('estimate_given');
                    $formArray['physical_condition'] = $this->input->post('physical_condition');
                    $formArray['lappy_pass'] = $this->input->post('laptop_password');
                    $formArray['submited_by'] = $this->input->post('pick-radio');

                    // Laptop Ddetail section 
                    $formArray['reported_problems'] = $this->input->post('reported_problems');
                     $formArray['reported_problems_cust'] = $this->input->post('reported_problems_cust');
                    $formArray['executive_name'] = $this->input->post('executive_name');



                    $ticket_gen = $this->create_model->create_ticket($ticket_no);
                    $formArray['ticket_no'] = $ticket_gen;

                    $this->create_model->create($formArray);

                    $this->session->set_flashdata('success', 'Form Added Successfully');

                    // email
                    $to_date = $this->input->post('date');
                    $to_name = $this->input->post('name');
                    $to_address = $this->input->post('address');
                    $to_contact = $this->input->post('contact');
                    $to_email = $this->input->post('email');
                    $to_submited_by = $this->input->post('pick-radio');

                    $to_serial_no = $this->input->post('serial_no');
                    $to_model_no = $this->input->post('model_no');
                    $to_estimate_given = $this->input->post('estimate_given');
                    $to_physical_condition = $this->input->post('physical_condition');
                    $to_laptop_password = $this->input->post('laptop_password');
                    $to_reported_problems = $this->input->post('reported_problems');
                     $to_reported_problems_cust = $this->input->post('reported_problems_cust');
                    $to_executive_name = $this->input->post('executive_name');
                    $to_part_picked_detail = $this->input->post('part_picked_detail');
                    //   data for mail


                    if (strlen($part_along_with_data) > 5) {
                        $part_along_with_mail = '<tr >
                                 <td ><b>Parts Pickup along with laptop : </b>' . $to_part_picked_detail . '<br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $part_along_with_data . '"   /></td>
                                </tr>';
                    } else {
                        $part_along_with_mail = "";
                    };


                    if (strlen($img_arr_to_str_data) > 5) {
                        $img_arr_to_other_mail = '   <tr >
                                 <td ><b>Other View Image : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $img_arr_to_str_data . '"   /></td>
                                </tr>';
                    } else {
                        $img_arr_to_other_mail = "";
                    };

                   if (strlen($arr_to_str1) > 3) {
                        $arr_to_str1_mail = '    <tr >
                                <td ><b>Accessories Picked From Customer : </b>' . $arr_to_str1 . ' </td>
                                </tr>';
                    } else {
                        $arr_to_str1_mail = "";
                    };

                    if (strlen($arr_to_str2) > 12) {
                        $arr_to_str2_mail = ' <tr>
                                <td ><b>Machine Parts : </b>' . $arr_to_str2 . ' </td>
                                </tr>';
                    } else {
                        $arr_to_str2_mail = "";
                    };
                      if (strlen($arr_to_check_list) > 25) {
                        $arr_to_check_list_mail = ' <tr>
                                <td ><b>Part Problem Detect : </b>' . $arr_to_check_list . ' </td>
                                </tr>';
                    } else {
                        $arr_to_check_list_mail = "";
                    };

                    //           echo $part_along_with_mail;
                    //       echo $img_arr_to_other_mail;
                    //   die();

                    //Load email library 
                    $this->load->library('email');

                    $message_email = '<!DOCTYPE><html><head></head><body>
                            <table >
                             <tr >
                                <div><img  src="https://www.lappymaker.com/images/lappy-maker-logo.png" alt="Lappy Maker Logo"   width="250px"/></div>
                                 </tr>
                                    <tr >
                                      <h1>Laptop Delivery Confirmation</h1>
                                      <p>Dear ' . $to_name . '</p>
                                      <p>We hereby confirm that you have successfully collected your device following the repair process. For your absolute assurance, accompanying this message, you will find a visual documentation of the device repair:</p>
                                   </tr>
                                   <tr >
                                       <td ><b> Ticket No : LM </b>' . $ticket_gen . '</td>
                                   </tr>
                                    <tr >
                                <td ><b> Date : </b>' . $to_date . '</td>
                                </tr>
                                    <tr >
                                   <td ><b> Email :  </b>' . $to_email . '</td>
                                 </tr>
                                 <tr >
                                 <td ><b> Address : </b>' . $to_address . '</td>
                                </tr>
                                 <tr >
                                  <td ><b> Contact No : </b>' . $to_contact . ' </td>
                                </tr>
                               
                                 <tr >
                                <td ><b> Submited By : </b>' . $to_submited_by . '</td>
                                </tr>
                              
                                 <tr >
                                <td ><b> Serial No : </b>' . $to_serial_no . '</td>
                                </tr>
                                <tr >
                                <td ><b> Model No : </b>' . $to_model_no . '</td>
                                </tr>
                                  <tr >
                                 <td ><b> Laptop Password : </b>' . $to_laptop_password . '</td>
                                </tr>
                                  <tr >
                                <td ><b> Estimate Given : </b>' . $to_estimate_given . '</td>
                                </tr>
                                <tr >
                               <td ><b> Reported Problem By Executive : </b>' . $to_reported_problems . '</td>
                                </tr>
                                <tr >
                               <td ><b> Reported Problem By customer : </b>' . $to_reported_problems_cust . '</td>
                                </tr>
                                   <tr >
                                 <td ><b> Physical Condition : </b>' . $to_physical_condition . '</td>
                                </tr>
                                  <tr >
                               <td ><b> Executive Signature : </b>' . $to_executive_name . '</td>
                                </tr>
                                   ' . $arr_to_str1_mail . '
                               ' . $arr_to_str2_mail . '
                               '.$arr_to_check_list_mail.'
                                <tr >
                                 <td ><b>Front View Image : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $front_view1 . '" alt="Front View img" /></td>
                                </tr>
                                     <tr >
                                 <td ><b>Back View Image : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $back_screen_view2 . '" alt="Back View img" /></td>
                                </tr>
                                  <tr >
                                 <td ><b>Keyboard View Image : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $keyboard_view3 . '" alt="Keyboard View img" /></td>
                                </tr>
                                  <tr >
                                 <td ><b>Base View Image : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $base_view4 . '"  alt="Base View img" /></td>
                                </tr>
                                  <tr >
                                 <td ><b>Track Pad View Image : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $track_pad_view5 . '" alt="Track Pad View img" /></td>
                                  </tr>
                                   <tr >
                                 <td ><b>Internal Part View : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $internal_part_img . '" alt="Internal Part View" /></td>
                                </tr>
                               ' . $part_along_with_mail . '
                               ' . $img_arr_to_other_mail . '
                                <tr >
                                      <p>By sharing the OTP with our dedicated delivery executive, you are formally confirming the successful receipt of your device in the exact condition in which we initially collected it.</p>
                                      <p>If you have any questions, please feel free to reach out to us.</p>
                                       <p>Best wishes,</p>
                                        <p>The Lappy Maker Team | <a href="tel:+919319848444">9319848444</a></p>
                                         <p><a href="https://www.lappymaker.com/">Lappymaker.com</a></p>
                                   </tr>
                                
                            </table></body></html>';
                    $from_email = "services@lappymaker.com";


                    // bool whether to validate email or not 

                   
                    $config['charset']    = 'utf-8';
                    $config['newline']    = "\r\n";
                    $config['mailtype'] = 'html'; // or html
                    $config['validation'] = TRUE; // bool whether to validate email or not 
                    $config['smtp_host']    = 'ssl://smtp.googlemail.com';
                    $config['smtp_port']    = 465;
                    $config['smtp_timeout'] = '300';
                    $config['smtp_user']    = 'services@lappymaker.com';
                    $config['smtp_pass']    = "Dilpreet@1989";


                    $this->email->initialize($config);
                    $this->email->set_mailtype("html");
                    $this->email->set_newline("\r\n");
                    $this->email->set_crlf("\r\n");
                    $this->email->from($from_email, 'Lappy Maker');
                    $this->email->to($to_email);
                    $this->email->subject('LAPTOP PICK UP FORM');




                    $this->email->message($message_email);
                    //Send mail 
                    if ($this->email->send())
                        $this->session->set_flashdata("email_sent", "Email sent successfully.");
                    else
                        $this->session->set_flashdata("error", "Error in sending Email.");
                    // email end


                    redirect(base_url() . 'form_sub_off/submit_form_data');
                } else {
                    $this->session->set_flashdata('error', 'Customer signature must !');

                    $this->load->view("form/delivery_confirmation");
                }
            } else {
                $this->load->view("form/delivery_confirmation");
            }
        } else {

            $this->load->view("form/delivery_confirmation");
        }
    }


    // customer after submit form

    public function submit_form_data()
    {
        $this->load->model('create_model');
        $submit_form_data = $this->create_model->submit_form_detail();
        $data = array();
        $data['submit_form_data'] = $submit_form_data;
        $this->load->view("form/submit_form_off", $data);
    }

    // customer edit form 
    public function form_edit_user($ticket_no)
    {
        $this->load->model('create_model');
        $form_edit_user = $this->create_model->form_detail_edit($ticket_no);
        $data = array();
        $data['form_edit_user'] = $form_edit_user;
        $this->load->view("form/form_edit_off", $data);
    }

    // customer edit form upload
    public function form_upload_user()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $this->load->model('create_model');
            // User Details 
            $ticket_no = $this->input->post('ticket_no');
            $name = $this->input->post('name');
            $date = $this->input->post('date');
            $address = $this->input->post('address');
            $contact = $this->input->post('contact');
            $email = $this->input->post('email');
            $serial_no = $this->input->post('serial_no');
            $model_no = $this->input->post('model_no');
            $estimate_given = $this->input->post('estimate_given');
            $physical_condition = $this->input->post('physical_condition');
            $lappy_pass = $this->input->post('laptop_password');
            $reported_problems = $this->input->post('reported_problems');
            $reported_problems_cust = $this->input->post('reported_problems_cust');
             $to_part_picked_detail = $this->input->post('part_picked_detail');



            //only mail
            $arr_to_str1 = $this->input->post('part_picked');
            $arr_to_str2 = $this->input->post('internal_part');
             $arr_to_check_list = $this->input->post('check_list_detail');
            $front_view =  $this->input->post('front_view');
            $back_screen_view =  $this->input->post('back_screen_view');
            $keyboard_view =  $this->input->post('keyboard_view');
            $track_pad_view = $this->input->post('track_pad_view');
            $base_view =  $this->input->post('base_view');
             $int_part_img =  $this->input->post('int_part_img');
            $img_arr_to_str_data =  $this->input->post('file_input');
            $part_along_with_data =  $this->input->post('part_along');
            $executive_name = $this->input->post('executive_name');


            if (strlen($part_along_with_data) > 5) {
                $part_along_with_mail = '<tr >
                                 <td ><b>Parts Pickup Along With laptop : </b>' . $to_part_picked_detail . '<br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $part_along_with_data . '"   /></td>
                                </tr>';
            } else {
                $part_along_with_mail = "";
            };


            if (strlen($img_arr_to_str_data) > 5) {
                $img_arr_to_other_mail = '   <tr >
                                 <td ><b>Other View Image : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $img_arr_to_str_data . '"   /></td>
                                </tr>';
            } else {
                $img_arr_to_other_mail = "";
            };

            if (strlen($arr_to_str1) > 3) {
                        $arr_to_str1_mail = '    <tr >
                                <td ><b>Accessories Picked From Customer : </b>' . $arr_to_str1 . ' </td>
                                </tr>';
                    } else {
                        $arr_to_str1_mail = "";
                    };

                    if (strlen($arr_to_str2) > 12) {
                        $arr_to_str2_mail = ' <tr>
                                <td ><b>Machine Parts : </b>' . $arr_to_str2 . ' </td>
                                </tr>';
                    } else {
                        $arr_to_str2_mail = "";
                    };
                    
                       if (strlen($arr_to_check_list) > 25) {
                        $arr_to_check_list_mail = ' <tr>
                                <td ><b>Part Problem Detect : </b>' . $arr_to_check_list . ' </td>
                                </tr>';
                    } else {
                        $arr_to_check_list_mail = "";
                    };

            //           echo $part_along_with_mail;
            //       echo $img_arr_to_other_mail;
            //   die();



            //end

            $this->create_model->update_form($ticket_no, $name, $date, $address, $contact, $email, $serial_no, $model_no, $estimate_given, $physical_condition, $lappy_pass,$reported_problems, $to_part_picked_detail , $reported_problems_cust);
            $this->session->set_flashdata('success', 'Record update successfully');


            $this->load->library('email');
            $from_email = "services@lappymaker.com";
            $to_email = $this->input->post('email');
            $message_email = '<!DOCTYPE><html><head></head><body>
                            
                            <table >
                             <tr >
                               <div><img  src="https://www.lappymaker.com/images/lappy-maker-logo.png" alt="Lappy Maker Logo"   width="250px"/></div>
                                 </tr>
                                    <tr >
                                      <h1>Laptop Pickup Confirmation Form Update</h1>
                                      <p>Dear ' . $name . '</p>
                                      <p>We are acknowledging that we have collected your device for repair as details below:</p>
                                   </tr>
                             <tr >
                              <td ><b> Ticket No : LM </b>' . $ticket_no . '</td>
                            </tr>
                            <tr >
                              <td ><b> Date :  </b>' . $date . '</td>
                            </tr>
                             <tr >
                                <td ><b> Address : </b>' . $address . '</td>
                            </tr>
                             <tr >
                              <td ><b> Contact :  </b>' . $contact . '</td>
                            </tr>
                            <tr >
                              <td ><b> Email :  </b>' . $to_email . '</td>
                            </tr>
                             <tr >
                              <td ><b> Serial No :  </b>' . $serial_no . '</td>
                            </tr>
                             <tr >
                              <td ><b>  Model No :  </b>' . $model_no . '</td>
                            </tr>
                             <tr >
                              <td ><b> Estimate Given :  </b>' . $estimate_given . '</td>
                            </tr>
                             <tr >
                               <td ><b> Physical Condition : </b>' . $physical_condition . '</td>
                            </tr>
                             <tr >
                              <td ><b> Laptop Password :  </b>' . $lappy_pass . '</td>
                            </tr>
                            <tr >
                              <td ><b> Reported Problems By Executive  :  </b>' . $reported_problems . '</td>
                            </tr>
                             <tr >
                              <td ><b> Reported Problems By customer :  </b>' . $reported_problems_cust . '</td>
                            </tr>
                               ' . $arr_to_str1_mail . '
                               ' . $arr_to_str2_mail . '
                               '.$arr_to_check_list_mail.'
                              <tr >
                              <td ><b> Reported Problems :  </b>' . $executive_name . '</td>
                            </tr>
                            <tr >
                                 <td ><b>Front View Image : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $front_view . '" alt="Front View img" /></td>
                                </tr>
                                     <tr >
                                 <td ><b>Back View Image : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $back_screen_view . '" alt="Back View img" /></td>
                                </tr>
                                  <tr >
                                 <td ><b>Keyboard View Image : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $keyboard_view . '" alt="Keyboard View img" /></td>
                                </tr>
                                  <tr >
                                 <td ><b>Base View Image : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $track_pad_view . '"  alt="Base View img" /></td>
                                </tr>
                                  <tr >
                                 <td ><b>Track Pad View Image : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $base_view . '" alt="Track Pad View img" /></td>
                                </tr>
                                <tr >
                                 <td ><b>Internal Part View : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $int_part_img . '" alt="Internal Part View" /></td>
                                </tr>
                                  ' . $part_along_with_mail . '
                               ' . $img_arr_to_other_mail . '
                                 <tr >
                                      <p>We will update you before the diagnosis of your device within 24 hours of pickup.</p>
                                      <p>If you have any questions, please feel free to reach out to us.</p>
                                       <p>Thanks & Regards,</p>
                                        <p>Lappy Maker | <a href="tel:+919319848444">9319848444</a></p>
                                         <p><a href="https://www.lappymaker.com/">Lappymaker.com</a></p>
                                   </tr>
                            </table></body></html>';

                    $config['charset']    = 'utf-8';
                    $config['newline']    = "\r\n";
                    $config['mailtype'] = 'html'; // or html
                    $config['validation'] = TRUE; // bool whether to validate email or not 
                    $config['smtp_host']    = 'ssl://smtp.googlemail.com';
                    $config['smtp_port']    = 465;
                    $config['smtp_timeout'] = '300';
                    $config['smtp_user']    = 'services@lappymaker.com';
                    $config['smtp_pass']    = "Dilpreet@1989";
                                        
                    // $config['charset'] = 'utf-8';
                    // $config['newline'] = "\r\n";
                    // $config['mailtype'] = 'html'; // or html
                    // $config['validation'] = TRUE; // bool whether to validate email or not
                    // $config['smtp_host'] = 'ssl://mail.lappymaker.co';
                    // $config['smtp_port'] = 465;
                    // $config['smtp_timeout'] = '300';
                    // $config['smtp_user']    = 'services@lappymaker.com';
                    // $config['smtp_pass']    = "afstomttfxscegeo";
                    
            
            // $config['protocol'] = 'smtp';
            // $config['smtp_host'] = 'smtp.gmail.com';
            // $config['smtp_user']    = 'services@lappymaker.com';
            // $config['smtp_pass']    = "afstomttfxscegeo";
            // $config['smtp_port'] = 587;
            // $config['smtp_timeout'] = '300';
            // $config['charset'] = 'utf-8';
            // $config['newline'] = "\r\n";
            // $config['mailtype'] = 'html';
            // $config['validation'] = TRUE;
            
            
            

            $this->email->initialize($config);
            $this->email->set_mailtype("html");
            $this->email->set_newline("\r\n");
            $this->email->set_crlf("\r\n");
            $this->email->from($from_email, 'Lappy Maker');
            $this->email->to($to_email);
            $this->email->subject('LAPTOP PICK UP FORM UPDATE');

            $this->email->message($message_email);
            //Send mail 
            if ($this->email->send())
                $this->session->set_flashdata("email_sent", "Email sent successfully.");
            else
                $this->session->set_flashdata("email_sent", "Error in sending Email.");
            // email end



            redirect(base_url() . 'form_sub_off/create/');
        }
    }
}
