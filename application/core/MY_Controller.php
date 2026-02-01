<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Temel controller – tüm controller'lar bu sınıfı genişletir.
 * Dil (i18n): önce session, yoksa cookie (kalıcı tercih), varsayılan tr.
 */
class MY_Controller extends CI_Controller {

    /** Şu anki dil kodu (tr, en). View'larda $current_lang olarak kullanılır. */
    protected $current_lang = 'tr';

    /** İzin verilen dil kodları. */
    protected $allowed_languages = ['tr', 'en'];

    public function __construct()
    {
        parent::__construct();
        $this->load->library(['session', 'form_validation']);
        $this->load->helper('url');

        // Dil: önce session, yoksa cookie (bir kere değiştirince kalıcı kalsın diye), yoksa tr
        $lang = $this->session->userdata('language');
        if (empty($lang) || !in_array($lang, $this->allowed_languages, true)) {
            $lang = $this->input->cookie('app_lang');
            if (empty($lang) || !in_array($lang, $this->allowed_languages, true)) {
                $lang = 'tr';
            }
            $this->session->set_userdata('language', $lang);
        }
        $this->current_lang = $lang;

        // Uygulama ve form doğrulama dil dosyalarını yükle (Controller/View/Form validation için)
        $this->lang->load('app', $lang);
        $this->lang->load('form_validation', $lang);

        // Tüm view'larda kullanılmak üzere mevcut dili gönder
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

    // Rol bazlı yönlendirme (login sonrası)
    protected function redirectByRole() {
        $role = $this->session->userdata('auth_user_role');
        if ($role === 'super_admin') {
            redirect('superadmin/dashboard');
        } elseif ($role === 'admin') {
            redirect('admin/dashboard'); // patron paneli
        } else {
            redirect('user/dashboard'); // çalışan paneli
        }
    }

}