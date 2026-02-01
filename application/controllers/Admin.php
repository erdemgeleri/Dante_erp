<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends MY_Controller{
    public function __construct() {
        parent::__construct();
        $this->requireAdmin();
    }
    public function dashboard() {
        $this->load->view('admin/dashboard');
    }
}