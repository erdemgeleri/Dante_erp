<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library(['session', 'form_validation']);
        $this->load->helper('url');
    }
    protected function requireLogin(){
        if(!$this->session->userdata('auth_user_id')){
            redirect('auth/login');
        }
    }
    protected function requireSuperAdmin(){
        $this->requireLogin();
        if ($this->session->userdata('auth_user_role') !== 'super_admin'){
            show_error('Erişim reddedildi. Yetersiz yetki.', 403);
        }
    }
    protected function requireAdmin(){
        $this->requireLogin();
        if($this->session->userdata('auth_user_role') !== 'admin'){
            show_error('Erişim reddedildi. Yetersiz yetki.', 403);
        }
    }

    // Rol bazlı yönlendirme (login sonrası)
    protected function redirectByRole() {
        $role = $this->session->userdata('auth_user_role');
        if ($role === 'super_admin') {
            redirect('superadmin/dashboard');
        } elseif ($role === 'admin') {
            redirect('dashboard'); // patron paneli
        } else {
            redirect('user/dashboard'); // çalışan paneli
        }
    }

}