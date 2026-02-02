<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    protected $current_lang = 'tr';

    protected $allowed_languages = ['tr', 'en'];

    public function __construct()
    {
        parent::__construct();
        $this->load->library(['session', 'form_validation']);
        $this->load->helper('url');

        $lang = $this->session->userdata('language');
        if (empty($lang) || !in_array($lang, $this->allowed_languages, true)) {
            $lang = $this->input->cookie('app_lang');
            if (empty($lang) || !in_array($lang, $this->allowed_languages, true)) {
                $lang = 'tr';
            }
            $this->session->set_userdata('language', $lang);
        }
        $this->current_lang = $lang;

        $this->lang->load('app', $lang);
        $this->lang->load('form_validation', $lang);

        $this->load->vars('current_lang', $this->current_lang);
    }
    protected function requireLogin(){
        if(!$this->session->userdata('auth_user_id')){
            redirect('auth/login');
        }
    }
    protected function requireSuperAdmin(){
        $this->requireLogin();
        if ($this->session->userdata('auth_user_role') !== 'super_admin'){
            show_error($this->lang->line('access_denied'), 403);
        }
    }
    protected function requireAdmin(){
        $this->requireLogin();
        if($this->session->userdata('auth_user_role') !== 'admin'){
            show_error($this->lang->line('access_denied'), 403);
        }
    }

    protected function redirectByRole() {
        $role = $this->session->userdata('auth_user_role');
        if ($role === 'super_admin') {
            redirect('superadmin/dashboard');
        } elseif ($role === 'admin') {
            redirect('admin/dashboard'); 
        } else {
            redirect('user/dashboard'); 
        }
    }

}