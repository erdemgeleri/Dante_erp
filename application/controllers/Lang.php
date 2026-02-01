<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Dil değiştirme controller'ı.
 * Session'a dil kodunu yazar ve önceki sayfaya veya auth/login'e yönlendirir.
 * URL yapısı: /lang/set/tr veya /lang/set/en
 */
class Lang extends MY_Controller {

    /** İzin verilen dil kodları (MY_Controller ile uyumlu). */
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
        // Kalıcı olsun diye cookie'ye de yaz (1 yıl); tarayıcı kapatılsa bile dil aynı kalır
        $this->load->helper('cookie');
        set_cookie('app_lang', $code, 60 * 60 * 24 * 365, '', '/', '', false, true);
        // Önceki sayfaya dön (aynı site); yoksa giriş sayfasına
        $referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        $base = base_url();
        if ($referrer !== '' && strpos($referrer, $base) === 0) {
            redirect($referrer);
            return;
        }
        redirect('auth/login');
    }
}
