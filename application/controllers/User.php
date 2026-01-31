<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->requireLogin();
    }

    public function dashboard()
    {
        return $this->load->view('user/dashboard');
    }
}