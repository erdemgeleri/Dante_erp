<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Lang extends MY_Controller {

    private $allowed = ['tr', 'en'];

    /**
     * Dil değiştirir.
     * @param string $code Dil kodu (tr, en)
     */
    public function set($code = '')
    {
        $code = strtolower((string) $code);
        if ($code === '' || !in_array($code, $this->allowed, true)) {
            $code = 'tr';
        }
        $this->session->set_userdata('language', $code);
        $this->load->helper('cookie');
        set_cookie('app_lang', $code, 60 * 60 * 24 * 365, '', '/', '', false, true);
        $referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        $base = base_url();
        if ($referrer !== '' && strpos($referrer, $base) === 0) {
            redirect($referrer);
            return;
        }
        redirect('auth/login');
    }
}
