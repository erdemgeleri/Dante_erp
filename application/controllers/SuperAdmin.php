<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuperAdmin extends MY_Controller {
    protected $table = 'auth_users';
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Auth_user_model');
        $this->load->model('User_profile_model');
        $this->requireSuperAdmin();
    }

    public function dashboard() {
        $this->load->view('superadmin/dashboard');
    }


    public function add_user() {
        $this->load->view('superadmin/add_user');
    }
    public function add_user_post(){
        $this->form_validation->set_rules(
            'name',
            $this->lang->line('label_first_name'),
            'required'
        );
        $this->form_validation->set_rules(
            'surname',
            $this->lang->line('label_last_name'),
            'required|trim'
        );
        $this->form_validation->set_rules(
            'email',
            $this->lang->line('label_email'),
            'required|valid_email|is_unique[auth_users.email]'
        );
        $this->form_validation->set_rules(
            'phone',
            $this->lang->line('label_phone'),
            'required|trim'
        );
        $this->form_validation->set_rules(
            'role',
            $this->lang->line('label_role'),
            'required|in_list[super_admin,admin,user]'
        );
        $this->form_validation->set_rules(
            'username',
            $this->lang->line('label_username'),
            'required|is_unique[auth_users.username]'
        );
        $this->form_validation->set_rules(
            'address',
            $this->lang->line('label_address'),
            'required'
        );
        $this->form_validation->set_rules(
            'password',
            $this->lang->line('label_password'),
            'required|min_length[6]'
        );
        if($this->form_validation->run() === FALSE){
            
            return $this->load->view('superadmin/add_user');
        }
        // VALID BAŞARILI authData profileData
        $authData = [
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => password_hash(
                $this->input->post('password'),
                PASSWORD_DEFAULT
            ),
            'role' => $this->input->post('role'),
        ];
        $this->Auth_user_model->create($authData);
        $userId = $this->db->insert_id();
        $profileData = [
            'user_id' => $userId,
            'full_name' => $this->input->post('name') . ' ' . $this->input->post('surname'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address'),
        ];
        $this->User_profile_model->create($profileData);
        redirect('superadmin/users');
    }
    public function delete_user($id){
        $this->Auth_user_model->delete_by_id($id);
        redirect('superadmin/users');
    }
    public function edit_user($id){
        $id = (int)$id;
        $user = $this->Auth_user_model->get_by_id($id);
        if(!$user){
            show_404();
            return;
        }
        $data['user'] = $user;
        $this->load->view('superadmin/edit_user', $data);
    }
    public function edit_user_post($id){

    
    }

    public function users() {
        $this->load->library('pagination');
        $config['base_url'] = site_url('superadmin/users');
        $config['total_rows'] = $this->Auth_user_model->count_all();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = 'İlk';
        $config['last_link'] = 'Son';
        $config['next_link'] = '>';
        $config['prev_link'] = '<';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $data['total_users'] = $this->Auth_user_model->count_all();
        $data['active_users_count'] = $this->Auth_user_model->active_users_count();
        $data['admin_count'] = $this->Auth_user_model->admin_count();
        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['users'] = $this->Auth_user_model->get_all_with_profiles($config['per_page'], $page);
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('superadmin/users', $data);
    }   
    


}

