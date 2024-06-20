<?php
class form_sub_off extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url','string');
        $this->load->model('create_model');
        
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

                    $this->load->library('email');

                    $message_email = '<!DOCTYPE><html><head></head><body>
                            <table >
                             <tr >
                                <div><img  src="https://www.lappymaker.com/images/lappy-maker-logo.png" alt="Lappy Maker Logo"   width="250px"/></div>
                                 </tr>
                                    <tr >
                                      <h1>Laptop Pickup Confirmation</h1>
                                      <p>Dear ' . $to_name . '</p>
                                      <p>We <B>do not guarantee data preservation, advise owner or customer to backup your device data independently, offer no data backup services<B>, and any older repair or replacement parts remain our property unless specified for retention on the same day of service</p>
                                      <br>
                                      <p>We are acknowledging that we have collected your device for repair as details below:</p>
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
                                      <p>We will update you after the diagnosis of your device within 24 hours of pickup.</p>
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
                    $this->email->subject('LAPTOP PICK UP FORM');




                    // $this->email->message($message_email);
                    // //Send mail 
                    // if ($this->email->send())
                    //     $this->session->set_flashdata("email_sent", "Email sent successfully.");
                    // else
                    //     $this->session->set_flashdata("error", "Error in sending Email.");
                    // // email end
                    
                    
                    $this->email->message($message_email);

                    // Send mail
                    if ($this->email->send()) {
                        $this->session->set_flashdata("email_sent", "Email sent successfully.");
                    } else {
                        $this->session->set_flashdata("error", "Error in sending Email: " . $this->email->print_debugger());
                    }
                    
                    // Clear email data
                    $this->email->clear();
                    
                    // Continue with other operations if needed



                    redirect(base_url() . 'form_sub_off/submit_form_data');
                } else {
                    $this->session->set_flashdata('error', 'Customer signature must !');

                    $this->load->view("form/diagonis_submit_office");
                }
            } else {
                $this->load->view("form/diagonis_submit_office");
            }
        } else {

            $this->load->view("form/diagonis_submit_office");
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

// change done by dharmender from here  home door services start from here --------------------------------

// load page
    public function create_door_step(){
        $this->load->view('form/door_step');
    }
    public function check_door_step_services(){
        $a['users'] = $this->create_model->door_step_servicesdoor_step_services();
        

        $this->load->view('dashboard/door_step_services',$a);
    }

// insert data in database
    public function door_stp(){
        //     Executive Digital Signature upload ----------------
        //     $folderPath = "assets/uploads_img/executive_sign/";

        //     $image_parts = explode(";base64,", $_POST['signed2']);

        //     $image_type_aux = explode("image/", $image_parts[0]);

        //     $image_type = $image_type_aux[1];

        //     $image_base64 = base64_decode($image_parts[1]);

        //     $file = $folderPath . uniqid() . '.' . $image_type;

        //     file_put_contents($file, $image_base64);

        //     $uri_segments1 = explode('/', $file);
        //     $uri_segments1 = end($uri_segments1);
        //     // Signed2 name upload
        //  $executive = $uri_segments1; // signature name got here
        

        //     // custoer sign digitak ------------------------

        //     $folderPath = "assets/uploads_img/customer_sign/";

        //     $image_parts = explode(";base64,", $_POST['signed1']);

        //     $image_type_aux = explode("image/", $image_parts[0]);

        //     $image_type = $image_type_aux[1];

        //     $image_base64 = base64_decode($image_parts[1]);

        //     $file = $folderPath . uniqid() . '.' . $image_type;

        //     file_put_contents($file, $image_base64);

        //     $uri_segments = explode('/', $file);
        //     $uri_segments = end($uri_segments);

        //     // Signed1 name upload
        // $customer = $uri_segments;  // sign name got here

        $img_name = "";
        $img_name2 = "";
        $img_name3 = "";
        $img_name4 = "";
        $name = $this->input->post('name');
        $page = $this->input->post('page');
        $date = $this->input->post('date');
        $address = $this->input->post('address');
        $contact = $this->input->post('contact');
        $email = $this->input->post('email');
        $model_no = $this->input->post('model_no');
        $serial_no = $this->input->post('serial_no');
        $finalamount = $this->input->post('finalamount');
        $replacedpart = $this->input->post('replacedpart');
        $reported_problems_cust = $this->input->post('reported_problems_cust');
        $sol_given = $this->input->post('sol_given');
        $executive_name = $this->input->post('executive_name');
    // before installation checklist here ; 
        $checklist[] = $this->input->post('keyboard');
        $checklist[] = $this->input->post('touoch_pad');
        $checklist[] = $this->input->post('camera');
        $checklist[] = $this->input->post('wi_fi');
        $checklist[] = $this->input->post('display');
        $checklist[] = $this->input->post('ms_office');
        $checklist[] = $this->input->post('touchpad_clicks');
        $checklist[] = $this->input->post('sound');
        $checklist[] = $this->input->post('safari_chrome');
        $checklist[] = $this->input->post('touch_screen');
        $checklist[] = $this->input->post('touch_id');
        $checklist[] = $this->input->post('touch_bar');
        $checklist[] = $this->input->post('battery_h');
        $checklist[] = $this->input->post('battery_backup');
        $checklist[] = $this->input->post('charging_port');
        $checklist[] = $this->input->post('bluetooth');
        $checklist[] = $this->input->post('back_light');
        $checklist[] = $this->input->post('internal_sno');
        $checklist[] = $this->input->post('usb_port');
        $checklist[] = $this->input->post('audio_port');
        $checklist[] = $this->input->post('sleep_mode');
        $checklist[] = $this->input->post('mic');
        $checklist[] = $this->input->post('shut_down');
        $checklist[] = $this->input->post('downloads');
        $checklist[] = $this->input->post('restart');
    // before installation checklist here end
    // after installation checklist here ; 
        $checklist1[] = $this->input->post('keyboard1');
        $checklist1[] = $this->input->post('touoch_pad1');
        $checklist1[] = $this->input->post('camera1');
        $checklist1[] = $this->input->post('wi_fi1');
        $checklist1[] = $this->input->post('display1');
        $checklist1[] = $this->input->post('ms_office1');
        $checklist1[] = $this->input->post('touchpad_clicks1');
        $checklist1[] = $this->input->post('sound1');
        $checklist1[] = $this->input->post('safari_chrome1');
        $checklist1[] = $this->input->post('touch_screen1');
        $checklist1[] = $this->input->post('touch_id1');
        $checklist1[] = $this->input->post('touch_bar1');
        $checklist1[] = $this->input->post('battery_h1');
        $checklist1[] = $this->input->post('battery_backup1');
        $checklist1[] = $this->input->post('charging_port1');
        $checklist1[] = $this->input->post('bluetooth1');
        $checklist1[] = $this->input->post('back_light1');
        $checklist1[] = $this->input->post('internal_sno1');
        $checklist1[] = $this->input->post('usb_port1');
        $checklist1[] = $this->input->post('audio_port1');
        $checklist1[] = $this->input->post('sleep_mode1');
        $checklist1[] = $this->input->post('mic1');
        $checklist1[] = $this->input->post('shut_down1');
        $checklist1[] = $this->input->post('downloads1');
        $checklist1[] = $this->input->post('restart1');
    // after installation checklist here end
        // get last ticket no.
        $aa = $this->create_model->get_last_ticket();
        if($aa){
        $last_ticket = $aa->Tracking_id + 1;
        }else{
            $last_ticket = 1;
        }
        // exit;
        // OTP gen
        $otp = rand(1000,9999);
        $check_list = json_encode($checklist);
        $check_list1 = json_encode($checklist1);
        
        
        // file upload  start from here---------------------------
    // don't delete this before installation----------

        if($this->input->post('keyboard') == 'Keyboard'){
            $checkbox1 = 'checked';
        }else{
            $checkbox1 = ' ';
        }
        if($this->input->post('touoch_pad') == 'Touch Pad'){
            $checkbox2 = 'checked';
        }else{
            $checkbox2 = ' ';
        }
        if($this->input->post('camera') == 'Camera'){
            $checkbox3 = 'checked';
        }else{
            $checkbox3 = ' ';
        }
        if($this->input->post('wi_fi') == 'WI-FI'){
            $checkbox4 = 'checked';
        }else{
            $checkbox4 = ' ';
        }
        if($this->input->post('display') == 'Display'){
            $checkbox5 = 'checked';
        }else{
            $checkbox5 = ' ';
        }
        if($this->input->post('ms_office')== 'MS Office'){
            $checkbox6 = 'checked';
        }else{
            $checkbox6 = ' ';
        }
        if($this->input->post('touchpad_clicks')== 'Touchpad Clicks'){
            $checkbox7 = 'checked';
        }else{
            $checkbox7 = ' ';
        }
        if($this->input->post('sound')=='Sound'){
            $checkbox8 = 'checked';
        }else{
            $checkbox8 = ' ';
        }
        if($this->input->post('safari_chrome') == 'Safari/Chrome'){
            $checkbox9 = 'checked';
        }else{
            $checkbox9 = ' ';
        }
        if($this->input->post('touch_screen')== 'Touch Screen'){
            $checkbox10 = 'checked';
        }else{
            $checkbox10 = ' ';
        }
        if($this->input->post('touch_id') == 'Touch ID/Face ID'){
            $checkbox11 = 'checked';
        }else{
            $checkbox11 = ' ';
        }
        if($this->input->post('touch_bar')== 'Touch Bar'){
            $checkbox12 = 'checked';
        }else{
            $checkbox12 = ' ';
        }
        if($this->input->post('battery_h')=='Battery H'){
            $checkbox13 = 'checked';
        }else{
            $checkbox13 = ' ';
        }
        if($this->input->post('battery_backup')== 'Battery Backup'){
            $checkbox14 = 'checked';
        }else{
            $checkbox14 = ' ';
        }
        if($this->input->post('charging_port')=='Charging_Port'){
            $checkbox15 = 'checked';
        }else{
            $checkbox15 = ' ';
        }
        if($this->input->post('bluetooth')== 'Bluetooth'){
            $checkbox16 = 'checked';
        }else{
            $checkbox16 = ' ';
        }
        if($this->input->post('back_light')== 'Back Light'){
            $checkbox17 = 'checked';
        }else{
            $checkbox17 = ' ';
        }
        if($this->input->post('internal_sno')=='Internal S.No'){
            $checkbox18 = 'checked';
        }else{
            $checkbox18 = ' ';
        }
        if($this->input->post('usb_port')=='USB Port'){
            $checkbox19 = 'checked';
        }else{
            $checkbox19 = ' ';
        }
        if($this->input->post('audio_port')=='Audio Port'){
            $checkbox20 = 'checked';
        }else{
            $checkbox20 = ' ';
        }
        if($this->input->post('sleep_mode')=='Sleep Mode'){
            $checkbox21 = 'checked';
        }else{
            $checkbox21 = ' ';
        }
        if($this->input->post('mic')=='Mic'){
            $checkbox22 = 'checked';
        }else{
            $checkbox22 = ' ';
        }
        if($this->input->post('shut_down')=='Shut Down'){
            $checkbox23 = 'checked';
        }else{
            $checkbox23 = ' ';
        }
        if($this->input->post('downloads')=='Downloads'){
            $checkbox24 = 'checked';
        }else{
            $checkbox24 = ' ';
        }
        if($this->input->post('restart')== 'Restart'){
            $checkbox25 = 'checked';
        }else{
            $checkbox25 = ' ';
        }
    // don' delete this----------

    // don't delete this after installation----------

        if($this->input->post('keyboard1') == 'Keyboard'){
            $ccheckbox1 = 'checked';
        }else{
            $ccheckbox1 = ' ';
        }
        if($this->input->post('touoch_pad1') == 'Touch Pad'){
            $ccheckbox2 = 'checked';
        }else{
            $ccheckbox2 = ' ';
        }
        if($this->input->post('camera1') == 'Camera'){
            $ccheckbox3 = 'checked';
        }else{
            $ccheckbox3 = ' ';
        }
        if($this->input->post('wi_fi1') == 'WI-FI'){
            $ccheckbox4 = 'checked';
        }else{
            $ccheckbox4 = ' ';
        }
        if($this->input->post('display1') == 'Display'){
            $ccheckbox5 = 'checked';
        }else{
            $ccheckbox5 = ' ';
        }
        if($this->input->post('ms_office1')== 'MS Office'){
            $ccheckbox6 = 'checked';
        }else{
            $ccheckbox6 = ' ';
        }
        if($this->input->post('touchpad_clicks1')== 'Touchpad Clicks'){
            $ccheckbox7 = 'checked';
        }else{
            $ccheckbox7 = ' ';
        }
        if($this->input->post('sound1')=='Sound'){
            $ccheckbox8 = 'checked';
        }else{
            $ccheckbox8 = ' ';
        }
        if($this->input->post('safari_chrome1') == 'Safari/Chrome'){
            $ccheckbox9 = 'checked';
        }else{
            $ccheckbox9 = ' ';
        }
        if($this->input->post('touch_screen1')== 'Touch Screen'){
            $ccheckbox10 = 'checked';
        }else{
            $ccheckbox10 = ' ';
        }
        if($this->input->post('touch_id1') == 'Touch ID/Face ID'){
            $ccheckbox11 = 'checked';
        }else{
            $ccheckbox11 = ' ';
        }
        if($this->input->post('touch_bar1')== 'Touch Bar'){
            $ccheckbox12 = 'checked';
        }else{
            $ccheckbox12 = ' ';
        }
        if($this->input->post('battery_h1')=='Battery H'){
            $ccheckbox13 = 'checked';
        }else{
            $ccheckbox13 = ' ';
        }
        if($this->input->post('battery_backup1')== 'Battery Backup'){
            $ccheckbox14 = 'checked';
        }else{
            $ccheckbox14 = ' ';
        }
        if($this->input->post('charging_port1')=='Charging/Port'){
            $ccheckbox15 = 'checked';
        }else{
            $ccheckbox15 = ' ';
        }
        if($this->input->post('bluetooth1')== 'Bluetooth'){
            $ccheckbox16 = 'checked';
        }else{
            $ccheckbox16 = ' ';
        }
        if($this->input->post('back_light1')== 'Back Light'){
            $ccheckbox17 = 'checked';
        }else{
            $ccheckbox17 = ' ';
        }
        if($this->input->post('internal_sno1')=='Internal S.No'){
            $ccheckbox18 = 'checked';
        }else{
            $ccheckbox18 = ' ';
        }
        if($this->input->post('usb_port1')=='USB Port'){
            $ccheckbox19 = 'checked';
        }else{
            $ccheckbox19 = ' ';
        }
        if($this->input->post('audio_port1')=='Audio Port'){
            $ccheckbox20 = 'checked';
        }else{
            $ccheckbox20 = ' ';
        }
        if($this->input->post('sleep_mode1')=='Sleep Mode'){
            $ccheckbox21 = 'checked';
        }else{
            $ccheckbox21 = ' ';
        }
        if($this->input->post('mic1')=='Mic'){
            $ccheckbox22 = 'checked';
        }else{
            $ccheckbox22 = ' ';
        }
        if($this->input->post('shut_down1')=='Shut Down'){
            $ccheckbox23 = 'checked';
        }else{
            $ccheckbox23 = ' ';
        }
        if($this->input->post('downloads1')=='Downloads'){
            $ccheckbox24 = 'checked';
        }else{
            $ccheckbox24 = ' ';
        }
        if($this->input->post('restart1')== 'Restart'){
            $ccheckbox25 = 'checked';
        }else{
            $ccheckbox25 = ' ';
        }
    // don' delete this----------



        if (!empty($_FILES['cam1']['name'])) {
            $config['upload_path']   = 'assets/uploads_img/home_door/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ( ! $this->upload->do_upload('cam1'))
                {
                    $al_adata = array(
                        'result' => "error",
                        'cam1' => $this->upload->display_errors()
                    );
                }
                else
                {
                        $data = $this->upload->data();

                        $img_name = $data['file_name'];
                }
        } else {
            $img_name =  NULL;
        }
        if (!empty($_FILES['cam2']['name'])) {
            $config['upload_path']   = 'assets/uploads_img/home_door/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ( ! $this->upload->do_upload('cam2'))
                {
                    $al_adata = array(
                        'result' => "error",
                        'cam2' => $this->upload->display_errors()
                    );
                        // $error = array('error' => $this->upload->display_errors());

                        // print_r($error);
                }
                else
                {
                    $data = $this->upload->data();

                    $img_name2 = $data['file_name'];
                }
        } else {
            $img_name2 = NULL;
        }
        if (!empty($_FILES['cam3']['name'])) {
            $config['upload_path']   = 'assets/uploads_img/home_door/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ( ! $this->upload->do_upload('cam3'))
                {
                    $al_adata = array(
                        'result' => "error",
                        'cam3' => $this->upload->display_errors()
                    );
                }
                else
                {
                    $data = $this->upload->data();

                    $img_name3 = $data['file_name'];
                }
        } else {
            $img_name3 =  NULL;
        }
        if (!empty($_FILES['cam4']['name'])) {
            $config['upload_path']   = 'assets/uploads_img/home_door/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ( ! $this->upload->do_upload('cam4'))
                {
                    $al_adata = array(
                        'result' => "error",
                        'cam4' => $this->upload->display_errors()
                    );
                }
                else
                {
                    $data = $this->upload->data();

                    $img_name4 = $data['file_name'];
                }
        } else {
            $img_name4 =  NULL;
        }

        $data = array(
            'Tracking_id' => $last_ticket,
            'name' => $name,
            'date' => $date,
            'address' => $address,
            'contact' => $contact,
            'email' => $email,
            'mod_no' => $model_no,
            'ser_no' => $serial_no,
            'f_amount'=> $finalamount,
            'rep_part'=> $replacedpart,
            'rep_prblm_by_cust'=> $reported_problems_cust,
            'sol_giv_by_execl'=> $sol_given,
            'before_installation'=> $check_list,
            'cam1' => $img_name,
            'cam2' => $img_name2,
            'cam3' => $img_name3,
            'cam4' => $img_name4,
            'after_installation'=> $check_list1,
            // 'customer_sign'=> $customer,
            // 'execlutive_sign'=> $executive,
            'exclutive_name'=> $executive_name,
            'OTP' => $otp
        );
        $a = $this->create_model->insert_home($data);


        if($a){
            $this->load->library('email');
            $from_email = "services@lappymaker.com";
            $to_email = $email;
        
            $message_email = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml">
            
            <head>
              <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>Verify your login</title>
            
              <!--[if mso]><style type="text/css">body, table, td, a { font-family: Arial, Helvetica, sans-serif !important; }</style><![endif]-->
            </head>
            
            <body style="font-family: Helvetica, Arial, sans-serif; margin: 0px; padding: 0px; background-color: #ffffff;">
              <table role="presentation"
                style="width: 100%; border-collapse: collapse; border: 0px; border-spacing: 0px; font-family: Arial, Helvetica, sans-serif; background-color: rgb(239, 239, 239);">
                <tbody>
                  <tr>
                    <td align="center" style="padding: 1rem 2rem; vertical-align: top; width: 100%;">
                      <table role="presentation" style="max-width: 600px; border-collapse: collapse; border: 0px; border-spacing: 0px; text-align: left;">
                        <tbody>
                          <tr>
                            <td style="padding: 40px 0px 0px;">
                              
                              <div style="padding: 20px; background-color: rgb(255, 255, 255);">
                                <div style="color: rgb(0, 0, 0); text-align: left;">
                                  <h1 style="margin: 1rem 0">Verification code</h1>
                                  <p style="padding-bottom: 16px">Please do share with Lappy maker execlutive.</p>
                                  <p style="padding-bottom: 16px"><strong style="font-size: 130%">'.$otp.'</strong></p>
                                  <h4 style="margin: 1rem 0">You  can download your laptop detils : </h4>
                                  <div class="one">
                                <a href="'.base_url('form_sub_off/create_pdf/81').'"><button class="round-icon" style="background: #0069eb;border-radius: 30px;border: none;color: #fff;font-size: 16px;padding: 15px 30px;text-decoration: none;">Download </button></a></div>
                                  <p style="padding-bottom: 16px">If you didn'."'".'t request this, you can ignore this email.</p>
                                  <p style="padding-bottom: 16px"><b>Thanks,<br>The Lappy Maker team</b></p>
                                </div>
                              </div>
                          
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </body>
            
            </html>';

        // $a['all_data'] = $this->create_model->get_single_door_serv($id);
        // echo  $message_email = $this->load->view('dashboard/door_step_form_data', $a);exit;

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
            $this->email->subject('LAPTOP SERVICE AT YOUR HOME');
            $this->email->attach($alluserdata);
            $this->email->message($message_email);
            if($this->email->send()){
                $this->session->set_flashdata('msg','<div class="alert alert-success" role="alert">
                <strong> successfull !</strong> we have send you verification mail kindly confirm.
              </div>');
              redirect('form_sub_off/verify_opt/'.$a);
            }else{
                $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
                <strong> Sorry !</strong> Something went wrong please try again.
              </div>');
                redirect('form_sub_off/create_door_step/');
            }

            
        }else{
           $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
           <strong> Sorry !</strong> Something went wrong please try again.
         </div>');
           redirect('form_sub_off/create_door_step/');
        }
        // echo json_encode($al_adata);
    }
    
    // load dor step services specific data
    public function load_door_form_proof(){
        $id= $this->uri->segment(3);
        $a['all_data'] = $this->create_model->get_single_door_serv($id);
        $this->load->view('dashboard/door_step_form_data',$a);
    }
    public function verify_opt(){
        $id= $this->uri->segment(3);
        $a['otp_data'] = $this->create_model->get_otp_data($id);
        $this->load->view('dashboard/otp',$a);
    }
    public function pdf(){
        $id= 2;
        $a['all_data'] = $this->create_model->get_single_door_serv($id);
        $this->load->view('dashboard/mail',$a);
    }
    public function verify_otp_sumbit(){
        $otp =$this->input->post('otp');
        $otp1 = $this->input->post('otp1');
        $otp2 = $this->input->post('otp2');
        $otp3 = $this->input->post('otp3');
        $name =  $this->input->post('name');
        $email = $this->input->post('email');
        $newotp =$otp.$otp1.$otp2.$otp3;
        $a = $this->create_model->get_verified($newotp,$email,$name);
        if($a){
            $all_data = array(
                'result' => 'success',
                'message'=> '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Thankyou! </strong>verified successfully
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>'
            );
        }else{
            $all_data = array(
                'result' => 'error',
                'message'=> '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>sorry! </strong>You have entered incorrect OTP;
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>'
            );
        }

    echo json_encode($all_data);
    }
    public function create_pdf(){
        $id= $this->uri->segment(3);
        $a = $this->create_model->get_single_door_serv($id);
        if($a){

        if(!empty($a->before_installation)){$ck = json_decode($a->before_installation);}else{$ck = "sorry";};
        if(!empty($a->after_installation)){$bk = json_decode($a->after_installation);}else{$bk = "sorry";};
        // don't delete this before installation----------

            if($ck[0] == 'Keyboard'){
                $checkbox1 = 'checked';
            }else{
                $checkbox1 = ' ';
            }
            if($ck[1] == 'Touch Pad'){
                $checkbox2 = 'checked';
            }else{
                $checkbox2 = ' ';
            }
            if($ck[2] == 'Camera'){
                $checkbox3 = 'checked';
            }else{
                $checkbox3 = ' ';
            }
            if($ck[3] == 'WI-FI'){
                $checkbox4 = 'checked';
            }else{
                $checkbox4 = ' ';
            }
            if($ck[4] == 'Display'){
                $checkbox5 = 'checked';
            }else{
                $checkbox5 = ' ';
            }
            if($ck[5]== 'MS Office'){
                $checkbox6 = 'checked';
            }else{
                $checkbox6 = ' ';
            }
            if($ck[6]== 'Touchpad Clicks'){
                $checkbox7 = 'checked';
            }else{
                $checkbox7 = ' ';
            }
            if($ck[7]=='Sound'){
                $checkbox8 = 'checked';
            }else{
                $checkbox8 = ' ';
            }
            if($ck[8] == 'Safari/Chrome'){
                $checkbox9 = 'checked';
            }else{
                $checkbox9 = ' ';
            }
            if($ck[9]== 'Touch Screen'){
                $checkbox10 = 'checked';
            }else{
                $checkbox10 = ' ';
            }
            if($ck[10] == 'Touch ID/Face ID'){
                $checkbox11 = 'checked';
            }else{
                $checkbox11 = ' ';
            }
            if($ck[11]== 'Touch Bar'){
                $checkbox12 = 'checked';
            }else{
                $checkbox12 = ' ';
            }
            if($ck[12]=='Battery H'){
                $checkbox13 = 'checked';
            }else{
                $checkbox13 = ' ';
            }
            if($ck[13]== 'Battery Backup'){
                $checkbox14 = 'checked';
            }else{
                $checkbox14 = ' ';
            }
            if($ck[14]=='Charging_Port'){
                $checkbox15 = 'checked';
            }else{
                $checkbox15 = ' ';
            }
            if($ck[15]== 'Bluetooth'){
                $checkbox16 = 'checked';
            }else{
                $checkbox16 = ' ';
            }
            if($ck[16]== 'Back Light'){
                $checkbox17 = 'checked';
            }else{
                $checkbox17 = ' ';
            }
            if($ck[17]=='Internal S.No'){
                $checkbox18 = 'checked';
            }else{
                $checkbox18 = ' ';
            }
            if($ck[18]=='USB Port'){
                $checkbox19 = 'checked';
            }else{
                $checkbox19 = ' ';
            }
            if($ck[19]=='Audio Port'){
                $checkbox20 = 'checked';
            }else{
                $checkbox20 = ' ';
            }
            if($ck[20]=='Sleep Mode'){
                $checkbox21 = 'checked';
            }else{
                $checkbox21 = ' ';
            }
            if($ck[21]=='Mic'){
                $checkbox22 = 'checked';
            }else{
                $checkbox22 = ' ';
            }
            if($ck[22]=='Shut Down'){
                $checkbox23 = 'checked';
            }else{
                $checkbox23 = ' ';
            }
            if($ck[23]=='Downloads'){
                $checkbox24 = 'checked';
            }else{
                $checkbox24 = ' ';
            }
            if($ck[24]== 'Restart'){
                $checkbox25 = 'checked';
            }else{
                $checkbox25 = ' ';
            }
        // don' delete this----------

        // don't delete this after installation----------

            if($bk[0] == 'Keyboard'){
                $ccheckbox1 = 'checked';
            }else{
                $ccheckbox1 = ' ';
            }
            if($bk[1] == 'Touch Pad'){
                $ccheckbox2 = 'checked';
            }else{
                $ccheckbox2 = ' ';
            }
            if($bk[2] == 'Camera'){
                $ccheckbox3 = 'checked';
            }else{
                $ccheckbox3 = ' ';
            }
            if($bk[3] == 'WI-FI'){
                $ccheckbox4 = 'checked';
            }else{
                $ccheckbox4 = ' ';
            }
            if($bk[4] == 'Display'){
                $ccheckbox5 = 'checked';
            }else{
                $ccheckbox5 = ' ';
            }
            if($bk[5]== 'MS Office'){
                $ccheckbox6 = 'checked';
            }else{
                $ccheckbox6 = ' ';
            }
            if($bk[6]== 'Touchpad Clicks'){
                $ccheckbox7 = 'checked';
            }else{
                $ccheckbox7 = ' ';
            }
            if($bk[7]=='Sound'){
                $ccheckbox8 = 'checked';
            }else{
                $ccheckbox8 = ' ';
            }
            if($bk[8] == 'Safari/Chrome'){
                $ccheckbox9 = 'checked';
            }else{
                $ccheckbox9 = ' ';
            }
            if($bk[9]== 'Touch Screen'){
                $ccheckbox10 = 'checked';
            }else{
                $ccheckbox10 = ' ';
            }
            if($bk[10] == 'Touch ID/Face ID'){
                $ccheckbox11 = 'checked';
            }else{
                $ccheckbox11 = ' ';
            }
            if($bk[11]== 'Touch Bar'){
                $ccheckbox12 = 'checked';
            }else{
                $ccheckbox12 = ' ';
            }
            if($bk[12]=='Battery H'){
                $ccheckbox13 = 'checked';
            }else{
                $ccheckbox13 = ' ';
            }
            if($bk[13]== 'Battery Backup'){
                $ccheckbox14 = 'checked';
            }else{
                $ccheckbox14 = ' ';
            }
            if($bk[14]=='Charging/Port'){
                $ccheckbox15 = 'checked';
            }else{
                $ccheckbox15 = ' ';
            }
            if($bk[15]== 'Bluetooth'){
                $ccheckbox16 = 'checked';
            }else{
                $ccheckbox16 = ' ';
            }
            if($bk[16]== 'Back Light'){
                $ccheckbox17 = 'checked';
            }else{
                $ccheckbox17 = ' ';
            }
            if($bk[17]=='Internal S.No'){
                $ccheckbox18 = 'checked';
            }else{
                $ccheckbox18 = ' ';
            }
            if($bk[18]=='USB Port'){
                $ccheckbox19 = 'checked';
            }else{
                $ccheckbox19 = ' ';
            }
            if($bk[19]=='Audio Port'){
                $ccheckbox20 = 'checked';
            }else{
                $ccheckbox20 = ' ';
            }
            if($bk[20]=='Sleep Mode'){
                $ccheckbox21 = 'checked';
            }else{
                $ccheckbox21 = ' ';
            }
            if($bk[21]=='Mic'){
                $ccheckbox22 = 'checked';
            }else{
                $ccheckbox22 = ' ';
            }
            if($bk[22]=='Shut Down'){
                $ccheckbox23 = 'checked';
            }else{
                $ccheckbox23 = ' ';
            }
            if($bk[23]=='Downloads'){
                $ccheckbox24 = 'checked';
            }else{
                $ccheckbox24 = ' ';
            }
            if($bk[24]== 'Restart'){
                $ccheckbox25 = 'checked';
            }else{
                $ccheckbox25 = ' ';
            }
        // don' delete this----------

        // for image condition 
            if($a->cam1 != NULL){
                $firstimg = $a->cam1;
            } else{
            $firstimg = 'No_Image_Available.jpg';
            }
            if($a->cam2 != NULL){
                $firstimg1 = $a->cam2;
            } else{
            $firstimg1 = 'No_Image_Available.jpg';
            }
            if($a->cam3 != NULL){
                $firstimg2 = $a->cam3;
            } else{
            $firstimg2 = 'No_Image_Available.jpg';
            }
            if($a->cam4 != NULL){
                $firstimg3 = $a->cam4;
            } else{
            $firstimg3 = 'No_Image_Available.jpg';
            }
            if($a->customer_sign != NULL){
                $cust = $a->customer_sign;
            } else{
            $cust = 'No_Image_Available.jpg';
            }
            if($a->execlutive_sign != NULL){
                $exc = $a->execlutive_sign;
            } else{
            $exc = 'No_Image_Available.jpg';
            }
        // img sesction end
        // $this->load->helper('tcpdf/tcpdf.php');
        // $filename = require_once(APPPATH.'./helpers/tcpdf/tcpdf.php');
        require_once(APPPATH.'helpers/tcpdf/tcpdf.php');

        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->setCellPaddings( $left = '1', $top = '2', $right = '1', $bottom = '2');
        $pdf->setTitle('lappymaker services');
        $pdf->addPage();
        $txt = 'Lappy Maker';

        $alluserdata ='<html>

        <head>
            <style>

            table {
                width: 100%;
                border-collapse: collapse;
                border: 1px solid #ddd;
                margin: 0 auto;
            }
            
            table th, table td {
                padding: 8px 12px;
                border-bottom: 1px solid #ddd;
                border-top: 1px solid #ddd;
                border-right: 1px solid #ddd;
                
            }                
            table tr:nth-child(odd) {
                background-color: rgb(188 194 195 / 15%);
            }
            
            table th {
                background-color: rgba(32, 90, 137, 1);
                color: #FFC300;
            }
            
            input[type="checkbox"] {
                appearance: none;
                width: 26px;
                height: 26px;
                border-radius: 7px;
                text-align: center;
                font-size: large;
        
                transition: 250ms;
        
            }
        
            input[type="checkbox"]:before {
                content: "✖";
            }
        
            input[type="checkbox"]:checked:before {
        
                content: "✔";
            }
        
            input[type="checkbox"]:checked {
                accent-color: white;
        
            }
            </style>
        </head>
        
        <body>
        <div style="text-align:center;"><img src="https://www.lappymaker.com/images/lappy-maker-logo.png" alt="Lappy Maker Logo" width="250px" /><br>
        <span style="font-size:24px;">Laptop Door services</span>
        <p style="text-align:center;">Thankyou for choosing lappy maker services your laptop details ~ given below:</p>
        </div>

        <table class="table">
        <tbody>
            <tr>
                <th><b>Dear :</b></th>
                <td>' . $a->name . '</td>
                <th><b>Date :</b></th>
                <td>' . $a->date . '</td>
                
            </tr>
            <tr>
                <th><b>Ticket No :</b></th>
                <td><b> LM </b>' . $a->Tracking_id . '</td>
                <th><b>Address : </b></th>
                <td>' . $a->address . '</td>
            </tr>
        
            <tr>
                <th><b>Contact :</b></th>
                <td>' . $a->contact . '</td>
                <th><b>Serial No : </b></th>
                <td>' . $a->ser_no . '</td>
            </tr>

            <tr>
                <th><b>Model No : </b></th>
                <td>' . $a->mod_no . '</td>
                <th><b>Your Final Amount : </b></th>
                <td> ' . $a->f_amount . '</td>
            </tr>

            <tr>
                <th><b>Reported Problem By customer : </b></th>
                <td colspan="3"> ' . $a->rep_prblm_by_cust . '</td>
            </tr>

            <tr>
                <th><b>Solution Provided By Executive : </b></th>
                <td colspan="3">' . $a->sol_giv_by_execl . '</td>
            </tr>
            <tr>
                <th><b>Note : </b></th>
                <td colspan="3"><input type="checkbox" name="keyboard" value="Keyboard" id="city1" checked="checked" readonly="true"> Working Part | <input type="checkbox" name="keyboard" value="Keyboard" id="city1" readonly="true">Part Not Present or Not Working</td>
            </tr>
            <hr>
            <tr>
                <th><b>Check List  ~ before Part Installation </b></th>
                <td>
                    <section class="parts-picked px-2">
                        
                        <div class="row">
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="keyboard" value="Keyboard" id="city1" checked="'.$checkbox1.'" readonly="true">
                                <span class="part-name d-flex align-items-center">&nbsp;Keyboard</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="touoch_pad1" value="Touch Pad" id="city1" checked="'.$checkbox2.'"
                                readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Touch Pad</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="camera" value="Camera" id="city1" checked="'.$checkbox3.'" readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Camera</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="wi_fi" value="WI-FI" id="city1" checked="'.$checkbox4.'" readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;WI-FI</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="display" value="Display" id="city1" checked="'.$checkbox5.'" readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Display</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="ms_office" value="MS Office" id="city1" checked="'.$checkbox6.'"
                                    readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;MS Office</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="touchpad_clicks" value="Touchpad Clicks"
                                    id="city1" checked="'.$checkbox7.'" readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Touchpad Clicks</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="sound" value="Sound" id="city1" checked="'.$checkbox8.'" readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Sound</span>
                            </div>

                            </div>
                            </section>
                        </td>
                        <td>
                            <section class="parts-picked px-2">
                                
                                <div class="row">

                            <div
                                class="col-6  ">
                                <input type="checkbox" name="safari_chrome" value="Safari/Chrome" id="city1" checked="'.$checkbox9.'"
                                    readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Safari/Chrome</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="touch_screen" value="Touch Screen" id="city1" checked="'.$checkbox10.'"
                                    readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Touch Screen</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="touch_id" value="Touch ID/Face ID" id="city1" checked="'.$checkbox11.'"
                                    readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Touch ID/Face ID</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="touch_bar" value="Touch Bar" id="city1" checked="'.$checkbox12.'"
                                    readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Touch&nbsp;Bar</span>
                            </div>
                            
                        
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="battery_h" value="Battery H" id="city1" checked="'.$checkbox13.'"
                                    readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Battery H.</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="battery_backup" value="Battery Backup"
                                    id="city1" checked="'.$checkbox14.'" readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Battery Backup</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="charging_port" value="Charging/Port" id="city1" checked="'.$checkbox15.'"
                                    readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Charging/Port</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="bluetooth" value="Bluetooth" id="city1" checked="'.$checkbox16.'"
                                    readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Bluetooth</span>
                            </div>
                            </div>
                    </section>
                </td>
                <td>
                    <section class="parts-picked px-2">
                        
                        <div class="row">
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="back_light" value="Back Light" id="city1" checked="'.$checkbox17.'"
                                    readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Back Light</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="internal_sno" value="Internal S.No" id="city1" checked="'.$checkbox18.'"
                                    readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Internal S.No</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="usb_port" value="USB Port" id="city1" checked="'.$checkbox19.'" readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;USB Port</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="audio_port" value="Audio Port" id="city1" checked="'.$checkbox20.'"
                                    readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Audio Port</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="sleep_mode" value="Sleep Mode" id="city1" checked="'.$checkbox21.'"
                                    readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Sleep Mode</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="mic" value="Mic" id="city1" checked="'.$checkbox22.'" readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Mic</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="shut_down" value="Shut Down" id="city1" checked="'.$checkbox23.'"
                                    readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Shut Down</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="downloads" value="Downloads" id="city1" checked="'.$checkbox24.'"
                                    readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Downloads</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="restart" value="Restart" id="city1" checked="'.$checkbox25.'" readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Restart</span>
                            </div>
                        </div>
                    </section>
                </td>
                
            </tr>
            <hr>
            <tr>
                <th><b>Check List  ~ After Part Installation </b></th>
                <td>
                    <section class="parts-picked px-2">
                        
                        <div class="row">
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="keyboard1" value="Keyboard" id="city1" checked="'.$ccheckbox1.'"
                                    readonly="true">
                                <span class="part-name d-flex align-items-center">&nbsp;Keyboard</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="touoch_pad1" value="Touch Pad" id="city1" checked="'.$ccheckbox2.'"
                                    readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Touch Pad</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="camera1" value="Camera" id="city1" checked="'.$ccheckbox3.'" readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Camera</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="wi_fi1" value="WI-FI" id="city1" checked="'.$ccheckbox4.'" readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;WI-FI</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="display1" value="Display" id="city1" checked="'.$ccheckbox5.'" readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Display</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="ms_office1" value="MS Office" id="city1" checked="'.$ccheckbox6.'"
                                    readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;MS Office</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="touchpad_clicks1" value="Touchpad Clicks"
                                    id="city1" checked="'.$ccheckbox7.'" readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Touchpad Clicks</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="sound1" value="Sound" id="city1" checked="'.$ccheckbox8.'" readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Sound</span>
                            </div>
                            </div>
                    </section>
                </td>
                <td>
                    <section class="parts-picked px-2">
                        
                        <div class="row">

                            <div
                                class="col-6  ">
                                <input type="checkbox" name="safari_chrome1" value="Safari/Chrome"
                                    id="city1" checked="'.$ccheckbox9.'" readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Safari/Chrome</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="touch_screen1" value="Touch Screen" id="city1" checked="'.$ccheckbox10.'"
                                    readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Touch Screen</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="touch_id1" value="Touch ID/Face ID" id="city1" checked="'.$ccheckbox11.'"
                                    readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Touch ID/Face ID</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="touch_bar1" value="Touch Bar" id="city1" checked="'.$ccheckbox12.'"
                                    readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Touch&nbsp;Bar</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="battery_h1" value="Battery H" id="city1" checked="'.$ccheckbox13.'"
                                    readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Battery H.</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="battery_backup1" value="Battery Backup"
                                    id="city1" checked="'.$ccheckbox14.'" readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Battery Backup</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="charging_port1" value="Charging/Port"
                                    id="city1" checked="'.$ccheckbox15.'" readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Charging/Port</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="bluetooth1" value="Bluetooth" id="city1" checked="'.$ccheckbox16.'"
                                    readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Bluetooth</span>
                            </div>
                            </div>
                    </section>
                </td>
                <td>
                    <section class="parts-picked px-2">
                        
                        <div class="row">
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="back_light1" value="Back Light" id="city1" checked="'.$ccheckbox17.'"
                                    readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Back Light</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="internal_sno1" value="Internal S.No"
                                    id="city1" checked="'.$ccheckbox18.'" readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Internal S.No</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="usb_port1" value="USB Port" id="city1" checked="'.$ccheckbox19.'"
                                    readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;USB Port</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="audio_port1" value="Audio Port" id="city1" checked="'.$ccheckbox20.'"
                                    readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Audio Port</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="sleep_mode1" value="Sleep Mode" id="city1" checked="'.$ccheckbox21.'"
                                    readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Sleep Mode</span>
                            </div><br>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="mic1" value="Mic" id="city1" checked="'.$ccheckbox22.'" readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Mic</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="shut_down1" value="Shut Down" id="city1" checked="'.$ccheckbox23.'"
                                    readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Shut Down</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="downloads1" value="Downloads" id="city1" checked="'.$ccheckbox24.'"
                                    readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Downloads</span>
                            </div>
                            <div
                                class="col-6  ">
                                <input type="checkbox" name="restart1" value="Restart" id="city1" checked="'.$ccheckbox25.'" readonly="true">

                                <span class="part-name d-flex align-items-center">&nbsp;Restart</span>
                            </div>
                        </div>
                    </section>
                </td>
            </tr>
            <tr>
                <th>Physical Condition : </th>
                <td> 
                    <img src="'.base_url().'assets/uploads_img/home_door/'.$firstimg.'" alt="Physical Condition img" stryle="width:400px;height:auto" />
                </td>
                <th>Physical Condition 2 : </th>
                <td> 
                    <img src="'.base_url().'assets/uploads_img/home_door/'.$firstimg1.'" alt="Physical Condition img" stryle="width:400px;height:auto" />
                </td>
            
            </tr>
            <tr>
                <th>Physical Condition3 : </th>
                <td> 
                    <img src="'.base_url().'assets/uploads_img/home_door/'.$firstimg2.'" alt="Physical Condition img" stryle="width:400px;height:auto" />
                </td>
                <th>Physical Condition 4 : </th>
                <td> 
                    <img src="'.base_url().'assets/uploads_img/home_door/'.$firstimg3.'" alt="Physical Condition img" stryle="width:400px;height:auto" />
                </td>
            
            </tr>
        
            <tr>
            <th><b>Acceptance : </b></th>
            <td colspan="3">I hereby confirm the above-mentioned part that has been installed or serviced by the Lappy Maker Engineer, I am fully satisfied with installation process and with the quality of the service provided. I affirm that my laptop is functioning properly following the service or part installation, and there has been no negative impact on any other part of device during the repair or replacement process.<br> <span
            style="font-size:15px;font-weight:bold;text-align:center;">NO DATA GUARANTEE</span>
            
            </td>
            
            </tr>
            <tr>
                <th><b>Customer Sign : </b></th>
                <td><img src="'.base_url().'assets/uploads_img/customer_sign/'.$cust.'" alt="Physical Condition img" stryle="width:400px;height:auto" /></td>
                <th><b>Executive Sign : </b></th>
                <td><img src="'.base_url().'assets/uploads_img/executive_sign/'.$exc.'" alt="Physical Condition img" stryle="width:400px;height:auto;padding:10px;" /></td>
            </tr>
            <hr>
            <tr>
                <th><b>Executive Name : </b></th>
                <td> ' . $a->exclutive_name . '</td>
                <th><b>Write Your Exprince : </b></th>
                <td><a href="https://g.page/r/Ca8qienVSuH_EBM/review" target="_blanck">Rate us</a></td>
            </tr>
            
            <hr>
        </tbody>
            </table>
            </body>

            </html>';
        $pdf->writeHTML($alluserdata);
        $pdf->Output('userdata.pdf','I');


        }else{
            redirect(base_url('404'));
        }
        
    }
}