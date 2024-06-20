<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{
    // add by dharmender
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('users_model');
    }
    // add by dharmender end -----------------------
    private function logged_in(){
        if( ! $this->session->userdata('authenticated')){
            redirect('users/login');
        }
    }
    public function login(){
        $data['title'] = "Login";
        
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'required');
        
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        if($this->form_validation->run() == false){
            $this->load->view('users/login', $data);
        } 
        else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            
            $user = $this->users_model->login($email, $password);
            
            if($user){
                $userdata = array(
                    'id' => $user->id,
                    'first_name' => $user->first_name,
                    'last_name' => $user->last_name,
                    'admin_type' => $user->admin_type,
                    'authenticated' => TRUE
                );
                
                $this->session->set_userdata($userdata);
                
                redirect('dashboard');
            }
            else {
                $this->session->set_flashdata('message', 'Invalid email or password');
                redirect('users/login');
            }
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('users/login');
    }
    public function add_user(){
        $this->load->view('admin/add_user');
    }
    public function insert_user(){
        $this->form_validation->set_rules('Name', 'Name', 'required');
        $this->form_validation->set_rules('usertype', 'Usertype', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('Email', 'Email', 'trim|required|is_unique[users.email]|valid_emails');
        $this->form_validation->set_message('required', 'Please fill this feild first.');
        $this->form_validation->set_message('is_unique', 'This email is already taken');
        $this->form_validation->set_message('valid_emails', 'Your email is not correct please check and fill again');

        if ($this->form_validation->run() == FALSE)
        {
               $all_data= array(
                'result' =>'error',
                'name' => form_error('Name'),
                'email' => form_error('Email'),
                'password' => form_error('password'),
                'usertype' => form_error('usertype'),
               );
        }
        else
        {
            $name = $this->input->post('Name');
            $email = $this->input->post('Email');
            $password = $this->input->post('password');
            $usertype = $this->input->post('usertype');
            $data = array(
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'admin_type' => $usertype,
            );
           $a =  $this->users_model->add_user($data);
           if($a){
            $all_data= array(
                'result' =>'success',
                'message' => '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success full </strong> 1 User added successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>'
               );
           }else{
            $all_data= array(
                'result' =>'error',
                'message' => '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error</strong> please try again after some time.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>'
               );
           }
        }
        echo json_encode($all_data);
      
    }
    public function all_user(){
        $user['user']=$this->users_model->get_user();
        $this->load->view('admin/all_user',$user);
    }
    public function get_user_data(){
       $id = $this->input->post('id');
        $a = $this->users_model->get_user_data($id);
        $all_data = array(
            'id' => $a->id,
            'name' => $a->name,
            'email' => $a->email,
            'usertype' => $a->admin_type,
            'pass' => $a->password
        );
        echo json_encode($all_data);
    }
    public function update_user(){
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('u_type', 'Usertype', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_emails');
        $this->form_validation->set_message('required', 'Please fill this feild first.');
        $this->form_validation->set_message('valid_emails', 'Your email is not correct please check and fill again');

        if ($this->form_validation->run() == FALSE)
        {
               $all_data= array(
                'result' =>'error',
                'name' => form_error('name'),
                'email' => form_error('email'),
                'password' => form_error('pass'),
                'usertype' => form_error('u_type'),
               );
        }else{
                $id= $this->input->post('id');
                $name= $this->input->post('name');
                $email= $this->input->post('email');
                $pass= $this->input->post('pass');
                $u_type= $this->input->post('u_type');

                $data = array(
                    'name' => $name,
                    'email' => $email,
                    'password' => $pass,
                    'admin_type' => $u_type,
                );
                $a = $this->users_model->update_user_data($id,$data);
                if($a){
                    $all_data= array(
                        'result' =>'success',
                        'message' => '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success full </strong>User details updated.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>'
                       );
                   }else{
                    $all_data= array(
                        'result' =>'error',
                        'message' => '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error</strong> please try again after some time.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>'
                       );
                   }
            }
            echo json_encode($all_data);
    }
    public function delete_user(){
       $id = $this->input->post('id');
       $a = $this->users_model->delete_user($id);
       if($a){
        $all_data = array(
            'result' => "success",
            'message' => "User deleted successfully."           
        );
       }else{
        $all_data = array(
            'result' => "error",
            'message' => "Something went wrong please try again."           
        );
       }
       echo json_encode($all_data);
    }
}
?>