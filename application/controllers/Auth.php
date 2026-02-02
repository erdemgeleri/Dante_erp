<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_user_model');
        $this->load->model('User_profile_model');
    }

    public function login(){
        return $this->load->view('auth/login');
    }
    public function register(){
        return $this->load->view('auth/register');
    }

    public function login_post(){

        // Form alan etiketleri ve hata mesajları dil dosyasından (MY_Controller dil yüklemesi ile)
        $this->form_validation->set_rules(
            'email',
            $this->lang->line('label_email'),
            'valid_email|required'
        );
        $this->form_validation->set_rules(
            'password',
            $this->lang->line('label_password'),
            'required|min_length[6]|max_length[255]'
        );

        if($this->form_validation->run() == FALSE){
            return $this->load->view('auth/login');
        }
        $user = $this->Auth_user_model->get_by_email($this->input->post('email'));
        if(!$user || !password_verify(
            $this->input->post('password'),
            $user->password
        )){
            $this->session->set_flashdata('error', $this->lang->line('msg_invalid_credentials'));
            return redirect('auth/login');
        }
        $this->session->set_userdata([
            'auth_user_id' => $user->id,
            'auth_user_email' => $user->email,
            'auth_user_role' => $user->role,
        ]);
        return $this->redirectByRole();
    }
    
    public function register_post(){
        // Form alan etiketleri dil dosyasından; form_validation mesajları otomatik dil dosyasından geliyor
        $this->form_validation->set_rules(
            'first_name',
            $this->lang->line('label_first_name'),
            'required|min_length[2]|max_length[30]'
        );
        $this->form_validation->set_rules(
            'last_name',
            $this->lang->line('label_last_name'),
            'required|min_length[2]|max_length[30]'
        );
        $this->form_validation->set_rules(
            'username',
            $this->lang->line('label_username'),
            'required|min_length[3]|max_length[50]|is_unique[auth_users.username]'
        );
        $this->form_validation->set_rules(
            'email',
            $this->lang->line('label_email'),
            'valid_email|required|is_unique[auth_users.email]'
        );
        $this->form_validation->set_rules(
            'phone',
            $this->lang->line('label_phone'),
            'required|min_length[10]|max_length[15]'
        );
        $this->form_validation->set_rules(
            'address',
            $this->lang->line('label_address'),
            'required|min_length[5]|max_length[255]'
        );
        $this->form_validation->set_rules(
            'password',
            $this->lang->line('label_password'),
            'required|min_length[6]|max_length[255]'
        );
        if($this->form_validation->run() == FALSE){
            return $this->load->view('auth/register');
        }
        $authData = [
            'username' => $this->input->post('username', true),
            'email' => $this->input->post('email', true),
            'password' => password_hash(
                $this->input->post('password', true),
                PASSWORD_DEFAULT
            ),
            'role' => 'user', // default role
        ];
        $this->Auth_user_model->create($authData);
        $user_id = $this->db->insert_id();
        $profileData = [
            'user_id' => $user_id,
            'full_name' => $this->input->post('first_name', true) . ' ' . $this->input->post('last_name', true),
            'phone' => $this->input->post('phone', true),
            'address' => $this->input->post('address', true),
        ];
        $this->User_profile_model->create($profileData);
        return redirect('auth/login');
    }

   

    public function logout(){
        $this->session->sess_destroy();
        return redirect('auth/login');  
    }
    public function delete_user_by_id($id){

    }
}