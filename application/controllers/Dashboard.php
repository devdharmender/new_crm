
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('create_model');
        $this->load->library("pagination");
        $this->logged_in();
    }

    // log in

    private function logged_in()
    {
        if (!$this->session->userdata('authenticated')) {
            redirect('users/login');
        }
    }

    // pagination 
    public function index(){
        
        $this->load->view('admin/dashbord');
    }
    
    public function userdata()
    {
        $config = array();
        $config["base_url"] = base_url() . "dashboard/userdata";
        $config["total_rows"] = $this->create_model->get_count();
        $config["per_page"] = 20;
        $config["uri_segment"] = 3;
        /* start add boostrap class and styles */
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['first_tag_close'] = '</span></li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['prev_tag_close'] = '</span></li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['next_tag_close'] = '</span></li>';
        $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['last_tag_close'] = '</span></li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close'] = '</span></li>';
        /*
            end  add boostrap class and styles
        */

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data["links"] = $this->pagination->create_links();

        $users = $this->create_model->all($config["per_page"], $page);

        //  $data['title'] = "Dashboard";
        $this->load->model('create_model');
        $data['users'] = $users;
        $this->load->view("form/crm_customer_data", $data);
    }

    // customer detail status in loop
    public function customer_detail_status($ticket_no)
    {
        $this->load->model('create_model');
        $user1_loop = $this->create_model->getUser($ticket_no);
        $data = array();
        $data['user1_loop'] = $user1_loop;
        $this->load->view("form/customer_detail_status", $data);
    }

    public function in_diagnose_status($ticket_no)
    {
        $this->load->model('create_model');
        $user1_loop_in_dig = $this->create_model->getUser_in_dig($ticket_no);
        $data = array();
        $data['user1_loop_in_dig'] = $user1_loop_in_dig;
        $this->load->view("form/in_diagnose_status", $data);
    }

    // customer full detail
    public function customer_detail($ticket_no)
    {
        $this->load->model('create_model');
        $user1 = $this->create_model->updateUser($ticket_no);
        $data = array();
        $data['user1'] = $user1;
        $this->load->view("form/customer_detail", $data);
    }


    // use less  
    public function user_edit($ticket_no)
    {
        $this->load->model('create_model');
        $user_edit = $this->create_model->updateUser($ticket_no);
        $data = array();
        $data['user_edit'] = $user_edit;
        $this->load->view("form/status_update", $data);
    }

    public function upload_status($ticket_no)
    {
        if ($this->input->post('update')) {
            $this->load->model('create_model');
            $status = $this->input->post('status');
            $with_email = $this->input->post('email-radio');
            $this->create_model->update_status($ticket_no, $status, $with_email);
            $this->session->set_flashdata('success', 'Record update successfully LM No : ' . $ticket_no . '');

            // email
            $from_email = "services@lappymaker.com";
            $to_ticket = $this->input->post('ticket_no');
            $to_status = $this->input->post('status');
            $to_email = $this->input->post('email');
            //Load email library 

            $email_Permit = $this->input->post('email-radio');

            if ($email_Permit == "with") {
                $this->load->library('email');


                $message_email = '<!DOCTYPE><html><head></head><body>
                            <table >
                             <tr >
                                <div><img  src="https://www.lappymaker.com/images/lappy-maker-logo.png" alt="Lappy Maker Logo"   width="250px"/></div>
                                 </tr>
                              <tr >
                                  <h1>Status Report</h1>
                                 </tr>
                             <tr >
                              <td ><b> Ticket No : LM </b>' . $to_ticket . '</td>
                            </tr>
                             <tr >
                                <td ><b> Status : </b>' . $to_status . '</td>
                            </tr>
                             <tr >
                                      <pIf you have any questions, please feel free to reach out to us.</p>
                                       <p>Thanks & Regards,</p>
                                        <p>Lappy Maker | <a href="tel:+919319848444">9319848444</a></p>
                                         <p><a href="https://www.lappymaker.com/">Lappymaker.com</a></p>
                                   </tr>
                            </table></body></html>';

                $config['charset']    = 'utf-8';
                $config['newline']    = "\r\n";
                $config['mailtype'] = 'html'; // or html
                $config['validation'] = TRUE; // bool whether to validate email or not 
                $this->email->initialize($config);
                $this->email->set_mailtype("html");
                $this->email->set_newline("\r\n");
                $this->email->set_crlf("\r\n");
                $this->email->from($from_email, 'Lappy Maker');
                $this->email->to($to_email);
                $this->email->subject('Status');

                $this->email->message($message_email);
                //Send mail 
                if ($this->email->send())
                    $this->session->set_flashdata("email_sent", "Email sent successfully LM No : '.$ticket_no.'");
                else
                    $this->session->set_flashdata("error", "Error in sending Email LM No : '.$ticket_no.'");
                // email end

                redirect(base_url() . 'Dashboard/index/');
            } else {
                $this->session->set_flashdata('email_sent', 'Without Email Send LM No : ' . $ticket_no . '');
                redirect(base_url() . 'Dashboard/index/');
            }
        }
        redirect(base_url() . 'Dashboard/index/');
    }


    // status form update
    public function status_form_upload($ticket_no)
    {
        $this->load->model('create_model');
        $status_form_upload = $this->create_model->updateUser($ticket_no);
        $data = array();
        $data['status_form_upload'] = $status_form_upload;
        $this->load->view("form/status_form", $data);
    }

    public function status_form_upload_data()
    {
        $this->load->model('create_model');
        // Diagonis Form Insert Method

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $this->form_validation->set_error_delimiters('<p class="d-block invalid-feedback">', '</p>');

            $this->form_validation->set_rules('sdate', 'S.Date', 'required');
            $this->form_validation->set_rules('model_no', 'Model No', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('serial_no', 'Serial No', 'required');
            $this->form_validation->set_rules('pr_bc', 'PR  BC', 'required');
            $this->form_validation->set_rules('pe', 'PE', 'required');
            $this->form_validation->set_rules('die', 'DIE', 'required');
            $this->form_validation->set_rules('pr_be', 'PR BE', 'required');
            $this->form_validation->set_rules('body_laptop', 'Body', 'required');
            $this->form_validation->set_rules('remarks', 'Remarks', 'required');
          
           
            if ($this->form_validation->run() == TRUE) {
                if (!empty($_FILES['out_sw_file_input']['name'])) {
                    $_FILES['out_sw_file_input']['name'] = $_FILES['out_sw_file_input']['name'];
                    $_FILES['out_sw_file_input']['type'] = $_FILES['out_sw_file_input']['type'];
                    $_FILES['out_sw_file_input']['tmp_name'] = $_FILES['out_sw_file_input']['tmp_name'];
                    $_FILES['out_sw_file_input']['error'] = $_FILES['out_sw_file_input']['error'];
                    $_FILES['out_sw_file_input']['size'] = $_FILES['out_sw_file_input']['size'];

                    $config['upload_path']   = 'assets/uploads_img/laptop_img/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['encrypt_name']  = true;
                    $config['file_name'] = $_FILES['out_sw_file_input']['name'];

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('out_sw_file_input')) {
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
                            'quality'       =>  "100%",
                        );
                        $this->image_lib->clear();
                        $this->image_lib->initialize($configer);
                        $this->image_lib->resize();

                        $img_arr_to_str_out_sw =  $data['file_name'];
                    } else {
                        // We got some error
                        $error = $this->upload->display_errors("<p class='invalid-feedback d-block'>", "</p>");
                        $data['errorImgUpload'] = $error;
                        $this->load->view("Dashboard/status_form_upload", $data);
                    }
                } else {
                    $img_arr_to_str_out_sw =  "";
                }



                if (!empty($_FILES['inner_sw_file_input']['name'])) {
                    $_FILES['inner_sw_file_input']['name'] = $_FILES['inner_sw_file_input']['name'];
                    $_FILES['inner_sw_file_input']['type'] = $_FILES['inner_sw_file_input']['type'];
                    $_FILES['inner_sw_file_input']['tmp_name'] = $_FILES['inner_sw_file_input']['tmp_name'];
                    $_FILES['inner_sw_file_input']['error'] = $_FILES['inner_sw_file_input']['error'];
                    $_FILES['inner_sw_file_input']['size'] = $_FILES['inner_sw_file_input']['size'];

                    $config['upload_path']   = 'assets/uploads_img/laptop_img/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['encrypt_name']  = true;
                    $config['file_name'] = $_FILES['inner_sw_file_input']['name'];

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('inner_sw_file_input')) {
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
                            'quality'       =>  "100%",
                        );
                        $this->image_lib->clear();
                        $this->image_lib->initialize($configer);
                        $this->image_lib->resize();

                        $img_arr_to_str_inner_sw =  $data['file_name'];
                    } else {
                        // We got some error
                        $error = $this->upload->display_errors("<p class='invalid-feedback d-block'>", "</p>");
                        $data['errorImgUpload'] = $error;
                        $this->load->view("Dashboard/status_form_upload", $data);
                    }
                } else {
                    $img_arr_to_str_inner_sw =  "";
                }


                if (!empty($_FILES['int_pt_file_input']['name'])) {
                    $_FILES['int_pt_file_input']['name'] = $_FILES['int_pt_file_input']['name'];
                    $_FILES['int_pt_file_input']['type'] = $_FILES['int_pt_file_input']['type'];
                    $_FILES['int_pt_file_input']['tmp_name'] = $_FILES['int_pt_file_input']['tmp_name'];
                    $_FILES['int_pt_file_input']['error'] = $_FILES['int_pt_file_input']['error'];
                    $_FILES['int_pt_file_input']['size'] = $_FILES['int_pt_file_input']['size'];

                    $config['upload_path']   = 'assets/uploads_img/laptop_img/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['encrypt_name']  = true;
                    $config['file_name'] = $_FILES['int_pt_file_input']['name'];

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('int_pt_file_input')) {
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
                            'quality'       =>  "100%",
                        );
                        $this->image_lib->clear();
                        $this->image_lib->initialize($configer);
                        $this->image_lib->resize();

                        $img_arr_to_str_int_pt =  $data['file_name'];
                    } else {
                        // We got some error
                        $error = $this->upload->display_errors("<p class='invalid-feedback d-block'>", "</p>");
                        $data['errorImgUpload'] = $error;
                        $this->load->view("Dashboard/status_form_upload", $data);
                    }
                } else {
                    $img_arr_to_str_int_pt =  "";
                }


                if (!empty($_FILES['pro_diag_by_eng']['name'])) {
                    $_FILES['pro_diag_by_eng']['name'] = $_FILES['pro_diag_by_eng']['name'];
                    $_FILES['pro_diag_by_eng']['type'] = $_FILES['pro_diag_by_eng']['type'];
                    $_FILES['pro_diag_by_eng']['tmp_name'] = $_FILES['pro_diag_by_eng']['tmp_name'];
                    $_FILES['pro_diag_by_eng']['error'] = $_FILES['pro_diag_by_eng']['error'];
                    $_FILES['pro_diag_by_eng']['size'] = $_FILES['pro_diag_by_eng']['size'];

                    $config['upload_path']   = 'assets/uploads_img/laptop_img/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['encrypt_name']  = true;
                    $config['file_name'] = $_FILES['pro_diag_by_eng']['name'];

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('pro_diag_by_eng')) {
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
                            'quality'       =>  "100%",
                        );
                        $this->image_lib->clear();
                        $this->image_lib->initialize($configer);
                        $this->image_lib->resize();

                        $img_pro_diag_by_eng =  $data['file_name'];
                    } else {
                        // We got some error
                        $error = $this->upload->display_errors("<p class='invalid-feedback d-block'>", "</p>");
                        $data['errorImgUpload'] = $error;
                        $this->load->view("Dashboard/status_form_upload", $data);
                    }
                } else {
                    $img_pro_diag_by_eng =  "";
                }


                // User Details 
                $formArray['ticket_no'] = $this->input->post('ticket_no');
                $formArray['name'] = $this->input->post('name');
                $formArray['email'] = $this->input->post('email');
                $formArray['with_email'] = $this->input->post('email-radio');
                $formArray['date'] = $this->input->post('date');
                $formArray['sdate'] = $this->input->post('sdate');
                $formArray['model_no'] = $this->input->post('model_no');
                $formArray['lappy_pass'] = $this->input->post('password');
                $formArray['serial_no'] = $this->input->post('serial_no');
                $formArray['pr_bc'] = $this->input->post('pr_bc');
                $formArray['pe'] = $this->input->post('pe');
                $formArray['die'] = $this->input->post('die');
                $formArray['pr_be'] = $this->input->post('pr_be');
                $formArray['body_laptop'] = $this->input->post('body_laptop');
                $formArray['remarks'] = $this->input->post('remarks');
                $formArray['checked_by'] = $this->input->post('repair_not_parts');
                $formArray['confiremed_by'] = $this->input->post('confiremed_by');


                $formArray['part_picked_detail'] = $this->input->post('part_picked_detail');


                $formArray['front_view'] = $this->input->post('front_view');
                $formArray['back_screen_view'] = $this->input->post('back_screen_view');
                $formArray['keyboard_view'] = $this->input->post('keyboard_view');
                $formArray['base_view'] = $this->input->post('base_view');
                $formArray['track_pad_view'] = $this->input->post('track_pad_view');
                $formArray['int_part_img'] = $this->input->post('int_part_img');
                $formArray['file_input'] = $this->input->post('file_input');
                $formArray['part_along'] = $this->input->post('part_along');




                $formArray['outer_screw_img'] = $img_arr_to_str_out_sw;
                $formArray['inner_screw_img'] = $img_arr_to_str_inner_sw;
                $formArray['internal_part_img'] = $img_arr_to_str_int_pt;
                $formArray['problem_diagnos_by_eng_img'] = $img_pro_diag_by_eng;




                // Parts status 
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

                $arr_to_str = implode(",", $part_status);
                // Parts status 
                $formArray['part_status'] = $arr_to_str;

                // Parts status Section


                $this->create_model->status_upload_list($formArray);
                $ticket_no = $this->input->post('ticket_no');
                $submit_in_off = $this->input->post('submit_in_off');



                $this->create_model->dig_form_update_status($ticket_no, $submit_in_off);

                $this->session->set_flashdata('success', 'Form Added Successfully LM No : ' . $ticket_no . '');

                // email
                $email_Permit = $this->input->post('email-radio');

                if ($email_Permit == "with") {
                    $from_email = "services@lappymaker.com";
                    $to_email = $this->input->post('email');
                    $to_name = $this->input->post('name');
                    $to_ticket_no = $this->input->post('ticket_no');
                    $to_date = $this->input->post('date');
                    $to_sdate = $this->input->post('sdate');


                    $to_model_no = $this->input->post('model_no');
                    $to_password = $this->input->post('password');
                    $to_serial_no = $this->input->post('serial_no');
                    $to_pr_bc = $this->input->post('pr_bc');
                    $to_pe = $this->input->post('pe');
                    $to_die = $this->input->post('die');
                    $to_pr_be = $this->input->post('pr_be');
                    $to_body_laptop = $this->input->post('body_laptop');
                    $to_remarks = $this->input->post('remarks');
                    // $to_repair_not_parts = $this->input->post('repair_not_parts');
                    $to_confiremed_by = $this->input->post('confiremed_by');


                    //   img

                    $to_part_picked_detail = $this->input->post('part_picked_detail');


                    $to_front_view = $this->input->post('front_view');
                    $to_back_screen_view = $this->input->post('back_screen_view');
                    $to_keyboard_view = $this->input->post('keyboard_view');
                    $to_base_view = $this->input->post('base_view');
                    $to_track_pad_view = $this->input->post('track_pad_view');
                    $to_int_part_img = $this->input->post('int_part_img');
                    $img_arr_to_str_data = $this->input->post('file_input');
                    $part_along_with_data = $this->input->post('part_along');

                    $to_img_arr_to_str_out_sw = $img_arr_to_str_out_sw;
                    $to_img_arr_to_str_inner_sw = $img_arr_to_str_inner_sw;
                    $to_img_arr_to_str_int_pt = $img_arr_to_str_int_pt;
                    $to_img_pro_diag_by_eng = $img_pro_diag_by_eng;

                    //   if image data is empty
                    if (strlen($part_along_with_data) > 5) {
                        $part_along_with_mail = '<tr >
                                 <td ><b>Parts Pickup Along With Laptop : </b>' . $to_part_picked_detail . '<br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $part_along_with_data . '"   /></td>
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
                      if (strlen($arr_to_str) > 25) {
                        $arr_to_str_mail = '  <tr >
                              <td ><b> Part Problem Detect :  </b>' . $arr_to_str . '</td>
                            </tr>';
                    } else {
                        $arr_to_str_mail = "";
                    };
                    
                      if (strlen($to_img_pro_diag_by_eng) > 5) {
                        $problem_diagnos_by_eng_img_mail = '   <tr >
                                 <td ><b>Problem Diagnosed by Engg: </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $to_img_pro_diag_by_eng . '" alt="Front View img" /></td>
                                 </tr>';
                    } else {
                        $problem_diagnos_by_eng_img_mail = "";
                    };
                    
                     if (strlen($to_img_arr_to_str_out_sw) > 5) {
                        $outer_screw_img_mail = '<tr >
                                 <td ><b>Problem By Diagnosed  Image : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $to_img_arr_to_str_out_sw . '"  alt="Base View img" /></td>
                                 </tr>';
                    } else {
                        $outer_screw_img_mail = "";
                    };
                    //Load email library 

                    $this->load->library('email');
                    $message_email = '<!DOCTYPE><html><head></head><body>
                            
                            <table >
                            <tr >
                                <div><img  src="https://www.lappymaker.com/images/lappy-maker-logo.png" alt="Lappy Maker Logo"   width="250px"/></div>
                                 </tr>
                                    <tr >
                                      <h1>Device Submitted in Office</h1>
                                      <p>Dear ' . $to_name . '</p>
                                      <p>Your device has been submitted to our service center for diagnosis. We will update you within 12 hours.</p>
                                    </tr>
                             <tr >
                              <td ><b> Ticket No : LM </b>' . $to_ticket_no . '</td>
                            </tr>
                            <tr >
                              <td ><b>Pick Up Date :  </b>' . $to_date . '</td>
                            </tr>
                             <tr >
                              <td ><b>Submit Date :  </b>' . $to_sdate . '</td>
                            </tr>
                            <tr >
                              <td ><b>Model No :  </b>' . $to_model_no . '</td>
                            </tr>
                             <tr >
                              <td ><b> Serial No :  </b>' . $to_serial_no . '</td>
                            </tr>
                             <tr >
                              <td ><b> Pickup Engineer Name :  </b>' . $to_pe . '</td>
                            </tr>
                             <tr >
                                <td ><b> Dignose Engineer Name: </b>' . $to_die . '</td>
                            </tr>
                              <tr >
                              <td ><b> Problem Reported By Engineer :  </b>' . $to_pr_be . '</td>
                            </tr>
                             ' . $arr_to_str_mail . '
                             <tr >
                              <td ><b> Problem Reported By Customer :  </b>' . $to_pr_bc . '</td>
                            </tr>
                             <tr >
                                <td ><b>Laptop Password : </b>' . $to_password . '</td>
                            </tr>
                             <tr >
                              <td ><b> Condition :  </b>' . $to_body_laptop . '</td>
                            </tr>
                            <tr >
                              <td ><b> Remarks :  </b>' . $to_remarks . '</td>
                            </tr>
                             <tr >
                                <td ><b> Repaired By : </b>' . $to_confiremed_by . '</td>
                            </tr>
                            </br>
                              <tr >
                                <td ><b>Submit Time Photos/Images  </b></td>
                            </tr>
                            </br>
                             <tr >
                             <td ><b>Front View Image : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $to_front_view . '" alt="Front View img" /></td>
                                </tr>
                                     <tr >
                                 <td ><b>Back View Image : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $to_back_screen_view . '" alt="Back View img" /></td>
                                </tr>
                                  <tr >
                                 <td ><b>Keyboard View Image : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $to_keyboard_view . '" alt="Keyboard View img" /></td>
                                </tr>
                                  <tr >
                                 <td ><b>Track Pad View Image : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $to_track_pad_view . '"  alt="Base View img" /></td>
                                </tr>
                                  <tr >
                                 <td ><b>Base View Image : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $to_base_view . '" alt="Track Pad View img" /></td>
                                </tr>
                                  <tr >
                                 <td ><b>Internal Part Image : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $to_int_part_img . '"  alt="Base View img" /></td>
                                </tr>
                                  ' . $part_along_with_mail . '
                               ' . $img_arr_to_other_mail . '
                               <tr >
                               </br>
                                <tr >
                                <td ><b>Diagnosis Photos/Images  </b></td>
                                <tr >
                                </br>
                                 <tr >
                                 <td ><b>Inner Screws Image : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $to_img_arr_to_str_inner_sw . '" alt="Keyboard View img" /></td>
                                </tr>
                                  <tr >
                                 <td ><b>Internal Parts Condition Image  : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $to_img_arr_to_str_int_pt . '"  alt="Base View img" /></td>
                                </tr>
                                '.$problem_diagnos_by_eng_img_mail.'
                                    
                                 '.$outer_screw_img_mail.'
                                <tr >
                                      <pIf you have any questions, please feel free to reach out to us.</p>
                                       <p>Thanks & Regards,</p>
                                        <p>Lappy Maker | <a href="tel:+919319848444">9319848444</a></p>
                                         <p><a href="https://www.lappymaker.com/">Lappymaker.com</a></p>
                                   </tr>
                            </table>
                            </body></html>';

                    //  $config['protocol']    = 'smtp';
                    $config['smtp_host']    = 'ssl://smtp.googlemail.com';
                    $config['smtp_port']    = 465;
                    $config['smtp_timeout'] = '300';
                    $config['smtp_user']    = 'services@lappymaker.com';
                    $config['smtp_pass']    = "Dilpreet@1989";
                    $config['charset']    =  'utf-8';
                    $config['newline']    = "\r\n";
                    $config['mailtype'] = 'html'; // or html
                    $config['validation'] = TRUE; // bool whether to validate email or not





                    $this->email->initialize($config);
                    $this->email->set_mailtype("html");
                    $this->email->set_newline("\r\n");
                    $this->email->set_crlf("\r\n");
                    $this->email->from($from_email, 'Lappy Maker');
                    $this->email->to($to_email);
                    $this->email->subject('Diagnose Report ');
                    $this->email->message($message_email);

                    //Send mail 

                    if ($this->email->send()) {
                        $this->session->set_flashdata("email_sent", "Email sent successfully LM No : '.$to_ticket_no.' .");
                        redirect(base_url() . 'Dashboard/index/');
                    } else {
                        $this->session->set_flashdata("error", "Error in sending Email LM No : '.$to_ticket_no.'.");
                        redirect(base_url() . 'Dashboard/index/');
                    }

                    // email end

                } else {
                    $this->session->set_flashdata('email_sent', 'Without Email Send LM No : ' . $ticket_no . '');
                    redirect(base_url() . 'Dashboard/index/');
                }

                redirect(base_url() . 'Dashboard/index/');
            } else {
                $ticket_no = $this->input->post('ticket_no');
                $this->session->set_flashdata('error', 'Fill all required input');
                redirect(base_url() . 'Dashboard/status_form_upload/' . $ticket_no);
            }
        } else {
            $this->session->set_flashdata('error', 'Status not update error');
            redirect(base_url() . 'Dashboard/index/');
        }
    }
    // in diagnos laptop
    public function in_diagnosis($ticket_no)
    {
        $this->load->model('create_model');
        $in_diagnose = $this->create_model->diagnos_form_data($ticket_no);
        $data = array();
        $data['in_diagnose'] = $in_diagnose;
        $this->load->view("form/in_diagnose", $data);
    }

    public function in_diagnos_form()
    {
        $this->load->model('create_model');
        // Diagonis Form Insert Method
        if ($_SERVER["REQUEST_METHOD"] == "POST") {


            $this->form_validation->set_rules('quality_engineer', 'QC Engg', 'required');
           

            if ($this->form_validation->run() == TRUE) {
                if (!empty($_FILES['oc_sticker_detail_img']['name'])) {
                    $_FILES['oc_sticker_detail_img']['name'] = $_FILES['oc_sticker_detail_img']['name'];
                    $_FILES['oc_sticker_detail_img']['type'] = $_FILES['oc_sticker_detail_img']['type'];
                    $_FILES['oc_sticker_detail_img']['tmp_name'] = $_FILES['oc_sticker_detail_img']['tmp_name'];
                    $_FILES['oc_sticker_detail_img']['error'] = $_FILES['oc_sticker_detail_img']['error'];
                    $_FILES['oc_sticker_detail_img']['size'] = $_FILES['oc_sticker_detail_img']['size'];

                    $config['upload_path']   = 'assets/uploads_img/laptop_img/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['encrypt_name']  = true;
                    $config['file_name'] = $_FILES['oc_sticker_detail_img']['name'];

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('oc_sticker_detail_img')) {
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
                            'quality'       =>  "100%",
                        );
                        $this->image_lib->clear();
                        $this->image_lib->initialize($configer);
                        $this->image_lib->resize();

                        $oc_sticker_detail_img =  $data['file_name'];
                    } else {
                        // We got some error
                        $error = $this->upload->display_errors("<p class='invalid-feedback d-block'>", "</p>");
                        $data['errorImgUpload'] = $error;
                        $this->load->view("form/diagonis", $data);
                    }
                } else {
                }



               
                // Parts status 
                $part_status['keyboard'] = $this->input->post('keyboard');
                $part_status['touoch_pad'] = $this->input->post('touoch_pad');
                $part_status['camera'] = $this->input->post('camera');
                $part_status['wi_fi'] = $this->input->post('wi_fi');
                $part_status['display'] = $this->input->post('display');
                $part_status['ms_office'] = $this->input->post('ms_office');
                $part_status['touchpad_clicks'] = $this->input->post('touchpad_clicks');
                $part_status['sound'] = $this->input->post('sound');

                $part_status['safari_chrome'] = $this->input->post('safari_chrome');
                $part_status['display_pannel'] = $this->input->post('display_pannel');
                $part_status['touch_id'] = $this->input->post('touch_id');
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

                $arr_to_str = implode(", ", $part_status);
                $formArray['diagnos_check_li'] = $arr_to_str;

               // detail
               
                $formArray['ticket_no'] = $this->input->post('ticket_no');
                $formArray['email'] = $this->input->post('email');
                $formArray['name'] = $this->input->post('name');
                $formArray['pdate'] = $this->input->post('date');
                $formArray['sdate'] = $this->input->post('sdate');
                $formArray['qcdate'] = $this->input->post('qcdate');
                $formArray['password'] = $this->input->post('password');
                $formArray['model_no'] = $this->input->post('model_no');
                $formArray['serial_no'] = $this->input->post('serial_no');
                $formArray['pe'] = $this->input->post('pe');
                $formArray['die'] = $this->input->post('die');
                $formArray['confiremed_by'] = $this->input->post('confiremed_by');
                $formArray['repair_parts'] = $this->input->post('repair_parts');
                $formArray['remark_if'] = $this->input->post('remark_if');
                $formArray['quality_engineer'] = $this->input->post('quality_engineer');
                 $formArray['with_email'] = $this->input->post('email-radio');
                 
                

                //  img
                
                $formArray['front_view'] = $this->input->post('front_view');
                $formArray['back_screen_view'] = $this->input->post('back_screen_view');
                $formArray['keyboard_view'] = $this->input->post('keyboard_view');
                $formArray['base_view'] = $this->input->post('base_view');
                $formArray['track_pad_view'] = $this->input->post('track_pad_view');
                $formArray['int_part_img'] = $this->input->post('int_part_img');
                $formArray['file_input'] = $this->input->post('file_input');
                $formArray['inner_screw_img'] = $this->input->post('inner_screw_img');
                $formArray['internal_part_img'] = $this->input->post('internal_part_img');
                $formArray['problem_diagnos_by_eng_img'] = $this->input->post('problem_diagnos_by_eng_img');
                $formArray['outer_screw_img'] = $this->input->post('outer_screw_img');
                
                
                  $formArray['part_picked_detail'] = $this->input->post('part_picked_detail');
                $formArray['part_along'] = $this->input->post('part_along');
                
                
                  $formArray['oc_sticker_detail'] = $this->input->post('oc_sticker_detail');
                $formArray['oc_sticker_detail_img'] = $oc_sticker_detail_img;
                
                
                

                $this->create_model->diagnos_form_upload($formArray);

                $ticket_no = $this->input->post('ticket_no');

                $submit_in_off = $this->input->post('submit_in_off');

                $this->create_model->dig_form_update_status($ticket_no, $submit_in_off);

                $this->session->set_flashdata('success', 'Form Added Successfully LM No : ' . $ticket_no . '');

                  
                
                
                
                

                $email_Permit = $this->input->post('email-radio');

                if ($email_Permit == "with") {
                    
                      //only mail

               
                $to_diagnos_check_li = $arr_to_str;
                $ticket_no = $this->input->post('ticket_no');
                $to_email =  $this->input->post('email');
                $name = $this->input->post('name');
                $date = $this->input->post('date');
                $sdate = $this->input->post('sdate');
                $qcdate =  $this->input->post('qcdate');
                $password =  $this->input->post('password');
                $model_no =  $this->input->post('model_no');
                $serial_no = $this->input->post('serial_no');
                $pe = $this->input->post('pe');
                $die = $this->input->post('die');
                $confiremed_by =  $this->input->post('confiremed_by');
                $quality_engineer = $this->input->post('quality_engineer');
               
                  $part_picked_detail = $this->input->post('part_picked_detail');
                $part_along = $this->input->post('part_along');
                
                $to_oc_sticker_detail = $this->input->post('oc_sticker_detail');
                $to_oc_sticker_detail_img = $oc_sticker_detail_img;
                
                $front_view = $this->input->post('front_view');
                $back_screen_view =  $this->input->post('back_screen_view');
                $keyboard_view =  $this->input->post('keyboard_view');
                $base_view =  $this->input->post('base_view');
                $track_pad_view = $this->input->post('track_pad_view');
                $int_part_img = $this->input->post('int_part_img');
                $file_input = $this->input->post('file_input');
                $inner_screw_img =  $this->input->post('inner_screw_img');
                $internal_part_img =  $this->input->post('internal_part_img');
                $problem_diagnos_by_eng_img =  $this->input->post('problem_diagnos_by_eng_img');
                $outer_screw_img = $this->input->post('outer_screw_img');
               
                //end   
                 if (strlen($part_along) > 5) {
                        $part_along_with_mail = ' <tr >
                                 <td ><b>Part Along With : </b>'. $part_picked_detail . '<br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $part_along . '"  alt="Base View img" /></td>
                                </tr>';
                    } else {
                        $part_along_with_mail = "";
                    };


                    if (strlen($file_input) > 5) {
                        $img_arr_to_other_mail = '<tr >
                                 <td ><b>Other View (Scratch & Dents): </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $file_input . '" alt="Keyboard View img" /></td>
                                </tr>';
                    } else {
                        $img_arr_to_other_mail = "";
                    };
                    
                     if (strlen($problem_diagnos_by_eng_img) > 5) {
                        $problem_diagnos_by_eng_img_mail = '   <tr >
                                 <td ><b>Problem Diagnosed By Engg: </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $problem_diagnos_by_eng_img . '" alt="Front View img" /></td>
                                 </tr>';
                    } else {
                        $problem_diagnos_by_eng_img_mail = "";
                    };
                    
                     if (strlen($outer_screw_img) > 5) {
                        $outer_screw_img_mail = '<tr >
                                 <td ><b>Problem By Diagnosed  Image : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $outer_screw_img . '"  alt="Base View img" /></td>
                                 </tr>';
                    } else {
                        $outer_screw_img_mail = "";
                    };
                    if (strlen($to_diagnos_check_li) > 27) {
                        $arr_to_str_mail = '  <tr >
                              <td ><b>Check List :  </b> QC Pass</td>
                            </tr>';
                    } else {
                        $arr_to_str_mail = "";
                    };
                    //Load email library 
                    $this->load->library('email');
                    $message_email = '<!DOCTYPE><html><head></head><body>
                            
                            <table >
                            <tr >
                                <div><img  src="https://www.lappymaker.com/images/lappy-maker-logo.png" alt="Lappy Maker Logo"   width="250px"/></div>
                                 </tr>
                                    <tr >
                                      <h1>QC Detail</h1>
                                      <p>Dear ' . $name . '</p>
                                      <p>Your laptop has been diagnosed successfully. Here are the issues with your device:</p>
                                   </tr>
                            
                             <tr >
                              <td ><b> Ticket NO :  </b>LM ' . $ticket_no . '</td>
                            </tr>
                             <tr >
                                <td ><b>Email: </b>' . $to_email . '</td>
                            </tr>
                            <tr >
                              <td ><b>Pick Up Date :  </b>' . $date . '</td>
                            </tr>
                            
                              <tr >
                              <td ><b>Submit Date :  </b>' . $sdate . '</td>
                            </tr>
                              <tr >
                              <td ><b>Quality Check Date :  </b>' . $qcdate . '</td>
                            </tr>
                              <tr >
                              <td ><b>Password :  </b>' . $password . '</td>
                            </tr>
                              <tr >
                              <td ><b>Model No :  </b>' . $model_no . '</td>
                            </tr>
                              <tr >
                              <td ><b>Serial No :  </b>' . $serial_no . '</td>
                            </tr>
                              <tr >
                              <td ><b>Pickup Engg :  </b>' . $pe . '</td>
                            </tr>
                              <tr >
                              <td ><b>Diagnose Engg :  </b>' . $die . '</td>
                            </tr>
                              <tr >
                              <td ><b>Repaired By :  </b>' . $confiremed_by . '</td>
                            </tr>
                              <tr >
                              <td ><b>QC Engg :  </b>' . $quality_engineer . '</td>
                            </tr>
                            '.$arr_to_str_mail.'
                                 <tr >
                                 <td ><b>Display Pannel Front View : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $front_view . '" alt="Front View img" /></td>
                                </tr>
                                     <tr >
                                 <td ><b>Display Pannel Back view : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $back_screen_view . '" alt="Back View img" /></td>
                                </tr>
                                  <tr >
                                 <td ><b>Keyboard View : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $keyboard_view . '" alt="Keyboard View img" /></td>
                                </tr>
                                  <tr >
                                 <td ><b>Bottom Base View : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $base_view . '"  alt="Base View img" /></td>
                                </tr>
                                     <tr >
                                 <td ><b>Trackpad View : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $track_pad_view . '" alt="Front View img" /></td>
                                </tr>
                                     <tr >
                                 <td ><b>Internal Part View : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $int_part_img . '" alt="Back View img" /></td>
                                </tr>
                                  '.$img_arr_to_other_mail.'
                                '.$part_along_with_mail.'
                                 
                            
                                 <tr >
                                 <td ><b>Inner Screw Image : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $inner_screw_img . '" alt="Back View img" /></td>
                                 </tr>
                                  <tr >
                                 <td ><b>Internal Parts Condition : </b><br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $internal_part_img . '" alt="Keyboard View img" /></td>
                                 </tr>
                                 '.$problem_diagnos_by_eng_img_mail.'
                                    
                                 '.$outer_screw_img_mail.'
                                 
                                 
                                   <tr >
                                 <td ><b>QC Sticker Detail : </b>'. $to_oc_sticker_detail . '<br><img  src="https://www.lappymaker.co/diagonis/assets/uploads_img/laptop_img/' . $to_oc_sticker_detail_img . '"  alt="Base View img" /></td>
                                </tr>
                                    <tr >
                                      <p>We would appreciate your help with confirming the estimate so that we can initiate your repair process.</p>
                                      <p>If you have any questions, please feel free to reach out to us.</p>
                                       <p>Thanks & Regards,</p>
                                        <p>Lappy Maker | <a  href="tel:+919319848444">9319848444</a></p>
                                         <p><a href="https://www.lappymaker.com/">Lappymaker.com</a></p>
                                   </tr>
                            </table>
                            </body></html>';
                    $from_email = "services@lappymaker.com";

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
                    $this->email->subject('Oc Report ');
                    $this->email->message($message_email);

                    //Send mail 

                    if ($this->email->send()) {
                        $this->session->set_flashdata("email_sent", "Email sent successfully LM No : '.$ticket_no.'");
                        redirect(base_url() . 'Dashboard/index/');
                    } else {
                        $this->session->set_flashdata("error", "Error in sending Email LM No : '.$ticket_no.'");
                        redirect(base_url() . 'Dashboard/index/');
                    }
                    // email end


                } else {
                    $this->session->set_flashdata('email_sent', 'Without Email Send LM No : ' . $ticket_no . '');
                    redirect(base_url() . 'Dashboard/index/');
                }
            } else {
                $ticket_no = $this->input->post('ticket_no');
                $this->session->set_flashdata('error', 'Fill all required input');
                redirect(base_url() . 'Dashboard/in_diagnosis/' . $ticket_no);
            }
        } else {
            $this->session->set_flashdata('error', 'Status not update error LM No : ' . $ticket_no . '');
            redirect(base_url() . 'Dashboard/index/');
        }
    }




    // Quotation Approval
    public function aproved($ticket_no)
    {
        $this->load->model('create_model');
        $quotation_aproved = $this->create_model->updateUser($ticket_no);
        $data = array();
        $data['quotation_aproved'] = $quotation_aproved;
        $this->load->view("form/quotation_aproved", $data);
    }


    // Quotation Approval
    public function aproved_form()
    {
        $this->load->model('create_model');
        // Diagonis Form Insert Method
        if ($_SERVER["REQUEST_METHOD"] == "POST") {


            $this->form_validation->set_rules('estimate_cost', 'Estimate Cost', 'required');
            if ($this->form_validation->run() == TRUE) {
                $formArray['ticket_no'] = $this->input->post('ticket_no');
                $formArray['date'] = $this->input->post('date');
                $formArray['email'] = $this->input->post('email');
                $formArray['with_email'] = $this->input->post('email-radio');
                $formArray['name'] = $this->input->post('name');
                $formArray['model_no'] = $this->input->post('model_no');
                $formArray['serial_no'] = $this->input->post('serial_no');
                $formArray['estimate_cost'] = $this->input->post('estimate_cost');
                $formArray['tta_time'] = $this->input->post('tta_time');
                $formArray['quatation_status'] = $this->input->post('quatation_status');
                $formArray['quatation_rand'] = $this->input->post('quatation_rand');



                // email
                $ticket_no = $this->input->post('ticket_no');
                $to_email = $this->input->post('email');
                $to_name =  $this->input->post('name');
                $to_model_no =  $this->input->post('model_no');
                $to_serial_no =  $this->input->post('serial_no');
                $to_estimate_cost = $this->input->post('estimate_cost');
                $to_quatation_status = $this->input->post('quatation_status');
                $to_quatation_rand = $this->input->post('quatation_rand');
                $to_tta_time = $this->input->post('tta_time');
                //end      

                $this->create_model->quatation($formArray);



                $submit_in_off = $this->input->post('submit_in_off');

                $this->create_model->quatation_update_status($ticket_no, $submit_in_off);

                $this->session->set_flashdata('success', 'Form Added Successfully LM No : ' . $ticket_no . ' ');



                $email_Permit = $this->input->post('email-radio');

                if ($email_Permit == "with") {
                    //Load email library 
                    $this->load->library('email');
                    $message_email = '<!DOCTYPE><html><head></head><body>
                            
                            <table >
                            <tr >
                                <div><img  src="https://www.lappymaker.com/images/lappy-maker-logo.png" alt="Lappy Maker Logo"   width="250px"/></div>
                                 </tr>
                                    <tr >
                                      <h1>Quotation Approval</h1>
                                      <p>Dear ' . $to_name . '</p>
                                      <p>Your laptop has been diagnosed successfully. Here are the issues with your device:</p>
                                   </tr>
                            
                             <tr >
                              <td ><b> Ticket NO :  </b>LM ' . $ticket_no . '</td>
                            </tr>
                            <tr >
                              <td ><b>Name :  </b>' . $to_name . '</td>
                            </tr>
                            
                             <tr >
                                <td ><b> Model No : </b>' . $to_model_no . '</td>
                            </tr>
                             <tr >
                              <td ><b> Serial No :  </b>' . $to_serial_no . '</td>
                            </tr>
                            <tr >
                              <td ><b> Estimate Cost :  </b>' . $to_estimate_cost . '</td>
                            </tr>
                             <tr >
                              <td ><b> Turnaround Time For Repaire :  </b>' . $to_tta_time . '</td>
                            </tr>
                            <tr >
                              <td ><b> Quatation Aproved: <a href="https://www.lappymaker.co/diagonis/Aproved_quatation/aproved_status/' . $to_quatation_rand . '">Click</a></td>
                            </tr>
                          
                                    <tr >
                                      <p>We would appreciate your help with confirming the estimate so that we can initiate your repair process.</p>
                                      <p>If you have any questions, please feel free to reach out to us.</p>
                                       <p>Thanks & Regards,</p>
                                        <p>Lappy Maker | <a  href="tel:+919319848444">9319848444</a></p>
                                         <p><a href="https://www.lappymaker.com/">Lappymaker.com</a></p>
                                   </tr>
                            </table>
                            </body></html>';
                    $from_email = "services@lappymaker.com";

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
                    $this->email->subject('Quotation Approval');
                    $this->email->message($message_email);

                    //Send mail 

                    if ($this->email->send()) {
                        $this->session->set_flashdata("email_sent", "Email sent successfully LM No : '.$ticket_no.'");
                        redirect(base_url() . 'Dashboard/userdata/');
                    } else {
                        $this->session->set_flashdata("error", "Error in sending Email LM No : '.$ticket_no.'");
                        redirect(base_url() . 'Dashboard/userdata/');
                    }
                    // email end
                } else {
                    $this->session->set_flashdata('email_sent', 'Without Email Send LM No : ' . $ticket_no . ' ');
                    redirect(base_url() . 'Dashboard/userdata/');
                }
            } else {
                $ticket_no = $this->input->post('ticket_no');
                $this->session->set_flashdata('error', 'Fill all required input');
                redirect(base_url() . 'Dashboard/aproved/' . $ticket_no);
            }
        } else {
            $this->session->set_flashdata('error', 'Status not update error LM No : ' . $ticket_no . '');
            redirect(base_url() . 'Dashboard/userdata/');
        }
    }


    // Quotation Approval Detail
    public function aproved_form_detail($ticket_no)
    {
        $this->load->model('create_model');
        $aproved_form_detail['aproved_form_detail'] = $this->create_model->get_aproved_form_detail($ticket_no);
        // $data = array();
        // $data['aproved_form_detail'] = $aproved_form_detail;
        $this->load->view("form/quotation_detail", $aproved_form_detail);
    }
    
      // Quotation Approval Detail
    public function paid_unpaid($ticket_no)
    {
        $this->load->model('create_model');
        $user_edit = $this->create_model->paid_unpa($ticket_no);
        $data = array();
        $data['user_edit'] = $user_edit;
        $this->load->view("form/paid_unpaid", $data);
    }
    
     public function paid_unpaid_status_upload($ticket_no)
    {
        if ($this->input->post('update')) {
            $this->load->model('create_model');
            $status = $this->input->post('status');
            $with_email = $this->input->post('email-radio');
            $this->create_model->paid_unpa_update($ticket_no, $status, $with_email);
            $this->session->set_flashdata('success', 'Record update successfully LM No : ' . $ticket_no . '');

            // email
            $from_email = "services@lappymaker.com";
            $to_ticket = $this->input->post('ticket_no');
            $to_status = $this->input->post('status');
            $to_email = $this->input->post('email');
            //Load email library 

            $email_Permit = $this->input->post('email-radio');

            if ($email_Permit == "with") {
                $this->load->library('email');


                $message_email = '<!DOCTYPE><html><head></head><body>
                            <table >
                             <tr >
                                <div><img  src="https://www.lappymaker.com/images/lappy-maker-logo.png" alt="Lappy Maker Logo"   width="250px"/></div>
                                 </tr
                                  <tr>
                                  <h1>Status Report</h1>
                                   <p>Your Payment Has Been  Successfully Received.</p>
                                 </tr>
                             <tr >
                              <td ><b> Ticket No : LM </b>' . $to_ticket . '</td>
                            </tr>
                             <tr >
                                <td ><b> Payment Status : </b>' . $to_status . '</td>
                            </tr>
                             <tr >
                                      <pIf you have any questions, please feel free to reach out to us.</p>
                                       <p>Thanks & Regards,</p>
                                        <p>Lappy Maker | <a href="tel:+919319848444">9319848444</a></p>
                                         <p><a href="https://www.lappymaker.com/">Lappymaker.com</a></p>
                                   </tr>
                            </table></body></html>';

                $config['charset']    = 'utf-8';
                $config['newline']    = "\r\n";
                $config['mailtype'] = 'html'; // or html
                $config['validation'] = TRUE; // bool whether to validate email or not 
                $this->email->initialize($config);
                $this->email->set_mailtype("html");
                $this->email->set_newline("\r\n");
                $this->email->set_crlf("\r\n");
                $this->email->from($from_email, 'Lappy Maker');
                $this->email->to($to_email);
                $this->email->subject('Payment Status ');

                $this->email->message($message_email);
                //Send mail 
                if ($this->email->send())
                    $this->session->set_flashdata("email_sent", "Email sent successfully LM No : '.$ticket_no.'");
                else
                    $this->session->set_flashdata("error", "Error in sending Email LM No : '.$ticket_no.'");
                // email end

                redirect(base_url() . 'Dashboard/userdata/');
            } else {
                $this->session->set_flashdata('email_sent', 'Without Email Send LM No : ' . $ticket_no . '');
                redirect(base_url() . 'Dashboard/userdata/');
            }
        }
        redirect(base_url() . 'Dashboard/userdata/');
    }
    
    
    
    
    # deleviery form details 
    
     public function delivery_form_details($ticket_no){
            //  print_r($ticket_no);die;
             $this->db->where('ticket_no',$ticket_no);
             $this->db->where('status',1);
             $this->db->order_by('id', 'DESC');
             $this->db->limit(1);
        $row = $this->db->get('delivery_record')->row();
             
            //  print_r($row);die;
             
             if($row->ticket_no){  
                $data = array();
                $data['user1'] = $row;
                $this->load->view("form/delivery_form_details", $data);
             }else{
                  $this->session->set_flashdata('error', 'Not Record Found ');
                  redirect(base_url() . 'Dashboard/index/');
             }
             
    }
    
}
